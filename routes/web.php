<?php

use App\Livewire\CategoriaCreate;
use App\Livewire\CategoriaEdit;
use App\Livewire\CategoriaIndex;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('categoria/create', CategoriaCreate::class)->name('categoria.create');
Route::get('categoria', CategoriaIndex::class)->name('categoria.index');
Route::get('categoria/edit/{id}', CategoriaEdit::class)->name('categoria.edit');

Route::get('dashboard', Dashboard::class)->name('dashboard');
