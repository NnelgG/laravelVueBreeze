<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			return User::paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
      	'name' => 'required|string|max:191',
      	'email' => 'required|string|email|max:191|unique:users',
      	'password' => 'required|string|min:6',        	
      ]);

      return User::create([
      	'name' => $request['name'],
      	'email' => $request['email'],
      	'password' => Hash::make($request['password']),
      ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::findOrFail($id);

      $this->validate($request, [
          'name' => 'required|string|max:191',
          'email' => 'required|string|email|max:191|unique:users,email,' . $user->id, // skip this user when checking unique email
          'password' => 'sometimes|min:6',
        ]
      );

      $user->update($request->all());

      return $user;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      return $user;
    }
}
