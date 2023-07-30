<?php

namespace App\Http\Controllers;

use App\Models\Enterprise;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    /**
     * Store a like
     * 
     * @param \App\Models\User $user
     * @param \App\Models\Enterprise $enterprise
     * @return RedirectResponse
     */
    public function store(User $user, Enterprise $enterprise): RedirectResponse
    {
        $user->likes()->attach($enterprise->id, [
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        # code for notification here

        return back();
    }

    /**
     * Delete like
     * 
     * @param \App\Models\Like $like
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Like $like): RedirectResponse
    {
        $like->delete();

        # code for notification here

        return back();
    }
}