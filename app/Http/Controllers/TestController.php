<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
   public function index()
   {
    $s = DB::table('posts')->get();
   return view('ViewPosts',compact('s'));
   }
public function create(){

    return view('CreatePost');

}

public function update($id){
    $Post = DB::table('posts') ->where('id' ,'=' ,$id) ->get() ->first();

    return view('update' ,compact ('Post'));

}
public function up($id ,request $request){
    DB ::table('posts') -> where('id' , '=' , $id)->update([
        'title' => $request -> u1,
        'body' => $request -> u2
    ]);
    return redirect()->route('p');
}
// public function insert(request $request){

// return $request;
// }
//
public function insert(request $request){

    DB ::table('posts')->insert([
        'title' => $request -> t1,
        'body' => $request -> t2
    ]);
    return redirect()->route('p');
}
public function delete ($id){
    DB::table('posts')  -> where('id' , '=' , $id) ->delete(); ;
    return redirect()->route('p');
}
// public function updatt ($id){
//     DB::table('posts')  -> where('id' , '=' , $id) ->delete(); ;
// return 'Deleted Successfully';
// }

}
