<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('index');

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
})->name('change_locale');

Route::group(['middleware' => 'web'], function () {
    Route::post('/destroy-session', [MainController::class, 'destroySession'])->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
});

Route::post('/save-visit-count', [MainController::class, 'saveVisitCount'])->name('visit-count')->withoutMiddleware([\App\Http\Middleware\VerifyCsrfToken::class]);
Route::post('/save-click-count', [MainController::class, 'saveClickCount'])->name('click-count');
Route::get('/wa-wording', [MainController::class, 'getWaWording'])->name('get-wa-wording');


Route::get('/test-db', function () {
    // dd(env('GOOGLE_API_TOKEN'));
    try {
        $result = DB::table('admin')->get();
        return response()->json(['status' => 'success', 'result' => $result]);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
    }
});
