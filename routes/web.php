<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\bloodController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\ChooseController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\PregnencyController;
use App\Http\Controllers\SexualHealthController;
use App\Http\Controllers\SideController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\StomachController;
use App\Http\Controllers\TpsController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\VideoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AdminController::class, 'home'])->name('home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin', function () {
        return view('backend.dashboard');
    })->name('admin');
});
// Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/category/{slug}', [AdminController::class, 'categoryArticle'])->name('category');
Route::get('/category/des/{name}', [AdminController::class, 'categorydes'])->name('categorydes');

Route::get('/disease/info', [AdminController::class, 'diseasInfo'])->name('diseasInfo');
Route::get('/details/{slug}', [AdminController::class, 'diseasDes'])->name('diseasDes');



Route::get('/bloodBank/info', [AdminController::class, 'bloodBankInfo'])->name('bloodBankInfo');
Route::get('/blood/{slug}', [AdminController::class, 'bloodBankDes'])->name('bloodBankDes');


Route::get('/sexuality/info', [AdminController::class, 'sexualityInfo'])->name('sexualityInfo');
Route::get('/sexuality/des/{id}', [AdminController::class, 'sexualityDes'])->name('sexualityDes');


Route::get('/stomach/info', [AdminController::class, 'stomachInfo'])->name('stomachInfo');
Route::get('/stomach/des/{id}', [AdminController::class, 'stomachDes'])->name('stomachDes');


Route::get('/pregnency/info', [AdminController::class, 'pregnencyInfo'])->name('pregnencyInfo');
Route::get('/pregnency/des/{id}', [AdminController::class, 'pregnencyDes'])->name('pregnencyDes');
Route::get('/bmi', [AdminController::class, 'bmi'])->name('bmi');
Route::get('/pregnency', [AdminController::class, 'pregnency'])->name('pregnency');

Route::get('/all/{slug}', [AdminController::class, 'all'])->name('all');
Route::get('/doctor/info', [AdminController::class, 'doctorInfo'])->name('doctorInfo');
Route::get('/hospital/info', [AdminController::class, 'hospitalInfo'])->name('hospitalInfo');
Route::get('/ambulance/info', [AdminController::class, 'ambulanceInfo'])->name('ambulanceInfo');




Route::prefix('sliders')->middleware(['auth'])->group(function() {
    Route::get('/index', [SliderController::class, 'index'])->name('sliders_index');
    Route::get('/create', [SliderController::class, 'create'])->name('sliders_create');
    Route::post('/store', [SliderController::class, 'store'])->name('sliders_store');
    Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('sliders_edit');
    Route::post('/update/{id}', [SliderController::class, 'update'])->name('sliders_update');
    Route::get('/delete/{id}', [SliderController::class, 'destroy'])->name('sliders_destroy');
});
Route::prefix('sides')->middleware(['auth'])->group(function() {
    Route::get('/index', [SideController::class, 'index'])->name('sides_index');
    Route::get('/create', [SideController::class, 'create'])->name('sides_create');
    Route::post('/store', [SideController::class, 'store'])->name('sides_store');
    Route::get('/edit/{id}', [SideController::class, 'edit'])->name('sides_edit');
    Route::post('/update/{id}', [SideController::class, 'update'])->name('sides_update');
    Route::get('/delete/{id}', [SideController::class, 'destroy'])->name('sides_destroy');
});
Route::prefix('trending')->middleware(['auth'])->group(function() {
    Route::get('/index', [TrendingController::class, 'index'])->name('trending_index');
    Route::get('/create', [TrendingController::class, 'create'])->name('trending_create');
    Route::post('/store', [TrendingController::class, 'store'])->name('trending_store');
    Route::get('/edit/{id}', [TrendingController::class, 'edit'])->name('trending_edit');
    Route::post('/update/{id}', [TrendingController::class, 'update'])->name('trending_update');
    Route::get('/delete/{id}', [TrendingController::class, 'destroy'])->name('trending_destroy');
});

Route::prefix('pregnency')->middleware(['auth'])->group(function() {
    Route::get('/index', [PregnencyController::class, 'index'])->name('pregnency_index');
    Route::get('/create', [PregnencyController::class, 'create'])->name('pregnency_create');
    Route::post('/store', [PregnencyController::class, 'store'])->name('pregnency_store');
    Route::get('/edit/{id}', [PregnencyController::class, 'edit'])->name('pregnency_edit');
    Route::post('/update/{id}', [PregnencyController::class, 'update'])->name('pregnency_update');
    Route::get('/delete/{id}', [PregnencyController::class, 'destroy'])->name('pregnency_destroy');
});
Route::prefix('articles')->middleware(['auth'])->group(function() {
    Route::get('/index', [ArticlesController::class, 'index'])->name('articles_index');
    Route::get('/create', [ArticlesController::class, 'create'])->name('articles_create');
    Route::post('/store', [ArticlesController::class, 'store'])->name('articles_store');
    Route::get('/edit/{id}', [ArticlesController::class, 'edit'])->name('articles_edit');
    Route::post('/update/{id}', [ArticlesController::class, 'update'])->name('articles_update');
    Route::get('/delete/{id}', [ArticlesController::class, 'destroy'])->name('articles_destroy');
});
Route::prefix('diseases')->middleware(['auth'])->group(function() {
    Route::get('/index', [DiseaseController::class, 'index'])->name('diseases_index');
    Route::get('/create', [DiseaseController::class, 'create'])->name('diseases_create');
    Route::post('/store', [DiseaseController::class, 'store'])->name('diseases_store');
    Route::get('/edit/{id}', [DiseaseController::class, 'edit'])->name('diseases_edit');
    Route::post('/update/{id}', [DiseaseController::class, 'update'])->name('diseases_update');
    Route::get('/delete/{id}', [DiseaseController::class, 'destroy'])->name('diseases_destroy');
});
Route::prefix('health')->middleware(['auth'])->group(function() {
    Route::get('/index', [SexualHealthController::class, 'index'])->name('health_index');
    Route::get('/create', [SexualHealthController::class, 'create'])->name('health_create');
    Route::post('/store', [SexualHealthController::class, 'store'])->name('health_store');
    Route::get('/edit/{id}', [SexualHealthController::class, 'edit'])->name('health_edit');
    Route::post('/update/{id}', [SexualHealthController::class, 'update'])->name('health_update');
    Route::get('/delete/{id}', [SexualHealthController::class, 'destroy'])->name('health_destroy');
});
Route::prefix('stomach')->middleware(['auth'])->group(function() {
    Route::get('/index', [StomachController::class, 'index'])->name('stomach_index');
    Route::get('/create', [StomachController::class, 'create'])->name('stomach_create');
    Route::post('/store', [StomachController::class, 'store'])->name('stomach_store');
    Route::get('/edit/{id}', [StomachController::class, 'edit'])->name('stomach_edit');
    Route::post('/update/{id}', [StomachController::class, 'update'])->name('stomach_update');
    Route::get('/delete/{id}', [StomachController::class, 'destroy'])->name('stomach_destroy');
});
Route::prefix('healths')->middleware(['auth'])->group(function() {
    Route::get('/index', [HealthController::class, 'index'])->name('healths_index');
    Route::get('/create', [HealthController::class, 'create'])->name('healths_create');
    Route::post('/store', [HealthController::class, 'store'])->name('healths_store');
    Route::get('/edit/{id}', [HealthController::class, 'edit'])->name('healths_edit');
    Route::post('/update/{id}', [HealthController::class, 'update'])->name('healths_update');
    Route::get('/delete/{id}', [HealthController::class, 'destroy'])->name('healths_destroy');
});
Route::prefix('navs')->middleware(['auth'])->group(function() {
    Route::get('/index', [NavbarController::class, 'index'])->name('navs_index');
    Route::get('/create', [NavbarController::class, 'create'])->name('navs_create');
    Route::post('/store', [NavbarController::class, 'store'])->name('navs_store');
    Route::get('/edit/{id}', [NavbarController::class, 'edit'])->name('navs_edit');
    Route::post('/update/{id}', [NavbarController::class, 'update'])->name('navs_update');
    Route::get('/delete/{slug}', [NavbarController::class, 'destroy'])->name('navs_destroy');
});
Route::prefix('bloods')->middleware(['auth'])->group(function() {
    Route::get('/index', [bloodController::class, 'index'])->name('bloods_index');
    Route::get('/create', [bloodController::class, 'create'])->name('bloods_create');
    Route::post('/store', [bloodController::class, 'store'])->name('bloods_store');
    Route::get('/edit/{id}', [bloodController::class, 'edit'])->name('bloods_edit');
    Route::post('/update/{id}', [bloodController::class, 'update'])->name('bloods_update');
    Route::get('/delete/{slug}', [bloodController::class, 'destroy'])->name('bloods_destroy');
});
Route::prefix('doctors')->middleware(['auth'])->group(function() {
    Route::get('/index', [DoctorController::class, 'index'])->name('doctors_index');
    Route::get('/create', [DoctorController::class, 'create'])->name('doctors_create');
    Route::post('/store', [DoctorController::class, 'store'])->name('doctors_store');
    Route::get('/edit/{id}', [DoctorController::class, 'edit'])->name('doctors_edit');
    Route::post('/update/{id}', [DoctorController::class, 'update'])->name('doctors_update');
    Route::get('/delete/{id}', [DoctorController::class, 'destroy'])->name('doctors_destroy');
});
Route::prefix('hospitals')->middleware(['auth'])->group(function() {
    Route::get('/index', [HospitalController::class, 'index'])->name('hospitals_index');
    Route::get('/create', [HospitalController::class, 'create'])->name('hospitals_create');
    Route::post('/store', [HospitalController::class, 'store'])->name('hospitals_store');
    Route::get('/edit/{id}', [HospitalController::class, 'edit'])->name('hospitals_edit');
    Route::post('/update/{id}', [HospitalController::class, 'update'])->name('hospitals_update');
    Route::get('/delete/{id}', [HospitalController::class, 'destroy'])->name('hospitals_destroy');
});
Route::prefix('bloods')->middleware(['auth'])->group(function() {
    Route::get('/index', [bloodController::class, 'index'])->name('bloods_index');
    Route::get('/create', [bloodController::class, 'create'])->name('bloods_create');
    Route::post('/store', [bloodController::class, 'store'])->name('bloods_store');
    Route::get('/edit/{id}', [bloodController::class, 'edit'])->name('bloods_edit');
    Route::post('/update/{id}', [bloodController::class, 'update'])->name('bloods_update');
    Route::get('/delete/{id}', [bloodController::class, 'destroy'])->name('bloods_destroy');
});
Route::prefix('ambulances')->middleware(['auth'])->group(function() {
    Route::get('/index', [AmbulanceController::class, 'index'])->name('ambulances_index');
    Route::get('/create', [AmbulanceController::class, 'create'])->name('ambulances_create');
    Route::post('/store', [AmbulanceController::class, 'store'])->name('ambulances_store');
    Route::get('/edit/{id}', [AmbulanceController::class, 'edit'])->name('ambulances_edit');
    Route::post('/update/{id}', [AmbulanceController::class, 'update'])->name('ambulances_update');
    Route::get('/delete/{id}', [AmbulanceController::class, 'destroy'])->name('ambulances_destroy');
});
Route::prefix('Chooses')->middleware(['auth'])->group(function() {
    Route::get('/index', [ChooseController::class, 'index'])->name('Chooses_index');
    Route::get('/create', [ChooseController::class, 'create'])->name('Chooses_create');
    Route::post('/store', [ChooseController::class, 'store'])->name('Chooses_store');
    Route::get('/edit/{id}', [ChooseController::class, 'edit'])->name('Chooses_edit');
    Route::post('/update/{id}', [ChooseController::class, 'update'])->name('Chooses_update');
    Route::get('/delete/{id}', [ChooseController::class, 'destroy'])->name('Chooses_destroy');
});
Route::prefix('faqs')->middleware(['auth'])->group(function() {
    Route::get('/index', [FaqController::class, 'index'])->name('faqs_index');
    Route::get('/create', [FaqController::class, 'create'])->name('faqs_create');
    Route::post('/store', [FaqController::class, 'store'])->name('faqs_store');
    Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('faqs_edit');
    Route::post('/update/{id}', [FaqController::class, 'update'])->name('faqs_update');
    Route::get('/delete/{id}', [FaqController::class, 'destroy'])->name('faqs_destroy');
});
Route::prefix('videos')->middleware(['auth'])->group(function() {
    Route::get('/index', [VideoController::class, 'index'])->name('videos_index');
    Route::get('/create', [VideoController::class, 'create'])->name('videos_create');
    Route::post('/store', [VideoController::class, 'store'])->name('videos_store');
    Route::get('/edit/{id}', [VideoController::class, 'edit'])->name('videos_edit');
    Route::post('/update/{id}', [VideoController::class, 'update'])->name('videos_update');
    Route::get('/delete/{id}', [VideoController::class, 'destroy'])->name('videos_destroy');
});
Route::prefix('tips')->middleware(['auth'])->group(function() {
    Route::get('/index', [TpsController::class, 'index'])->name('tips_index');
    Route::get('/create', [TpsController::class, 'create'])->name('tips_create');
    Route::post('/store', [TpsController::class, 'store'])->name('tips_store');
    Route::get('/edit/{id}', [TpsController::class, 'edit'])->name('tips_edit');
    Route::post('/update/{id}', [TpsController::class, 'update'])->name('tips_update');
    Route::get('/delete/{id}', [TpsController::class, 'destroy'])->name('tips_destroy');
});
Route::prefix('feedbacks')->middleware(['auth'])->group(function() {
    Route::get('/index', [FeedbackController::class, 'index'])->name('feedbacks_index');
    Route::get('/create', [FeedbackController::class, 'create'])->name('feedbacks_create');
    Route::post('/store', [FeedbackController::class, 'store'])->name('feedbacks_store');
    Route::get('/edit/{id}', [FeedbackController::class, 'edit'])->name('feedbacks_edit');
    Route::post('/update/{id}', [FeedbackController::class, 'update'])->name('feedbacks_update');
    Route::get('/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedbacks_destroy');
});