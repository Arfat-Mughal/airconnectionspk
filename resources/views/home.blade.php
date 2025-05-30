@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Bookings</h2>

    @if($bookings->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Type</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr>
                        <td>{{ $loop->iteration + ($bookings->currentPage() - 1) * $bookings->perPage() }}</td>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->phone_country }} {{ $booking->phone_number }}</td>
                        <td>{{ $booking->city }}</td>
                        <td>{{ ucfirst($booking->type) }}</td>
                        <td>{{ $booking->created_at->format('d M Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {!! $bookings->links() !!}
        </div>
    @else
        <p>No bookings found.</p>
    @endif
</div>
@endsection
