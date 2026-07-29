<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Upload & Database Management Routes
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::post('/admin/projects/store', [AdminController::class, 'storeProject'])->name('admin.projects.store');
Route::delete('/admin/projects/{project}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');

Route::post('/admin/testimonials/store', [AdminController::class, 'storeTestimonial'])->name('admin.testimonials.store');
Route::delete('/admin/testimonials/{testimonial}', [AdminController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');
