<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function show(User $user)
    {

        $ideas = $user->ideas()->paginate(5);
        return view('users.show', compact('user','ideas'));;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $editingprofile = true;
        $ideas = $user->ideas()->paginate(5);
        return view('users.edit',compact('user','editingprofile','ideas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'bio' => 'nullable|min:1|max:255',
            'image' => 'image',
        ]);

        if(request()->has('image')){
            $imagePath = request()->file('image')->store('profile','public');
            $validated['image'] = $imagePath;


            Storage::disk('public')->delete($user->image ?? '');
        }

        $user->update($validated);
        return redirect()->route('profile');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }


    // public function getImageURL()
    // {
    //     if($this->image){
    //         return url('public/'. $this->image);
    //     }

    //     return "https://api.dicebear.com/6.x/fun-emoji/svg?seed={$this->name}";

    // }
}
