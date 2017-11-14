<?php
//basic routing
Route::get('/', function () {
    return view('welcome');
});

Route::get('/thing',function(){
    return '<h1>Hello Everybody</h1>'
          .'<i>Selamat Datang Di Halaman Web Ku.</i><br>'
          .'<u>Jangan lupa belajar yaa okkkkkkk.</u>';
});

//basic parameter
Route::get('user/{nama}',function($a){
    return 'Nama saya adalah <b>'.$a.'<b>';
});

Route::get('jajan/{makan}/{minum}/{ngemil}',function($a,$b,$c){
    return '<i>makan </i><b>'.$a.'</b><br>'
           .'<i>minum </i><b>'.$b.'</b><br>'
           .'<i>ngemil </i><b>'.$c.'</b>';
});

//route optional parameter
Route::get('reus/{nama?}',function($a = "Dadang Conello"){
       return $a;
});