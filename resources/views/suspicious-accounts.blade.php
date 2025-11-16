@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-8 max-w-7xl space-y-6">

    <!-- Header -->
    {{-- <div class="flex items-center justify-between">
        <div class="flex items-center gap-3">
            <!-- Eye icon logo (Font Awesome) -->
            <div class="w-12 h-12 flex-shrink-0 relative flex items-center justify-center bg-gray-100 dark:bg-gray-800 rounded-full">
                <i class="fas fa-eye text-2xl text-blue-600"></i>
                <div class="absolute -top-1 -right-1 w-3 h-3 bg-orange-500 rounded-full pulse-dot"></div>
            </div>

            <!-- Title -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">رصد | العين الراصدة</h2>
                <p class="text-gray-600 dark:text-gray-400 mt-1">تصور تفاعلي للعلاقات بين الحسابات المراقبة مع إمكانية إدارة الحسابات</p>
            </div>
        </div>

        <div class="text-sm text-gray-500 dark:text-gray-400">آخر تحديث: منذ دقيقة واحدة</div>
    </div> --}}

    
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">

        <!-- Table + Network Column -->
        <div class="lg:col-span-3 bg-white dark:bg-slate-800 rounded-3xl p-6 shadow-2xl flex flex-col">

            <!-- Table -->
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white">معاملات الحسابات</h3>
                <div class="text-sm text-gray-500 dark:text-gray-400">اضغط زر "عرض الشبكة" لكل صف</div>
            </div>

            <div class="overflow-x-auto">
               
                <table class="w-full text-left border-collapse bg-transparent">
                    <thead class="bg-gray-100 dark:bg-gray-700">
                        <tr>
                            <th class="p-3 border-b">الحساب المصدر</th>
                            <th class="p-3 border-b">الحساب المستلم</th>
                            <th class="p-3 border-b">المبلغ</th>
                            <th class="p-3 border-b">التاريخ</th>
                            <th class="p-3 border-b">إجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- مثال صف مع علامة المخاطر -->
                        <tr class="bg-white dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <td class="p-3 border-b border-gray-200 dark:text-white flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-green-500"></span> <!-- Badge / Flag -->
                                LY0412361 ~ يوسف
                            </td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">LY0041236 ~ غيث</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">500 دينار</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">2025-11-16</td>
                            <td class="p-3 border-b border-gray-200 dark:border-gray-700 flex flex-wrap gap-2">
                                <button onclick="showNetwork(0)" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض الشبكة
                                </button>

                                <a href="{{ route('transactions.show') }}" 
                                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض تفاصيل المعاملة
                                </a>
                            </td>
                        </tr>

                        <!-- صف آخر مع علامة برتقالية -->
                        <tr class="bg-white dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <td class="p-3 border-b border-gray-200 dark:text-white flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-orange-500"></span>
                                LY0041236 ~ غيث
                            </td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">LY0412361 ~ يوسف</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">300 دينار</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">2025-11-15</td>
                            <td class="p-3 border-b border-gray-200 dark:border-gray-700 flex flex-wrap gap-2">
                                <button onclick="showNetwork(1)" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض الشبكة
                                </button>

                                <a href="{{ route('transactions.show') }}" 
                                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض تفاصيل المعاملة
                                </a>
                            </td>
                        </tr>

                        <!-- صف آخر مع علامة حمراء -->
                        <tr class="bg-white dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                            <td class="p-3 border-b border-gray-200 dark:text-white flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                LY0056789 ~ احمد
                            </td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">LY0067890 ~ عمر</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">700 دينار</td>
                            <td class="p-3 border-b border-gray-200 dark:text-white">2025-11-14</td>
                            <td class="p-3 border-b border-gray-200 dark:border-gray-700 flex flex-wrap gap-2">
                                <button onclick="showNetwork(2)" 
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض الشبكة
                                </button>

                                <a href="{{ route('transactions.show') }}" 
                                    class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition-colors">
                                    عرض تفاصيل المعاملة
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>

         
            <!-- Network Container (Half Screen) -->
            <div id="networkContainer"
                class="w-full mt-6 hidden flex flex-col justify-between bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-4"
                style="height: 50vh; border: 2px solid #e5e7eb;">

                <!-- Title -->
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <span class="text-sm font-semibold text-indigo-600">الشبكة</span>
                        <span id="networkLabel" class="text-sm text-gray-500"></span>
                    </div>
                </div>

                <!-- Network Area -->
                <div id="network"
                    class="flex-grow w-full rounded-xl border border-gray-300 dark:border-gray-700 shadow-inner bg-white overflow-hidden">
                </div>

                <!-- Freeze Button -->
                <div class="w-full mt-4 flex justify-center">
                    <button id="freezeSelected"
                            class="bg-red-500 text-white px-8 py-3 rounded-xl shadow-lg hidden hover:bg-red-600 transition-all font-semibold flex items-center gap-2">
                        <i class="fas fa-snowflake text-white"></i>
                        تجميد الحسابات المحددة
                    </button>
                </div>
            </div>

            

        </div>

        <!-- Legend & Stats -->
        <div class="space-y-6">
            <br>
            
            <style>
.blue-circle {
  width: 30px; /* Adjust size as needed */
  height: 30px; /* Must be equal to width for a perfect circle */
  background-color: #3b82f6;
  border-radius: 50%; /* Makes the square element round */
}
.red-circle {
  width: 30px; /* Adjust size as needed */
  height: 30px; /* Must be equal to width for a perfect circle */
  background-color: #ef4444;
  border-radius: 50%; /* Makes the square element round */
}
.orange-circle {
  width: 30px; /* Adjust size as needed */
  height: 30px; /* Must be equal to width for a perfect circle */
  background-color: #f97316;
  border-radius: 50%; /* Makes the square element round */
}
</style>

            <!-- Legend -->
            <!-- Legend -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">
                    دليل الألوان
                </h3>

                <div class="space-y-6">

                    <!-- Safe -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full border-4 border-blue-200 
                                    bg-gradient-to-br from-blue-400 to-blue-700 shadow-md">
                                    <div class="blue-circle"></div>
                                </div>
                        <div>
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200">آمن</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">حسابات سليمة بدون أي نشاط مريب</p>
                        </div>
                    </div>

                    <!-- Suspicious -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full border-4 border-red-200 
                                    bg-gradient-to-br from-red-400 to-red-700 shadow-md"><div class="red-circle"></div></div>
                        <div>
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200">مشبوه</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">تم رصد نشاط غير طبيعي على الحساب</p>
                        </div>
                    </div>

                    <!-- Under Review -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full border-4 border-orange-200
                                    bg-gradient-to-br from-orange-400 to-orange-700 shadow-md"><div class="orange-circle"></div></div>
                        <div>
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200">قيد المراجعة</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">حساب تحت المراقبة والتحقق اليدوي</p>
                        </div>
                    </div>

                </div>
            </div>



            <!-- Stats -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all">
                <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4 border-b border-gray-200 dark:border-gray-700 pb-2">إحصائيات الشبكة</h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-between bg-blue-50 dark:bg-blue-900/30 p-4 rounded-lg shadow-inner">
                        <div class="flex items-center gap-3">
                            <span class="text-blue-600 text-lg font-bold">5</span>
                            <span class="text-base text-gray-700 dark:text-gray-300">حسابات عادية</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-red-50 dark:bg-red-900/30 p-4 rounded-lg shadow-inner">
                        <div class="flex items-center gap-3">
                            <span class="text-red-600 text-lg font-bold">2</span>
                            <span class="text-base text-gray-700 dark:text-gray-300">حسابات مشبوهة</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-orange-50 dark:bg-orange-900/30 p-4 rounded-lg shadow-inner">
                        <div class="flex items-center gap-3">
                            <span class="text-orange-600 text-lg font-bold">2</span>
                            <span class="text-base text-gray-700 dark:text-gray-300">قيد المراجعة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection

@section('scripts')
<script src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
<script>
    let network = null;
    let currentNodes = null;
    let currentEdges = null;

    // بيانات الشبكات حسب كل صف (مثال؛ استبدلها ببيانات ديناميكية)
    const networksData = {
        0: {
            label: 'شبكة المعاملة A → B (500)',
            nodes: [
                { id: 1, label: 'A', color: { background: '#3b82f6', border: '#1e40af' }, shape: 'dot', size: 40 },
                { id: 2, label: 'B', color: { background: '#ef4444', border: '#b91c1c' }, shape: 'dot', size: 40 },
                { id: 3, label: 'X', color: { background: '#f97316', border: '#c2410c' }, shape: 'dot', size: 36 }
            ],
            edges: [
                { from: 1, to: 2 },
                { from: 1, to: 3 }
            ]
        },
        1: {
            label: 'شبكة المعاملة A → C (300)',
            nodes: [
                { id: 1, label: 'A', color: { background: '#3b82f6', border: '#1e40af' }, shape: 'dot', size: 40 },
                { id: 2, label: 'C', color: { background: '#f97316', border: '#c2410c' }, shape: 'dot', size: 40 },
                { id: 4, label: 'Y', color: { background: '#ef4444', border: '#b91c1c' }, shape: 'dot', size: 36 }
            ],
            edges: [
                { from: 1, to: 2 },
                { from: 2, to: 4 }
            ]
        }
    };

    function showNetwork(rowIndex) {
        const containerWrap = document.getElementById('networkContainer');
        const networkLabel = document.getElementById('networkLabel');

        // اظهر الكونتينر
        containerWrap.classList.remove('hidden');

        // تحديث تسمية الشبكة
        networkLabel.textContent = networksData[rowIndex]?.label || '';

        const dataForRow = networksData[rowIndex];
        if (!dataForRow) return;

        // أنشئ DataSets
        currentNodes = new vis.DataSet(dataForRow.nodes);
        currentEdges = new vis.DataSet(dataForRow.edges);

        const containerEl = document.getElementById('network');
        containerEl.innerHTML = ''; // تنظيف الشبكة القديمة

        const data = { nodes: currentNodes, edges: currentEdges };
        const options = {
            nodes: {
                shape: 'dot',
                size: 40,
                font: { size: 16, color: '#fff' },
                borderWidth: 3,
                shadow: false
            },
            edges: {
                color: '#9ca3af',
                width: 3,
                smooth: true,
                hoverWidth: 4
            },
            interaction: {
                hover: true,
                multiselect: true,
                tooltipDelay: 50
            },
            physics: {
                enabled: true,
                stabilization: { iterations: 200 }
            }
        };

        // أنشئ الشبكة
        network = new vis.Network(containerEl, data, options);

        // إضافة تأثير hover للعقد: تكبير + توهج عند المرور، وإرجاعها عند الخروج
        network.on('hoverNode', function(params) {
            const nodeId = params.node;
            // احفظ القيم الحالية ثم حدث
            currentNodes.update({
                id: nodeId,
                size: 56,
                borderWidth: 6
            });
            // إضافة تأثير ظل بصري عبر CSS class (Vis doesn't support shadow props well cross-browser),
            // لذلك نضيف مؤقتاً تأثير عبر DOM: (رسمياً نستخدم update لخصائص اللون)
            // هنا نستخدم تأشير مرئي بتغيير لون الخلفية للحواف عن طريق تحديث border color
            const node = currentNodes.get(nodeId);
            currentNodes.update({ id: nodeId, color: { background: node.color?.background || '#60a5fa', border: '#0ea5e9' } });
        });

        network.on('blurNode', function(params) {
            const nodeId = params.node;
            // ارجع لحجم وسمات العقدة الأساسية
            const original = dataForRow.nodes.find(n => n.id === nodeId);
            if (original) {
                currentNodes.update({
                    id: nodeId,
                    size: original.size || 40,
                    borderWidth: 3,
                    color: original.color
                });
            } else {
                // قيمة افتراضية
                currentNodes.update({ id: nodeId, size: 40, borderWidth: 3 });
            }
        });

        // عند تحديد عقدة (لإظهار زر التجميد)
        network.on('selectNode', () => {
            document.getElementById('freezeSelected').classList.remove('hidden');
        });
        network.on('deselectNode', () => {
            if (network.getSelectedNodes().length === 0) {
                document.getElementById('freezeSelected').classList.add('hidden');
            }
        });

        // زر التجمد يعمل على تغيير لون وحالة العقد المحددة
        document.getElementById('freezeSelected').onclick = () => {
            const selected = network.getSelectedNodes();
            selected.forEach(id => {
                currentNodes.update({ id, color: { background: '#9ca3af', border: '#4b5563' }, title: 'تم تجميد الحساب' });
            });
            network.unselectAll();
            document.getElementById('freezeSelected').classList.add('hidden');
            // يمكنك هنا إرسال طلب AJAX إلى السيرفر لحفظ حالة "مجمّد"
            alert('تم تجميد الحسابات المحددة!');
        };

        // تأكد أن Vis يحسب الأبعاد بعد الإظهار
        setTimeout(() => {
            try {
                network.redraw();
            } catch (e) {
                // ignore
            }
        }, 50);
    }
</script>
@endsection

