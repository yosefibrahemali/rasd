<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class RiskController extends Controller
{
    /**
     * تحليل معاملة واحدة وإرجاع تفاصيل المخاطر
     */
    public function analyzeTransaction(float $amount, string $recipient, int $hour): array
    {
        // الحصول على المتوسط والانحراف المعياري من قاعدة البيانات
        $stats = $this->getMeanStdValues(); // ← بدون JSON الآن
        $mean = $stats['mean'];
        $std  = $stats['std'];

        // حساب Z-Score
        $z = $this->zScore($amount, $mean, $std);

        // تحويل Z-Score إلى مخاطرة
        $amountRisk = $this->zScoreToRisk($z);

        // خطر المستلم
        $recRisk = $this->recipientRisk($recipient);

        // خطر التوقيت
        $hRisk = $this->hourRisk($hour);

        // دمج المخاطر
        $final = $this->finalRisk($amountRisk, $recRisk, $hRisk);

        // تحديد إجراء النظام
        $action = $this->determineAction($final);

        // إرجاع البيانات
        return [
            'amount_risk'     => round($amountRisk, 2),
            'recipient_risk'  => $recRisk,
            'hour_risk'       => $hRisk,
            'final_risk'      => round($final, 2),
            'action'          => $action,
        ];
    }

    /**
     *  نقطة دخول رئيسية للتحليل عبر API
     */
    public function analyze(Request $request)
    {
        $amount    = $request->amount;
        $recipient = $request->recipient;
        $hour      = $request->hour;

        // استدعاء دالة التحليل الشاملة
        $result = $this->analyzeTransaction($amount, $recipient, $hour);

        // إرجاع JSON للواجهة
        return response()->json($result);
    }

    /**
     *  حساب المتوسط والانحراف المعياري لجميع معاملات المستخدم
     */
    public function getMeanStdValues(): array
    {
        // جلب مبالغ المعاملات
        $transactions = Transaction::pluck('amount');

        // إذا لا توجد بيانات
        if ($transactions->count() == 0) {
            return [
                'mean' => 50,
                'std'  => 20
            ];
        }

        // حساب المتوسط
        $mean = $transactions->avg();

        // حساب الانحراف المعياري
        $std = sqrt(
            $transactions->reduce(function ($carry, $item) use ($mean) {
                return $carry + pow($item - $mean, 2);
            }, 0) / $transactions->count()
        );

        return [
            'mean' => $mean,
            'std'  => $std
        ];
    }


    /**
     *  تحديد الإجراء النهائي ALLOW / CHALLENGE / BLOCK
     */
    public function determineAction(float $risk): string
    {
        if ($risk < 40) {
            return 'ALLOW';
        } elseif ($risk < 70) {
            return 'CHALLENGE';
        }
        return 'BLOCK';
    }

    /**
     *  دمج عوامل الخطر
     */
    public function finalRisk(float $amountRisk, float $recipientRisk, float $hourRisk): float
    {
        return 0.5 * $amountRisk + 0.3 * $recipientRisk + 0.2 * $hourRisk;
    }

    /**
     *  حساب مخاطرة التوقيت
     */
    public function hourRisk(int $hour): float
    {
        return abs($hour - 12) * 4;
    }

    /**
     *  مخاطرة المستلم
     */
    public function recipientRisk(string $recipient): float
    {
        $blacklist = ['unknownZ', 'fraud123', 'suspicious_user'];

        return in_array($recipient, $blacklist) ? 90 : 20;
    }

    /**
     * 🔥 تحويل Z-Score إلى مخاطرة من 0 إلى 100
     */
    public function zScoreToRisk(float $z): float
    {
        $z = abs($z);
        return min(100, (1 - exp(-0.6 * $z)) * 100);
    }

    /**
     *  حساب Z-Score
     */
    public function zScore(float $value, float $mean, float $std): float
    {
        if ($std == 0) return 0;

        return ($value - $mean) / $std;
    }
}
