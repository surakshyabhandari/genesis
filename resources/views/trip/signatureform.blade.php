@extends('trip.master')
@section('title')
Signature Form
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            {{-- <form action="{{route('signature.add',$group)}}" method="POST">
                @csrf
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Signature</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->first_name.' '.$user->middle_name.' '.$user->last_name}}</td>
                        <td>{!! Form::text('signature[]',null,['class'=>'form-control','id'=>'signature']) !!}</td>
                        <input type="hidden" name="user_id[]" value="{{$user->id}}">
                    </tr>
                    @endforeach
                </table>
                <div class="form-group row mt-5">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>

            </form> --}}

            @livewire('file-upload',['users'=>$users,'group'=>$group])
        </div>
    </div>
</div>
@include('trip.includes.scripts')
@endsection
