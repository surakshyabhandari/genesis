@extends('trip.master')
@section('title')
Nepal Sanctuary Treks
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <form action="{{route('trips.store')}}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col">
                        {!! Form::text('name',null,['class'=>'form-control','id'=>'name','placeholder'=>'Trip name']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="col">
                        {!! Form::text('extension_number',null,['class'=>'form-control','id'=>'extension_no','placeholder'=>'Extension Number']) !!}
                        <span class="text-danger">{{ $errors->first('extension_number') }}</span>
                    </div>


                  <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>

    @if(session()->has('status'))
                <div x-data="{show:true}"
                x-init="setTimeout(()=>show=false, 2000)"
                x-show="show"
                class="alert alert-secondary my-5 fixed" role="alert">
                    <p>{{session('status')}}</p>
                </div>

            @endif

    @include('trip.includes.scripts')
@endsection
