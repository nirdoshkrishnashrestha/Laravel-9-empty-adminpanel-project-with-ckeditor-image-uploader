@extends('admin.layout.main')
@section('title')   
Dashboard   
@endsection
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-study icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>{{ env('app_name') }}
                    <div class="page-title-subheading">Hello, {{ session('username') }}
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <style>
        .admin-logo {
text-align: center;
padding: 20px;
background: #FFF;
border-radius: 5px;
border: 1px solid #CCC;
margin: 20px auto;
display: inline-block;
}
.admin-logo img{max-width: 270px;}
    </style>
           <div class="row">
        <div class="col-12">
                            <center>
                    <h1 style="font-size: 25px;">Welcome to Dashboard</h1>
                        
                        <div class="admin-logo">
        <img src="{{ url('public/front/images/sadasyasewa-square-logo.png') }}" alt="Image Not Shoing">
                        </div></center>
                        </div>
    </div>                     
</div>
@endsection
