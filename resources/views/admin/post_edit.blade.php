    @extends('admin.layout.main')
    @section('title')   
    Edit Post   
    @endsection
    @section('content')
   
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-home text-success icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div><strong>Homepage</strong>
                        <div class="page-title-subheading">Edit Homepage
                        </div>
                    </div>
                </div>
                
              </div>
        </div>   
               
            <div class="tab-pane tabs-animation" >
              {{-- <h5 class="card-title">Add a New Post</h5> --}}
               @error('image_title')
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Sorry!</strong> {{ "Only Images Are Allowed!" }}
                      </div>
                @enderror 
                <div class="main-card mb-3 card">
                     
                    <div class="card-body">
                    <form action="{{ url('admin/homepage/'.$post->id) }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-4">
                <input type="text" name="title" id="title" value="{{ $post->title }}" class="form-control">
                            </div>
                            </div>                        
                           
                            
                            <div class="position-relative row form-group"><label for="content" class="col-sm-2 col-form-label">Content:</label>
                                <div class="col-sm-10">
                  <textarea name="content" id="content" class="form-control">{{ $post->content }}</textarea>
                                </div>
                            </div>
                            <div class="position-relative row form-group"><label for="image_title" class="col-sm-2 col-form-label">Image: <small class="form-text text-muted">Please Insert Image Only.</small></label>
                                <div class="col-sm-10">
                                    <input name="image_title" type="file" id="image_title" class="form-control-file" accept="image/*">
                                    <br><img height="70px" width="80px" src="{{ asset('uploads/homepage/'.$post->image_title) }}" alt="No Previous Image.">
                                   @if ($post->image_title != "Noimage")
                                   <br><a href="{{ url('admin/homepage/deleteimage/'.$post->id) }}">Delete Image</a>
                                   @endif 
                                </div>                              
                            </div>
                           
                            <div class="position-relative row form-group">
                                <label for="checkbox2" class="col-sm-2 col-form-label">Hide Feature Image:</label>
                                <div class="col-sm-10">
                                    <div class="position-relative form-check">
                                        <label class="form-check-label">
                                 <input id="checkbox2" type="checkbox" class="form-check-input" name="image_hide" value="yes" @if($post->image_hide =="yes") checked @endif >Check to hide feature image</label>
                                </div>
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
  
    @endsection

    @section('ckeditor')
    <script src="https://cdn.ckeditor.com/4.16.1/full-all/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'content', {
	filebrowserUploadUrl: '{{ route('post.uploads',['_token' => csrf_token() ]) }}',
	filebrowserUploadMethod: 'form'
        } );
    </script>
    @endsection



 