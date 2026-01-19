@props(['user' => null, 'size' => 'md'])

@php
$user = $user ?? auth()->user();
$sizeClasses = [
    'sm' => 'w-8 h-8 text-xs',
    'md' => 'w-10 h-10 text-sm',
    'lg' => 'w-12 h-12 text-base',
    'xl' => 'w-16 h-16 text-lg',
];
$classes = $sizeClasses[$size] ?? $sizeClasses['md'];
@endphp

@if($user->avatar)
    <img 
        src="{{ $user->avatar }}" 
        alt="{{ $user->name }}"
        {{ $attributes->merge(['class' => $classes . ' rounded-full object-cover']) }}
    >
@else
    <div {{ $attributes->merge(['class' => $classes . ' rounded-full bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center']) }}>
        <span class="font-semibold text-white uppercase">
            {{ substr($user->name, 0, 1) }}
        </span>
    </div>
@endif
