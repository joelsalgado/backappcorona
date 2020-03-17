<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function blog(){
        return Blog::all();
    }

    public function article($id){
        return Blog::where('id', '=', $id )->first();
    }
}
