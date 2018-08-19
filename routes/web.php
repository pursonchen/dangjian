<?php

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

// 就做党员档案 课程学习 我的积分 流言区 在线考试（随机），考试完后计算积分
// 还有一个二维码扫描打卡考试

Route::get('/','StaticPagesController@home');
Route::get('/course','StaticPagesController@course');
Route::get('/me','StaticPagesController@me');
Route::get('/exam','StaticPagesController@exam');


