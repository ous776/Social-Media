<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageEvent;

class MessageController extends Controller

{


    public function __construct(){
        $this->middleware('auth');
    }


    public function chat(){
        $messages = Chat::where('chats.sender_id', Auth::id())
        ->orWhere('chats.receiver_id', Auth::id())
        ->join('users', 'users.id','=','chats.sender_id')
        ->join('users as r_user', 'r_user.id','=','chats.receiver_id', 'LEFT')
        ->select('chats.*', 'users.firstname as s_fname', 'users.lastname as s_lname', 'r_user.firstname as r_fname', 'r_user.lastname as r_lname')
        ->get();
        $result['chats'] = $messages;
        $result['users']  = User::all();
        
        $result['users'] = User::where('id', '!=', Auth::id())->get();
        return view('chat')->with($result);
    }

    public function sendMessage(Request $request){
        $msg = Chat::create([
            'sender_id' => Auth::id(),
            'receiver_id' => $request->receiver,
            'message' => $request->message
        ]);

        $message = Chat::where('chats.id', $msg->id)
        ->join('users', 'users.id','=','chats.sender_id')
        ->join('users as r_user', 'r_user.id','=','chats.receiver_id', 'LEFT')
        ->select('chats.*', 'users.firstname as s_fname', 'users.lastname as s_lname', 'r_user.firstname as r_fname', 'r_user.lastname as r_lname')
        ->first();
        
        broadcast(new MessageEvent($message, $request->receiver));

        if($message){
            return response()->json(['sts' => true, 'msg' => 'Message send succesfuly!', 'message' => $message]);
        }else{
            return response()->json(['sts' => false, 'msg' => 'Unable to send message!']);
        }
    }

    public function getUserMessage(Request $request){
        $my_id = Auth::id();
        $user_id = $request->id;
        //$users = User::where('id', '!=', Auth::id())->get();

        $messages = Chat::orderBy('created_at', 'asc')
        ->where(function ($query) use ($user_id, $my_id) {
            $query->where('sender_id', $my_id)->where('receiver_id', $user_id);
        })->orWhere(function ($query) use ($user_id, $my_id) {
            $query->where('sender_id', $user_id)->where('receiver_id', $my_id);
        })->join('users', 'users.id','=','chats.sender_id')
        ->join('users as r_user', 'r_user.id','=','chats.receiver_id', 'LEFT')
        ->select('chats.*', 'users.firstname as s_fname', 'users.lastname as s_lname', 'r_user.firstname as r_fname', 'r_user.lastname as r_lname')
        ->get();

        if($messages){
            return response()->json(['sts' => true,  'chats' => $messages]);
        }else{
            return response()->json(['sts' => false, 'msg' => '']);
        }
    }

    

}


// public function __construct(){
//     $this->middleware('auth');
// }


// public function chat(){
//     $result['users']  = User::all();
    
//     $result['users'] = User::where('id', '!=', Auth::id())->get();
//     return view('chat')->with($result);
// }

// public function sendMessage(Request $request){
//     $msg = Message::create([
//         'sender_id' => Auth::id(),
//         'receiver_id' => $request->receiver,
//         'message' => $request->message
//     ]);

//     $message = Message::where('messages.id', $msg->id)
//     ->join('users', 'users.id','=','messages.sender_id')
//     ->join('users as r_user', 'r_user.id','=','messages.receiver_id', 'LEFT')
//     ->select('messages.*', 'users.firstname as s_fname', 'users.lastname as s_lname', 'r_user.firstname as r_fname', 'r_user.lastname as r_lname')
//     ->first();
    
//     broadcast(new MessageEvent($message, $request->receiver));
    

//     if($message){
//         return response()->json(['sts' => true, 'msg' => 'Message send succesfuly!', 'message' => $message]);
//     }else{
//         return response()->json(['sts' => false, 'msg' => 'Unable to send message!']);
//     }
// }

// public function unreadMessage(Request $request){
//     return response()->json(['sts' => true]);
//     // broadcast(new ReadMessage($message, $request->receiver));
// }

// public function getUserMessage(Request $request){
//     $my_id = Auth::id();
//     $user_id = $request->id;

//     $messages = Message::orderBy('created_at', 'asc')
//     ->where(function ($query) use ($user_id, $my_id) {
//         $query->where('sender_id', $my_id)->where('receiver_id', $user_id);
//     })->orWhere(function ($query) use ($user_id, $my_id) {
//         $query->where('sender_id', $user_id)->where('receiver_id', $my_id);
//     })->join('users', 'users.id','=','messages.sender_id')
//     ->join('users as r_user', 'r_user.id','=','messages.receiver_id', 'LEFT')
//     ->select('messages.*', 'users.firstname as s_fname', 'users.lastname as s_lname', 'r_user.firstname as r_fname', 'r_user.lastname as r_lname')
//     ->get();

//     if($messages){
//         return response()->json(['sts' => true, 'messages' => $messages]);
//     }else{
//         return response()->json(['sts' => false, 'msg' => '']);
//     }
// }

// public function readMessage(Request $request){
//     $read = Message::where('id', $request->id)->update([
//         'is_read' => 1
//     ]);
//     if($read){
//         return response()->json(['sts' => true]);
//     }else{
//         return response()->json(['sts' => false]);
//     }
// }


// }
