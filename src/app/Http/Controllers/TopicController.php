<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Topic;

class TopicController extends Controller
{
    public function createTopic(Request $request)
    {
        $topic = new Topic();
        $topic->topic = $request->input('topic');
            
        $topic->save();

        return redirect()->back();
        
    }
    
    public function addTopic()
    {
        $topics = (DB::table('topics')->get('topic'));
        return view ('topic/topic', ['topics'=>$topics]);
    }

    //public function viewTopic()
   // {
    //    $topics=new Topic;
    //    return view ('topic/view', ['topics'=>$topics]);
    //}

   // public function deleteTopic($id)
   // {
        //DB::table('topics')->where('topics')->delete();
   //     Topic::find($id)->delete();
   //     return redirect()->back();
   // }
}



?>