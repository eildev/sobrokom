<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogComment;
class BlogCommentController extends Controller
{
   public function BlogCommentInsert(Request $request){
    $subcriber_id =  $request->subcriber_id;
    $blogs_id = $request->blog_id;

    BlogComment::create([
        'subscriber_id' => $subcriber_id ,
        'blog_id' => $blogs_id,
        'comment' => $request->message,
    ]);
   return redirect()->back()->with('success', 'Comments Successfully Submited');
   }
}
