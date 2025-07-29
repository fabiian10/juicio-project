<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Livewire\Juicios\JuiciosIndex;

Route::get('/', function () {
    return redirect()->route('login');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Volt::route('juicios', JuiciosIndex::class)->name('juicios.index');
    Volt::route('juicios/create', JuiciosCreate::class)->name('juicios.create');
    Volt::route('juicios/{juicio}/edit', JuiciosEdit::class)->name('juicios.edit');
    Volt::route('juicios/{juicio}/show', JuiciosShow::class)->name('juicios.show');
});

require __DIR__.'/auth.php';
