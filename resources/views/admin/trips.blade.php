@extends('admin.master')
@section('title')
Trips
@endsection

@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th scope="col">Trip Name</th>
                <th scope="col">Extension Number</th>
                <th scope="col">Number of groups</th>
            </tr>
            @foreach ($trips as $trip)
                <tr>
                    <td>{{$trip->name}}</td>
                    <td>{{$trip->extension_number}}</td>
                    <td>
                        {{count($trip->groups)}}

                        @if(count($trip->groups)>1)
                            groups

                        @else
                            group

                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
