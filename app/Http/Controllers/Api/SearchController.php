<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller {

    // we will Installing and configuring Laravel Scout
    public function search(Request $req){
        // First we define the error message we are going to show if no keywords
        $error = ['error'=>'No results found'];
        // if the user entered the keyword
        if ($req->has('q')){
            // Using the Laravel Scout syntax to search the products table.
            $users = User::search($req->get('q'))->get();
            // If there are results return them, if none, return the error message.
            return $users->count() ? $users : $error;
        } else {
            // we will show all posts data from database
            $users = User::all();
            return view('search')->withUsers($users);
        }
    }
}
