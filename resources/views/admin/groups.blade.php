@extends('admin.master')
@section('title')
Groups
@endsection

@section('content')
    <div class="card-body">
        <table class="table">
            <tr>
                <th scope="col">Group Name</th>
                <th>Details</th>
                <th>Action</th>
                <th>Status</th>
            </tr>
            @foreach ($groups as $group)
                <tr>
                    <td>{{$group->name}}</td>
                    <td> <a href="{{route('admin.group',$group->id)}}" class="btn btn-dark">Show</a> </td>
                    <td><a href="{{route('admin.dgroup',$group->id)}}" class="btn btn-danger">Delete</a></td>
                    @if($group->status == 0)
                        <td><button class="btn btn-warning" disabled>Pending</button></td>

                    @else
                        <td><button class="btn btn-success" disabled>Booked</button></td>

                    @endif

                </tr>
            @endforeach
        </table>
    </div>
@endsection
