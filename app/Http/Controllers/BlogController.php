<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function getblogs()
    {
        try{       
            $blogs = Blog::all();       
            $data = array("data"=>$blogs, "statuscode"=>"200", "msg"=>"all blogs");
            return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function addnewblog()
    {
        $validated = $request->validate([
            'title'=>'required',
            // 'long_description'=>'required',
            // 'short_description'=>'required',
            ]);
            // DB::table('nodes')->insertGetId(
            //   [
            //     'name' => $name,
            //     'walletaddress' => $wallet,
            //     'datecreated' => '11'
            //   ]
            // );
        try{
            $b = new Blog();
            $b->title = 'title1';
            $b->save();
            $data = array("data"=>$blogs, "statuscode"=>200, "msg"=>"all blogs");
            return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    static function blogs_count()
    {
        try{ //text editor, remove choose image
            $count = Blog::count();   
            return $count;    
            
            //$data = array("data"=> $count, "statuscode"=>"200", "msg"=>"blogs count");
            //return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    
    static function pending_blogs_count()
    {
        try{ 
            $count = Blog::where('',)->count();   
            return $count;
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }

}
