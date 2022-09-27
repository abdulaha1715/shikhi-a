<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id', Auth::user()->id)->orderBy('id','ASC')->paginate(20);
        return view('backend.user.index')->with('users', $users);
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('backend.user.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('backend.user.edit')->with([
            'user'      => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // dd($request->all());
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:4', 'unique:users,username,'. $user->id],
            'phone'    => ['required', 'string', 'max:255', 'unique:users,phone,'. $user->id],
        ]);

        try {
            $thumbnail = $user->thumbnail;

            if ( !empty($request->file('thumbnail')) ) {
                Storage::delete('public/uploads/'.$thumbnail);

                $thumbnail = time() . '-' . $request->file('thumbnail')->getClientOriginalName();
                $request->file('thumbnail')->storeAs('public/uploads', $thumbnail);
            }

            $user->update([
                'name'      => $request->name,
                'username'  => $request->username,
                'phone'     => $request->phone,
                'email'     => $request->email,
                'thumbnail' => $thumbnail,
            ]);

            return redirect()->route('user.index')->with('success', "User Updated Successfully!");
        } catch (\Throwable $th) {
            return redirect()->route('user.index')->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
