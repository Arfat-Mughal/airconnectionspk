<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Booking Request</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #0d6efd; color: #fff; padding: 10px; text-align: center; }
        .section { margin: 20px 0; }
        .label { font-weight: bold; }
        ul { list-style: none; padding: 0; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Booking Request</h2>
        </div>
        <div class="section">
            <h3>Contact Information</h3>
            <ul>
                <li><span class="label">Name:</span> {{ $booking->name }}</li>
                <li><span class="label">Phone:</span> {{ $booking->phone_country }} {{ $booking->phone_number }}</li>
                <li><span class="label">Email:</span> {{ $booking->email ?? 'N/A' }}</li>
                <li><span class="label">City:</span> {{ $booking->city }}</li>
                <li><span class="label">Comments:</span> {{ $booking->comments ?? 'None' }}</li>
            </ul>
        </div>
        @if($booking->type === 'flight')
        <div class="section">
            <h3>Flight Booking Details</h3>
            <ul>
                <li><span class="label">Trip Type:</span> {{ ucfirst(str_replace('-', ' ', $booking->flightSegments->first()->booking->trip_type ?? '')) }}</li>
                <li><span class="label">Class:</span> {{ $booking->flight_class ?? 'N/A' }}</li>
                <li><span class="label">Passengers:</span> {{ $booking->adults }} Adult(s), {{ $booking->children }} Child(ren), {{ $booking->infants }} Infant(s)</li>
            </ul>
            <h4>Flight Segments</h4>
            @foreach($booking->flightSegments as $segment)
            <ul>
                <li><span class="label">From:</span> {{ $segment->from }}</li>
                <li><span class="label">To:</span> {{ $segment->to }}</li>
                <li><span class="label">Departure:</span> {{ $segment->departure->format('Y-m-d') }}</li>
                @if($segment->return)
                <li><span class="label">Return:</span> {{ $segment->return->format('Y-m-d') }}</li>
                @endif
            </ul>
            @endforeach
        </div>
        @else
        <div class="section">
            <h3>Umrah Package Details</h3>
            <ul>
                <li><span class="label">Departure From:</span> {{ $booking->umrahPackage->airport }}</li>
                <li><span class="label">Departure Date:</span> {{ $booking->umrahPackage->departure->format('Y-m-d') }}</li>
                <li><span class="label">Hotel Category:</span> {{ $booking->umrahPackage->hotel_category }}</li>
                <li><span class="label">Transportation:</span> {{ $booking->umrahPackage->transport }}</li>
                <li><span class="label">Passengers:</span> {{ $booking->umrahPackage->adults }} Adult(s), {{ $booking->umrahPackage->children }} Child(ren), {{ $booking->umrahPackage->infants }} Infant(s)</li>
                <li><span class="label">Stays:</span>
                    <ul>
                        <li>First Stay: {{ $booking->umrahPackage->stays['first_stay'] }} ({{ $booking->umrahPackage->stays['first_nights'] }} nights)</li>
                        <li>Second Stay: {{ $booking->umrahPackage->stays['second_stay'] }} ({{ $booking->umrahPackage->stays['second_nights'] }} nights)</li>
                        @if($booking->umrahPackage->stays['third_stay'])
                        <li>Third Stay: {{ $booking->umrahPackage->stays['third_stay'] }} ({{ $booking->umrahPackage->stays['third_nights'] }} nights)</li>
                        @endif
                    </ul>
                </li>
            </ul>
        </div>
        @endif
    </div>
</body>
</html>