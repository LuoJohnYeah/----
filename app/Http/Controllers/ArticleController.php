<?php
/**
 * Created by PhpStorm.
 * User: nifengpoyun
 * Date: 2017/10/30
 * Time: 下午3:01
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticleController extends Controller
{
    public function index(){
        return view('article');
    }
}