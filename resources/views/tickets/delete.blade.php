@extends('layouts.main')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tickets Table
        <div class="d-flex justify-content-end">
            <a href="/tickets/create">
                <button class="btn btn-primary">Delete Tickets</button>
            </a>
        </div>
    </div>
    
    <div class="card-body">
        <h2 class="text-center">Delete Ticket Form</h2>

        <form action="#" method="POST" style="width:35%; background:rgb(238, 238, 240)" class="m-auto p-2">
            @csrf
            <!-- Summary Field -->
            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <input type="text" class="form-control" id="summary" name="summary" value="{{$ticket->summary}}" required disabled >
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required disabled >{{$ticket->description}}</textarea>
            </div>

            <!-- Status Field -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required disabled >
                    <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Open</option>
                    <option value="in_progress" {{ $ticket->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="closed" {{ $ticket->status == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>
                
            </div>

            <button type="submit" class="btn btn-primary"> Delete</button>
        </form>
    </div>
</div>

@endsection
