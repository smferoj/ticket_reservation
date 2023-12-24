@extends('layouts.main')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tickets Table
        <div class="d-flex justify-content-end">
            <a href="/tickets/create">
                <button class="btn btn-primary">Create Tickets</button>
            </a>
        </div>
    </div>
    
    <div class="card-body">
        <h2 class="text-center">Create Ticket Form</h2>

        <form action="{{route('tickets.store')}}" method="POST" style="width:35%; background:rgb(238, 238, 240)" class="m-auto p-2">
            @csrf

            <!-- Summary Field -->
            <div class="mb-3">
                <label for="summary" class="form-label">Summary</label>
                <input type="text" class="form-control" id="summary" name="summary" required>
            </div>

            <!-- Description Field -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <!-- Status Field -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="open">Open</option>
                    <option value="in_progress">In Progress</option>
                    <option value="closed">Closed</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

@endsection
