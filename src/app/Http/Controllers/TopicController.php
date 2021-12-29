<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function create(Request $request){
        $validated = $request->validate([
            'topic' => 'required|unique:topic',
            'name' => 'required|unique:topic'
        ]);
    }
}

?>