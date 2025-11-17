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
                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">معاملات الحسابات</h2>
                <div class="text-sm text-gray-500 dark:text-gray-400">اضغط زر "عرض الشبكة" لكل صف</div>
            </div>

            <div class="overflow-x-auto">
               
            
                <div class="space-y-4">

    <!-- مثال بطاقة معاملة -->
    <div class="p-4 rounded-xl border-r-4 border-blue-500 bg-blue-50 
                dark:bg-blue-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
        
        <div class="flex items-center justify-between">

            <div class="flex-1">
                <h4 class="font-semibold text-gray-800 dark:text-white mb-1">
                    تحويل من الحساب: LY0412361 ~ يوسف
                </h4>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    إلى الحساب: <span class="font-medium">LY0041236 ~ غيث</span>
                </p>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    المبلغ: <span class="font-medium">500 دينار</span>
                </p>
            </div>

            <div class="text-left mr-4">
                <p class="text-xs text-gray-500 dark:text-gray-400">2025-11-16</p>

                <!-- لون الحالة -->
                <span class="inline-block w-3 h-3 rounded-full bg-blue-500 mt-2"></span>
            </div>
        </div>

        <div class="mt-4 flex gap-2">
            <button onclick="showNetwork(0)" 
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                عرض الشبكة
            </button>

            <a href="{{ route('transactions.show') }}" 
                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition">
                عرض التفاصيل
            </a>
        </div>
    </div>



    <!-- بطاقة ثانية (علامة برتقالية) -->
    <div class="p-4 rounded-xl border-r-4 border-orange-500 bg-orange-50 
                dark:bg-orange-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
        
        <div class="flex items-center justify-between">

            <div class="flex-1">
                <h4 class="font-semibold text-gray-800 dark:text-white mb-1">
                    تحويل من الحساب: LY0041236 ~ غيث
                </h4>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    إلى الحساب: <span class="font-medium">LY0412361 ~ يوسف</span>
                </p>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    المبلغ: <span class="font-medium">300 دينار</span>
                </p>
            </div>

            <div class="text-left mr-4">
                <p class="text-xs text-gray-500 dark:text-gray-400">2025-11-15</p>

                <span class="inline-block w-3 h-3 rounded-full bg-orange-500 mt-2"></span>
            </div>
        </div>

        <div class="mt-4 flex gap-2">
            <button onclick="showNetwork(1)" 
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                عرض الشبكة
            </button>

            <a href="{{ route('transactions.show') }}" 
                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition">
                عرض التفاصيل
            </a>
        </div>
    </div>




    <!-- بطاقة ثالثة (علامة حمراء) -->
    <div class="p-4 rounded-xl border-r-4 border-red-500 bg-red-50 
                dark:bg-red-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
        
        <div class="flex items-center justify-between">

            <div class="flex-1">
                <h4 class="font-semibold text-gray-800 dark:text-white mb-1">
                    تحويل من الحساب: LY0056789 ~ أحمد
                </h4>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    إلى الحساب: <span class="font-medium">LY0067890 ~ عمر</span>
                </p>

                <p class="text-sm text-gray-600 dark:text-gray-400">
                    المبلغ: <span class="font-medium">700 دينار</span>
                </p>
            </div>

            <div class="text-left mr-4">
                <p class="text-xs text-gray-500 dark:text-gray-400">2025-11-14</p>

                <span class="inline-block w-3 h-3 rounded-full bg-red-500 mt-2"></span>
            </div>
        </div>

        <div class="mt-4 flex gap-2">
            <button onclick="showNetwork(2)" 
                class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition">
                عرض الشبكة
            </button>

            <a href="{{ route('transactions.show') }}" 
                class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-lg transition">
                عرض التفاصيل
            </a>
        </div>
    </div>

</div>




            </div>

         
           
            <!-- Network Container (Beautiful Network) -->
<div id="networkContainer"
    class="w-full mt-6 hidden flex flex-col justify-between bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-4 border border-gray-200 dark:border-gray-700">

    <!-- Title -->
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-2">
            <span class="text-sm font-semibold text-indigo-600">شبكة التحليل</span>
            <span id="networkLabel" class="text-sm text-gray-500"></span>
        </div>

        <button id="shareBtn"
            class="bg-indigo-500 text-white px-4 py-2 text-sm rounded-lg shadow hover:bg-indigo-600 transition hidden">
            مشاركة الشبكة
        </button>
    </div>

    <!-- Network Canvas -->
    <div id="network" style="width: 500px; height: 400px;"
        class="flex-grow w-full h-[450px] rounded-2xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-slate-900 shadow-inner overflow-hidden">
    </div>

    <!-- Freeze Selected -->
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
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200 dark:text-white">آمن</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">حسابات سليمة بدون أي نشاط مريب</p>
                        </div>
                    </div>

                    <!-- Suspicious -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full border-4 border-red-200 
                                    bg-gradient-to-br from-red-400 to-red-700 shadow-md"><div class="red-circle"></div></div>
                        <div>
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200 dark:text-white">مشبوه</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">تم رصد نشاط غير طبيعي على الحساب</p>
                        </div>
                    </div>

                    <!-- Under Review -->
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full border-4 border-orange-200
                                    bg-gradient-to-br from-orange-400 to-orange-700 shadow-md"><div class="orange-circle"></div></div>
                        <div>
                            <p class="text-base font-bold text-gray-800 dark:text-gray-200 dark:text-white">قيد المراجعة</p>
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
                            <span class="text-base text-gray-700 ">حسابات عادية</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-red-50 dark:bg-red-900/30 p-4 rounded-lg shadow-inner">
                        <div class="flex items-center gap-3">
                            <span class="text-red-600 text-lg font-bold">2</span>
                            <span class="text-base text-gray-700">حسابات مشبوهة</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between bg-orange-50 dark:bg-orange-900/30 p-4 rounded-lg shadow-inner">
                        <div class="flex items-center gap-3">
                            <span class="text-orange-600 text-lg font-bold">2</span>
                            <span class="text-base text-gray-700">قيد المراجعة</span>
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

/* ---------------------------
  🔵 Node Style (Matches Image)
---------------------------- */
function nodeStyle(color) {
    return {
        borderWidth: 4,
        borderWidthSelected: 6,
        color: {
            border: color,
            background: "#ffffff",
            highlight: { border: color, background: "#ffffff" }
        },
        shadow: {
            enabled: true,
            color: color + "55",
            size: 15,
            x: 0,
            y: 0
        }
    };
}

/* ---------------------------
      🎨 Beautiful Options
---------------------------- */
const beautifulOptions = {
    autoResize: true,
    nodes: {
        shape: "dot",
        size: 28,
        font: { size: 20, color: "#333" }
    },
    edges: {
        width: 2,
        color: "#dcdfe3",
        smooth: { type: "continuous" }
    },
    physics: {
        enabled: true,
        barnesHut: {
            gravitationalConstant: -9000,
            centralGravity: 0.1,
            springLength: 190,
            springConstant: 0.02,
            damping: 0.12
        }
    },
    interaction: {
        hover: true,
        tooltipDelay: 50,
        zoomView: true,
        dragView: true,
        hoverConnectedEdges: true
    }
};

/* ---------------------------
    🟠 Sample Network Data
---------------------------- */
const networksData = {
    0: {
        label: "شبكة تحويلات — LY0412361 ~ يوسف -> LY0041236 ~ غيث (500 د.ل) ",
        nodes: [
            { id: 1, label: "LY0412361 ~ يوسف", ...nodeStyle("#3b82f6") },
            { id: 2, label: " LY0041236 ~ غيث", ...nodeStyle("#ef4444") },
            { id: 3, label: "LY0056789 ~ أحمد", ...nodeStyle("#f59e0b") },
            { id: 4, label: "LY0412310 ~ عمر", ...nodeStyle("#3b82f6") },
            { id: 5, label: "LY0056789 ~ أحمد", ...nodeStyle("#ef4444") }
        ],
        edges: [
            { from: 1, to: 2 },
            { from: 1, to: 3 },
            { from: 3, to: 5 },
            { from: 1, to: 4 },
            { from: 4, to: 5 }
        ]
    }
};

/* ---------------------------
    🔵 Show Network Function
---------------------------- */
function showNetwork(rowIndex) {
    const wrap = document.getElementById("networkContainer");
    const label = document.getElementById("networkLabel");
    const shareBtn = document.getElementById("shareBtn");

    const dataForRow = networksData[rowIndex];
    if (!dataForRow) return;

    wrap.classList.remove("hidden");
    shareBtn.classList.remove("hidden");

    label.textContent = dataForRow.label;

    currentNodes = new vis.DataSet(dataForRow.nodes);
    currentEdges = new vis.DataSet(dataForRow.edges);

    const container = document.getElementById("network");
    container.innerHTML = "";

    network = new vis.Network(container, {
        nodes: currentNodes,
        edges: currentEdges
    }, beautifulOptions);

    /* Hover Effect */
    network.on("hoverNode", (params) => {
        currentNodes.update({
            id: params.node,
            size: 40
        });
    });

    network.on("blurNode", (params) => {
        currentNodes.update({
            id: params.node,
            size: 28
        });
    });

    /* Select Node → Show Freeze Button */
    network.on("selectNode", () => {
        document.getElementById("freezeSelected").classList.remove("hidden");
    });

    network.on("deselectNode", () => {
        document.getElementById("freezeSelected").classList.add("hidden");
    });

    /* Freeze Button */
    document.getElementById("freezeSelected").onclick = () => {
        const selected = network.getSelectedNodes();
        selected.forEach(id => {
            currentNodes.update({
                id,
                color: {
                    border: "#6b7280",
                    background: "#ffffff",
                    highlight: { border: "#6b7280", background: "#ffffff" }
                }
            });
        });
        alert("✔ تم تجميد الحسابات المحددة!");
    };

    /* Share Button (Export PNG) */
    shareBtn.onclick = () => {
        html2canvas(container).then(canvas => {
            const link = document.createElement("a");
            link.download = "network.png";
            link.href = canvas.toDataURL();
            link.click();
        });
    };
}
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

@endsection




