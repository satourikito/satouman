<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;



class PostController extends Controller
{
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
 {
    // $test = $post->orderBy('updated_at', 'DESC')->limit(2)->toSql(); //確認用に追加
    //dd($test); //確認用に追加
    
    return view('posts.index') -> with(['posts' => $post -> getPaginateByLimit(1)]);
  }
   public function create()
  {
      return view('posts/create');
  }
/**
 * 特定IDのpostを表示する
 *
 * @params Object Post // 引数の$postはid=1のPostインスタンス
 * @return Reposnse post view
 */
    public function show(Post $post)
  {
    return view('posts.show')->with(['post' => $post]);
    
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
  }
  
   public function store(PostRequest $request,Post $post)
  {
      $input = $request['post'];
      $post->fill($input)->save();
      return redirect('/posts/' . $post->id);
  }
}