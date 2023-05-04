<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller {
    public function index() {
        $events = Event::all(); //Chama todos os eventos da tebela events
        return view('welcome', ['events'=> $events]);
    }

    public function create() {
        return view('events/create'); //pode colocar "." ou "/" 
    }

    public function contact() {
        $events = Event::all();
        return view('contact', ['events' => $events]);
    }
}