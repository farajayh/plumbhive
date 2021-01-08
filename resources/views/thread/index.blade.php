@extends('layouts.main')

@section('content')
</header>

<main style="background:rgb(221, 218, 218)">
    <div style="height:80px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">
                    <!-- Search Button -->
                    <div class="row my-4">
                        <div class="col-12 col-md-12">
                            <form class="card card-sm p-0 m-0">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fa fa-search h4 text-body mr-2"></i>
                                    </div>
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search topics or keywords">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Search End Here -->

                    <div class="container">
                      <div class="row">
                        <div class="col-md-7 col-5 mb-3">
                            <h5 class="mt-0 font-weight-bold desp" style="color:purple">{{ $tag_name }}</h5>
                        </div>
                        <div class="col-md-1 col-2 mb-3">
                          <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple; border-bottom:3px solid #b00; padding-bottom: 5px;">FEEDS</a></h5>
                      </div>
                      <div class="col-md-3 col-5 mb-3">
                          <h5 class="mt-0 font-weight-bold desp"><a href="#!" style="color:purple">MOST RECENTS</a></h5>
                      </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        @foreach($threads as $thread)
                          <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="{{ url('post/'.$thread->thread_slug) }}" class="head-topic">{{ $thread->subject }}</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Posted by {{ $thread->user->username }} </a> {{ $thread->created_at->diffForHumans() }} in
                                  @foreach($thread->tags as $tag)
                                    <a href="" style="font-weight:bold; color: #004483;">{{$tag->name}}</a>
                                  @endforeach
                                  </p>
                                  <p class="p-0 mb-1 contentLength">{{ $thread->preview }}</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                        @endforeach
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Facebook acquires GIPHY</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Latest Materials</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">NEW Google Reveals the Fastest Growing Product Categories in Search Results.</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Fixing and Corrections</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Facebook shares tips for an effective content calendar</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Plumbing Tools</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
                            <div class="media mb-2">
                                <div class="media-body border border-light rounded p-2">
                                    <h5 class="mt-0 font-weight-bold"><a href="plumbhive/forum.html" class="head-topic">Instagram testing new Stories feed navigation</a></h5>
                                  <p class="p-0 m-0" style="font-size:10px;"><a href="" style="font-weight:bold; color: #004483;">Adekunle</a> 5 hours ago in <a href="" style="font-weight:bold; color: #004483;">Plumbing Marketing</a></p>
                                  <p class="p-0 mb-1 contentLength">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at, Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                    odio, vestibulum in vulputate at,</p>
                                    <a href=""><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">5 Replies</p></a>
                                </div>
                            </div>
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