@extends('layouts.main')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tickets Table  
        <div class="d-flex justify-content-end">
            <a href="/tickets/create">
                <button class="btn btn-primary">Add Tickets</button>
            </a>
        </div>
        
        

    </div>
 


    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach($tickets as $ticket)
                <tr>
                    <td>{{$ticket->id}}</td>
                    <td>{{$ticket->summary}}</td>
                    <td>{{$ticket->description}}</td>
                    <td>{{$ticket->status}}</td>
                    <td><a href="/tickets/{{$ticket->id}}" class="btn btn-primary">Update</a></td>
                    <td><a href="/tickets/delete/{{$ticket->id}}" class="btn btn-danger">Delete</a></td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection