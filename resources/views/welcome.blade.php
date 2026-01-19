<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
        <!-- Navbar -->
        <nav class="fixed top-0 left-0 right-0 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 z-40 backdrop-blur-sm bg-opacity-95 dark:bg-opacity-95">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16 items-center">
                    <div class="flex items-center">
                        <a href="/" class="flex items-center space-x-2">
                            <svg class="w-8 h-8 text-red-500" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9965L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8377 24.5084 63.8177 24.4536 63.7866L0.501061 49.9915C0.348882 49.9042 0.222437 49.7782 0.134469 49.6264C0.0465019 49.4745 0.000120578 49.3021 0 49.1266L0 14.8208C0 14.7359 0.0117632 14.6484 0.0345876 14.5635C0.0460037 14.5222 0.0689281 14.4859 0.0803443 14.4446C0.105445 14.3672 0.132843 14.2898 0.177538 14.2211C0.199451 14.1849 0.228748 14.1536 0.254841 14.1198L12.5054 1.20465C12.5786 1.13257 12.666 1.07626 12.7608 1.03843C12.8555 1.00061 12.9562 0.981689 13.0574 0.981689C13.1586 0.981689 13.2593 1.00061 13.354 1.03843C13.4488 1.07626 13.5362 1.13257 13.6094 1.20465L25.86 14.1198C25.8861 14.1536 25.9128 14.1849 25.9347 14.2211C25.9794 14.2898 26.0068 14.3672 26.0319 14.4446C26.0433 14.4859 26.0688 14.5222 26.0777 14.5635C26.1005 14.6484 26.1123 14.7359 26.1123 14.8208V26.9377L35.9355 21.4467V14.8208C35.9355 14.7359 35.9473 14.6484 35.9701 14.5635C35.9816 14.5222 36.0045 14.4859 36.0159 14.4446C36.041 14.3672 36.0684 14.2898 36.1131 14.2211C36.135 14.1849 36.1643 14.1536 36.1904 14.1198L48.441 1.20465C48.5142 1.13257 48.6016 1.07626 48.6963 1.03843C48.7911 1.00061 48.8918 0.981689 48.993 0.981689C49.0942 0.981689 49.1949 1.00061 49.2896 1.03843C49.3843 1.07626 49.4718 1.13257 49.545 1.20465L61.7955 14.1198C61.8242 14.1536 61.8484 14.1849 61.8703 14.2211C61.915 14.2898 61.9424 14.3672 61.9675 14.4446C61.9789 14.4859 62.0019 14.5222 62.0133 14.5635C62.0361 14.6484 62.0479 14.7359 62.0479 14.8208L61.8548 14.6253Z" fill="currentColor"/>
                            </svg>
                            <span class="text-lg font-bold text-gray-900 dark:text-white hidden sm:block">Laravel Cloud Starter</span>
                        </a>
                    </div>

                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center space-x-4">
                        <a href="https://github.com/yourusername/laravel-cloud-starter-google-oauth" 
                           target="_blank" 
                           rel="noopener noreferrer" 
                           class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white inline-flex items-center gap-2 transition-colors" 
                           title="View on GitHub">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.757-1.333-1.757-1.089-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.931 0-1.31.468-2.381 1.235-3.221-.123-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.98-.399 3-.405 1.02.006 2.043.139 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.655 1.653.243 2.874.12 3.176.77.84 1.23 1.911 1.23 3.221 0 4.61-2.807 5.624-5.48 5.921.43.369.823 1.096.823 2.214 0 1.598-.015 2.887-.015 3.281 0 .319.216.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                            </svg>
                            <span class="text-sm font-medium">GitHub</span>
                        </a>
                    </div>

                    <!-- Mobile Menu Button -->
                    <div class="md:hidden flex items-center">
                        <button id="mobile-menu-button" 
                                type="button"
                                aria-expanded="false" 
                                aria-controls="mobile-menu" 
                                class="p-2 rounded-md text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden border-t border-gray-200 dark:border-gray-700">
                <div class="px-4 py-3 space-y-1">
                    <a href="https://github.com/yourusername/laravel-cloud-starter-google-oauth" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="flex items-center gap-2 py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.416-4.042-1.416-.546-1.387-1.333-1.757-1.333-1.757-1.089-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.931 0-1.31.468-2.381 1.235-3.221-.123-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.3 1.23.957-.266 1.98-.399 3-.405 1.02.006 2.043.139 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.655 1.653.243 2.874.12 3.176.77.84 1.23 1.911 1.23 3.221 0 4.61-2.807 5.624-5.48 5.921.43.369.823 1.096.823 2.214 0 1.598-.015 2.887-.015 3.281 0 .319.216.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
                        </svg>
                        GitHub
                    </a>
                </div>
            </div>
        </nav>

        <!-- Vite Dev Server Warning -->
        <div id="vite-warning" style="display: none;" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-yellow-500 text-gray-900 rounded-2xl shadow-2xl max-w-2xl w-full p-8 border-4 border-yellow-600 relative">
                <button onclick="document.getElementById('vite-warning').style.display='none'" class="absolute top-4 right-4 text-gray-900 hover:text-gray-700 font-bold text-3xl leading-none">&times;</button>
                
                <div class="flex items-start mb-6">
                    <svg class="w-16 h-16 mr-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <div class="flex-1">
                        <p class="font-bold text-3xl mb-4">Vite Dev Server Not Running!</p>
                        <p class="text-xl mb-6">Your styling might look broken because the Vite development server isn't running.</p>
                    </div>
                </div>
                
                <div class="bg-gray-900 text-white p-6 rounded-lg mb-6">
                    <p class="text-lg font-semibold mb-3">To fix this, run in your terminal:</p>
                    <code class="text-2xl font-mono block bg-black px-4 py-3 rounded">npm run dev</code>
                </div>
                
                <div class="flex items-center text-sm">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="text-base">This warning only appears in local development</span>
                </div>
            </div>
        </div>

        <div class="relative min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 pt-24">
            <div class="max-w-4xl w-full space-y-12">
                <!-- Header -->
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="relative">
                            <div class="absolute inset-0 bg-red-500 blur-2xl opacity-20 rounded-full"></div>
                            <svg class="relative w-20 h-20 text-red-500" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9965L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8377 24.5084 63.8177 24.4536 63.7866L0.501061 49.9915C0.348882 49.9042 0.222437 49.7782 0.134469 49.6264C0.0465019 49.4745 0.000120578 49.3021 0 49.1266L0 14.8208C0 14.7359 0.0117632 14.6484 0.0345876 14.5635C0.0460037 14.5222 0.0689281 14.4859 0.0803443 14.4446C0.105445 14.3672 0.132843 14.2898 0.177538 14.2211C0.199451 14.1849 0.228748 14.1536 0.254841 14.1198L12.5054 1.20465C12.5786 1.13257 12.666 1.07626 12.7608 1.03843C12.8555 1.00061 12.9562 0.981689 13.0574 0.981689C13.1586 0.981689 13.2593 1.00061 13.354 1.03843C13.4488 1.07626 13.5362 1.13257 13.6094 1.20465L25.86 14.1198C25.8861 14.1536 25.9128 14.1849 25.9347 14.2211C25.9794 14.2898 26.0068 14.3672 26.0319 14.4446C26.0433 14.4859 26.0688 14.5222 26.0777 14.5635C26.1005 14.6484 26.1123 14.7359 26.1123 14.8208V26.9377L35.9355 21.4467V14.8208C35.9355 14.7359 35.9473 14.6484 35.9701 14.5635C35.9816 14.5222 36.0045 14.4859 36.0159 14.4446C36.041 14.3672 36.0684 14.2898 36.1131 14.2211C36.135 14.1849 36.1643 14.1536 36.1904 14.1198L48.441 1.20465C48.5142 1.13257 48.6016 1.07626 48.6963 1.03843C48.7911 1.00061 48.8918 0.981689 48.993 0.981689C49.0942 0.981689 49.1949 1.00061 49.2896 1.03843C49.3843 1.07626 49.4718 1.13257 49.545 1.20465L61.7955 14.1198C61.8242 14.1536 61.8484 14.1849 61.8703 14.2211C61.915 14.2898 61.9424 14.3672 61.9675 14.4446C61.9789 14.4859 62.0019 14.5222 62.0133 14.5635C62.0361 14.6484 62.0479 14.7359 62.0479 14.8208L61.8548 14.6253Z" fill="currentColor"/>
                            </svg>
                        </div>
                    </div>
                    <h1 class="text-5xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Laravel Cloud Starter
                    </h1>
                    <p class="text-xl text-gray-600 dark:text-gray-400 mb-2">
                        Google OAuth Edition
                    </p>
                    <p class="text-sm text-gray-500 dark:text-gray-500">
                        Breeze + Livewire 4 + Tailwind CSS 3
                    </p>
                </div>

                <!-- Google Sign In Button -->
                <div class="flex justify-center">
                    <a href="{{ route('google.redirect') }}" 
                       class="group relative inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-700 bg-white border-2 border-gray-300 rounded-xl shadow-lg hover:shadow-xl transition-all duration-200 hover:scale-105 hover:border-gray-400 dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:border-gray-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-red-500/10 rounded-xl opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>
                        <svg class="relative w-6 h-6 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                        <span class="relative">Continue with Google</span>
                    </a>
                </div>

                <!-- Documentation Section -->
                <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8 border border-gray-200 dark:border-gray-700">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6 flex items-center">
                        <svg class="w-6 h-6 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Quick Setup: Google OAuth on Laravel Cloud
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold">
                                    1
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Create Google OAuth Credentials</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">Visit <a href="https://console.cloud.google.com" target="_blank" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 underline">Google Cloud Console</a></p>
                                <ul class="list-disc list-inside text-sm text-gray-600 dark:text-gray-400 space-y-1">
                                    <li>Create a new project or select existing</li>
                                    <li>Enable Google+ API</li>
                                    <li>Go to Credentials → Create OAuth 2.0 Client ID</li>
                                    <li>Set <strong>Authorized redirect URI</strong>: <code class="text-xs bg-gray-100 dark:bg-gray-900 px-2 py-1 rounded">https://your-app.laravel.cloud/auth/google/callback</code></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold">
                                    2
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Configure Laravel Cloud Environment</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">In your Laravel Cloud dashboard, add these environment variables:</p>
                                <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg text-sm overflow-x-auto"><code>GOOGLE_CLIENT_ID=your-client-id-here
GOOGLE_CLIENT_SECRET=your-client-secret-here
GOOGLE_REDIRECT_URI=${APP_URL}/auth/google/callback</code></pre>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold">
                                    3
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Deploy Your Application</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-2">Push your code to trigger a deployment:</p>
                                <pre class="bg-gray-900 text-gray-100 p-4 rounded-lg text-sm overflow-x-auto"><code>git add .
git commit -m "Configure Google OAuth"
git push origin main</code></pre>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 font-bold">
                                    ✓
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Test Your OAuth Flow</h3>
                                <p class="text-gray-600 dark:text-gray-400">Click the "Continue with Google" button above to test the authentication flow!</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white mb-3">📦 What's Included:</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>GoogleAuthController with full OAuth flow</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>User model with google_id & avatar fields</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Reusable Blade components for UI</span>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <span>Laravel Breeze auth scaffolding</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="text-center text-sm text-gray-500 dark:text-gray-400">
                    <p>Built with Laravel 12 + Livewire 4 + Tailwind CSS 3</p>
                </div>
            </div>
        </div>

        <script>
            // Check if Vite dev server is running
            // This helps developers who forget to run "npm run dev"
            (function() {
                // Only check in local development (not production builds)
                const isLocalDev = window.location.hostname === 'localhost' || 
                                   window.location.hostname.includes('.test') ||
                                   window.location.hostname === '127.0.0.1';
                
                if (!isLocalDev) return;

                // Check if Vite's dev server is accessible
                const viteScript = document.querySelector('script[src*="@@vite"]') || 
                                  document.querySelector('script[src*="5173"]');
                
                // If we're in dev mode but Vite assets aren't loading properly
                setTimeout(function() {
                    const styles = window.getComputedStyle(document.body);
                    const hasGradient = styles.backgroundImage.includes('gradient');
                    
                    // If Tailwind classes aren't applying (no gradient background)
                    if (!hasGradient) {
                        const warning = document.getElementById('vite-warning');
                        if (warning) {
                            warning.style.display = 'block';
                        }
                    }
                }, 500);
            })();

            // Mobile menu toggle
            (function() {
                const btn = document.getElementById('mobile-menu-button');
                const menu = document.getElementById('mobile-menu');
                if (btn && menu) {
                    btn.addEventListener('click', () => {
                        const isHidden = menu.classList.toggle('hidden');
                        btn.setAttribute('aria-expanded', !isHidden);
                    });
                }
            })();
        </script>
    </body>
</html>
