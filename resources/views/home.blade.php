@extends('layouts.main')

@section('content')
<div style="height:80px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">
                    <div class="row mb-5 border m-3 p-3">
                    <div class="col-12 col-md-12">
                      <div>
                        <button class="btn white-text btn-block font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseExample"
                          aria-expanded="false" aria-controls="collapseExample" style="background: rgb(90, 90, 145);">
                          Write a new post
                        </button>
                      </div>
                        <div class="collapse" id="collapseExample">
                          <div class="mt-3">
                            <form action="{{route('thread.store')}}" method="POST" class="mb-5 text-center">
                              {{csrf_field()}}
                              <div class="form-group">
                                  <input type="text" required id="defaultRegisterFormFirstName" class="form-control" name="subject" value="{{old('subject')}}" placeholder="What do you want to discuss about?">
                              </div>
                              <div class="form-group">
                                <select name="tags[]" multiple id="tag" placeholder="Type a Category">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                                    @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                  <textarea required class="form-control rounded-0" id="exampleFormControlTextarea2" name="thread" rows="5" placeholder="Enter Details Here ..."> {{old('thread')}} </textarea>
                              </div>
                            
                              <div class="m-0">
                                <button type="submit" class="btn white-text" style="background: rgb(90, 90, 145);">
                                  <span class="h5 font-weight-bold">New Post</span>
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="container">
                        <div class="row">
                          <div class="col-md-7 col-5 mb-3">
                              <h5 class="mt-0 font-weight-bold desp" style="color:purple">ALL TOPICS</h5>
                          </div>
                          <!--<div class="col-md-1 col-2 mb-3">
                            <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple; border-bottom:3px solid #b00; padding-bottom: 5px;">FEEDS</a></h5>
                        </div>
                        <div class="col-md-3 col-5 mb-3">
                            <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple">MOST RECENTS</a></h5>
                        </div>-->
                        </div>
                      </div>
                      @if(session('message'))
                            <h5 class="text-center text-success">{{session('message')}}</h5>
                      @endif

                    <div class="row">
                        <div class="col-md-12">
                        @foreach($threads as $thread)
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="{{ url('post/'.$thread->thread_slug) }}" class="head-topic">{{ $thread->subject }}</a></h5>
                                    <p class="p-0 m-0" style="font-size:13px;"><span style="font-weight:bold; color: #004483;">Posted by {{ $thread->user->username }}  {{ $thread->created_at->diffForHumans() }} in</span>
                                  @foreach($thread->tags as $tag)
                                    <a href="" style="font-weight:bold; color: #004483;">{{$tag->name}}</a>
                                  @endforeach
                                  </p>
                                  <p class="p-0 mb-1 contentLength">{{ $thread->preview }}</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">{{ $thread->comments->count() }} Comment(s)</p></a>
                                </div>
                            </div>
                        @endforeach
                            
                            <div>
                            <nav>
                                <ul class="pagination pg-blue justify-content-center mt-4">
                                <li>{{ $threads->links() }}</li>
                                </ul>
                            </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4" style="">
                    <div class="row mx-1">
                        <div class="col-md-12 mb-5 white" style="border-radius: 10px;">
                            <div class="row mb-3 mt-3">
                                <div class="col-4">
                                    <img class="img-fluid" src="{{ Auth::user()->avatar ? '/uploads/avatars/'.Auth::user()->avatar : '../images/placeholder_avatar.gif'}}" alt="Generic placeholder image">
                                </div>
                                <div class="col-8">
                                    <h5 class="mt-0 font-weight-bold"><a href="" style="color:#004483">Hi {{ Auth::user()->username }},</a></h5>
                                    <p>Welcome to Plumbhive, where you can connect with Plumbers in the World</p>
                                </div>
                              </div><hr style="border: 3px solid #004483;">
                        </div>

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
                        <img src=" {{ asset('images/contact-bg.jpg') }}" alt="Advert" class="img-fluid">
                        <p>Advert</p>
                      </div>-->
                    </div>
                </div>
            </div>
        </div>
        <div style="height:30px;"></div>
    </section>
@endsection
