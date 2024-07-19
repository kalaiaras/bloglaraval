<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    static function pages_count()
    {
        try{ 
            $count = Pages::count();   
            return $count;
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    // static function getcomments()
    // {
    //     try{       
    //         $pages = Pages::all();       
    //         $data = array("data"=>$pages, "statuscode"=>"200", "msg"=>"all blogs");
    //         return response()->json($data);
    //     }
    //     catch (\Exception $e) {
    //         return back()->with('error',$e->getMessage())->withInput();
    //     }
    // }
    public function add_page(Request $req)
    {   
        try{            
            Pages::create(['title' => $req->title,
                'slug' => $req->slug,
                'description' => $req->description,
                'keywords' => $req->keywords,
                'language' => $req->language,
                'parent_link' => $req->parent_link,
                'order' => $req->order,
                'location' => $req->menu_location,
                'visibility' => $req->visibility,
                'show_title' => $req->showtitle,
                'show_breadcrumb' => $req->showbreadcrumb,
                'show_rightcolumn' => $req->showrightcolumn,
                'content' => $req->content                             
            ]); 
            
            $data = array("statuscode"=>"200", "msg"=>"Added!");
            return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }    
}
