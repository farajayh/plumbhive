@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                      <div class="col-md-12 mb-3">
                          <h1 class="mt-3 h1-responsive font-weight-bold text-center" style="color:purple">CONTACT US</h1><hr class="purple">
                          @if(session('message'))
                            <h5 class="text-center text-success">{{session('message')}}</h5>
                          @endif
                          @if(count($errors) > 0)
                            <ul class="text-center">
                                @foreach($errors->all() as $error)
                                <li class="text-danger">{{ $error }}</li>
                                @endforeach
                            </ul>
                          @endif
                      </div>
                      <div class="col-md-12">
                          <form action="{{route('contact_submit')}}" method="POST" class="text-center p-3">
                              {{csrf_field()}}
                              <input name="name" type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">
                              <input name="email" type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">
                              <label>Subject</label>
                              <select name="subject" class="browser-default custom-select mb-4">
                                  <option value="" disabled>Choose option</option>
                                  <option value="Feedback" selected>Feedback</option>
                                  <option value="Report a bug">Report a bug</option>
                                  <option value="Feature request">Feature request</option>
                                  <option value="Others">Others</option>
                              </select>
                              <div class="form-group">
                                  <textarea name="message" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
                              </div>
                              <div class="">
                                  <button class="btn white-text sendbtn" id="" style="background: rgb(90, 90, 145);">
                                      <span class="h5 font-weight-bold">Send</span>
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