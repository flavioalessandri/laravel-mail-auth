<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Mail\UserAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function destroy($id){

    $post = Post::findOrFail($id);
    $post -> delete();

    $user = Auth::user();
    $action = "DELETE";

    Mail::to('admin@boolean.it')
          ->send(new UserAction($user, $post, $action));

    return redirect()->route('posts.index');
  }

  public function create(){

    return view('post.create');

  }

  public function store(Request $request){

    $data = $request->all();
    $post = Post::create($data);

    $user = Auth::user();
    $action = "CREATE";

    Mail::To('admin@boolean.com')
          ->send(new UserAction($user, $post, $action));

    return redirect() -> route('posts.index');
  }

  public function edit($id){

    $post = Post::findOrFail($id);

    return view('post.edit', compact('post'));

  }

  public function update(Request $request, $id){

    $data = $request->all();
    $post = Post::findOrFail($id);

    $post -> update($data);

    $user = Auth::user();
    $action = "UPDATE";

    Mail::To('admin@boolean.com')
          ->send(new UserAction($user, $post, $action));


    return redirect() -> route('post.show',$id);
  }


}
