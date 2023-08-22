<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        try {
            $user_id = auth()->user()->id;
            
            $user = User::find($user_id);
            return view('home')->with('posts',$user->posts);
            
        } catch (\Throwable $th) {
            return view('pages.index');
        }
    }
    public function destroy(string $id)
    {
        $post = Post::find($id);
        //check for correct user
        if (auth()->user()->id !== $post->user_id) {
            return redirect('posts')->with('error', 'Unauthorized Page');
        }
        if($post->conver_image != 'noimage.jpg'){
            //delete
            Storage::delete('public/cover_images/'.$post->conver_image);
        }

        $post->delete();
        return redirect('/home')->with('success','Post Removed');
    }
    public function destroys(string $id){

    }
}
