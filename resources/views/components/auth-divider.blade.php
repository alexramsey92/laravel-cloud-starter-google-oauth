@props(['text' => 'Or continue with'])

<div class="relative my-6">
    <div class="absolute inset-0 flex items-center">
        <div class="w-full border-t border-gray-300 dark:border-gray-600"></div>
    </div>
    <div class="relative flex justify-center text-sm">
        <span class="px-2 bg-white dark:bg-gray-900 text-gray-500 dark:text-gray-400">
            {{ $text }}
        </span>
    </div>
</div>
