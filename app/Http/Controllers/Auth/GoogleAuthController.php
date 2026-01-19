<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    /**
     * Redirect to Google OAuth page
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
            
            // Validate required data from Google
            if (!$googleUser->getEmail() || !$googleUser->getId()) {
                Log::warning('Google OAuth: Missing required user data');
                return redirect('/')->withErrors([
                    'google' => 'Unable to retrieve your information from Google.',
                ]);
            }

            // Validate email format
            if (!filter_var($googleUser->getEmail(), FILTER_VALIDATE_EMAIL)) {
                Log::warning('Google OAuth: Invalid email format', ['email' => $googleUser->getEmail()]);
                return redirect('/')->withErrors([
                    'google' => 'Invalid email address received from Google.',
                ]);
            }
            
            // Find or create user
            $user = User::where('email', $googleUser->getEmail())->first();
            
            if ($user) {
                // Update existing user's Google info
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'avatar' => filter_var($googleUser->getAvatar(), FILTER_VALIDATE_URL) ? $googleUser->getAvatar() : null,
                ]);
                
                Log::info('Google OAuth: Existing user logged in', ['user_id' => $user->id]);
            } else {
                // Sanitize and validate name
                $name = strip_tags($googleUser->getName());
                $name = substr($name, 0, 255); // Limit length
                
                // Create new user
                $user = User::create([
                    'name' => $name,
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => filter_var($googleUser->getAvatar(), FILTER_VALIDATE_URL) ? $googleUser->getAvatar() : null,
                    'email_verified_at' => now(),
                    'password' => Hash::make(Str::random(32)), // Random password
                ]);
                
                Log::info('Google OAuth: New user registered', ['user_id' => $user->id]);
            }
            
            // Log the user in
            Auth::login($user, remember: true);
            
            return redirect()->intended('dashboard');
            
        } catch (\Exception $e) {
            // Log the error for debugging but don't expose details to user
            Log::error('Google OAuth Error: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            
            return redirect('/')->withErrors([
                'google' => 'Authentication failed. Please try again.',
            ]);
        }
    }
}
