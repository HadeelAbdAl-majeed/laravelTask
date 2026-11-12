<?php

use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

// Route::get('/', function () {
//     return 'أهلاً بكم في معسكر البرمجة!';
// });


// Route::get('/student/{name}', function ($name) {
//     return 'أهلاً بك يا ' . $name . ' في الدورة';
// });



// Route::get('/home', function () {
//     $name = 'تطوير تطبيقات الويب باستخدام Laravel';
//     return view('home', ['courseName' => $name]);
// });


//task

// Route::get('/developer/{name}/{track}', function ($name, $track) {
//     return view('profile', [
//         'developerName' => $name,
//         'developerTrack' => $track
//     ]);
// });



//profolio

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::get('/projects/create', [PortfolioController::class,'create'])->name('porject.create');
Route::post('/projects',[PortfolioController::class,'store'])->name('projects.store');
Route::delete('projects/{project}', [PortfolioController::class, 'destroy'])->name('project.destroy');
Route::get('/developers' , [DeveloperController::class,'index'])->name('developers.index');
Route::get('/developers/create', [DeveloperController::class , 'create'])->name('developers.create');
Route::post('/developers' , [DeveloperController::class , 'store'])->name('developers.store');
Route::get('/developers/{developer}/edit', [DeveloperController::class , 'edit'])->name('developers.edit');
Route::put('/developers/{developers}' ,[DeveloperController::class , 'update'])->name('developers.update');
Route::delete('/developers/{developer}',[DeveloperController::class, 'destroy'])->name('developers.destroy');