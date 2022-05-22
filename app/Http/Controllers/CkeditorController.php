<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CkeditorController extends Controller
{
    function uploads(Request $request)
    {
        $original_name = $request->upload->getClientOriginalName();
        $filename_org = pathinfo($original_name, PATHINFO_FILENAME);
        $ext = $request->upload->getClientOriginalExtension();
        $filename = $filename_org.'_'.time().'.'.$ext;

        $request->upload->move('storage/ckfinder_images/', $filename);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');

        $url = asset('storage/ckfinder_images/'.$filename);
        $message = "Your Photo Uploaded";

        $res = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, `$url`, `$message`)</script>";
        @header("Content-Type: text/html; charset=utf-8");

        echo $res;

        // if($req->hasFile('upload')){
        //  $orginalName = $req->file('upload')->getClientOriginalName();
        //  $fileName = pathinfo($orginalName, PATHINFO_FILENAME);
        //  $req->file('uploads')->getClientOriginalExtention();
        
         
       // $req->file('upload')->getClientOriginalExtention();
                                      
       // $file_name = $fileName.'_'.time().$extn;

       // $req->file('upload')->move(public_path('admin/ckeditor_uploads'),$file_name);
        //  }
    }
}
