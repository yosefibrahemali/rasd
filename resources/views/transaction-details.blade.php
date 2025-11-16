@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-8 max-w-4xl space-y-6">

    @php
        // قراءة الملف JSON
        $jsonPath = storage_path('app/public/transactions.json');
        $jsonData = file_exists($jsonPath) ? file_get_contents($jsonPath) : null;
        $transactions = $jsonData ? json_decode($jsonData, true)['transactions'] : [];
       // dd($jsonPath);
        $transaction = $transactions[0]; // افترض أننا نريد عرض المعاملة الأولى
    @endphp
    <!-- Header -->
    <br>
    <div class="flex items-center gap-3 mb-6">
        {{-- <div class="w-12 h-12 flex-shrink-0 relative">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-full h-full object-contain rounded-full">
            <div class="absolute -top-1 -right-1 w-3 h-3 bg-orange-500 rounded-full pulse-dot"></div>
        </div> --}}
        <div>
            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">تفاصيل المعاملة</h1>
            <p class="text-sm text-gray-500 dark:text-gray-400">عرض جميع معلومات المعاملة وتحليل المخاطر</p>
        </div>
    </div>

    <!-- Transaction Card -->
    <div class="bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-2xl space-y-6">

        <!-- Transaction Info -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">الحساب المرسل</h3>
                <p class="text-gray-900 dark:text-white">{{ $transaction['sender'] ?? 'غير معروف' }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">الحساب المستلم</h3>
                <p class="text-gray-900 dark:text-white">{{ $transaction['recipient'] ?? 'غير معروف' }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">المبلغ</h3>
                <p class="text-gray-900 dark:text-white">{{ number_format($transaction['amount'], 2) }} {{ $transaction['currency'] }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">نوع المعاملة</h3>
                <p class="text-gray-900 dark:text-white">{{ ucfirst($transaction['transaction_type']) }}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">التاريخ والوقت</h3>
                <p class="text-gray-900 dark:text-white">{{ $transaction['transaction_hour']}}</p>
            </div>
            <div>
                <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">الحالة</h3>
                <span class="px-3 py-1 rounded-full font-semibold 
                    {{ $transaction['status'] == 'completed' ? 'bg-green-1000 text-green-800 dark:bg-green-800 dark:text-green-200' : '' }}
                    {{ $transaction['status'] == 'pending' ? 'bg-yellow-200 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-200' : '' }}
                    {{ $transaction['status'] == 'blocked' ? 'bg-red-200 text-red-800 dark:bg-red-800 dark:text-red-200' : '' }}">
                    {{ ucfirst($transaction['status']) }}
                </span>
            </div>
        </div>

        <!-- Risk Analysis -->
        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
            <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">تحليل المخاطر</h3>
            <div class="flex flex-col gap-4">

                <div class="flex justify-between items-center">
                    <span class="font-semibold text-gray-700 dark:text-gray-300">درجة المخاطرة</span>
                    <span class="font-bold text-gray-900 dark:text-white">{{ $transaction['risk_score'] ?? 0 }}%</span>
                </div>

                <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-4">
                    <div class="h-4 rounded-full" style="width: {{ $transaction['risk_score'] ?? 0 }}%; background-color: 
                        @if($transaction['risk_score'] >= 70) #ef4444
                        @elseif($transaction['risk_score'] >= 40) #f97316
                        @else #3b82f6
                        @endif"></div>
                </div>

                <div>
                    <h4 class="font-semibold text-gray-700 dark:text-gray-300 mt-2">سبب المخاطرة</h4>
                    <p class="text-gray-900 dark:text-white">{{ $transaction['risk_reason'] ?? 'المعاملة ضمن الحدود الآمنة' }}</p>
                </div>

            </div>
        </div>

        <!-- Description -->
        @if($transaction['description'])
        <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
            <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300">وصف المعاملة</h3>
            <p class="text-gray-900 dark:text-white">{{ $transaction['description'] }}</p>
        </div>
        @endif

    </div>
</main>
@endsection
