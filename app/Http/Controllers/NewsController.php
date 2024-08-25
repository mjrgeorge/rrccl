<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Tag;
use App\Models\NewsDetails;
use Illuminate\Http\Request;
use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
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
            $path = public_path('image/news/');
        
            $name = 'news'.time() . '.' . $image->extension();
           Image::make($image)->resize(805, 480)->save($path . $name);
           $data['image'] = $name;
        }
        $result = News::create($data);

        if($result){

            return back()->with('success','News Added Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        $details = NewsDetails::where('news_id',$news->id)->first();
        $tag = Tag::get();
        return view('admin.news.addDetails',compact('news','details','tag'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
       
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $data = [
            'title'=>$request->title,
            'details'=>$request->details,
            'date'=>$request->date,
        ];
        if($request->file('image')){
            $image = $request->file('image');
            $path = public_path('image/news/');
        
            $name = 'news'.time() . '.' . $image->extension();
           Image::make($image)->resize(805, 480)->save($path . $name);
           $data['image'] = $name;
        }
        $r = News::find($news->id);
        $result = $r->update($data); 

        if($result){

            return redirect()->route('news.index')->with('success','news updated Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $r = News::find($news->id);
        $result = $r->delete(); 

        if($result){

            return redirect()->route('news.index')->with('success','news deleted Successfully');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function newsDetailsAdd(Request $request)
    {
        $data = [
            'news_id'=>$request->news_id,
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
                $path = public_path('image/news/details/');
            
                $name = 'news-details-image'.time() . '.' . $image->extension();
               Image::make($image)->resize(805, 481)->save($path . $name);
              $data['image'] = $name;
            }
            $details = NewsDetails::where('news_id',$request->news_id)->first();
            $flag = false;
            if($details){
                $d = NewsDetails::find($details->id);
                $result = $d->update($data);
                $flag = true;
            }else{
                $result = NewsDetails::create($data);
                $flag = true;
            }
            if($flag == true){
                return back()->with('success','News Details Updated Successfullty');
            }
    }
}
