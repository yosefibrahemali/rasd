@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4 py-6 max-w-7xl">
    <div class="space-y-6 fade-in">
        <div>
            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">شبكة الحسابات المشبوهة</h2>
            <p class="text-gray-600 dark:text-gray-400 mt-1">تصور تفاعلي للعلاقات بين الحسابات المراقبة</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
            <!-- Network Canvas -->
            <div class="lg:col-span-3 bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                <div class="relative">
                    <div id="network" class="w-full h-[500px] rounded-xl"></div>
                    <button id="freezeSelected" class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg shadow-lg hidden hover:bg-red-600 transition">
                        تجميد الحسابات المحددة
                    </button>
                </div>
            </div>

            <!-- Legend & Stats -->
            <div class="space-y-4">
                <!-- Legend -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">دليل الألوان</h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-blue-500"></div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">عادي</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">حسابات آمنة</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-red-500"></div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">مشبوه</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">نشاط غير طبيعي</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="w-4 h-4 rounded-full bg-orange-500"></div>
                            <div>
                                <p class="text-sm font-semibold text-gray-700 dark:text-gray-300">قيد المراجعة</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">تحت المراقبة</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stats -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">إحصائيات الشبكة</h3>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-blue-500 text-sm font-semibold">5</span>
                                <span class="text-sm text-gray-600 dark:text-gray-400">حسابات عادية</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-red-500 text-sm font-semibold">2</span>
                                <span class="text-sm text-gray-600 dark:text-gray-400">حسابات مشبوهة</span>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="text-orange-500 text-sm font-semibold">2</span>
                                <span class="text-sm text-gray-600 dark:text-gray-400">قيد المراجعة</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Network JS -->
@section('scripts')
<script src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"></script>
<script>
    const nodes = new vis.DataSet([
        { id: 1, label: 'A', color: 'blue' },
        { id: 2, label: 'B', color: 'red' },
        { id: 3, label: 'C', color: 'orange' },
        { id: 4, label: 'D', color: 'blue' },
        { id: 5, label: 'E', color: 'red' },
    ]);

    const edges = new vis.DataSet([
        { from: 1, to: 2 },
        { from: 1, to: 3 },
        { from: 2, to: 4 },
        { from: 3, to: 5 },
    ]);

    const container = document.getElementById('network');
    const data = { nodes, edges };
    const options = {
        nodes: {
            shape: 'dot',
            size: 20,
            font: { size: 16, color: '#fff' },
        },
        edges: { color: '#888', width: 2 },
        interaction: { multiselect: true, hover: true },
        physics: { enabled: true }
    };

    const network = new vis.Network(container, data, options);

    // Show freeze button if nodes selected
    network.on("selectNode", () => {
        document.getElementById('freezeSelected').classList.remove('hidden');
    });
    network.on("deselectNode", () => {
        const selection = network.getSelectedNodes();
        if(selection.length === 0){
            document.getElementById('freezeSelected').classList.add('hidden');
        }
    });

    // Freeze selected nodes
    document.getElementById('freezeSelected').addEventListener('click', () => {
        const selected = network.getSelectedNodes();
        selected.forEach(id => {
            nodes.update({id, color: 'gray'});
        });
        network.unselectAll();
        document.getElementById('freezeSelected').classList.add('hidden');
        alert("تم تجميد الحسابات المحددة!");
    });
</script>

@endsection
@endsection
