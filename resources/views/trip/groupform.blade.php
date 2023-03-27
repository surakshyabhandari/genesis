@extends('trip.master')
@section('title')
Team Information
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <form action="{{route('group.store',$group)}}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="dietrequirement" class="col-form-label">Diet Requirement</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('dietary',null,['class'=>'form-control','id'=>'dietrequirement','rows'=>2]) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="allergies" class="col-form-label">Allergies</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('allergies',null,['class'=>'form-control','id'=>'allergies','rows'=>2]) !!}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="medical_condition" class="col-form-label">Medical Condition</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('medical_condition',null,['class'=>'form-control','id'=>'medicalcondition','rows'=>2]) !!}
                    </div>
                </div>

                <div class="form-group row mt-5">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
    </div>
</div>
@include('trip.includes.scripts')
@endsection
