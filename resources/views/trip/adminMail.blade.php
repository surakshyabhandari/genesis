@extends('trip.master')
@section('title')
Nepal Sanctuary Treks
@endsection

@section('content')

<div class="container">
    <div class="row">
        <h2>{{$name}}</h2>
        <h4>{{$extension_number}}</h4>
    </div>

    <div class="row">
        <table>
            <tr>
                <th>Customer Name</th>
                <th>Flight Number</th>
                <th>Arrival Date</th>
                <th>Departure Date</th>
            </tr>
            <tr>
                @foreach ($customers as $customer)
                <td>{{ $customer->first_name.' '.$customer->middle_name.' '.$customer->last_name }}</td>
                <td>{{ $customer->flight_no }}</td>
                <td>{{ $customer->arrival_date }}</td>
                <td>{{ $customer->departure_date }}</td>
                @endforeach

            </tr>
        </table>
    </div>
</div>

@endsection
