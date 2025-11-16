@extends('layouts.app')
@section('content')



                
              

    <main class="container mx-auto px-4 py-6 max-w-7xl">
            <div class="space-y-6 fade-in">
                        <div>
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white">الملف الشخصي</h2>
                            <p class="text-gray-600 dark:text-gray-400 mt-1">إدارة معلوماتك الشخصية وإعدادات الأمان</p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div class="lg:col-span-2 space-y-6">
                                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                    <div class="flex items-start gap-6 mb-6">
                                        <div class="w-24 h-24 gradient-blue rounded-2xl flex items-center justify-center text-white text-4xl font-bold">م</div>
                                        <div class="flex-1">
                                            <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">يوسف ابراهيم علي</h3>
                                            <p class="text-gray-600 dark:text-gray-400 mb-1">مدير النظام</p>
                                            <div class="flex items-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar w-4 h-4">
                                                    <path d="M8 2v4"></path>
                                                    <path d="M16 2v4"></path>
                                                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                                    <path d="M3 10h18"></path>
                                                </svg><span>انضم في يناير 2024</span></div>
                                        </div>
                                        <button class="px-4 py-2 gradient-blue text-white rounded-xl font-semibold hover:opacity-90 transition-all duration-200">تعديل</button>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <div class="p-4 bg-gray-50 dark:bg-slate-700 rounded-xl">
                                            <div class="flex items-center gap-3 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-blue-500">
                                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                                </svg><span class="text-sm text-gray-600 dark:text-gray-400">البريد الإلكتروني</span></div>
                                            <p class="font-semibold text-gray-800 dark:text-white">y.ibrahem.dev@gmail.com</p>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-700 rounded-xl">
                                            <div class="flex items-center gap-3 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5 text-blue-500">
                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                </svg><span class="text-sm text-gray-600 dark:text-gray-400">رقم الجوال</span></div>
                                            <p class="font-semibold text-gray-800 dark:text-white" dir="ltr">+218913279409</p>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-700 rounded-xl">
                                            <div class="flex items-center gap-3 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5 text-blue-500">
                                                    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                                    <circle cx="12" cy="10" r="3"></circle>
                                                </svg><span class="text-sm text-gray-600 dark:text-gray-400">الموقع</span></div>
                                            <p class="font-semibold text-gray-800 dark:text-white">طرابلس، ليبيا</p>
                                        </div>
                                        <div class="p-4 bg-gray-50 dark:bg-slate-700 rounded-xl">
                                            <div class="flex items-center gap-3 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-5 h-5 text-blue-500">
                                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg><span class="text-sm text-gray-600 dark:text-gray-400">آخر دخول</span></div>
                                            <p class="font-semibold text-gray-800 dark:text-white">منذ 10 دقائق</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                    <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-6 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6 text-blue-500"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>إعدادات الأمان</h3>
                                    <div class="space-y-4">
                                        <div class="p-5 border-2 border-gray-200 dark:border-slate-700 rounded-xl hover:border-blue-500 dark:hover:border-blue-500 transition-all duration-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-4">
                                                    <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900 dark:bg-opacity-30 rounded-xl flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-key w-6 h-6 text-blue-500">
                                                            <circle cx="7.5" cy="15.5" r="5.5"></circle>
                                                            <path d="m21 2-9.6 9.6"></path>
                                                            <path d="m15.5 7.5 3 3L22 7l-3-3"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="font-bold text-gray-800 dark:text-white mb-1">كلمة المرور</h4>
                                                        <p class="text-sm text-gray-600 dark:text-gray-400">آخر تغيير منذ 3 أشهر</p>
                                                    </div>
                                                </div>
                                                <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg font-semibold transition-all duration-200">تغيير</button>
                                            </div>
                                        </div>
                                        <div class="p-5 border-2 border-green-200 dark:border-green-700 rounded-xl bg-green-50 dark:bg-green-900 dark:bg-opacity-10">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-4">
                                                    <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-6 h-6 text-white">
                                                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="font-bold text-gray-800 dark:text-white mb-1">التحقق الثنائي (2FA)</h4>
                                                        <p class="text-sm text-green-600 dark:text-green-400 font-semibold">مفعّل ✓</p>
                                                    </div>
                                                </div>
                                                <button class="px-4 py-2 bg-gray-200 dark:bg-slate-700 hover:bg-gray-300 dark:hover:bg-slate-600 text-gray-700 dark:text-gray-300 rounded-lg font-semibold transition-all duration-200">إدارة</button>
                                            </div>
                                        </div>
                                        <div class="p-5 border-2 border-gray-200 dark:border-slate-700 rounded-xl hover:border-blue-500 dark:hover:border-blue-500 transition-all duration-200">
                                            <div class="flex items-center justify-between">
                                                <div class="flex items-center gap-4">
                                                    <div class="w-12 h-12 bg-orange-100 dark:bg-orange-900 dark:bg-opacity-30 rounded-xl flex items-center justify-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell w-6 h-6 text-orange-500">
                                                            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                                                            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                                                        </svg>
                                                    </div>
                                                    <div>
                                                        <h4 class="font-bold text-gray-800 dark:text-white mb-1">تنبيهات الأمان</h4>
                                                        <p class="text-sm text-gray-600 dark:text-gray-400">إشعارات فورية للأنشطة المشبوهة</p>
                                                    </div>
                                                </div>
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input type="checkbox" class="sr-only peer" checked="">
                                                    <div class="w-11 h-6 bg-gray-300 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-600 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:right-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-500"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="w-full mt-6 px-6 py-3 gradient-orange text-white rounded-xl font-bold flex items-center justify-center gap-2 hover:opacity-90 transition-all duration-200 glow-effect">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock w-5 h-5">
                                            <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                        </svg>تحديث الأمان</button>
                                </div>
                            </div>
                            <div class="space-y-6">
                                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">إحصائيات النشاط</h3>
                                    <div class="space-y-4">
                                        <div class="p-4 bg-blue-50 dark:bg-blue-900 dark:bg-opacity-20 rounded-xl">
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">عدد التحويلات المعتمدة</p>
                                            <p class="text-2xl font-bold text-blue-600 dark:text-blue-400">1,247</p>
                                        </div>
                                        <div class="p-4 bg-green-50 dark:bg-green-900 dark:bg-opacity-20 rounded-xl">
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">التنبيهات المعالجة</p>
                                            <p class="text-2xl font-bold text-green-600 dark:text-green-400">523</p>
                                        </div>
                                        <div class="p-4 bg-orange-50 dark:bg-orange-900 dark:bg-opacity-20 rounded-xl">
                                            <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">قيد المراجعة</p>
                                            <p class="text-2xl font-bold text-orange-600 dark:text-orange-400">47</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 card-shadow">
                                    <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-4">الأجهزة النشطة</h3>
                                    <div class="space-y-3">
                                        <div class="p-3 bg-gray-50 dark:bg-slate-700 rounded-lg">
                                            <div class="flex items-center justify-between mb-1">
                                                <p class="font-semibold text-gray-800 dark:text-white text-sm">MacBook Pro</p><span class="text-xs bg-green-500 text-white px-2 py-1 rounded-full">نشط</span></div>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">طرابلس، ليبيا • الآن</p>
                                        </div>
                                        <div class="p-3 bg-gray-50 dark:bg-slate-700 rounded-lg">
                                            <div class="flex items-center justify-between mb-1">
                                                <p class="font-semibold text-gray-800 dark:text-white text-sm">iPhone 14 Pro</p><span class="text-xs bg-gray-400 text-white px-2 py-1 rounded-full">غير نشط</span></div>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">طرابلس، ليبيا • منذ 2 يوم</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
    </main>


@endsection