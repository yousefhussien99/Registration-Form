<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterUsers;
use Illuminate\Support\Facades\Crypt;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RegisterUsers = RegisterUsers::all();
        return view('index', ['RegisterUsers' => $RegisterUsers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filename =time().'.'.$request->file('image')->getClientOriginalExtension();
        $requestData['image'] = 'storage/Uploded/'.$filename;
        $requestData ['name'] = $request->name;
        $requestData ['email'] = $request->email;
        $requestData ['phone'] = $request->phone;
        $requestData ['password'] = Crypt::encrypt($request->password);
        $requestData ['address'] = $request->address;
        $requestData ['birthday'] = $request->birthday;
        $requestData ['username'] = $request->username;
        if (RegisterUsers::where('username', $request->username)->exists()) {
            $data = ['message' => 'Username already exists'];
            return response()->json($data);
        }  
        else {
            $allowedExtensions = ['jpg', 'png', 'jpeg'];
            if (!in_array($request->file('image')->getClientOriginalExtension(), $allowedExtensions)) {
                $data = ['message' => 'Invalid file format'];
                return response()->json($data);
            }
            else {
                if (RegisterUsers::create ($requestData)) {
                    $request->file('image')->storeAs('public/Uploded', $filename);
                    $data = ['message' => 'User created successfully'];
                    Mail::to('yousefhussien5656@gmail.com')->send(new TestMail($request->username));
                    return response()->json($data);
                }
                else {
                    $data = ['message' => 'User creation failed'];
                    return response()->json($data);
                }
            }
            
        }
    }
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
