@extends('layouts.main')

@section('content')
<div style="height:90px;"></div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 white mb-4 mx-md-0 mx-2" style=" border-radius: 10px;">

                    <div class="row">
                      <div class="col-md-12 mt-4 mb-1">
                          <h1 class="mt-0 font-weight-bold forum-topic">{{ $thread->subject }}</h1>
                          <p class="p-0 m-0" style="font-size:10px;">posted by <a href="" style="font-weight:bold; color: #004483;">{{$thread->user->username}} |</a> on {{$thread->created_at}} | {{ $thread->comments->count() }} comment(s) | Forum: 
                          @foreach($thread->tags as $tg)
                            <a href="{{ url('category/'.strtolower(str_replace(' ', '-', $tg->name))) }}" style="font-weight:bold; color: #004483;">{{ $tg->name }}</a>
                          @endforeach
                          </p>
                          <hr>
                      </div>
                      <div class="col-md-12">
                          <p>
                            {{ $thread->thread }}
                          </p>
                          <hr>
                        </hr>
                        <br>
                          <form action="{{route('threadcomment.store',$thread->id)}}" method="post" class="mb-5">
                          {{csrf_field()}}
                              <div class="form-group m-1">
                                  <textarea class="form-control rounded-0" name="body" id="exampleFormControlTextarea2" rows="3" placeholder="Join this Conversation"></textarea>
                              </div>
                              <div class="m-0">
                                  <button type="submit" class="btn white-text" id="" style="background: rgb(90, 90, 145);">
                                      <span class="h5 font-weight-bold">Comment</span>
                                  </button>
                              </div>
                          </form>
                          <hr>

                          <div class="mb-3">
                            @foreach($thread->comments as $comment)
                                <div class="row mb-3">
                                  <div class="col-1">
                                      <img class="img-fluid" src="{{ $comment->user->avatar ? '/uploads/avatars/'.$comment->user->avatar : '../images/placeholder_avatar.gif'}}" alt="Generic placeholder image">
                                  </div>
                                  <div class="col-11">
                                      <h5 class="mt-0 font-weight-bold"><a href="" style="color:#004483">{{ $comment->user->username }}</a> - <small>{{ $comment->created_at}}</small></h5>
                                      <p class="m-0 p-0">{{ $comment->body }}</p>
                                     <!--<a onclick="toggle_show_replies('{{$comment->id}}')"><p class="p-0 m-0 font-weight-bold" style="font-size:12px; color: #004483">{{ $comment->comments->count() }} Replie(s)</p></a>
                                      <div style="display: none;margin-left: 50px" class="replies-{{$comment->id}}">
                                        @foreach($comment->comments as $cc)
                                            <a href="../../../test/{{$cc->id}}">{{$cc->body}}</a>
                                        @endforeach
                                      </div>-->
                                  </div>
                                </div><!--<hr>{{--reply to comment--}}
                                <button class="btn btn-xs btn-default" onclick="toggleReply('{{$comment->id}}')">reply</button>
                                <br>
                                {{--//reply form--}}
                                <div style="display: none;margin-left: 50px" class="reply-form-{{$comment->id}}">

                                    <form action="{{route('replycomment.store',$comment->id)}}" method="post" role="form">
                                        {{csrf_field()}}
                                        <legend>Create Reply</legend>

                                        <div class="form-group">
                                            <input type="text" class="form-control" name="body" id="" placeholder="Reply...">
                                        </div>


                                        <button type="submit" class="btn btn-primary">Reply</button>
                                    </form>

                                </div>-->
                                <br>

                               <!-- @foreach($comment->comments as $reply)
                                    @include('thread.partials.reply-list')

                                @endforeach -->


                            @endforeach

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
    @section('js')

    <script>
        function toggleReply(commentId){
            if($('.reply-form-'+commentId).css('display') == 'none'){
                $('.reply-form-'+commentId).css('display', 'block');
            }else{
                $('.reply-form-'+commentId).css('display', 'none');
            }
        }

        function toggle_show_replies(commentId){
            if($('.replies-'+commentId).css('display') == 'none'){
                $('.replies-'+commentId).css('display', 'block');
            }else{
                $('.replies-'+commentId).css('display', 'none');
            }   
        }
    </script>

@endsection
@endsection