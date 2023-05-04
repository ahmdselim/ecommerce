<?php

namespace App\Http\Repositories\endUser;

use App\Http\Interfaces\endUser\MessageInterface;
use App\Models\Message;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageRepository implements MessageInterface
{

    private $messageModel, $profileModel, $userModel;

    public function __construct(Message $messageModel, Profile $profileModel, User $userModel)
    {
        $this->profileModel = $profileModel;
        $this->messageModel = $messageModel;
        $this->userModel = $userModel;
    }

    public function index($id)
    {

        // $users = DB::table('users')->where("users.id", $id)->join("profiles", "users.id", "=", "profiles.user_id")->select("users.*", "profiles.*", "users.id as userID")->get();

        $users = $this->userModel::where("id", $id)->with("profiles")->get();


        // dd(auth()->user()->profiles);


        $messages = Message::where([
            ["sender", $id],
            ["receiver", Auth::user()->id]
        ])->orWhere([
            ["sender", Auth::user()->id],
            ["receiver", $id]
        ])->get();

        return \view("pages.endUser.dashboard.messages.Index", compact("users", "messages"));
    }

    public function store($request, $id)
    {
        $requests = $request->validated();

        $data = Message::create([
            "sender" => auth()->user()->id,
            "receiver" => $id,
            "message" => e($requests["message"]),
        ]);

        // return back();

        return response()->json($data, 200);
    }
}
