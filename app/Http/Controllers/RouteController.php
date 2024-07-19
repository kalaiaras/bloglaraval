<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Categories;
use App\Models\Subcategories;
use App\Models\Posts;
use App\Models\Pages;
use App\Models\Sponsors;
use App\Models\Comments;

class RouteController extends Controller
{
    public function dashboard()
    {        
        $comments = Comments::all();   
        return view('backend.dashboard',compact('comments'));
    }
    public function category()
    {       
        //$category = Categories::all();   
        return view('backend.categories');
        //return view('backend.categories',compact('category'));
    }
    public function subcategory()
    {   
        $category = Categories::select('id','name')->get();        
        return view('backend.subcategories',compact('category'));
    }
    public function addpages()
    {
        return view('backend.addpages');
    }
    public function addpost()
    {
        $category = Categories::select('id','name')->get(); 
        $subcategory = Subcategories::select('id','name')->get();          
        return view('backend.addpost',compact('category','subcategory'));
    }
    public function addsponsor()
    {
        return view('backend.addsponsor');
    }
    public function adduser()
    {
        return view('backend.adduser');
    }
    public function addvideo()
    {
        return view('backend.addvideo');
    }
    public function allposts()
    {
        $posts = Posts::leftJoin('categories', 'posts.category', '=', 'categories.id')
        ->select('posts.*', 'categories.name as category_name')
       // ->where('comments.status','1')
        ->get();
        // $comments = Comments::leftJoin('posts', 'comments.post', '=', 'posts.id')
        // ->select('comments.*', 'posts.title as post')
        // ->where('comments.status','0')
        // ->get();
       // $posts = Posts::all(); 
        return view('backend.allposts',compact('posts'));
    }
    public function editcategory()
    {
        return view('backend.editcategory');
    }
    public function newsletter()
    {
        return view('backend.newsletter');
    }
    public function pages()
    {
        $pages = Pages::all(); 
        return view('backend.pages',compact('pages'));
    }
    public function approvedcomments()
    {
        $comments = Comments::leftJoin('posts', 'comments.post', '=', 'posts.id')
        ->select('comments.*', 'posts.title as post')
        ->where('comments.status','1')
        ->get();        
        return view('backend.approvedcomments', compact('comments'));
    }
    public function pendingcomments()
    {   
        $comments = Comments::leftJoin('posts', 'comments.post', '=', 'posts.id')
        ->select('comments.*', 'posts.title as post')
        ->where('comments.status','0')
        ->get();
        return view('backend.pendingcomments', compact('comments'));
    }
    public function sponsor()
    {
        $sponsors = Sponsors::all(); 
        return view('backend.sponsor', compact('sponsors'));
    }
    public function users()
    {
        $users = User::all();
        return view('backend.users',compact('users'));
    }   
    public function edit_category(Request $req,$id)
    {
        $category = Categories::where('id',$id)->first(); 
        return view('backend.edit_category',compact('category'));
    }
    public function edit_subcategory(Request $req,$id)
    {
        $subcategory = Subcategories::where('id',$id)->first(); 
        $category = Categories::select('id','name')->get(); 
        return view('backend.edit_subcategory',compact('category','subcategory'));
    }
    public function edit_post(Request $req,$id)
    {
        $posts = Posts::where('id',$id)->first(); 
        $category = Categories::select('id','name')->get(); 
        $subcategory = Subcategories::select('id','name')->get(); 
        return view('backend.edit_post',compact('posts','category','subcategory'));
    }
}
