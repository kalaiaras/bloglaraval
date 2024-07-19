<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sponsors;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    static function users_count()
    {
        try{ 
            $count = User::count();   
            return $count;
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
    public function add_user(Request $req)
    {       
        try{ 
            $user = new User;
            $user->name =  $req->username;
            $user->email = $req->email;            
            $user->password = Hash::make($req->password);
            $user->userrole = $req->userrole;
            $user->save();
            //return redirect()->back()->with('message', 'IT WORKS!');
            return redirect()->back()->with('success', 'added!');
            //return back()->with('errors', 'Sorry but this username has already been taken!'); 
            //$data = array("statuscode"=>"200", "msg"=>"Added!");
            //return response()->json($data);
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }

    public function add_sponsor(Request $req)
    {     
        try{ 
            $imagename = '';
            if($req->hasfile('image'))
            {
                $file = $req->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $imagename = $req->name.time().'.'.$extenstion;
                $file->move('sponsors/', $imagename);            
            }
            Sponsors::create(['name' => $req->name,                
                'description' => $req->description,                
                'category' => $req->category,
                'sub_category' => $req->subcategory,
                'logo' => $imagename                
            ]);
            return redirect()->back()->with('success', 'added!');
            
        }
        catch (\Exception $e) {
            return back()->with('error',$e->getMessage())->withInput();
        }
    }
}
