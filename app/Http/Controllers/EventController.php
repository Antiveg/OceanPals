<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show(Events $events){
        return view('partials.eventcard', [
            "EventName" => $events->EventName,
            'EventDescription' => $events->EventDescription,
            'EventLocation' => $events->EventLocation,
            'EventDate' => $events->EventDate,
            'EventImage' => $events->EventImage,
            'EventPoint' => $events->EventPoint,
            'IsSpecial' => $events->IsSpecial,
            'UserID' => $events->UserID,
            'IsFinished' => $events->IsFinished,
        ]);
    }

    public function showEvents(){
        return view('events', [
            "title" => "Events",
            "events" => Events::all()
        ]);
    }

    public function createEvent(Request $request) 
    {
        $event = Events::create([
            'EventName' => $request->name,
            'EventDescription' => $request->description,
            'EventLocation' => $request->province . ', Indonesia',
            'EventDate' => date('Y-m-d', strtotime($request->date)),
            'EventTime' => $request->time,
            //'EventImage' => $imageContent // Save the file contents as LONGBLOB
        ]);

        return redirect('events');
    }
}
