@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Bookings</h2>

    @if($bookings->count())
        @foreach ($bookings as $booking)
            <div class="card mb-4">
                <div class="card-header">
                    <strong>{{ $booking->name }}</strong> ({{ ucfirst($booking->type) }})
                </div>
                <div class="card-body">
                    <p><strong>Phone:</strong> {{ $booking->phone_country }} {{ $booking->phone_number }}</p>
                    <p><strong>City:</strong> {{ $booking->city }}</p>
                    <p><strong>Created At:</strong> {{ $booking->created_at->format('d M Y H:i') }}</p>

                    @if ($booking->type === 'flight' && $booking->flightSegments->count())
                        <h5>Flight Segments</h5>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Departure</th>
                                    <th>Arrival</th>
                                    <th>Airline</th>
                                    <th>Flight Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking->flightSegments as $segment)
                                    <tr>
                                        <td>{{ $segment->from }}</td>
                                        <td>{{ $segment->to }}</td>
                                        <td>{{ $segment->departure }}</td>
                                        <td>{{ $segment->arrival }}</td>
                                        <td>{{ $segment->airline }}</td>
                                        <td>{{ $segment->flight_number }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif

                    @if ($booking->type === 'umrah' && $booking->umrahPackage)
                        <h5>Umrah Package Details</h5>
                        <ul>
                            <li><strong>Hotel Category:</strong> {{ $booking->umrahPackage->hotel_category }}</li>
                            <li><strong>Number of Persons:</strong> {{ $booking->umrahPackage->number_of_persons }}</li>
                            <li><strong>Preferred Date:</strong> {{ $booking->umrahPackage->preferred_date }}</li>
                        </ul>
                    @endif
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
            {{ $bookings->links() }}
        </div>
    @else
        <p>No bookings found.</p>
    @endif
</div>
@endsection
