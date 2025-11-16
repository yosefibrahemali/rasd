@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">

    <div class="flex items-center gap-3 mb-6">
        {{-- <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-500 to-indigo-700 flex items-center justify-center shadow-lg">
            <i class="fas fa-bell text-white text-xl"></i>
        </div> --}}
  
        
        <div>
            <br>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">الإشعارات</h1>
            <p class="text-gray-500 dark:text-gray-400 text-sm">عرض أحدث التنبيهات الخاصة بالمعاملات والحسابات</p>
        </div>
    </div>

    <!-- Notifications wrapper -->
    <div class="space-y-4">
<style>
    .blue-circle {
        position: absolute;
        top: -3px;
        right: -3px;
        width: 12px;
        height: 12px;
        background-color: #1D4ED8; /* أزرق */
        border-radius: 50%;
        border: 2px solid white; /* يعطي شكل مندمج */
        box-shadow: 0 0 5px rgba(29, 78, 216, 0.6);
    }
</style>


        <!-- Example Notification - Unread -->
        <div class="p-5 rounded-2xl bg-white dark:bg-slate-800 border border-indigo-200 dark:border-slate-700 shadow hover:shadow-lg transition-all cursor-pointer relative">

        


            <div class="flex items-start gap-4">
                
                <div class="w-12 h-12 rounded-full flex items-center justify-center 
                            bg-gradient-to-br from-red-400 to-red-600 shadow-md">
                        
                   
                <i class="fas fa-exclamation-triangle text-red-500 dark:text-red-400 text-lg"></i>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 dark:text-white text-lg">
                        نشاط مشبوه تم رصده
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300 mt-1 leading-relaxed">
                        تم اكتشاف معاملة غير طبيعية من الحساب <span class="font-bold">08543 ~ يوم</span> إلى الحساب 
                        <span class="font-bold">0678 ~ غيث</span> بقيمة <span class="text-red-500 font-semibold">900 د.ل</span>.
                    </p>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            قبل 5 دقائق
                        </p>
                        <button class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline dark:text-gray-400">
                           
                            <a href="{{ route('transactions.show') }}"> عرض التفاصيل</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Example Notification - Reviewed -->
        <div class="p-5 rounded-2xl bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 shadow hover:shadow-lg transition-all cursor-pointer">

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center 
                            bg-gradient-to-br from-orange-400 to-orange-600 shadow-md">
                    <i class="fas fa-eye text-orange-500 text-lg"></i>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 dark:text-white text-lg">
                        معاملة قيد المراجعة
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 mt-1 leading-relaxed">
                        المعاملة رقم <span class="text-orange-500 font-semibold">#10284</span> قيد التدقيق اليدوي.
                    </p>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-gray-500 dark:text-gray-400">قبل ساعة</p>
                        <button class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline dark:text-gray-400">
                             <a href="{{ route('transactions.show') }}">عرض المعاملة </a>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Example Notification - Safe -->
        <div class="p-5 rounded-2xl bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 shadow hover:shadow-lg transition-all cursor-pointer">

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center 
                            bg-gradient-to-br from-blue-400 to-blue-600 shadow-md">
                    <i class="fas fa-check-circle text-blue-500 text-lg"></i>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 dark:text-white text-lg">
                        تم التحقق من الحساب
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 mt-1 leading-relaxed">
                        الحساب <span class="font-semibold text-blue-500">C</span> أصبح الآن ضمن الحسابات الآمنة.
                    </p>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-gray-500 dark:text-gray-400">قبل 3 ساعات</p>
                        <button class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline dark:text-gray-400">
                            <a href="{{ route('transactions.show') }}">التفاصيل</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>

         <!-- Example Notification - Safe -->
         <div class="p-5 rounded-2xl bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 shadow hover:shadow-lg transition-all cursor-pointer">

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center 
                            bg-gradient-to-br from-blue-400 to-blue-600 shadow-md">
                    <i class="fas fa-check-circle text-blue-500 text-lg"></i>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 dark:text-white text-lg">
                        تم التحقق من الحساب
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 mt-1 leading-relaxed">
                        الحساب <span class="font-semibold text-blue-500">C</span> أصبح الآن ضمن الحسابات الآمنة.
                    </p>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-gray-500 dark:text-gray-400">قبل 3 ساعات</p>
                        <button class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline dark:text-gray-400">
                            <a href="{{ route('transactions.show') }}">التفاصيل</a>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <!-- Example Notification - Reviewed -->
        <div class="p-5 rounded-2xl bg-white dark:bg-slate-800 border border-gray-200 dark:border-slate-700 shadow hover:shadow-lg transition-all cursor-pointer">

            <div class="flex items-start gap-4">
                <div class="w-12 h-12 rounded-full flex items-center justify-center 
                            bg-gradient-to-br from-orange-400 to-orange-600 shadow-md">
                    <i class="fas fa-eye text-orange-500 text-lg"></i>
                </div>

                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 dark:text-white text-lg">
                        معاملة قيد المراجعة
                    </h3>

                    <p class="text-gray-600 dark:text-gray-300 mt-1 leading-relaxed">
                        المعاملة رقم <span class="text-orange-500 font-semibold">#10284</span> قيد التدقيق اليدوي.
                    </p>

                    <div class="flex justify-between items-center mt-3">
                        <p class="text-xs text-gray-500 dark:text-gray-400">قبل ساعة</p>
                        <button class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold hover:underline dark:text-gray-400">
                             <a href="{{ route('transactions.show') }}">عرض المعاملة </a>
                        </button>
                    </div>
                </div>
            </div>

        </div>
        

    </div>

</div>
@endsection
