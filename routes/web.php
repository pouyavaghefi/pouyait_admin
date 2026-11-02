<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SiteSettingController;
use App\Models\SiteSetting;
use Illuminate\Http\Request;

Route::get('/', fn () => redirect()->route('dashboard'));

Auth::routes(['register' => false]);

Route::get('/internal-api/settings', function (Request $request) {

    $expectedToken = config('services.internal_api_token');

    abort_unless(
        is_string($expectedToken)
        && $expectedToken !== ''
        && hash_equals($expectedToken, (string) $request->bearerToken()),
        401
    );

    return response()->json(
        SiteSetting::query()
            ->pluck('value', 'key')
            ->all()
    );

})->middleware('throttle:60,1');

Route::get('/signout', function () {
    Auth::guard('web')->logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
})->name('signout');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])
        ->name('dashboard');

    Route::get('/optic', [HomeController::class, 'optic'])
        ->name('optic');

    Route::get('/redirections', [HomeController::class, 'redirections'])
        ->name('redirections');

    Route::get('/urls', [HomeController::class, 'urls'])
        ->name('urls');

    Route::get('/settings', [SiteSettingController::class, 'index'])
        ->name('settings');

    Route::post('/settings', [SiteSettingController::class, 'update'])
        ->name('settings.update');

    Route::get('/security', [HomeController::class, 'security'])
        ->name('security');

    Route::redirect('/home', '/dashboard')->name('home');
});
