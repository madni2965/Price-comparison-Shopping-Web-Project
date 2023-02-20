<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BackcushionComponent;
use App\Http\Livewire\BedingComponent;
use App\Http\Livewire\BspeakerComponent;
use App\Http\Livewire\CouponComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\DroneComponent;
use App\Http\Livewire\EventComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Hotproduct;
use App\Http\Livewire\LaptopComponent;
use App\Http\Livewire\ProjectorComponent;
use App\Http\Livewire\SearchComponent;
use App\Http\Livewire\SewingComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\SkincareComponent;
use App\Http\Livewire\SmartphonesComponent;
use App\Http\Livewire\SmartwatchesComponent;
use App\Http\Livewire\TechComponent;
use App\Http\Livewire\UsedproductComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\WeshlistComponent;
use App\Http\Livewire\WirelesschragerComponent;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');

Route::get('/',HomeComponent::class)->name('home.index');
Route::get('/Backcushion',BackcushionComponent::class)->name('Backcushion');
Route::get('/shop',ShopComponent::class)->name('Backcushion');
Route::get('/Beding',BedingComponent::class)->name('Beding');
Route::get('/Bspeaker',BspeakerComponent::class)->name('Bspeaker');
Route::get('/Drone',DroneComponent::class)->name('Drone');
Route::get('/Laptop',LaptopComponent::class)->name('Laptop');
Route::get('/Projector',ProjectorComponent::class)->name('Projector');
Route::get('/Sewing',SewingComponent::class)->name('Sewing');
Route::get('/Skincare',SkincareComponent::class)->name('Skincare');
Route::get('/Smartphones',SmartphonesComponent::class)->name('Smartphones');
Route::get('/Smartwatches',SmartwatchesComponent::class)->name('Smartwatches');
Route::get('/shop',ShopComponent::class)->name('shop');
Route::get('/Tech',TechComponent::class)->name('Tech');
Route::get('/Usedproduct',UsedproductComponent::class)->name('Usedproduct');
Route::get('/Wirelesschrager',WirelesschragerComponent::class)->name('Wirelesschrager');

Route::get('/search',SearchComponent::class)->name('product.search');

Route::get('/Weshlist',WeshlistComponent::class)->name('Weshlist');
Route::get('/Coupon',CouponComponent::class)->name('Coupon');
Route::get('/Event',EventComponent::class)->name('Event');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// }); 

Route::middleware(['auth'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});

Route::middleware(['auth','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
require __DIR__.'/auth.php';
