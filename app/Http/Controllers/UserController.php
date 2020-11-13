<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('client.pages.list_user',compact('user'));
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::findOrFail($id);
        
        return view('client.pages.profile',compact('user'));
     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $user = User::findOrFail($id);
        if (isset($user)) {
            if($request->image)
               {
               
                $file = $request->image;
                $file->move('images', $file->getClientOriginalName());
                   $user->username = $request->username;
                   $user->name = $request->name;
                   $user->email = $request->email;
                   $user->password = $request->password;
                   $user->role = 0;
                   $user->status = 0;
                   $user->image = $request->image->getClientOriginalName();
                   $user->address = $request->address;
                   $user->created_at = Carbon::now()->toDateTimeString();
                   $user->updated_at = Carbon::now()->toDateTimeString();
                 
                   $user->update();
                 
               }else{
                $user->username = $request->username;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = $request->password;
                $user->email = $request->email;
                $user->role = 0;
                $user->status = 0;
                $user->address = $request->address;
                $user->created_at = Carbon::now()->toDateTimeString();
                $user->updated_at = Carbon::now()->toDateTimeString();

                $user->update();
            }
            return back();
                 
           }
           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function registerClient(Request $request){
    
        if($request->image){
            $file = $request->image;
            $file->move('images', $file->getClientOriginalName());
        }
        $users = new User([
            'username'=>$request->username,
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => $request->password,
            'phone' => $request->phone,
            'image' => $request->image->getClientOriginalName(),
            'role' => 0,
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);
        
        $users->save();
        return back();
        
    }

}
