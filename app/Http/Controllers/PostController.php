<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
       
    public function index()
    {
        $post = Post::orderBy('id', 'asc')->paginate(15);
        return view('admin.post',compact('post'));
    }
    
    public function store(Request $req)
    {
        $post = new Post;

        $validated = $req->validate([
            'image_title' => 'mimes:png,jpg,jpeg,gif,PNG,JPG,JPEG,GIF'          
        ]);

        if($req->hasFile('image_title')){
        $upload_image_title = time().'_'.$req->image_title->getClientOriginalName();
        $req->image_title->move('uploads/homepage', $upload_image_title); }
        else
        $upload_image_title = "Noimage";
       
        $post->title = $req->input('title');       
        $post->content = $req->input('content');
        $post->image_hide = $req->input('image_hide');
        $post->image_title = $upload_image_title;
        $post->save();
        return redirect()->back()->with('status','Post Added Successfully.');
    }

     
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post_edit',compact('post'));
    }

    
    public function update(Request $req, $id)
    {
        $post = Post::find($id);

        $validated = $req->validate([
            'image_title' => 'mimes:png,jpg,jpeg,gif,PNG,JPG,JPEG,GIF'          
        ]);

        if($req->hasFile('image_title')){
            $upload_image_title = time().'_'.$req->image_title->getClientOriginalName();
            $req->image_title->move('uploads/homepage', $upload_image_title);        
        }
            else
            $upload_image_title = $post->image_title;
       
        $post->title = $req->input('title');        
        $post->content = $req->input('content');
        $post->image_hide = $req->input('image_hide');
        $post->image_title = $upload_image_title;
        $post->update();
        return redirect('admin/homepage')->with('status','Post Updated Successfully.');
    }

    public function deleteimage($id)
    {
        $image = Post::find($id);
        unlink("uploads/homepage/".$image->image_title);      
        $image->image_title = "Noimage";             
        $image->update();
        return redirect()->back();      
     }
   
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/homepage')->with("status","Deleted Successfully!");
    }

    function delete_post($id)
    { 
        $del_post = Post::find($id);
        $del_post->delete();
        return redirect()->back()->with("status","Post Deleted Successfully!");
    }
}
