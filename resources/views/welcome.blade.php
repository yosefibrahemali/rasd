<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رصد | العين الراصدة - نظام مراقبة ذكي</title>
    <script type="module" crossorigin="" src="/index.js"></script>
    <link rel="stylesheet" crossorigin="" href="/index.css">
</head>

<body>
    <div id="root">
        <div class="min-h-screen " dir="rtl">
            <div class="min-h-screen bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
                <nav class="gradient-blue text-white shadow-lg sticky top-0 z-50">
                    <div class="container mx-auto px-4 py-4 max-w-7xl">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="relative">
                                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-orange-500 rounded-full pulse-dot"></div>
                                </div>
                                <div>
                                    <h1 class="text-xl font-bold">رصد | العين الراصدة</h1>
                                    <p class="text-xs text-blue-100">نظام مراقبة ذكي</p>
                                </div>
                            </div>
                            <div class="hidden md:flex items-center gap-6">
                                <button class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200 bg-white bg-opacity-20 font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-home w-4 h-4">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg><span class="text-sm">الصفحة الرئيسية</span></button>
                                <button class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-white hover:bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-network w-4 h-4">
                                        <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                                        <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                                        <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                                        <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path>
                                        <path d="M12 12V8"></path>
                                    </svg><span class="text-sm">شبكة الحسابات المشبوهة</span></button>
                                <button class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-white hover:bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alert-triangle w-4 h-4">
                                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                        <path d="M12 9v4"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg><span class="text-sm">التنبيهات</span></button>
                                <button class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200 hover:bg-white hover:bg-opacity-10">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg><span class="text-sm">الملف الشخصي</span></button>
                            </div>
                            <div class="flex items-center gap-4">
                                <button class="relative p-2 hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-5 h-5">
                                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                                    </svg><span class="absolute top-1 right-1 w-2 h-2 bg-orange-500 rounded-full"></span></button>
                                <button class="p-2 hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon w-5 h-5">
                                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                                    </svg>
                                </button>
                                <div class="hidden md:flex items-center gap-2 pr-4 border-r border-white border-opacity-30">
                                    <div class="w-9 h-9 rounded-full bg-orange-500 flex items-center justify-center font-bold">م</div>
                                </div>
                                <button class="md:hidden p-2 hover:bg-white hover:bg-opacity-10 rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu w-6 h-6">
                                        <line x1="4" x2="20" y1="12" y2="12"></line>
                                        <line x1="4" x2="20" y1="6" y2="6"></line>
                                        <line x1="4" x2="20" y1="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </nav>
                <main class="container mx-auto px-4 py-6 max-w-7xl">
                    <div class="space-y-6 fade-in">
                        <div class="flex items-center justify-between">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-800 dark:text-white">لوحة التحكم الرئيسية</h2>
                                <p class="text-gray-600 dark:text-gray-400 mt-1">مرحباً بك في نظام الرصد الذكي</p>
                            </div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">آخر تحديث: منذ دقيقة واحدة</div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1 fade-in">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">عدد التحويلات</p>
                                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white">12,458</h3></div>
                                    <div class="w-12 h-12 rounded-xl bg-blue-500 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-dollar-sign w-6 h-6 text-white">
                                            <line x1="12" x2="12" y1="2" y2="22"></line>
                                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1 px-2 py-1 rounded-lg bg-green-100 dark:bg-green-900 dark:bg-opacity-30 text-green-600 dark:text-green-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up w-3 h-3">
                                            <path d="m5 12 7-7 7 7"></path>
                                            <path d="M12 19V5"></path>
                                        </svg><span class="text-xs font-semibold">+12.5%</span></div><span class="text-xs text-gray-500 dark:text-gray-400">مقارنة بالأسبوع الماضي</span></div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1 fade-in">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">الحسابات المشبوهة</p>
                                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white">47</h3></div>
                                    <div class="w-12 h-12 rounded-xl bg-orange-500 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alert-circle w-6 h-6 text-white">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" x2="12" y1="8" y2="12"></line>
                                            <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1 px-2 py-1 rounded-lg bg-green-100 dark:bg-green-900 dark:bg-opacity-30 text-green-600 dark:text-green-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up w-3 h-3">
                                            <path d="m5 12 7-7 7 7"></path>
                                            <path d="M12 19V5"></path>
                                        </svg><span class="text-xs font-semibold">-8.2%</span></div><span class="text-xs text-gray-500 dark:text-gray-400">مقارنة بالأسبوع الماضي</span></div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1 fade-in">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">التنبيهات النشطة</p>
                                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white">23</h3></div>
                                    <div class="w-12 h-12 rounded-xl bg-red-500 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6 text-white">
                                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1 px-2 py-1 rounded-lg bg-red-100 dark:bg-red-900 dark:bg-opacity-30 text-red-600 dark:text-red-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-down w-3 h-3">
                                            <path d="M12 5v14"></path>
                                            <path d="m19 12-7 7-7-7"></path>
                                        </svg><span class="text-xs font-semibold">+5.1%</span></div><span class="text-xs text-gray-500 dark:text-gray-400">مقارنة بالأسبوع الماضي</span></div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow hover:shadow-lg transition-all duration-300 hover:-translate-y-1 fade-in">
                                <div class="flex items-start justify-between mb-4">
                                    <div class="flex-1">
                                        <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">معدل الأمان</p>
                                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white">94.8%</h3></div>
                                    <div class="w-12 h-12 rounded-xl bg-green-500 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-6 h-6 text-white">
                                            <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                            <polyline points="16 7 22 7 22 13"></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="flex items-center gap-1 px-2 py-1 rounded-lg bg-green-100 dark:bg-green-900 dark:bg-opacity-30 text-green-600 dark:text-green-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up w-3 h-3">
                                            <path d="m5 12 7-7 7 7"></path>
                                            <path d="M12 19V5"></path>
                                        </svg><span class="text-xs font-semibold">+2.3%</span></div><span class="text-xs text-gray-500 dark:text-gray-400">مقارنة بالأسبوع الماضي</span></div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                <div class="flex items-center justify-between mb-6">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white">نشاط التحويلات الأسبوعية</h3>
                                    <select class="px-4 py-2 bg-gray-100 dark:bg-slate-700 rounded-lg text-sm text-gray-700 dark:text-gray-300 border-0 focus:ring-2 focus:ring-blue-500">
                                        <option>آخر 7 أيام</option>
                                        <option>آخر 30 يوم</option>
                                        <option>آخر 3 أشهر</option>
                                    </select>
                                </div>
                                <div class="space-y-4">
                                    <div class="flex items-end justify-between gap-2 h-64">
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 115.254px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">340 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">السبت</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 152.542px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">450 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الأحد</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 128.814px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">380 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الإثنين</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 176.271px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">520 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الثلاثاء</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 159.322px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">470 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الأربعاء</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 200px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">590 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الخميس</span></div>
                                        <div class="flex-1 flex flex-col items-center gap-2">
                                            <div class="relative w-full group">
                                                <div class="w-full gradient-blue rounded-t-lg transition-all duration-300 hover:opacity-80 relative" style="height: 142.373px;">
                                                    <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 bg-gray-800 text-white px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">420 معاملة</div>
                                                </div>
                                            </div><span class="text-xs text-gray-600 dark:text-gray-400 font-medium">الجمعة</span></div>
                                    </div>
                                    <div class="flex items-center justify-center gap-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                                        <div class="flex items-center gap-2">
                                            <div class="w-3 h-3 rounded-full bg-blue-500"></div><span class="text-xs text-gray-600 dark:text-gray-400">عدد المعاملات اليومية</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">ملخص الحالة</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center justify-between p-4 bg-blue-50 dark:bg-blue-900 dark:bg-opacity-20 rounded-xl">
                                        <div>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">الحسابات النشطة</p>
                                            <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">8,324</p>
                                        </div>
                                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-6 h-6 text-white">
                                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                <polyline points="16 7 22 7 22 13"></polyline>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4 bg-orange-50 dark:bg-orange-900 dark:bg-opacity-20 rounded-xl">
                                        <div>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">قيد المراجعة</p>
                                            <p class="text-2xl font-bold text-orange-600 dark:text-orange-400">156</p>
                                        </div>
                                        <div class="w-12 h-12 bg-orange-500 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-alert-circle w-6 h-6 text-white">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <line x1="12" x2="12" y1="8" y2="12"></line>
                                                <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between p-4 bg-green-50 dark:bg-green-900 dark:bg-opacity-20 rounded-xl">
                                        <div>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">محمية بالكامل</p>
                                            <p class="text-2xl font-bold text-green-600 dark:text-green-400">7,621</p>
                                        </div>
                                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6 text-white">
                                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">النشاط الأخير</h3>
                            <div class="space-y-3">
                                <div class="p-4 rounded-xl border-r-4 border-red-500 bg-red-50 dark:bg-red-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">تحويل مشبوه من الحساب #8829</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">45,000 ريال</p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ 5 دقائق</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-xl border-r-4 border-orange-500 bg-orange-50 dark:bg-orange-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">نشاط غير معتاد في الحساب #3421</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">12,500 ريال</p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ 15 دقيقة</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-xl border-r-4 border-green-500 bg-green-50 dark:bg-green-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">تم تأكيد هوية المستخدم #9012</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">---</p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ ساعة</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-xl border-r-4 border-blue-500 bg-blue-50 dark:bg-blue-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">محاولة دخول من موقع جديد</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">الموقع: <span class="font-medium">الرياض</span></p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ ساعتين</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-xl border-r-4 border-red-500 bg-red-50 dark:bg-red-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">تم تحديد حساب مشبوه #7745</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">نوع الخطر: <span class="font-medium">احتيال</span></p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ 3 ساعات</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 rounded-xl border-r-4 border-green-500 bg-green-50 dark:bg-green-900 dark:bg-opacity-20 transition-all duration-200 hover:shadow-md">
                                    <div class="flex items-center justify-between">
                                        <div class="flex-1">
                                            <h4 class="font-semibold text-gray-800 dark:text-white mb-1">تم إغلاق تنبيه قديم</h4>
                                            <p class="text-sm text-gray-600 dark:text-gray-400">التنبيه #102</p>
                                        </div>
                                        <div class="text-left mr-4">
                                            <p class="text-xs text-gray-500 dark:text-gray-400">منذ 4 ساعات</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-6">
                                <button class="px-6 py-2 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition-colors duration-200">عرض كل الأنشطة</button>
                            </div>
                        </div>
                    </div>
                </main>
                
                <footer class="bg-white dark:bg-slate-800 border-t border-gray-200 dark:border-gray-700 mt-12">
                    <div class="container mx-auto px-4 py-6 max-w-7xl text-center">
                        <p class="text-sm text-gray-500 dark:text-gray-400">© 2024 رصد | العين الراصدة. جميع الحقوق محفوظة.</p>
                        <div class="flex justify-center gap-4 mt-2 text-xs">
                            <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-500">سياسة الخصوصية</a>
                            <a href="#" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-500">شروط الاستخدام</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>