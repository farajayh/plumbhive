@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="mt-3 h3-responsive text-center font-weight-bold" style="color:purple">{{ __('Reset Password') }}</h3><hr class="purple">
                    </div>
                <div class="col-md-8 mx-auto">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form class="text-center p-2" method="POST" action="{{ route('password.email') }}">
                @csrf
                  <input type="email" id="defaultLoginFormEmail" class="form-control @error('email') is-invalid @enderror mb-4" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus placeholder="E-mail">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  

                  <div class="">
                      <button class="btn white-text sendbtn"  type="submit" id="" style="background: rgb(90, 90, 145);">
                          <span class="h5 font-weight-bold">{{ __('Send Password Reset Link') }}</span>
                      </button>
                  </div><br>
                  
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
                              <li><a href="">All Topics</a></li>
                              <li><a href="">Plumbing Marketing</a></li>
                              <li><a href="">Plumbing Tools</a></li>
                              <li><a href="">Plumbing Engineers</a></li>
                              <li><a href="">Fixing and Corrections</a></li>
                              <li><a href="">Latest Materials</a></li>
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
