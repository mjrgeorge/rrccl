<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tag;
use App\Models\BlogDetails;
use Illuminate\Http\Request;
use Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::latest()->get();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'date'=>$request->date,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/blog/');
        
            $name = 'blog'.time() . '.' . $image->extension();
           Image::make($image)->resize(805, 480)->save($path . $name);
           $data['image'] = $name;
        }
        $result = Blog::create($data);

        if($result){

            return back()->with('success','Blog Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $details = BlogDetails::where('blog_id',$blog->id)->first();
        $tag = Tag::get();
        return view('admin.blog.addDetails',compact('blog','details','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'date'=>$request->date,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/blog/');
        
            $name = 'blog'.time() . '.' . $image->extension();
           Image::make($image)->resize(805, 480)->save($path . $name);
           $data['image'] = $name;
        }
        $r = Blog::find($blog->id);
        $result = $r->update($data); 

        if($result){

            return redirect()->route('blogs.index')->with('success','Blog updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $r = Blog::find($blog->id);
        $result = $r->delete(); 

        if($result){

            return redirect()->route('blogs.index')->with('success','Blog deleted Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function blogDetailsAdd(Request $request)
    {
        $data = [
            'blog_id'=>$request->blog_id,
            'first_details'=>$request->first_details,
            'quotation'=>$request->quotation,
            'second_details'=>$request->second_details,
            'title'=>$request->title,
            'final_details'=>$request->final_details,
            'author'=>$request->author,
            'author_details'=>$request->author_details,
            'tag'=>json_encode($request->tag),
          ];
          if($request->file('image')){
                $image = $request->file('image');
                $path = public_path('image/blog/details/');
            
                $name = 'blog-details-image'.time() . '.' . $image->extension();
               Image::make($image)->resize(805, 481)->save($path . $name);
              $data['image'] = $name;
            }
            $details = BlogDetails::where('blog_id',$request->blog_id)->first();
            $flag = false;
            if($details){
                $d = BlogDetails::find($details->id);
                $result = $d->update($data);
                $flag = true;
            }else{
                $result = BlogDetails::create($data);
                $flag = true;
            }
            if($flag == true){
                return back()->with('success','Blog Details Updated Successfullty');
            }
    }

}
