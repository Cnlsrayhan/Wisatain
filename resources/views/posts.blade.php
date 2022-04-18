
@extends('layouts.main')

@section('container')



<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/posts">
            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3" style="margin-left: 100px; margin-top:100px">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-purple" type="submit" ><img src="image/search1.png" class="img-fluid" width="30px" height="30px"></button>
              </div>
        </form>
    </div>
</div>


@if($posts->count())

<section class="feature">
        <div class="content-vid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mt-5 py-5 text-center">
                        <P style="font-size:38px;font-family: 'Poppins', sans-serif; font-weight:700; margin-left:-1300px">Most Popular Destination</P>
                            
                    </div>
                </div>
            </div>
            <div class="container">

        
           
    
  </div>
        </div>
        

</div>
<div class="content-card">
<div class="w3-row-padding" style="margin-left:100px">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i4.png"  alt="{{ $posts[0]->category->name }}" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Pantai Parai  Tenggiri</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praeterea, ex culpa non invenies unum aut<br>non accusatis unum. 
Et nihil inuitam. </p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>                           
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i5.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Nusa Dua (Bali)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    <div class="w3-third w3-container">
      <img src="/image/i7.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
    
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Gili Trawangan (NTB)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    
</div>
</div>
<div class="content-card">
<div class="w3-row-padding" style="margin-left:100px">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i8.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Pantai Parai  Tenggiri</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praeterea, ex culpa non invenies unum aut<br>non accusatis unum. 
Et nihil inuitam. </p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>                           
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i9.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Nusa Dua (Bali)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    <div class="w3-third w3-container">
      <img src="/image/i11.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
    
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Gili Trawangan (NTB)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    
</div>
</div>
<div class="content-card">
<div class="w3-row-padding" style="margin-left:100px">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i12.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Pantai Parai  Tenggiri</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praeterea, ex culpa non invenies unum aut<br>non accusatis unum. 
Et nihil inuitam. </p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>                           
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="/image/i13.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
                                     
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Nusa Dua (Bali)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    <div class="w3-third w3-container">
      <img src="/image/i14.png" alt="Norway" style="width:90%" class="w3-hover-opacity">
    
        <p style="font-size: 32px; font-weight:600; font-family: 'Poppins', sans-serif; margin-top:20px">Gili Trawangan (NTB)</p>
        <p style="font-size: 24px; font-weight:400; font-family: 'Poppins', sans-serif;">Praesent tincidunt sed tellus ut rutrum. Sed <br>vitae justo condimentum, porta lectus<br> vitae, ultricies congue gravida diam<br> non fringilla.</p>
        <br>
        <a class="btn dtl1 card-dest"><p style="margin-top: -5px;"> Explore  </p></a>   
    </div>
    
</div>
</div>
<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute">
                    <a href="/posts?category={{ $post->category->slug }}" class="text-light text-decoration-none">
                    {{ $post->category->name }}
                    </a>
                </div>
                <img src="http://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title text-dark">{{ $post->title }}</h5>
                  <p>
                    <small class="text-dark">
                    By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                    </small>
                </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-info ">Detail</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found</p>

@endif

<div class="d-flex justify-content-center ">
{{ $posts->links() }}
</div>

@endsection
