<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("all_messages", ["AllMessages" => Message::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("new_message");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $SuccessComments = [];
        $ErrorComments = [];

        $Message = new Message;
        
        $Count = Message::where("user_email", $request->input("user_email"))->count();
        if($Count)
        {
            // логика работы, если уже не первое сообщение
            $ErrorComments[] = "Вы уже отправили {$Count} сообщений!";
        }
        
        $Message->fill($request->input());

        if( 1
//                mail( "email@address.com", $request->input("subject"), $request->input("message") )
                    )
        {
            $SuccessComments[] = "Сообщение отправлено!";
            if( $Message->save() )
            {
                $SuccessComments[] = "Сообщение сохранено в базе под номером -" . $Message->id;
            }
            else
            {
                $ErrorComments[] = "Сообщение не сохранено!";
            }
        }
        else
        {
            $ErrorComments[] = "Сообщение не отправлено и не сохранено!";
        }
        
        return redirect()->route("home")
                ->withErrors($ErrorComments)
                ->with(["success" => $SuccessComments]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Message  $Message
     * @return Response
     */
    public function show(Message $Message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Message  $Message
     * @return Response
     */
    public function edit(Message $Message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Message  $Message
     * @return Response
     */
    public function update(Request $request, Message $Message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Message  $Message
     * @return Response
     */
    public function destroy(Message $Message)
    {
        //
    }
}
