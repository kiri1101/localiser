<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $data['posts'] = Post::orderBy('id', 'desc')->get();
        return view('backend.pages.journals.show-journals',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['categories'] = Category::orderBy('id', 'desc')->get();
        $data['tags'] = Tag::orderBy('id', 'desc')->get();
        return view('backend.pages.journals.create-journal',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $post_id = $request->post_id;
        $code_name =  str_replace("'","", str_replace(" ","_", $request->title_fr));

        $post   =   Post::updateOrCreate(['id' => $post_id],
            ['title_fr' => $request->title_fr,
                'code_name' => $code_name,
                'author' => $request->author,
                'description_fr' => $request->description_fr,
                'short_description_fr' => $request->short_description_fr,
                'category_id' => $request->category_id,
                'address' => $request->address,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'enterprise_name' => $request->enterprise_name,
                'added_by' => Auth::user() ? Auth::user()->name : '',
                'status' => false,
            ]);

        if ($request->banner) {
            $fileName = time() . '_img1.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/posts/' . $post->code_name . '/post-image/'), $fileName);
            $post->banner = 'uploads/posts/' . $post->code_name . '/post-image/' . $fileName;
            $post->save();
        } else {
            $post->banner = "frontend/images/blog/03.jpg";
            $post->save();
        }

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        session()->flash('success', 'Le Journal a été enregistré avec success.');
        return redirect()->back();
    }

    public function store_web(StorePostRequest $request)
    {
        $post_id = $request->post_id;
        $code_name = str_replace("'", "", str_replace(" ", "_", $request->title_fr));

        $post = Post::updateOrCreate(['id' => $post_id],
            ['title_fr' => $request->title_fr,
                'code_name' => $code_name,
                'author' => $request->author,
                'description_fr' => $request->description_fr,
                'short_description_fr' => $request->short_description_fr,
                'category_id' => $request->category_id,
                'address' => $request->address,
                'email' => $request->email,
                'phonenumber' => $request->phonenumber,
                'enterprise_name' => $request->enterprise_name,
                'status' => false,
            ]);

        if ($request->banner) {
            $fileName = time() . '_img1.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/posts/' . $post->code_name . '/post-image/'), $fileName);
            $post->banner = 'uploads/posts/' . $post->code_name . '/post-image/' . $fileName;
            $post->save();
        } else {
            $post->banner = "frontend/images/blog/03.jpg";
            $post->save();
        }

        if ($request->tags) {
            $post->tags()->attach($request->tags);
        }
        session()->flash('success', 'Le Journal a été enregistré avec success.');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show($lang, Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::orderBy('id', 'desc')->get();
        $data['tags'] = Tag::orderBy('id', 'desc')->get();
        return view('backend.pages.journals.show-journal',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($lang, Post $post)
    {
        $data['post'] = $post;
        $data['categories'] = Category::orderBy('id', 'desc')->get();
        $data['tags'] = Tag::orderBy('id', 'desc')->get();
        return view('backend.pages.journals.edit-journal',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $lang, Post $post)
    {
        $post->title_fr = $request->title_fr;
        $post->author = $request->author;
        $post->description_fr = $request->description_fr;
        $post->short_description_fr= $request->short_description_fr;
        $post->category_id = $request->category_id;
        $post->status = $request->status;
        $post->address = $request->address;
        $post->email = $request->email;
        $post->phonenumber = $request->phonenumber;
        $post->enterprise_name = $request->enterprise_name;

        $post->save();

        if ($request->banner) {
            $fileName = time() . '_img1.' . $request->banner->extension();
            $request->banner->move(public_path('uploads/posts/' . $post->code_name . '/post-image/'), $fileName);
            $post->banner = 'uploads/posts/' . $post->code_name . '/post-image/' . $fileName;
            $post->save();
        }


        if ($request->tags) {
            session()->put('success', 'Le Tag est présent');
            foreach ($request->tags as $tag) {
                $postTag = PostTag::create([
                    'post_id' => $post->id,
                    'tag_id' => $tag,
                ]);
            }

            return redirect(\App::getLocale() . '/admin_show_tags');

        } else {
            session()->put('success', 'Aucun Tag présent');

            return redirect(\App::getLocale() . '/admin_show_journals');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdatePostRequest $request)
    {
        session()->put('success', 'Le Journal a été supprimé.');
        Post::destroy($request->id);
        return redirect(\App::getLocale().'/admin_show_journals');
    }
}
