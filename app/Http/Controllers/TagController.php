<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
class TagController extends Controller
{
    //
    public function index(){
        $tags=Tag::all();
        return view('tags.index', ['tags'=>$tags]);  
    }

    public function show(Tag $tag){
        $jobs=$tag->jobs;
        return view('tags.show',['tag'=>$tag, 'jobs'=>$jobs]);
    }
}
