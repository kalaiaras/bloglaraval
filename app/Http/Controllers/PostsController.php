<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    static function getposts()
    {
        try{       
            $posts = Posts::all();       
            //$data = array("data"=>$blogs, "statuscode"=>"200", "msg"=>"all blogs");
            return $posts;
            //return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function add_post(Request $req)
    {       //print_r($req->all());exit;
        $imagename = '';
        if($req->hasfile('image'))
            {
                $file = $req->file('image');                
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $imagename = $f_name.time().'.'.$extenstion;
                $file->move('posts/', $imagename);            
            }
            
            $additional_images = '';
            if($req->hasfile('additional_image'))
            {
                $file = $req->file('additional_image');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $additional_images = $f_name.'1'.time().'.'.$extenstion;
                $file->move('posts/', $additional_images);            
            }

            $files = '';
            if($req->hasfile('files'))
            {
                $file = $req->file('files');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $files = $f_name.'2'.time().'.'.$extenstion;
                $file->move('posts/', $files);            
            }

            Posts::create(["title" =>  $req->title,
                "slug" => $req->slug,            
                "description" => $req->description,
                "keywords" => $req->keywords,
                "add_slider" =>  $req->add_slider,
                "add_ourpics" => $req->add_ourpics,       
                "showusers" => $req->showusers,   
                "tags" => $req->tags,
                "url" => $req->url,
                "content" => $req->content,            
                "status" => "0",
                "image" => $imagename,
                "image_url" => $req->image_url,
                "additional_images" => $additional_images,
                "files" => $files,
                "category" => $req->category,
                "subcategory" => $req->subcategory,             
            ]);   
        try{
            $imagename = '';
            if($req->hasfile('image'))
            {
                $file = $req->file('image');                
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $imagename = $f_name.time().'.'.$extenstion;
                $file->move('posts/', $imagename);            
            }
            
            $additional_images = '';
            if($req->hasfile('additional_image'))
            {
                $file = $req->file('additional_image');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $additional_images = $f_name.'1'.time().'.'.$extenstion;
                $file->move('posts/', $additional_images);            
            }

            $files = '';
            if($req->hasfile('files'))
            {
                $file = $req->file('files');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $files = $f_name.'2'.time().'.'.$extenstion;
                $file->move('posts/', $files);            
            }

            Posts::create(["title" =>  $req->title,
                "slug" => $req->slug,            
                "description" => $req->description,
                "keywords" => $req->keywords,
                "add_slider" =>  $req->add_slider,
                "add_ourpics" => $req->add_ourpics,       
                "showusers" => $req->showusers,   
                "tags" => $req->tags,
                "url" => $req->url,
                "content" => $req->content,            
                "status" => "0",
                "image" => $imagename,
                "image_url" => $req->image_url,
                "additional_images" => $additional_images,
                "files" => $files,
                "category" => $req->category,
                "subcategory" => $req->subcategory,             
            ]);   
            $posts = Posts::all(); 
            return view('backend.allposts',compact('posts'));
           // return redirect()->back()->with('success', 'added!');
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    static function blogposts_count()
    {
        try{ 
            $count = Posts::count();   
            return $count; 
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    
    static function pending_posts_count()
    {
        try{ 
            $count = Posts::where('status',0)->count();   
            return $count;
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }

    public function getallposts(Request $req)
    {
        try{     
            $req->start = 0;
            $req->length = 10;
            $pageNumber = ( $req->start / $req->length )+1;
            $pageLength = $req->length;
            $skip       = ($pageNumber-1) * $pageLength;

            $query = Posts::select('*');

            $recordsFiltered = $recordsTotal = $query->count();
            $query = $query->skip($skip)->take($pageLength)->get();
            $req->draw = 1;
            return response()->json(["draw"=> $req->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $query], 200);           
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }

    public function update_post(Request $req)
    {         
        $imagename = '';
            if($req->hasfile('image'))
            {
                $file = $req->file('image');                
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $imagename = $f_name.time().'.'.$extenstion;
                $file->move('posts/', $imagename);            
            }
            
            $additional_images = '';
            if($req->hasfile('additional_image'))
            {
                $file = $req->file('additional_image');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $additional_images = $f_name.'1'.time().'.'.$extenstion;
                $file->move('posts/', $additional_images);            
            }

            $files = '';
            if($req->hasfile('files'))
            {
                $file = $req->file('files');
                $extenstion = $file->getClientOriginalExtension();
                $f_name = substr($req->title, 0, '5');
                $files = $f_name.'2'.time().'.'.$extenstion;
                $file->move('posts/', $files);            
            }

        Posts::where('id',$req->id)->update([
            "title" =>  $req->title,
            "slug" => $req->slug,            
                "description" => $req->description,
                "keywords" => $req->keywords,
                "add_slider" =>  $req->add_slider,
                "add_ourpics" => $req->add_ourpics,       
                "showusers" => $req->showusers,   
                "tags" => $req->tags,
                "url" => $req->url,
                "content" => $req->content,            
                "status" => "0",
                "image" => $imagename,
                "image_url" => $req->image_url,
                "additional_images" => $additional_images,
                "files" => $files,
                "category" => $req->category,
                "subcategory" => $req->subcategory,
                ]);
                $posts = Posts::all(); 
        return view('backend.allposts',compact('posts'));
    }
    public function delete_post(Request $req,$id){
        $res = Posts::where('id',$id)->delete();
        return redirect()->back()->with('success', 'deleted!');
    }
    
}
