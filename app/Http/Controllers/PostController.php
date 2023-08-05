<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Post;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

>>>>>>> dev_basis05


class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
 {
    // $test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql(); //確認用に追加
    //dd($test); //確認用に追加
    
<<<<<<< HEAD
    return view('posts.index') -> with(['posts' => $post -> getPaginateByLimit(1)]);
=======
    return view('posts.index') -> with(['posts' => $post -> getPaginateByLimit(5)]);
  }
   public function create()
  {
      return view('posts/create');
>>>>>>> dev_basis05
  }
/**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
    public function show(Post $post)
  {
<<<<<<< HEAD
    //return view('posts.show')->with(['post' => $post]);
    dd($post);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
  }
=======
    return view('posts.show')->with(['post' => $post]);
    
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
  }
  
   public function store(PostRequest $request,Post $post)
  {
      $input = $request['post'];
      $post->fill($input)->save();
      return redirect('/posts/' . $post->id);
  }
   
   public function edit(Post $post)
  {
      return view('posts.edit')->with(['post' => $post]);
  }
   public function update(PostRequest $request,Post $post)
  {
      $input_post=$request['post'];
      $post->fill($input_post)->save();
      return redirect('/posts/' . $post->id);
  }
>>>>>>> dev_basis05
}