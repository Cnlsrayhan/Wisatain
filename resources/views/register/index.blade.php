@extends('layouts.main')

@section('container')

<section class="vh-100" style="background-color: #9A616D;">

  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="/image/r14.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

             
              <form action="/register" method="post">
                @csrf
                <span class="h1 fw-bold mb-0">Sign Up </span>
                <div class="form-outline mb-4">
                <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid
                @enderror"  placeholder="Name" value="{{ old('name') }}" style="background: transparent">
                <label for="name" class="form-label"></label>
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="text" name="username" class="form-control form-control-lg @error('username') is-invalid
                @enderror" id="username" placeholder="Username" value="{{ old('username') }}" style="background: transparent">
                <label for="username" class="form-label">username</label>
                @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid
                @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" style="background: transparent">
                <label for="email" class="form-label">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="form-floating shadow-lg">
                <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid
                @enderror" id="password" placeholder="Password" style="background: transparent">
                <label for="password" class="form-label">Password</label>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
              <div class="pt-1 mb-4" style="margin-top: 10px;">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                  </div>
            </form>
            <div class="log" style="margin-top: 10px">
        
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register"
                      style="color: #393f81;">Register here</a></p>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</div>


@endsection
