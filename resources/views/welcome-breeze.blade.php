<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </header>

                    <main class="mt-6">
                        <!-- Hero Section -->
                        <div class="mb-10 text-center">
                            <h1 class="text-4xl font-bold text-black dark:text-white">Laravel Cloud Starter</h1>
                            <p class="mt-3 text-lg text-black/70 dark:text-white/70">Google OAuth Edition</p>
                            <p class="mt-2 text-sm text-black/60 dark:text-white/60">Breeze + Livewire + Tailwind + Google OAuth</p>
                        </div>

                        <!-- Features Grid -->
                        <div class="mb-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#FF2D20]/10">
                                    <svg class="size-5" fill="#FF2D20" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">Laravel Breeze</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Authentication Ready</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#FB70A9]/10">
                                    <svg class="size-5" fill="#FB70A9" viewBox="0 0 20 20"><path d="M13 7H7v6h6V7z"/><path fill-rule="evenodd" d="M7 2a1 1 0 012 0v1h2V2a1 1 0 112 0v1h2a2 2 0 012 2v2h1a1 1 0 110 2h-1v2h1a1 1 0 110 2h-1v2a2 2 0 01-2 2h-2v1a1 1 0 11-2 0v-1H9v1a1 1 0 11-2 0v-1H5a2 2 0 01-2-2v-2H2a1 1 0 110-2h1V9H2a1 1 0 010-2h1V5a2 2 0 012-2h2V2zM5 5h10v10H5V5z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">Livewire 4</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Full-stack Reactivity</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#38B2AC]/10">
                                    <svg class="size-5" fill="#38B2AC" viewBox="0 0 20 20"><path d="M10 2C5.03 2 1 6.03 1 11v3c0 1.66 1.34 3 3 3h3v-9H4v-1c0-3.87 3.13-7 7-7s7 3.13 7 7v1h-3v9h3c1.66 0 3-1.34 3-3v-3c0-4.97-4.03-9-9-9z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">Tailwind CSS</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Utility-first Styling</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#4285F4]/10">
                                    <svg class="size-5" fill="#4285F4" viewBox="0 0 20 20"><path d="M10 0C4.477 0 0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.879V12.89h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.989C16.343 19.129 20 14.99 20 10c0-5.523-4.477-10-10-10z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">Google OAuth</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Social Authentication</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#77C1D2]/10">
                                    <svg class="size-5" fill="#77C1D2" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm3 1h6v4H7V5zm8 8v2h1a1 1 0 001-1v-1h-2zm-2-1H7v4h6v-4z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">SQLite</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Lightweight Database</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-lg bg-white p-4 shadow-sm ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <div class="flex size-10 shrink-0 items-center justify-center rounded-lg bg-[#8DD6F9]/10">
                                    <svg class="size-5" fill="#8DD6F9" viewBox="0 0 20 20"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zm-2 4a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"/></svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-black dark:text-white">Alpine.js</p>
                                    <p class="text-xs text-black/60 dark:text-white/60">Built into Livewire</p>
                                </div>
                            </div>
                        </div>

                        <!-- Instructions -->
                        <div class="space-y-6">
                            <!-- Quick Start -->
                            <div class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <h2 class="flex items-center gap-2 text-xl font-semibold text-black dark:text-white">
                                    <svg class="size-6" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"/></svg>
                                    Quick Start
                                </h2>
                                <div class="mt-4 space-y-4">
                                    <div class="border-l-4 border-[#FF2D20] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">1. Prerequisites</h3>
                                        <p class="mt-1 text-sm text-black/70 dark:text-white/70">
                                            <strong>Laravel Herd</strong> (recommended) - Includes PHP 8.2+, Composer, Node.js<br>
                                            Download from <a href="https://herd.laravel.com" class="text-[#FF2D20] underline hover:text-[#FF2D20]/80">herd.laravel.com</a>
                                        </p>
                                    </div>
                                    
                                    <div class="border-l-4 border-[#FF2D20] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">2. Install Dependencies</h3>
                                        <div class="mt-2 rounded bg-gray-100 p-3 font-mono text-sm dark:bg-zinc-800">
                                            <code class="text-black dark:text-white">composer install<br>npm install</code>
                                        </div>
                                    </div>

                                    <div class="border-l-4 border-[#FF2D20] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">3. Setup Environment</h3>
                                        <div class="mt-2 rounded bg-gray-100 p-3 font-mono text-sm dark:bg-zinc-800">
                                            <code class="text-black dark:text-white">cp .env.example .env<br>php artisan key:generate</code>
                                        </div>
                                        <p class="mt-2 text-xs text-black/60 dark:text-white/60">
                                            Note: On <span class="font-semibold">Laravel Cloud</span>, <code class="rounded bg-gray-200 px-1 dark:bg-zinc-700">APP_KEY</code> is generated automatically. You can skip <code class="rounded bg-gray-200 px-1 dark:bg-zinc-700">php artisan key:generate</code> when deploying there.
                                        </p>
                                    </div>

                                    <div class="border-l-4 border-[#FF2D20] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">4. Create Database & Migrate</h3>
                                        <div class="mt-2 rounded bg-gray-100 p-3 font-mono text-sm dark:bg-zinc-800">
                                            <code class="text-black dark:text-white">touch database/database.sqlite<br>php artisan migrate</code>
                                        </div>
                                    </div>

                                    <div class="border-l-4 border-[#FF2D20] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">5. Build Assets</h3>
                                        <div class="mt-2 rounded bg-gray-100 p-3 font-mono text-sm dark:bg-zinc-800">
                                            <code class="text-black dark:text-white">npm run build</code>
                                        </div>
                                        <p class="mt-2 text-xs text-black/60 dark:text-white/60">
                                            For development with hot reload: <code class="rounded bg-gray-200 px-1 dark:bg-zinc-700">npm run dev</code>
                                        </p>
                                    </div>

                                    <div class="border-l-4 border-[#4285F4] pl-4">
                                        <h3 class="font-semibold text-black dark:text-white">6. Google OAuth Setup (Optional)</h3>
                                        <ol class="mt-2 space-y-2 text-sm text-black/70 dark:text-white/70">
                                            <li>• Create credentials at <a href="https://console.cloud.google.com" class="text-[#4285F4] underline hover:text-[#4285F4]/80">Google Cloud Console</a></li>
                                            <li>• Install Socialite: <code class="rounded bg-gray-200 px-1 text-xs dark:bg-zinc-700">composer require laravel/socialite</code></li>
                                            <li>• Add to <code class="rounded bg-gray-200 px-1 text-xs dark:bg-zinc-700">.env</code>:
                                                <div class="mt-1 rounded bg-gray-100 p-2 font-mono text-xs dark:bg-zinc-800">
                                                    GOOGLE_CLIENT_ID=your-client-id<br>
                                                    GOOGLE_CLIENT_SECRET=your-secret<br>
                                                    GOOGLE_REDIRECT_URI="${APP_URL}/auth/google/callback"
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>

                            <!-- What's Included -->
                            <div class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <h2 class="flex items-center gap-2 text-xl font-semibold text-black dark:text-white">
                                    <svg class="size-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/></svg>
                                    What's Included
                                </h2>
                                <div class="mt-4 grid gap-3 sm:grid-cols-2">
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Laravel 12 with core files</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Breeze authentication</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Google OAuth routes</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Blade components</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Tailwind configured</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Vite build system</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">SQLite database</span>
                                    </div>
                                    <div class="flex items-start gap-2 text-sm">
                                        <svg class="mt-0.5 size-4 shrink-0 text-green-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/></svg>
                                        <span class="text-black/70 dark:text-white/70">Dark mode support</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Development Commands -->
                            <div class="rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] dark:bg-zinc-900 dark:ring-zinc-800">
                                <h2 class="flex items-center gap-2 text-xl font-semibold text-black dark:text-white">
                                    <svg class="size-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z"/></svg>
                                    Useful Commands
                                </h2>
                                <div class="mt-4 space-y-3">
                                    <div class="rounded bg-gray-100 p-3 dark:bg-zinc-800">
                                        <div class="flex items-center justify-between">
                                            <code class="text-sm text-black dark:text-white">php artisan serve</code>
                                            <span class="text-xs text-black/50 dark:text-white/50">Start dev server</span>
                                        </div>
                                    </div>
                                    <div class="rounded bg-gray-100 p-3 dark:bg-zinc-800">
                                        <div class="flex items-center justify-between">
                                            <code class="text-sm text-black dark:text-white">npm run dev</code>
                                            <span class="text-xs text-black/50 dark:text-white/50">Watch assets</span>
                                        </div>
                                    </div>
                                    <div class="rounded bg-gray-100 p-3 dark:bg-zinc-800">
                                        <div class="flex items-center justify-between">
                                            <code class="text-sm text-black dark:text-white">php artisan make:livewire ComponentName</code>
                                            <span class="text-xs text-black/50 dark:text-white/50">Create component</span>
                                        </div>
                                    </div>
                                    <div class="rounded bg-gray-100 p-3 dark:bg-zinc-800">
                                        <div class="flex items-center justify-between">
                                            <code class="text-sm text-black dark:text-white">php artisan migrate:fresh</code>
                                            <span class="text-xs text-black/50 dark:text-white/50">Reset database</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
