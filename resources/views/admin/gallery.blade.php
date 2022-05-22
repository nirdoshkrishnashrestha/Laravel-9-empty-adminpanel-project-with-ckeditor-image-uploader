    @extends('admin.layout.main')

    @section('title')   
    Gallery   
    @endsection

    @section('content')
   <script>
     document.getElementById("file").onchange = function()
      {
    document.getElementById("form").submit();
}
   </script>
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-photo-gallery text-success">
                        </i>
                    </div>
                    <div>
                        <strong>Gallery</strong>
                        <div class="page-title-subheading">Add or Edit Images</div>
                    </div>
                </div>
                <div class="page-title-actions">
                    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                        <li class="nav-item">
                            <a role="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
                                <span>Image List</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                <span>Add New Image</span>
                            </a>
                        </li>
                    </ul>
                </div>  
              </div>
        </div>       
            
        <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">  
                @if(session('status'))    
                <div class="alert alert-success hide-alert" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> {{ session('status') }}
                  </div>
                @endif
                @error('image_title')
                <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Sorry!</strong> {{ "Only Images Are Allowed!" }}
                  </div>
            @enderror          
            <h5 class="card-title">Add a New Image</h5>
            <div class="main-card mb-3 card">
             
                <div class="card-body">
                    <form action="{{ url('admin/gallery') }}" method="POST" id="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="position-relative row form-group">
                            <label for="file" class="col-sm-2 col-form-label">Please Insert Image Only:
                                <small class="form-text text-muted">JPEG, JPG, PNG (max file size: 1000kb)</small>
                            </label>
                        </div>
                                                                         
                        <div class="position-relative row form-group gallery-img">  
                            <label class="add-more-img">                                   
                                        <span><i class="metismenu-icon pe-7s-plus"></i></span>
                                        <input name="image_title[]" style="display: none" type="file" id="file" class="form-control-file " onchange="javascript:this.form.submit();" multiple required accept="image/*" >
                                    </label>
                        
                            @foreach ($gallery as $gimage)
                            <div class="gallery-thum-img" data-toggle="tooltip" data-placement="bottom" title="Remove">
                            <div class="gallery-thum-img-box">
                                <img src="{{ asset('uploads/gallery/'.$gimage->image_title) }}" alt="No Previous Image.">
                            </div>

                        @if ($gimage->image_title != "Noimage")
                        <a href="{{ url('admin/gallery/deleteimage/'.$gimage->id) }}" class="btn-sm button delete-confirm"><i class="metismenu-icon pe-7s-trash"></i></a>
                    @endif
                    </div>
                    @endforeach
    
                </div>                       
                    </form>
                </div>
            </div>
               
            </div>
               
            <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
              <h5 class="card-title">Add a New Image</h5>
                <div class="main-card mb-3 card">
                 
                    <div class="card-body">
                        <form action="{{ url('admin/gallery') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="exampleEmail" placeholder="Enter Title Here" class="form-control" required value="{{ old('title') }}">
                            </div>
                            </div>  
                            
                            <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Order:</label>
                                <div class="col-sm-4">
                                    <input type="number" name="order" id="exampleEmail" placeholder="Enter Order Here" class="form-control" required value="{{ old('order') }}">
                                </div>
                                </div>
                            
                            <div class="position-relative row form-group">
                                <label for="file" class="col-sm-2 col-form-label">Image:
                                    <small class="form-text text-muted">Please Insert Image Only.</small>
                                </label>
                                <div class="col-sm-10">
                                    <input name="image_title[]" type="file" id="file" class="form-control-file" multiple required accept="image/*">                            
                                </div>
                            </div>
                            
                             <div class="position-relative row form-check">
                                <div class="col-sm-10 offset-sm-2">
                                    <button class="btn btn-secondary" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    @endsection

    @section('ckeditor')
    

    <script src="https://cdn.ckeditor.com/4.16.1/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
	filebrowserUploadUrl: '{{ route('post.uploads',['_token' => csrf_token() ]) }}', 
    // '/ckfinder/ckfinder.html',
	filebrowserUploadMethod: 'form'
} );
    </script>
    
        @endsection
