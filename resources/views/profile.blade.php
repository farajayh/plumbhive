@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h3 class="mt-3 h3-responsive text-center font-weight-bold" style="color:purple">Profile</h3><hr class="purple">
                        </div>
                        <div class="col-md-8 mx-auto">
                <form class="text-center p-2" method="POST" action="{{ url('profile') }}" enctype="multipart/form-data">
                @csrf
                
                @if(session('message'))
                            <h5 class="text-center text-success">{{session('message')}}</h5>
                @endif
                @if($errors)
                    @foreach($errors as $err)
                        {{ $err }}
                    @endforeach
                @endif
                <label for="first_name">First name</label>
                <input type="text" id="first_name" class="form-control mb-4" name="first_name" value="{{ Auth::user()->first_name}}">

                <label for="last_name">Last name</label>
                <input type="text" id="last_name" class="form-control mb-4" name="last_name" value="{{ Auth::user()->last_name}}">
                
                <label for="avatar">Profile image</label>
                <input type="file" id="avatar" class="form-control mb-4" name="avatar" accept="image/*">

                  <div class="">
                      <button class="btn white-text sendbtn"  id="" style="background: rgb(90, 90, 145);">
                          <span class="h5 font-weight-bold">Update profile</span>
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
