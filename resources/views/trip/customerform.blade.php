@extends('trip.master')
@section('title')
Personal Detail
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="card mb-5 bg-light">
                <h3>Group name: {{$group}}</h3>
            </div>

            @livewire('clone-form',['group'=>$group])

        </div>
    </div>
</div>
@endsection


