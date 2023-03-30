@extends('trip.master')
@section('title')
Signature Form
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center">

            @livewire('file-upload',['users'=>$users,'group'=>$group])
        </div>
    </div>
</div>
@include('trip.includes.scripts')
@endsection
