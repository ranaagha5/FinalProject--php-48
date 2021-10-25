<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class UserController extends Controller
{


    public function showUsers()
    {
       $users =User::all();
     return view('management.view-users',compact('users'));

    }
    public function deleteUser($id)
    {
        $user=User::where('id',$id)->first();
        User::where('id',$id)->delete();

        return redirect('panel/users')->with('status', "{$user->name} deleted!");

    }
    public function addUser(Request $request)
    {
            $user_duplicate=User::where('email',$request->email)->first();
            if($user_duplicate!=null)
           {
                return redirect('panel/users')->with('status', "email duplicated");
            }

           $user =new User([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'role'=>$request->role
            ]);
            $user->save();
            return redirect('panel/users')->with('status', "{$user->name} added");

    }
    public function editForm($id)
    {
        $user=User::find($id);
        return view('management.edit-user',compact('user'));

    }
    public function updateUser(Request $request,$id)
{
    $user_to_update =User::find($id);
    $users=DB::table('users')->where('email',"!=" ,$user_to_update->email)->get();
    foreach($users as $user)
    {
        if($user->email==$request->email)
            return redirect('/panel/edit/user/'.$id)->with('status', "{$request->email} exist!");

    }
    $user_to_update->name=$request->name;
    $user_to_update->role=$request->role;
    $user_to_update->email=$request->email;
    $user_to_update->password=Hash::make($request->password);

    $user_to_update->save();


    return redirect('panel/users')->with('status', "User Updated");


}

}
