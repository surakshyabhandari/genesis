@extends('admin.master')
@section('title')
Group Details
@endsection

@section('content')
    <div class="card-body mb-5">
        <div class="d-flex">
            <div class=" mr-auto p-2"><h4>{{$group->name}}</h4></div>
            <div class="p-2"><a href="{{route('admin.export', $group->id)}}" class="btn btn-dark">Export</a></div>
        </div>
        <table class="table" style="display: block;
        overflow-x: auto;
        white-space: nowrap;">
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Passport Number</th>
                <th scope="col">Address 1</th>
                <th scope="col">Address 2</th>
                <th scope="col">Phone No 1</th>
                <th scope="col">Phone No 2</th>
                <th scope="col">Email</th>
                <th scope="col">Nationality</th>
                <th scope="col">Gender</th>
                <th scope="col">Flight Number</th>
                <th scope="col">Arrival date</th>
                <th scope="col">Departure date</th>
                <th scope="col">Contact name</th>
                <th scope="col">Contact address</th>
                <th scope="col">Contact phone no</th>
                <th scope="col">Contact Email</th>
                <th scope="col">Relationship</th>
                <th scope="col">Company Name</th>
                <th scope="col">Company email</th>
                <th scope="col">Policy no</th>
                <th scope="col">Company Phone no</th>
                <th scope="col">Fitness Level</th>
                <th scope="col">Recent Outdoor Experience</th>
                <th scope="col">Achieved High Altitude Trek</th>
                <th scope="col">Training before departure</th>
                <th scope="col">Signature</th>
            </tr>
            @foreach ($group->customers as $customer)
                <tr>
                    <td>{{$customer->first_name.' '.$customer->middle_name.' '.$customer->last_name}}</td>
                    <td>{{$customer->passport_number}}</td>
                    <td>{{$customer->address1}}</td>
                    <td>{{$customer->address2}}</td>
                    <td>{{$customer->phone_no1}}</td>
                    <td>{{$customer->phone_no2}}</td>
                    <td>{{$customer->customer_email}}</td>
                    <td>{{$customer->nationality}}</td>
                    <td>{{$customer->gender}}</td>
                    <td>{{$customer->flight_no}}</td>
                    <td>{{$customer->arrival_date}}</td>
                    <td>{{$customer->departure_date}}</td>
                    <td>{{$customer->econtact_name}}</td>
                    <td>{{$customer->econtact_address}}</td>
                    <td>{{$customer->econtact_phone_no}}</td>
                    <td>{{$customer->econtact_email}}</td>
                    <td>{{$customer->relationship}}</td>
                    <td>{{$customer->company_name}}</td>
                    <td>{{$customer->company_email}}</td>
                    <td>{{$customer->policy_no}}</td>
                    <td>{{$customer->company_phone_no}}</td>
                    <td>{{$customer->fitness_level}}</td>
                    <td>{{$customer->outdoor_experience}}</td>
                    <td>{{$customer->high_altitude}}</td>
                    <td>{{$customer->training}}</td>
                    <td><img src="{{asset('storage/images/'.$customer->signature)}}" alt="signature" height="50px" width="50px"></td>

                </tr>
            @endforeach
        </table>

        <div class="card mt-5">
            <div class="card-body">
                <tbody>
                    <tr>
                        <th scope="row">Diet requirement: </th>
                        <td>{{$group->dietary}}</td>
                    </tr>
                </tbody>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <tbody>
                    <tr>
                        <th scope="row">Allergies: </th>
                        <td>{{$group->allergies}}</td>
                    </tr>
                </tbody>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <tbody>
                    <tr>
                        <th scope="row">Medical Condition: </th>
                        <td>{{$group->medical_condition}}</td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
@endsection
