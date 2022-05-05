<?php
//グループ
namespace App\Http\Controllers;
//他のファイルを参照 リクエストしている
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class MathController extends Controller
{
    //足し算をおこなう
    public function sum($x,$y){
        $sum = $x+ $y;

        return View::make('sum',['x'=>$x, 'y'=>$y, 'sum'=>$sum]);
    }
}
