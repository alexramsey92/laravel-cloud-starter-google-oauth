# Laravel Cloud Starter - Google OAuth Edition

A lightweight Laravel 12 starter kit with **Breeze + Livewire + Tailwind + Google OAuth**.

[![Laravel](https://img.shields.io/badge/Laravel-12-FF2D20?logo=laravel)](https://laravel.com)
[![Livewire](https://img.shields.io/badge/Livewire-4-FB70A9?logo=livewire)](https://livewire.laravel.com)
[![Tailwind](https://img.shields.io/badge/Tailwind-3-38B2AC?logo=tailwind-css)](https://tailwindcss.com)
[![Google OAuth](https://img.shields.io/badge/Google_OAuth-Ready-4285F4?logo=google)](https://console.cloud.google.com)

📖 **[View Documentation](https://alexramsey92.github.io/laravel-cloud-starter-google-oauth/)**

## Features

- 🔐 **Laravel Breeze + Livewire** - Authentication with reactive components
- 🚀 **Livewire 4** - Full-stack reactivity without JavaScript
- 🎨 **Tailwind CSS 3** - Utility-first styling with dark mode
- 💾 **SQLite** - Lightweight database for development
- 🔑 **Google OAuth** - Social authentication ready
- ⚡ **Alpine.js** - Built into Livewire 4

## Quick Start

### Prerequisites

- **[Laravel Herd](https://herd.laravel.com)** (recommended for macOS/Windows)
  - Includes PHP 8.2+, Composer, Node.js, and database
- **Or manually install:**
  - PHP 8.2+
  - Composer
  - Node.js 18+

### Setup with Laravel Herd

**Windows:**
```bash
# 1. Install Laravel Herd from https://herd.laravel.com

# 2. Clone and navigate to project
git clone https://github.com/yourusername/laravel-cloud-starter-google-oauth.git
cd laravel-cloud-starter-google-oauth

# 3. Install dependencies
composer install
npm install

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Create database
touch database/database.sqlite

# 6. Install Breeze with Livewire
php artisan breeze:install livewire

# 7. Build assets
npm run build

# 8. Run migrations
php artisan migrate

# 9. Visit in browser
# Herd auto-serves at: http://laravel-cloud-starter-google-oauth.test
```

**macOS:**
```bash
# 1. Install Laravel Herd from https://herd.laravel.com

# 2. Clone and navigate to project
git clone https://github.com/yourusername/laravel-cloud-starter-google-oauth.git
cd laravel-cloud-starter-google-oauth

# 3. Install dependencies
composer install
npm install

# 4. Setup environment
cp .env.example .env
php artisan key:generate

# 5. Create database
touch database/database.sqlite

# 6. Install Breeze with Livewire
php artisan breeze:install livewire

# 7. Build assets
npm run build

# 8. Run migrations
php artisan migrate

# 9. Visit in browser
# Herd auto-serves at: http://laravel-cloud-starter-google-oauth.test
```

### Google OAuth Setup (Optional)

1. **Create Google OAuth credentials** at [Google Cloud Console](https://console.cloud.google.com)
2. **Install Socialite:**
   ```bash
   composer require laravel/socialite
   ```
3. **Add to `.env`:**
   ```env
   GOOGLE_CLIENT_ID=your-client-id
   GOOGLE_CLIENT_SECRET=your-client-secret
   GOOGLE_REDIRECT_URI="${APP_URL}/auth/google/callback"
   ```
4. **Test the Google login** at `http://laravel-cloud-starter-google-oauth.test`

## What's Included

- ✅ Laravel 12 with all core files
- ✅ Authentication routes (`/login`, `/register`, `/dashboard`)
- ✅ Google OAuth routes (`/auth/google/redirect`, `/auth/google/callback`)
- ✅ User model with Google OAuth fields
- ✅ Blade components for Google login button
- ✅ Tailwind CSS configured
- ✅ Vite build system
- ✅ SQLite database

## Development

```bash
# Start dev server (if not using Herd)
php artisan serve

# Watch for asset changes
npm run dev

# Run migrations
php artisan migrate

# Create Livewire component
php artisan make:livewire ComponentName
```

## License

MIT License
