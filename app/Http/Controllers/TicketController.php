<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    public function index(){
        $tickets =Ticket::latest()->get();
        // dd($tickets);
        return view('tickets.index', compact('tickets'));
    }

    public function createTicket(){
        return view('tickets.create');
    }


    public function storeTicket(Request $request){
        $this->validate($request, [
           'summary'=> 'required|string',
           'description' => 'required|string',
           'status' => 'required|string|max:255',
        ]);

        Ticket::create([
            'summary' => $request->input('summary'),
            'description' => $request->input('description'),
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Ticket created successfully!');
        // DB::table('tickets')->insert([
        //     'summary' => $request->summary,
        //     'description' => $request->description,
        //     'status' => $request->status,
        // ]);

    }
}



  
