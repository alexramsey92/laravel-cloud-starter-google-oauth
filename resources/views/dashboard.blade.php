<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard - {{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-gray-100 dark:bg-gray-900">
        <div class="min-h-screen">
            <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <h1 class="text-xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
                        </div>
                        <div class="flex items-center">
                            @auth
                                <span class="text-gray-700 dark:text-gray-300 mr-4">{{ auth()->user()->name }}</span>
                                <form method="POST" action="/logout">
                                    @csrf
                                    <button type="submit" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900">
                                        Log Out
                                    </button>
                                </form>
                            @else
                                <a href="/" class="text-sm text-gray-700 dark:text-gray-300 hover:text-gray-900">Home</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <main class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <h2 class="text-2xl font-bold mb-4">Welcome, {{ auth()->user()->name }}! 👋</h2>
                            <p class="mb-6 text-lg">You're successfully authenticated with Google OAuth.</p>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-8">
                                <!-- Add Features -->
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold mb-3 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        Add Features
                                    </h3>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Create Livewire components: <code class="text-xs bg-gray-200 dark:bg-gray-800 px-2 py-0.5 rounded">php artisan make:livewire ComponentName</code></span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Add models & migrations: <code class="text-xs bg-gray-200 dark:bg-gray-800 px-2 py-0.5 rounded">php artisan make:model Post -m</code></span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Build CRUD interfaces with Livewire tables and forms</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Extend Authentication -->
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold mb-3 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                        </svg>
                                        Extend Authorization
                                    </h3>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Add user roles: <code class="text-xs bg-gray-200 dark:bg-gray-800 px-2 py-0.5 rounded">composer require spatie/laravel-permission</code></span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Implement gates & policies for fine-grained access control</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Add team/organization multi-tenancy with member roles</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Deploy to Laravel Cloud -->
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold mb-3 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                        </svg>
                                        Deploy to Production
                                    </h3>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Push to GitHub and connect to <a href="https://cloud.laravel.com" target="_blank" class="text-blue-500 hover:underline">Laravel Cloud</a></span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Set Google OAuth credentials in environment variables</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Configure Redis for sessions/cache (ephemeral filesystem!)</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Additional OAuth Providers -->
                                <div class="bg-gray-50 dark:bg-gray-900 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold mb-3 flex items-center">
                                        <svg class="w-5 h-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                        Add More OAuth Providers
                                    </h3>
                                    <ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>GitHub: Copy GoogleAuthController pattern and update driver</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Facebook, Twitter, LinkedIn: Same Socialite pattern applies</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="mr-2">•</span>
                                            <span>Let users link multiple OAuth accounts to one email</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Quick Links -->
                            <div class="mt-8 pt-6 border-t border-gray-200 dark:border-gray-700">
                                <h3 class="text-sm font-semibold mb-3 text-gray-500 dark:text-gray-400">📚 Resources</h3>
                                <div class="flex flex-wrap gap-3">
                                    <a href="https://laravel.com/docs/12.x" target="_blank" class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Laravel Docs →</a>
                                    <a href="https://livewire.laravel.com/docs" target="_blank" class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Livewire Docs →</a>
                                    <a href="https://tailwindcss.com/docs" target="_blank" class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Tailwind CSS →</a>
                                    <a href="https://laravel.com/docs/12.x/socialite" target="_blank" class="text-sm text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300">Socialite Docs →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
