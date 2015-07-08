<?php

Route::get("dangky", 'sinhvienController@getFormLogin');// url: /vào form đăng ký

Route::post('xuly','sinhvienController@take_data_view');// url: /bat den action cua form đăng ký vào hàm take-data-view

Route::get("show", 'sinhvienController@getAllSv');// url: /bat den action cua form đăng ký vào hàm getAllSv

Route::get('gui-id-sua/{id}/', ['as' => 'edit_id_detail', 'uses' => 'sinhvienController@getEdit']);// đặt tên cho Route là student_detail sử dụng hàm getEdit trong sinhvienController

Route::post('updateSv','sinhvienController@update_Sv');

Route::post('delete','sinhvienController@delete_Sv');

Route::get('search','sinhvienController@search');
