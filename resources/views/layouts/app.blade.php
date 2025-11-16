<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رصد | العين الراصدة - نظام مراقبة ذكي</title>
    <script type="module" crossorigin="" src="/index.js"></script>
    <link rel="stylesheet" crossorigin="" href="/index.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/2.6.0/uicons-rounded-regular/css/uicons-rounded-regular.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>

</head>

<body>
    <div id="root">
        <div class="min-h-screen " dir="rtl">
            <div class="min-h-screen bg-gray-50 dark:bg-slate-900 transition-colors duration-300">
                <nav class="gradient-blue text-white shadow-lg sticky top-0 z-50">
                    <div class="container mx-auto px-4 py-4 max-w-7xl">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <!-- Logo -->
                                <div class="w-12 h-12 flex-shrink-0 relative flex items-center justify-center bg-gray-200 dark:bg-gray-700 rounded-full">
                                    <i class="fas fa-eye text-xl text-blue-600"></i>
                                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-orange-500 rounded-full pulse-dot"></div>
                                </div>


                                <!-- Title & Subtitle -->
                                <div>
                                    <h1 class="text-xl font-bold">رصد | العين الراصدة</h1>
                                    <p class="text-xs text-blue-100">نظام مراقبة ذكي</p>
                                </div>
                            </div>

                            
                            <div class="hidden md:flex items-center gap-6">

                                <!-- الصفحة الرئيسية -->
                                <a href="{{ route('main-page') }}"
                                class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200
                                {{ request()->routeIs('main-page') ? 'bg-white bg-opacity-20 font-semibold' : 'hover:bg-white hover:bg-opacity-10' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                    <span class="text-sm">الصفحة الرئيسية</span>
                                </a>

                                <!-- شبكة الحسابات المشبوهة -->
                                <a href="{{ route('suspicious-accounts') }}"
                                class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200
                                {{ request()->routeIs('suspicious-accounts') ? 'bg-white bg-opacity-20 font-semibold' : 'hover:bg-white hover:bg-opacity-10' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <rect x="16" y="16" width="6" height="6" rx="1"></rect>
                                        <rect x="2" y="16" width="6" height="6" rx="1"></rect>
                                        <rect x="9" y="2" width="6" height="6" rx="1"></rect>
                                        <path d="M5 16v-3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3"></path>
                                        <path d="M12 12V8"></path>
                                    </svg>
                                    <span class="text-sm">شبكة الحسابات المشبوهة</span>
                                </a>

                                <!-- التنبيهات -->
                                <a href="{{ route('notifications') }}"
                                class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200
                                {{ request()->routeIs('notifications') ? 'bg-white bg-opacity-20 font-semibold' : 'hover:bg-white hover:bg-opacity-10' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                                        <path d="M12 9v4"></path>
                                        <path d="M12 17h.01"></path>
                                    </svg>
                                    <span class="text-sm">التنبيهات</span>
                                </a>

                                <!-- الملف الشخصي -->
                                <a href="{{ route('profile') }}"
                                class="flex items-center gap-2 px-3 py-2 rounded-lg transition-all duration-200
                                {{ request()->routeIs('profile') ? 'bg-white bg-opacity-20 font-semibold' : 'hover:bg-white hover:bg-opacity-10' }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="text-sm">الملف الشخصي</span>
                                </a>

                            </div>


                            <div class="flex items-center gap-4">
                                <button class="relative p-2 hover:bg-white hover:bg-opacity-10 rounded-lg transition-all duration-200">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-5 h-5">
                                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                                    </svg><span class="absolute top-1 right-1 w-2 h-2 bg-orange-500 rounded-full"></span></button>
                              
                                    <button id="darkToggle" class="p-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-lg transition-all duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                                <script>
const toggle = document.getElementById('darkToggle');
toggle.addEventListener('click', () => {
    document.documentElement.classList.toggle('dark');
});
</script>
                            </div>
                        </div>
                    </div>
                </nav>

                @yield('content')
               
                
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

    @yield('scripts')
</body>

</html>