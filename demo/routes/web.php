<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/user/id/{id}/{name?}', function ($id,$name='Name null') {
//     echo 'รหัสผู้ใช้='.$id.'<br>';
//     echo 'ชื่อผู้ใช้='.$name.'<br>';
// })->name('user');



// group prefix
// Route::prefix('user')->group(function() {
//     Route::get('/',function(){
//        echo 'หน้าแรก user';; 
//     });

//     Route::get('/{id}',function($id){
//         echo 'รหัสผู้ใช้='.$id;
//     });
// });


Route::get('/',function(){
    return view('test',array(
        'name'=> 'สมหมาย',
        'age'=> 30,
        'email'=> 'abcdef@hijk.com',
    ));
});