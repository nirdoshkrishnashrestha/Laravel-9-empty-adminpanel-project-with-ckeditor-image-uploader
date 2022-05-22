<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Carbon\Carbon;
use Facade\FlareClient\Http\Response;

class GalleryController extends Controller
{
    function show_gallery()
    { 
        $gallery = Gallery::orderBy('order', 'asc')->paginate(200);
        return view('admin.gallery',compact('gallery'));
    }
 
    function add_gallery(Request $req)
    {
       
        $validated = $req->validate([
            'image_title' => 'required'                    
        ]);


        if ($req->hasfile('image_title')) {
            $images = $req->file('image_title');

            foreach($images as $image) 
            {    $gallery = new Gallery;
                $upload_image_name = time().'_'.$image->getClientOriginalName();
                $image->move('uploads/gallery', $upload_image_name);    
                $gallery->image_title = $upload_image_name;
                $gallery->save();
            }
         }

        return redirect()->back()->with('status','Gallery Image Added Successfully.');
    }
    function edit_gallery($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery_edit',compact('gallery'));
    }

    function save_gallery(Request $req, $id)
    {        
        $gallery = Gallery::find($id);
        
        $validated = $req->validate([
            'image_title' => 'mimes:jpg,jpeg,png,gif,webp,JPG,JPEG,PNG,GIF,WEBP'          
        ]);

        $gallery->title = $req->input('title');        
        $gallery->order = $req->input('order');        

        if($req->hasFile('image_title'))
            {
        $upload_image_name = time().'_'.$req->image_title->getClientOriginalName();
        $req->image_title->move('uploads', $upload_image_name);
        $gallery->image_title = $upload_image_name;
             }
        else
        $gallery->image_title = $gallery->image_title;
             
        $gallery->update();
        return redirect('admin/gallery')->with('status','Post Edited Successfully.');
            
    }

    function delete_gallery($id)
    { 
        $gallery = Gallery::find($id);
        $gallery->delete();
        return redirect()->back()->with("status","Deleted Successfully!");
    }
}
