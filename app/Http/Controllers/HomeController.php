<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);

        return view('home.room_details', compact('room'));

    }

    public function add_booking(Request $request , $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);

        $data = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->phone = $request->phone;

        // variables declared and is requesting from the blade file and storing in the variable
        $startDate = $request->startDate;

        $endDate = $request->endDate;

        // $isBooked variable declared and table model name Booking is used to pull room_id from the db and checking if the $id of the room the user is trying to book matches with the room_id which was pulled from the db
        // start_date is coming from bookings table in db, $startDate is the date which gets selected from room_details blade file
        // the ->where statements are like if conditions
        $isBooked = Booking::where('room_id', $id)
        ->where('start_date','<=',$endDate)
        ->where('end_date', '>=', $startDate)->exists();

        if($isBooked)
        {
            return redirect()->back()->with('message','Room is Already Booked, Please try a Different Date');
        }
        else
        {
            $data->start_date = $request->startDate;

            $data->end_date = $request->endDate;

            $data->save();

            return redirect()->back()->with('message','Room Booked Succesfully');
        }


        
    }

    // When message send button is clicked this function comes in play because we did {{url('contact')}} in the form action part
    public function contact(Request $request)
    {
        // New entry in the database
        $contact = new Contact;
        // Filling each column in Contacts table
        $contact->name = $request->name;

        $contact->email = $request->email;

        $contact->phone = $request->phone;
        
        $contact->message = $request->message;
        // Saves the data in the database
        $contact->save();

        return redirect()->back()->with('message', 'Message Sent Successfully');
    }
}
