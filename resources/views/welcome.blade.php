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
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">Login</a>
                        @endauth
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

                    <!-- Mobile Menu Button --></div>
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
                    @auth
                        <a href="{{ route('dashboard') }}" class="block py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block py-2 text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Login</a>
                    @endauth
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
                        Google OAuth Setup Guide
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Step 1: Google Cloud Console -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    1
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Create Google Cloud Project</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Go to <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer" class="text-blue-600 dark:text-blue-400 hover:underline">Google Cloud Console</a> and create a new project:
                                </p>
                                <ul class="list-disc list-inside space-y-1.5 text-sm text-gray-600 dark:text-gray-400 ml-2">
                                    <li>Click "Select a project" → "New Project"</li>
                                    <li>Name it (e.g., "Laravel OAuth App")</li>
                                    <li>Click "Create" and wait for the project to be created</li>
                                    <li>Make sure the new project is selected in the top dropdown</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Step 2: Enable Google+ API -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    2
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Enable Google APIs</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Enable the required APIs for OAuth to work:
                                </p>
                                <ul class="list-disc list-inside space-y-1.5 text-sm text-gray-600 dark:text-gray-400 ml-2">
                                    <li>In the sidebar, go to "APIs & Services" → "Library"</li>
                                    <li>Search for "Google+ API" and click "Enable"</li>
                                    <li>Also enable "People API" (recommended for profile data)</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Step 3: Configure OAuth Consent Screen -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    3
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Configure OAuth Consent Screen</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Go to "APIs & Services" → "OAuth consent screen":
                                </p>
                                <ul class="list-disc list-inside space-y-1.5 text-sm text-gray-600 dark:text-gray-400 ml-2">
                                    <li><strong>User Type:</strong> Select "External" (unless you have a Google Workspace)</li>
                                    <li><strong>App name:</strong> Enter your app name (e.g., "Laravel Starter App")</li>
                                    <li><strong>User support email:</strong> Your email address</li>
                                    <li><strong>Developer contact:</strong> Your email address</li>
                                    <li><strong>Scopes:</strong> Click "Add or Remove Scopes" and select:
                                        <ul class="list-circle list-inside ml-4 mt-1">
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">.../auth/userinfo.email</code></li>
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">.../auth/userinfo.profile</code></li>
                                        </ul>
                                    </li>
                                    <li><strong>Test users:</strong> Add your email for testing (only needed if not published)</li>
                                    <li>Click "Save and Continue" through all steps</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Step 4: Create OAuth Credentials -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    4
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Create OAuth 2.0 Credentials</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Go to "APIs & Services" → "Credentials":
                                </p>
                                <ul class="list-disc list-inside space-y-1.5 text-sm text-gray-600 dark:text-gray-400 ml-2">
                                    <li>Click "Create Credentials" → "OAuth client ID"</li>
                                    <li><strong>Application type:</strong> Select "Web application"</li>
                                    <li><strong>Name:</strong> Something descriptive (e.g., "Laravel Web Client")</li>
                                    <li><strong>Authorized JavaScript origins:</strong> Add your app URL:
                                        <ul class="list-circle list-inside ml-4 mt-1">
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">http://localhost</code> (for local development)</li>
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">https://yourdomain.com</code> (for production)</li>
                                        </ul>
                                    </li>
                                    <li><strong>Authorized redirect URIs:</strong> Add callback URLs:
                                        <ul class="list-circle list-inside ml-4 mt-1">
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">http://localhost/auth/google/callback</code></li>
                                            <li><code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">https://yourdomain.com/auth/google/callback</code></li>
                                        </ul>
                                    </li>
                                    <li>Click "Create"</li>
                                    <li>📋 <strong>Copy your Client ID and Client Secret</strong> - you'll need these next!</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Step 5: Configure Laravel Environment -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    5
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Configure Your .env File</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Add your Google credentials to your <code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">.env</code> file:
                                </p>
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-4 font-mono text-xs border border-gray-200 dark:border-gray-700">
                                    <pre class="text-gray-800 dark:text-gray-200 whitespace-pre-wrap">GOOGLE_CLIENT_ID=your-client-id-here.apps.googleusercontent.com
GOOGLE_CLIENT_SECRET=your-client-secret-here
GOOGLE_REDIRECT_URI=${APP_URL}/auth/google/callback</pre>
                                </div>
                                <p class="text-sm text-amber-600 dark:text-amber-400 mt-3 flex items-start">
                                    <svg class="w-5 h-5 mr-1.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    <span><strong>Important:</strong> Never commit your <code>.env</code> file to version control! Keep your credentials secret.</span>
                                </p>
                            </div>
                        </div>

                        <!-- Step 6: Database Setup -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-bold text-sm">
                                    6
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Run Database Migrations</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    The user table includes <code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">google_id</code> and <code class="text-xs bg-gray-100 dark:bg-gray-700 px-1.5 py-0.5 rounded">avatar</code> columns:
                                </p>
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-4 font-mono text-xs border border-gray-200 dark:border-gray-700">
                                    <pre class="text-gray-800 dark:text-gray-200">php artisan migrate</pre>
                                </div>
                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                                    This creates the users table with all necessary fields for Google OAuth.
                                </p>
                            </div>
                        </div>

                        <!-- Step 7: Test It Out -->
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center w-8 h-8 rounded-full bg-green-100 dark:bg-green-900 text-green-600 dark:text-green-300 font-bold text-sm">
                                    ✓
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Ready to Go! 🎉</h3>
                                <p class="text-gray-600 dark:text-gray-400 mb-3">
                                    Click the "Continue with Google" button above to test your OAuth flow!
                                </p>
                                <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-3">
                                    <p class="text-sm text-blue-800 dark:text-blue-200">
                                        <strong>💡 Pro Tip:</strong> During testing, if you're not in the test users list and your app isn't published, you'll see a warning screen. Click "Advanced" → "Go to [your app] (unsafe)" to continue testing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- How It Works Section -->
                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">🔧 How the Authentication Flow Works</h3>
                        <div class="space-y-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">1.</span>
                                <span>User clicks "Continue with Google" → redirected to Google's login page</span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">2.</span>
                                <span>User signs in with Google and grants permissions</span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">3.</span>
                                <span>Google redirects back to <code class="bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">/auth/google/callback</code></span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">4.</span>
                                <span>Laravel receives user info (name, email, avatar, google_id)</span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">5.</span>
                                <span>System checks if user exists by email:
                                    <ul class="list-disc list-inside ml-4 mt-1">
                                        <li>If exists: Update google_id and avatar, then log them in</li>
                                        <li>If new: Create account with auto-verified email, then log them in</li>
                                    </ul>
                                </span>
                            </div>
                            <div class="flex items-start">
                                <span class="text-blue-500 font-bold mr-2">6.</span>
                                <span>User is redirected to the dashboard, fully authenticated!</span>
                            </div>
                        </div>
                    </div>

                    <!-- What's Included Section -->
                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">📦 What's Included in This Starter</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm text-gray-600 dark:text-gray-400">
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">GoogleAuthController</strong>
                                    <p class="text-xs mt-0.5">Complete OAuth flow with error handling & logging</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">User Model Enhanced</strong>
                                    <p class="text-xs mt-0.5">google_id, avatar columns & fillable attributes</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">Rate Limiting</strong>
                                    <p class="text-xs mt-0.5">OAuth routes throttled to prevent abuse</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">Laravel Breeze</strong>
                                    <p class="text-xs mt-0.5">Full auth scaffolding with Livewire + Tailwind</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">Security Best Practices</strong>
                                    <p class="text-xs mt-0.5">Input validation, email verification, secure sessions</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <svg class="w-5 h-5 mr-2 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <strong class="text-gray-900 dark:text-white">Reusable Components</strong>
                                    <p class="text-xs mt-0.5">Google button, user avatar, auth dividers</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Troubleshooting Section -->
                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">🔍 Troubleshooting Common Issues</h3>
                        <div class="space-y-4">
                            <details class="group">
                                <summary class="cursor-pointer text-sm font-medium text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
                                    <svg class="w-4 h-4 mr-2 transform group-open:rotate-90 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Error: "redirect_uri_mismatch"
                                </summary>
                                <div class="mt-2 ml-6 text-sm text-gray-600 dark:text-gray-400">
                                    <p class="mb-2">This means the callback URL doesn't match what's configured in Google Cloud Console.</p>
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Check your <code class="bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">GOOGLE_REDIRECT_URI</code> in .env</li>
                                        <li>Verify "Authorized redirect URIs" in Google Cloud Console exactly matches</li>
                                        <li>Make sure there's no trailing slash difference</li>
                                        <li>Run <code class="bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">php artisan config:clear</code> after .env changes</li>
                                    </ul>
                                </div>
                            </details>
                            
                            <details class="group">
                                <summary class="cursor-pointer text-sm font-medium text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
                                    <svg class="w-4 h-4 mr-2 transform group-open:rotate-90 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Error: "Access blocked: This app's request is invalid"
                                </summary>
                                <div class="mt-2 ml-6 text-sm text-gray-600 dark:text-gray-400">
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Make sure you've configured the OAuth consent screen completely</li>
                                        <li>Add required scopes (userinfo.email and userinfo.profile)</li>
                                        <li>Add yourself as a test user if the app isn't published</li>
                                        <li>Wait a few minutes after making changes for them to propagate</li>
                                    </ul>
                                </div>
                            </details>

                            <details class="group">
                                <summary class="cursor-pointer text-sm font-medium text-gray-900 dark:text-white hover:text-blue-600 dark:hover:text-blue-400 flex items-center">
                                    <svg class="w-4 h-4 mr-2 transform group-open:rotate-90 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    Google login works but returns to homepage
                                </summary>
                                <div class="mt-2 ml-6 text-sm text-gray-600 dark:text-gray-400">
                                    <ul class="list-disc list-inside space-y-1">
                                        <li>Check Laravel logs: <code class="bg-gray-100 dark:bg-gray-700 px-1 py-0.5 rounded">storage/logs/laravel.log</code></li>
                                        <li>Verify database migrations have been run</li>
                                        <li>Make sure your users table has google_id and avatar columns</li>
                                        <li>Check that APP_URL in .env matches your actual URL</li>
                                    </ul>
                                </div>
                            </details>
                        </div>
                    </div>

                    <!-- Next Steps -->
                    <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">🚀 Next Steps</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <a href="https://laravel.com/docs/socialite" target="_blank" rel="noopener noreferrer" 
                               class="block p-4 bg-gray-50 dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition-colors">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Laravel Socialite Docs</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-400 mt-1">Learn about other OAuth providers</p>
                                    </div>
                                </div>
                            </a>
                            <a href="https://console.cloud.google.com/" target="_blank" rel="noopener noreferrer" 
                               class="block p-4 bg-gray-50 dark:bg-gray-900 rounded-lg border border-gray-200 dark:border-gray-700 hover:border-blue-500 dark:hover:border-blue-500 transition-colors">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 mr-2 text-blue-500 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div>
                                        <h4 class="font-semibold text-gray-900 dark:text-white text-sm">Google Cloud Console</h4>
                                        <p class="text-xs text-gray-600 dark:text-gray-400 mt-1">Manage your OAuth credentials</p>
                                    </div>
                                </div>
                            </a>
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
