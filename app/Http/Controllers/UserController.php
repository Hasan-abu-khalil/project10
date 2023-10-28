<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); // Retrieve all users
        return view('admin_dasebord\admin_user', compact('users'));
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
        // Validate the input data
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|email|max:50',
            'phone' => 'required|string|max:11',
            'address' => 'required|string|max:50',
            'city' => 'required|string|max:50',
        ]);

        // Retrieve the currently authenticated user
        $user = Auth::user();

        if (!$user) {
            // Handle the case where the user is not authenticated or not found
            return redirect()->route('login');
        }

        // Update the user's information
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->city = $validatedData['city'];

        // Save the updated user to the database

        $user->save();

        // You can redirect to a success page or any other appropriate action
        return redirect()->route('success');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::all();
        return view('admin_dasebord\admin_user', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $admin_user)
    {
        return view('admin_dasebord.admin_user_edit', compact('admin_user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $admin_user)
    {
        $request->validate([
            'role' => 'required|in:admin,user',
        ]);

        // Update the user's role
        $admin_user->role = $request->input('role');
        $admin_user->save();

        // Redirect back to the user list or any other appropriate page
        return redirect()->route('admin_user.index')->with('success', 'User role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin_user.index', ['admin_user' => $id])->with('success', 'user deleted successfully');
    }
}
