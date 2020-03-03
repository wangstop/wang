<?php

namespace App\Http\Controllers;

// 匯入資料庫
use DB;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front/index');
    }

    public function news(){

        // 取得資料庫的東西(news)
        $news_data = DB::table('news')->get();
        return view('front/news',compact('news_data'));
    }

}