<?php
declare(strict_types=1);

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        $posts = Post::with('category')->orderBy('id','desc')->paginate(5);
        return view('posts.index',compact('posts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug',$slug)->firstOrFail();
        $post->views += 1;
        $post->update();
        return view('posts.show', compact('post'));
    }
}
