
<nav class="navbar sticky-top navbar-expand-lg navbar-light shadow-sm">
  <div class="container">
    <a class="navbar-brand main-logo" href="{{ url('/') }}"><img src="{{ url('public/front/images/sadasyasewa-logo.jpg') }}" alt="Sadasya Sewa Saving & Credit Co-operative Ltd."/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
		<li class="nav-item">
      <a class="nav-link @if(Request::segment(1) == "") active @endif" aria-current="page" href=" {{ url('/') }} ">
        <i class="fas fa-home me-1"></i> Home</a></li>
		<li class="nav-item dropdown">
       <a class="nav-link @if(Request::segment(1) == "about") active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-friends me-1"></i> About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($about_menu as $about)
            <li><a class="dropdown-item" href="{{ url('about/'.$about->slug) }}">{{ $about->title }}</a></li>   
            @endforeach          
            <li><a class="dropdown-item" href="{{ url('about/board-of-directors') }}">Board of Directors</a></li>
            <li><a class="dropdown-item" href="{{ url('about/management-team') }}">Management Team</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
       <a class="nav-link @if(Request::segment(1) == "service") active @endif dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-list me-1"></i> Services </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($service_menu as $service)
            <li><a class="dropdown-item" href="{{ url('service/'.$service->slug) }}"> {{$service->title}} </a></li>
            @endforeach
          </ul>
    </li>
		  
		 <li class="nav-item dropdown">
       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-file-download"></i> Forms
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($forms as $form)
            <li><a class="dropdown-item" href=" {{ url('uploads/legal/'.$form->image_name) }} " target="_blank">{{ $form->title }}</a></li>
            @endforeach            
          </ul>
        </li>

		<li class="nav-item"><a class="nav-link @if(Request::segment(1) == "news" or Request::segment(1) == "news-notice") active @endif" href=" {{url('/news-notice')}} "><i class="far fa-calendar-alt me-1"></i> News / Notices</a></li>
    
		<li class="nav-item"><a class="nav-link @if(Request::segment(1) == "gallery") active @endif " href="{{url('gallery')}}"><i class="fas fa-camera me-1"></i> Gallery</a></li>
		<li class="nav-item"><a class="nav-link @if(Request::segment(1) == "contact") active @endif" href="{{url('contact')}}"><i class="fas fa-envelope me-1"></i> Contact</a></li>
      
    </ul>
    </div>
  </div>
</nav>