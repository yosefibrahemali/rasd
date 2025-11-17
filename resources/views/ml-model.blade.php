@extends('layouts.app')

@section('content')

<div class="container mx-auto py-10">

    <!-- Title -->
    <br>
    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
         الذكاء الاصطناعي – AI Machine Learning (Prototype)
    </h2>

    <!-- Card -->
    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl border border-gray-200 dark:border-gray-700 p-6">

        <!-- Description -->
        <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
            هذه صفحة افتراضية (Prototype) لعرض كيف يعمل نظام الذكاء الاصطناعي في تحليل بيانات 
            المعاملات المالية، التعرف على الأنماط، واكتشاف السلوكيات المشبوهة.  
            يمكنك عرضها أمام لجنة التحكيم لتوضيح قوة النظام.
        </p>

        <!-- Form -->
        <div class="space-y-6">

            <!-- Upload Data -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">
                     ارفع ملف البيانات (CSV / JSON)
                </label>
                <input 
                    type="file" 
                    id="dataFile"
                    class="w-full border rounded-xl p-3">

            </div>

            <!-- Settings -->
            <div>
                <label class="block mb-2 font-medium text-gray-700 dark:text-gray-300">
                     اختيار نوع التحليل
                </label>
                <select 
                    class="w-full border border-gray-300 dark:border-gray-600 
                           bg-gray-50 dark:bg-gray-700 rounded-xl p-3 
                           text-gray-800 dark:text-white shadow-sm">
                    <option>اكتشاف نشاط غير طبيعي (Anomaly Detection)</option>
                    <option>توقع المخاطر (Risk Prediction)</option>
                    <option>تحليل البصمة الرقمية (Digital Fingerprint Analysis)</option>
                </select>
            </div>

            <!-- Button -->
            <button 
                id="runAiButton"
                class="w-full py-3 bg-blue-600 hover:bg-blue-700 
                       text-white rounded-xl text-lg font-semibold
                       transition-all shadow-md hover:shadow-lg" style="color: white;background-color: #2563eb;">
               التحليل
            </button>
        </div>

        <!-- Result Box -->
        <br>
        <div id="aiResult" class="mt-8 hidden">
            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-4">
                🔍 نتيجة التحليل
            </h3>

            <div class="bg-blue-50 dark:bg-blue-900/20 border-r-4 border-blue-500 
                        p-4 rounded-xl shadow">
                <p class="text-gray-700 dark:text-gray-300 text-sm leading-relaxed">
                    النموذج يتوقع أن:
                    <br><br>
                    • مستوى الخطورة: <span class="font-bold text-red-600">مرتفع</span>  
                    • هناك نشاط مختلف عن المعتاد بنسبة <span class="font-bold">87%</span>  
                    • تم رصد علاقة جديدة بين الجهاز والموقع  
                    • احتمالية أن تكون المعاملة مشبوهة: <span class="font-bold">92%</span>
                </p>
            </div>
        </div>

    </div>
</div>

<!-- AI Simulation Script -->
<script>
document.getElementById("runAiButton").addEventListener("click", () => {
    const fileInput = document.getElementById("dataFile");
    const resultDiv = document.getElementById("aiResult");

    if (!fileInput.files.length) {
        alert("يرجى رفع ملف البيانات أولاً");
        return;
    }

    const file = fileInput.files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const text = e.target.result;

        // التحقق من نوع الملف: CSV أو JSON
        if (file.name.endsWith(".json")) {
            const data = JSON.parse(text);
            displayResults(data);
        } else if (file.name.endsWith(".csv")) {
            const data = parseCSV(text);
            displayResults(data);
        } else {
            alert("الملف يجب أن يكون CSV أو JSON");
        }
    };

    reader.readAsText(file);
});

// دالة بسيطة لتحويل CSV إلى مصفوفة من الكائنات
function parseCSV(text) {
    const lines = text.split("\n").filter(l => l.trim() !== "");
    const headers = lines[0].split(",");
    const data = lines.slice(1).map(line => {
        const values = line.split(",");
        const obj = {};
        headers.forEach((h, i) => obj[h.trim()] = values[i].trim());
        return obj;
    });
    return data;
}

// دالة لعرض النتائج بشكل وهمي لكل صف
function displayResults(data) {
    const resultDiv = document.getElementById("aiResult");
    resultDiv.innerHTML = "";

    data.forEach((row, index) => {
        const riskPercent = Math.floor(Math.random() * 100); // عشوائي للبروتوتايب
        let status = "";
        let reason = "";

        // تحديد الحالة والسبب
        if (riskPercent < 40) {
            status = "ALLOW";
            reason = "المعاملة ضمن السلوك الطبيعي للمستخدم.";
        } else if (riskPercent < 70) {
            status = "CHALLENGE";
            reason = "المعاملة مختلفة قليلاً عن النمط المعتاد، تحتاج تحقق إضافي.";
        } else {
            status = "BLOCK";
            reason = "المعاملة غير عادية جداً أو مشبوهة، يُنصح بالحظر.";
        }

        const div = document.createElement("div");
        div.className = "bg-blue-50 dark:bg-blue-900/20 border-r-4 border-blue-500 p-4 rounded-xl shadow mb-4";
        div.innerHTML = `
            <p class="text-gray-700 dark:text-gray-300 text-sm">
                📄 صف رقم ${index + 1}  
                • المستخدم: ${row.user_name || "-"}  
                • رقم الحساب: ${row.account_number || "-"}  
                • المبلغ: ${row.amount || "-"} د.ل
                <br>
                • مستوى الخطورة: <span class="font-bold text-red-600">${riskPercent}%</span>  
                • الإجراء: <span class="font-bold">${status}</span>
                <br>
                • السبب: <span class="italic">${reason}</span>
            </p>
        `;
        resultDiv.appendChild(div);
    });

    resultDiv.classList.remove("hidden");
}

</script>


@endsection
