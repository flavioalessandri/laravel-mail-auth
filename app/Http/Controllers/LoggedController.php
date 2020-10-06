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
}
