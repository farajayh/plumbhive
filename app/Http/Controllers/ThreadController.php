<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Thread;
use App\Tag;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    function __construct()
    {
        return $this->middleware('auth')->except('index', 'show', 'showsingle', 'posts_by_category');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('tags')){
            $tag = Tag::find($request->tags);
            $threads = $tag->threads()->orderBy('id', 'DESC')->paginate(10);
            $tag_name = strtoupper($tag->name);
        }elseif($request->has('search')){
            $kw = $request->search;
            $tag_name = 'ALL TOPICS';
            $threads = Thread::where('subject', 'like', '%'.$kw.'%')
                            ->orderBy('id', 'DESC')
                            ->paginate(10);
        }else{
            $threads=Thread::orderBy('id', 'DESC')->paginate(10);
            $tag_name = 'ALL TOPICS';
        }
        
        return view('thread.index', compact('threads'), ['tag_name'=>$tag_name]);   
    }

    /*public function showreplies($id){
        $comment = Comment::find($id);
        print_r($comment->body);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'subject' => 'required|min:5',
            'tags'    => 'required',
            'thread'  => 'required|min:10',
            //'g-recaptcha-response' => 'required|captcha'
        ]);
        
        $subject = $request->subject;
        $slug = str_replace(' ', '-', strtolower(preg_replace('/[^a-zA-Z0-9_ -]/s', '', $subject)));
        $slug_exist = Thread::where('thread_slug', $slug)
                        ->orderBy('id', 'DESC')
                        ->take(1)
                        ->get();
        if($slug_exist->count() < 1){
            //echo "Thread does not exist";
            //insert post with the slug
            //$slug = str_replace(' ', '-', $request->subject);
            $request->request->add(['thread_slug' => $slug]);
            //store
            $thread = auth()->user()->threads()->create($request->all());

            $thread->tags()->attach($request->tags);

            //redirect
            return back()->withMessage('Thread Created!');
        }else{
            $slug_exist = Thread::where('subject', $subject)
                        ->orderBy('id', 'DESC')
                        ->take(1)
                        ->get();
            foreach($slug_exist as $se){
                $old_subject = $se->subject;
                $old_slug = $se->thread_slug;
                if(str_replace(' ', '-', strtolower($old_subject)) == $old_slug){
                    $slug = $slug.'-1';
                }else{
                    $inc = intval($old_slug[-1]) + 1;
                    $slug = $slug.'-'.strval($inc);
                }
            }
            $request->request->add(['thread_slug' => $slug]);
            //store
            $thread = auth()->user()->threads()->create($request->all());

            $thread->tags()->attach($request->tags);

            //redirect
            return back()->withMessage('Thread Created!');
            
        }

        //$request->request->add(['thread_slug' => $slug]);

        //store
        //$thread = auth()->user()->threads()->create($request->all());

        //$thread->tags()->attach($request->tags);

        //redirect
        //return back()->withMessage('Thread Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        //
        return view('thread.single', compact('thread'));
    }
    
    public function showsingle($slug)
    {
        /*$thread = Thread::where('thread_slug', $slug)
                        ->orderBy('id', 'DESC')
                        ->take(1)
                        ->get();*/
        $thread = Thread::where('thread_slug', $slug)->first();
        if(!$thread){
            abort('404');
        }else{
            return view('thread.single', compact('thread'));
        }
        //$thread = Thread::where('thread_slug', $slug)->count();
        //print_r(compact('thread')['thread']);
        /*
        if($thread->count() < 1){
            echo "Thread does not exist";
            //insert post with the slug
        }else{
            return view('thread.single', compact('thread'));     
        }*/
    }

    public function posts_by_keyword(Request $request){
        $kw = $request->search;
        $threads = Thread::where('subject', 'like', '%'.$kw.'%')
                            ->orderBy('id', 'DESC')
                            ->paginate(10);
       // $thread = Thread::where('thread_slug', $kw)->first();
        if(!$threads){
            abort('404');
        }else{
            $tag_name = 'ALL TOPICS';
            return view('thread.index', compact('threads'), ['tag_name'=>$tag_name]);
        }
        
    }

    public function posts_by_category($category)
    {
        $category = str_replace('-', ' ', ucwords($category));
        $cat = Tag::where('name', $category)->first();
        if(!$cat){
            abort('404');
        }else{
            $cat_id = $cat->id;
            $tag = Tag::find($cat_id);
            $threads = $tag->threads()->orderBy('id', 'DESC')->paginate(10);
            $tag_name = strtoupper($tag->name);
            return view('thread.index', compact('threads'), ['tag_name'=>$tag_name]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
