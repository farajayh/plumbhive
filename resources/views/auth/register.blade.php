@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="mt-3 h3-responsive text-center font-weight-bold" style="color:purple">SIGN UP HERE</h3><hr class="purple">
                        </div>
                        <div class="col-md-8 mx-auto">
                          <form class="text-center p-2" method="POST" action="{{ route('register') }}">
                              @csrf
                              <div class="form-row mb-4">
                                  <div class="col">
                                      <input type="text" id="defaultRegisterFormFirstName" class="form-control @error('first_name') is-invalid @enderror" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autocomplete="name">
                                  </div>
                                  @error('first_name')
                                    <span class="invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                              </div>

                              <div class="form-row mb-4">
                                  <div class="col">
                                      <input type="text" id="defaultRegisterFormLastName" class="form-control @error('last_name') is-invalid @enderror" placeholder="Last Name" name="last_name" value="{{ old('last_name') }}" required autocomplete="name">
                                  </div>
                                  @error('last_name')
                                    <span class="invalid-feedback" style="display: block" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                  @enderror
                              </div>
                              <div class="form-row mb-4">
                                  <div class="col">
                                      <input type="text" id="defaultRegisterFormUsername" class="form-control @error('username') is-invalid @enderror" placeholder="Usename" name="username" value="{{ old('username') }}" required autocomplete="name">
                                  </div>
                                  @error('username')
                                      <span class="invalid-feedback" style="display: block" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>

                              <input type="email" id="defaultRegisterFormEmail" class="form-control @error('email') is-invalid @enderror mb-4" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <input type="password" id="defaultRegisterFormPassword" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password" required autocomplete="new-password">
                              
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                              </small>
                              
                              <input type="password" id="defaultRegisterConfirmPassword" class="form-control" placeholder="Confirm Password" name="password_confirmation" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                              <div class="">
                                  <button type="submit" class="btn white-text sendbtn mt-4" style="background: rgb(90, 90, 145);">
                                    {{ __('Sign Up') }}
                                </button>
                              </div>
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

                      <!--<div class="col-md-12 mb-5" style="border-radius: 10px;">
                        <img src="{{ asset('images/contact-bg.jpg') }}" alt="Advert" class="img-fluid">
                        <p>Advert</p>
                      </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px;"></div>
    </section>
@endsection
