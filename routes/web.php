<?php
// Route untuk ganti bahasa
Route::post('/change-language', function () {
    $lang = request('lang');
    
    // Validasi bahasa yang diizinkan
    $allowedLanguages = ['id', 'en', 'ar'];
    
    if (in_array($lang, $allowedLanguages)) {
        session(['locale' => $lang]);
        app()->setLocale($lang);
    }
    
    return back();
})->name('change.language');
 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Halaman lainnya
Route::get('/contact', function () {
    return view('contact');
})->name('Contact');

Route::get('/ourbusiness', function () {
    return view('ourbusiness');
})->name('OurBusiness');

Route::get('/investor', function () {
    return view('Investor');
})->name('Investor');

Route::get('/news', function () {
    return view('news');
})->name('News');

Route::get('/career', function () {
    return view('career');
})->name('Career');

Route::get('/about', function () {
    return view('about');
})->name('About');

Route::get('/detail_lowongan', function (\Illuminate\Http\Request $request) {
    $locale = app()->getLocale();
    if ($locale === 'ar') {
        return app(\App\Http\Controllers\Lowongan_ar::class)->detail($request);
    } elseif ($locale === 'en') {
        return app(\App\Http\Controllers\Lowongan_en::class)->detail($request);
    } else {
        return app(\App\Http\Controllers\Lowongan_id::class)->detail($request);
    }
});



// Route detail_berita hanya lewat controller

Route::get('/detail_berita', function (\Illuminate\Http\Request $request) {
    $locale = app()->getLocale();
    if ($locale === 'ar') {
        return app(\App\Http\Controllers\Berita_ar::class)->detail($request);
    } elseif ($locale === 'en') {
        return app(\App\Http\Controllers\Berita_en::class)->detail($request);
    } else {
        return app(\App\Http\Controllers\Berita_id::class)->detail($request);
    }
});

Route::get('/detail_perusahaan', function (\Illuminate\Http\Request $request) {
    $locale = app()->getLocale();
    if ($locale === 'ar') {
        return app(\App\Http\Controllers\perusahaan_ar::class)->detail($request);
    } elseif ($locale === 'en') {
        return app(\App\Http\Controllers\perusahaan_en::class)->detail($request);
    } else {
        return app(\App\Http\Controllers\perusahaan_id::class)->detail($request);
    }
});

// app/Http/Controllers/Berita.php
Route::view('/ourbusiness/gaharu', 'Ourbusiness.Gaharu');
Route::view('/ourbusiness/logistik', 'Ourbusiness.Logistik');
Route::view('/ourbusiness/parfum', 'Ourbusiness.Parfum');