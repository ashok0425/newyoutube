<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\backend\admincontroller;
use App\Models\socials;
use App\Http\Controllers\rolecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|F'/'
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
                              // Admin logout
 Route::get('admin/logout','App\Http\Controllers\admincontroller@logout')->name('admin.logout');
//  changepass
 Route::get('admin/setting/updatepassword','App\Http\Controllers\admincontroller@editprofile')->name('profilesetting');
// update pass
Route::post('update-password','App\Http\Controllers\admincontroller@updatepass')->name('updatepassword');//update password

Route::get('profile-update','App\Http\Controllers\admincontroller@updateprofile')->name('profileupdate');//profile update
Route::post('save-profile','App\Http\Controllers\admincontroller@saveprofile')->name('saveprofile');//save profile



                              // category
 Route::get('admin/category','App\Http\Controllers\CategoryController@index')->name('admin.category');
                               // create category
  Route::get('admin/category/create','App\Http\Controllers\CategoryController@create')->name('admin.category.create');
                               // store category
  Route::post('admin/category/store','App\Http\Controllers\CategoryController@store')->name('admin.category.store');
                                // delete category
   Route::get('admin/category/delete/{id}','App\Http\Controllers\CategoryController@destroy')->name('admin.category.delete');
                                // Edit category
   Route::get('admin/category/edit/{id}','App\Http\Controllers\CategoryController@edit')->name('admin.category.edit');
                                  // update category
  Route::post('admin/category/update/{id}','App\Http\Controllers\CategoryController@update')->name('admin.category.update');
  Route::get('admin/loadslug/{value}','App\Http\Controllers\CategoryController@getslug');






                                // subcategory
 Route::get('admin/subcategory','App\Http\Controllers\SubcategoryController@index')->name('admin.subcategory');
                                 // create subcategory
    Route::get('admin/subcategory/create','App\Http\Controllers\SubcategoryController@create')->name('admin.subcategory.create');
                                 // store category
    Route::post('admin/subcategory/store','App\Http\Controllers\SubcategoryController@store')->name('admin.subcategory.store');
                                    // delete category
   Route::get('admin/subcategory/delete/{id}','App\Http\Controllers\SubcategoryController@destroy')->name('admin.subcategory.delete');
                                 // Edit subcategory
    Route::get('admin/subcategory/edit/{id}','App\Http\Controllers\SubcategoryController@edit')->name('admin.subcategory.edit');
                                    // update category
  Route::post('admin/subcategory/update/{id}','App\Http\Controllers\SubcategoryController@update')->name('admin.subcategory.update');





                                 // district
 Route::get('admin/district','App\Http\Controllers\DistrictController@index')->name('admin.district');
                               // create district
  Route::get('admin/district/create','App\Http\Controllers\DistrictController@create')->name('admin.district.create');
                                 // store district
    Route::post('admin/district/store','App\Http\Controllers\DistrictController@store')->name('admin.district.store');
                                     // delete district
   Route::get('admin/district/delete/{id}','App\Http\Controllers\DistrictController@destroy')->name('admin.district.delete');
                                 // Edit district
    Route::get('admin/district/edit/{id}','App\Http\Controllers\DistrictController@edit')->name('admin.district.edit');
                                      // update category
  Route::post('admin/district/update/{id}','App\Http\Controllers\DistrictController@update')->name('admin.district.update');





                                   // subdistrict
 Route::get('admin/subdistrict','App\Http\Controllers\SubdistrictController@index')->name('admin.subdistrict');
                              // create subdistrict
 Route::get('admin/subdistrict/create','App\Http\Controllers\SubdistrictController@create')->name('admin.subdistrict.create');
                               // store subdistrict
  Route::post('admin/subdistrict/store','App\Http\Controllers\SubdistrictController@store')->name('admin.subdistrict.store');
                                   // delete subdistrict
 Route::get('admin/subdistrict/delete/{id}','App\Http\Controllers\SubdistrictController@destroy')->name('admin.subdistrict.delete');
            // Edit subdistrict
 Route::get('admin/subdistrict/edit/{id}','App\Http\Controllers\SubdistrictController@edit')->name('admin.subdistrict.edit');
                           // update category
  Route::post('admin/subdistrict/update/{id}','App\Http\Controllers\SubdistrictController@update')->name('admin.subdistrict.update');






                       // thought
 Route::get('admin/thought','App\Http\Controllers\ThoughtController@index')->name('admin.thought');
 // create thought
Route::get('admin/thought/create','App\Http\Controllers\ThoughtController@create')->name('admin.thought.create');
  // store thought
Route::post('admin/thought/store','App\Http\Controllers\ThoughtController@store')->name('admin.thought.store');
      // delete thought
Route::get('admin/thought/delete/{id}','App\Http\Controllers\ThoughtController@destroy')->name('admin.thought.delete');
// Edit thought
Route::get('admin/thought/edit/{id}','App\Http\Controllers\ThoughtController@edit')->name('admin.thought.edit');
// update thought
Route::post('admin/thought/update/{id}','App\Http\Controllers\ThoughtController@update')->name('admin.thought.update');




                                    // Post
 Route::get('admin/post','App\Http\Controllers\PostController@index')->name('admin.post');
                                   // create Post
 Route::get('admin/post/create','App\Http\Controllers\PostController@create')->name('admin.post.create');
                                    // get subcategory
 Route::get('/get/subcategory/{cat_id}','App\Http\Controllers\PostController@getsubcategory');
                                     // get subdistrict
  Route::get('/get/subdistrict/{cat_id}','App\Http\Controllers\PostController@getsubdistrict');
              //store post
  Route::post('/admin/post/store','App\Http\Controllers\PostController@store')->name('admin.post.store');
                                  // edit Post
Route::get('admin/post/edit/{id}','App\Http\Controllers\PostController@edit')->name('admin.post.edit');

                                  // edit Post
Route::get('admin/post/delete/{id}','App\Http\Controllers\PostController@destroy')->name('admin.post.delete');
                                  //update post
Route::post('/admin/post/update/{id}','App\Http\Controllers\PostController@update')->name('admin.post.update');







 // seo setting
Route::get('admin/seo/edit','App\Http\Controllers\SeoController@edit')->name('admin.seo.edit');
             //seo update
Route::post('/admin/seo/update/','App\Http\Controllers\SeoController@update')->name('admin.seo.update');
                                // liveTv setting
Route::get('admin/livetv/edit','App\Http\Controllers\LivetvController@edit')->name('admin.livetv.edit');
                                // update livetv active status
Route::get('admin/livetv/active','App\Http\Controllers\LivetvController@active')->name('livetv.active');
                        // update livetv Deactive status
 Route::get('admin/livetv/deactive','App\Http\Controllers\LivetvController@deactive')->name('livetv.deactive');
                // update livetv
Route::post('admin/livetv/update','App\Http\Controllers\LivetvController@update')->name('admin.livetv.update');




 // photo Gallery
 Route::get('admin/photogallery','App\Http\Controllers\PhotogalleryController@index')->name('admin.photogallery');
 // create Photo gallery
Route::get('admin/photogallery/create','App\Http\Controllers\PhotogalleryController@create')->name('admin.photogallery.create');
// Store photo gallery
Route::post('admin/photogallery/store','App\Http\Controllers\PhotogalleryController@store')->name('admin.photogallery.store');
// Delete photo gallery
Route::get('admin/photogallery/delete/{id}','App\Http\Controllers\PhotogalleryController@destroy')->name('admin.photogallery.delete');




// Add list
Route::get('admin/addlist','App\Http\Controllers\AddController@index')->name('admin.addlist');
// Add create
Route::get('admin/add/create','App\Http\Controllers\AddController@create')->name('admin.add.create');
// Add store
Route::post('admin/add/store','App\Http\Controllers\AddController@store')->name('admin.add.store');
// Add delete
Route::get('admin/add/delete/{id}','App\Http\Controllers\AddController@destroy')->name('admin.add.delete');




// ............front end ..................................................
Route::get('/', function () {
    return view('frontend.index');
})->name('/');

Route::get('change/language','App\Http\Controllers\FrontendController@changelanguage')->name('change.language');

Route::get('category/{id}/{slug}','App\Http\Controllers\FrontendController@category')->name('category');
Route::get('subcategory/{id}/{sid}/{slug?}','App\Http\Controllers\FrontendController@category')->name('subcategory');


// detail page
Route::get('news/{category}/{id}/{slug}','App\Http\Controllers\FrontendController@details')->name('news.detai');

// comments
Route::post('comment/store','App\Http\Controllers\FrontendController@commentstore')->name('comment.store');

// comments
Route::get('search/','App\Http\Controllers\FrontendController@search')->name('search');



// Writer Role Routes

Route::get('/add/writer', [rolecontroller::class, 'InsertWriter'])->name('add.writer');

Route::post('/store/writer', [rolecontroller::class, 'StoreWriter'])->name('store.writer');

Route::get('/all/writer', [rolecontroller::class, 'AllWriter'])->name('all.writer');

Route::get('/edit/writer/{id}', [rolecontroller::class, 'EditWriter'])->name('edit.writer');

Route::post('/update/writer/{id}', [rolecontroller::class, 'UpdateWriter'])->name('update.writer');
Route::get('/delete/writer/{id}', [rolecontroller::class, 'deleteWriter'])->name('delete.writer');
