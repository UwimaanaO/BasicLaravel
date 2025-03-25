<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $post = Post::all();
        return view("home.index", compact("post"));
    }
    public function upload(Request $request){
        $data= new Post();
        $data->username=Auth::user()->name;
        $data->description= $request->description;
        /*image insert part*/
        $image= $request->image;
        if($image){

        $imagename=time().".".$image->getClientOriginalExtension();
        $request->image->move('post', $imagename);
        $data->image = $imagename;            
        }
        /*image insert part*/
        $data->save();
        return redirect()->back();   
    }
    public function view_post(){
        $name=Auth::user()->name;
        $post=Post::where('username','=', $name)->get();
        return view('post_page', compact('post'));
    }
    public function delete_post($id){
        $data=post::find($id);
        $data->delete();
        return redirect()->back();

    }
}
