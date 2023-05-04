<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\endUser\MessageInterface;
use App\Http\Requests\Message\StoreMessageRequest;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    private $messageInterface;

    public function __construct(MessageInterface $messageInterface)
    {
        $this->messageInterface = $messageInterface;
    }

    public function index(string $id)
    {
        return $this->messageInterface->index($id);
    }

    public function store(StoreMessageRequest $request, string $id)
    {
        return $this->messageInterface->store($request, $id);
    }
}
