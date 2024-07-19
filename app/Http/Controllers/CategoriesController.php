<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Subcategories;

class CategoriesController extends Controller
{
    public function add_category(Request $req)
    {      
        try{
            $imagename = '';
            if($req->hasfile('image'))
            {
                $file = $req->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $imagename = $req->name.time().'.'.$extenstion;
                $file->move('categories/', $imagename);            
            }
    
            Categories::create(['name' => $req->name,
                'slug' => $req->slug,
                'description' => $req->description,
                'keywords' => $req->keywords,
                'order' => $req->order,
                'show_menu' => $req->showmenu,
                'image' => $imagename                
            ]); 
            
            return redirect()->back()->with('success', 'added!');
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function add_subcategory(Request $req)
    {    
        try{
            $imagename = '';
            if($req->hasfile('image'))
            {
                $file = $req->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $imagename = $req->name.time().'.'.$extenstion;
                $file->move('categories/', $imagename);            
            }
            Subcategories::create(['name' => $req->name,
                'slug' => $req->slug,
                'description' => $req->description,
                'keywords' => $req->keywords,
                'category' => $req->category,
                'show_menu' => $req->showonmenu,
                'image' => $imagename                
            ]);   
            
            return redirect()->back()->with('success', 'added!');
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function getcategories(Request $req)
    {
        try{     
            $req->start = 0;
            $req->length = 10;
            $pageNumber = ( $req->start / $req->length )+1;
            $pageLength = $req->length;
            $skip       = ($pageNumber-1) * $pageLength;

            $query = Categories::select('*');

            $recordsFiltered = $recordsTotal = $query->count();
            $query = $query->skip($skip)->take($pageLength)->get();
            $req->draw = 1;
            return response()->json(["draw"=> $req->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $query], 200);           
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function getsubcategories(Request $req)
    {
        try{     
            $req->start = 0;
            $req->length = 10;
            $pageNumber = ( $req->start / $req->length )+1;
            $pageLength = $req->length;
            $skip       = ($pageNumber-1) * $pageLength;

            $query = Subcategories::select('*');

            $recordsFiltered = $recordsTotal = $query->count();
            $query = $query->skip($skip)->take($pageLength)->get();
            $req->draw = 1;
            return response()->json(["draw"=> $req->draw, "recordsTotal"=> $recordsTotal, "recordsFiltered" => $recordsFiltered, 'data' => $query], 200);           
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function delete_category(Request $req,$id){
        $res = Categories::where('id',$id)->delete();
        return redirect()->back()->with('success', 'deleted!');
    }
    public function update_category(Request $req)
    {         
        Categories::where('id',$req->id)->update(['name' => $req->name,
                'slug' => $req->slug,
                'description' => $req->description,
                'keywords' => $req->keywords,
                'order' => $req->order,
                'show_menu' => $req->showmenu,
                //'image' => $imagename
                ]);
        return view('backend.categories');
    }
    public function update_subcategory(Request $req)
    {         
        Subcategories::where('id',$req->id)->update(['name' => $req->name,
                'slug' => $req->slug,
                'description' => $req->description,
                'keywords' => $req->keywords,
                'category' => $req->category,
                'show_menu' => $req->showonmenu         
                ]);
                $category = Categories::select('id','name')->get(); 
                $subcategory = Subcategories::select('id','name')->get(); 

        return view('backend.subcategories', compact('category','subcategory'));
    }
    public function delete_subcategory(Request $req,$id){
        $res = Subcategories::where('id',$id)->delete();
        return redirect()->back()->with('success', 'deleted!');
    }
}
