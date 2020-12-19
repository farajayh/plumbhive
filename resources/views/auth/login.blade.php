@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="mt-3 h3-responsive text-center font-weight-bold" style="color:purple">Login</h3><hr class="purple">
                        </div>
                        <div class="col-md-8 mx-auto">
                <form class="text-center p-2" method="POST" action="{{ route('login') }}">
                @csrf
                  <input type="email" id="defaultLoginFormEmail" class="form-control @error('email') is-invalid @enderror mb-4" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="E-mail">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  <input type="password" id="defaultLoginFormPassword" class="form-control @error('password') is-invalid @enderror mb-4" name="password" required autocomplete="current-password" placeholder="Password">
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <div class="form-group row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                  </div>

                  <div class="">
                      <button class="btn white-text sendbtn"  id="" style="background: rgb(90, 90, 145);">
                          <span class="h5 font-weight-bold">Login</span>
                      </button>
                  </div><br>
                  @if (Route::has('password.request'))
                    <small><a href="{{ route('password.request') }}" class="red-text">Forgot Password?</a></small><br>
                  @endif
                    <small>Don't have an account? <a href="{{ route('register') }}">Sign Up Now</a></small>
                  
              </form>
              </div>
                      </div>

                </div>
                <div class="col-md-4 col-lg-4" style="">
                    <div class="row mx-1">
                      <div class="col-md-12 mb-5 white" style="border-radius: 10px;">
                      <h5 class="font-weight-bold mt-3">FORUM</h5> <hr class="blue">
                        <div class="mx-3 categories">
                            <ul style="list-style-type: circle;">
                              <li><a class="nav-link active p-1 m-0" href="{{ route('thread.index') }}">All Topics</a></li>
                              @foreach(\App\Tag::all() as $tag)
                                <!--<li><a class="nav-link active p-1 m-0" href="{{ route('thread.index', ['tags'=>$tag->id]) }}">{{ $tag->name }}</a></li>-->
                                <li><a class="nav-link active p-1 m-0" href="{{ url('category/'.strtolower(str_replace(' ', '-', $tag->name))) }}">{{ $tag->name }}</a></li>
                              @endforeach
                            </ul>
                        </div>
                      </div>

                      <div class="col-md-12 mb-5" style="border-radius: 10px;">
                        <img src="{{ asset('images/contact-bg.jpg') }}" alt="Advert" class="img-fluid">
                        <p>Advert</p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px;"></div>
    </section>

@endsection
