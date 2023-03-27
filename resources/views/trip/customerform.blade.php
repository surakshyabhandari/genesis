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
            {{-- <form action="{{route('form.store',$group)}}" id="signUpForm" method="POST">
                @csrf


                    <div class="form-header d-flex mb-4">
                        <span class="stepIndicator">Personal Information</span>
                        <span class="stepIndicator">Insurance Detail</span>
                        <span class="stepIndicator">Fitness Information</span>
                        <span class="stepIndicator">Flight Detail</span>
                        <span class="stepIndicator">Emergency Contact</span>
                    </div>

                    <div class="step">
                        <p class="text-center mb-4">Personal Information</p>
                        <div class="mb-3">
                            <input type="text" placeholder="First Name" oninput="this.className = ''" name="first_name[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Middle Name" oninput="this.className = ''" name="middle_name[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Last Name" oninput="this.className = ''" name="last_name[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Nationality" oninput="this.className = ''" name="nationality[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Gender" oninput="this.className = ''" name="gender[]">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Passport Number" oninput="this.className = ''" name="passport_number[]">
                        </div>
                        <div class="mb-3">
                            <input type="date" placeholder="Passport Issue Date" oninput="this.className = ''" name="passport_issue_date[]">
                        </div>
                        <div class="mb-3">
                            <input type="date" placeholder="Passport Expiry Date" oninput="this.className = ''" name="passport_expiry_date[]">
                        </div>
                        <div class="mb-3">
                            <input type="date" placeholder="Date of birth" oninput="this.className = ''" name="date_of_birth[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Address 1" oninput="this.className = ''" name="address1[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Address 2" oninput="this.className = ''" name="address2[]">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Phone no 1" oninput="this.className = ''" name="phone_no1[]">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Phone no 2" oninput="this.className = ''" name="phone_no2[]">
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Email" oninput="this.className = ''" name="customer_email[]">
                        </div>
                    </div>

                    <div class="step">

                        <p class="text-center mb-4">Insurance Details</p>
                        <div class="mb-3">
                            <input type="text" placeholder="Insurance Company Name" oninput="this.className = ''" name="company_name[]">
                        </div>
                        <div class="mb-3">
                            <input type="email" placeholder="Insurance Company Email" oninput="this.className = ''" name="company_email[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Policy Number" oninput="this.className = ''" name="policy_no[]">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Phone Number" oninput="this.className = ''" name="company_phone_no[]">
                        </div>

                    </div>

                    <div class="step">
                        <p class="text-center mb-4">Fitness Information</p>
                        <div class="mb-3">
                            <select name="fitness_level[]" oninput="this.className = ''">
                                <option value="basic">Basic</option>
                                <option value="mid">Mid-Level</option>
                                <option value="expert">Expert</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Recent Outdoor Experience" oninput="this.className = ''" name="outdoor_experience[]" rows='3'></textarea>
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Achieved High Altitude" oninput="this.className = ''" name="high_altitude[]" rows='3'></textarea>
                        </div>
                        <div class="mb-3">
                            <textarea placeholder="Training Before Departure" oninput="this.className = ''" name="training[]" rows='3'></textarea>
                        </div>
                    </div>

                    <div class="step">
                        <p class="text-center mb-4">Flight Details</p>
                        <div class="mb-3">
                            <input type="number" placeholder="Flight Number" oninput="this.className = ''" name="flight_no[]">
                        </div>
                        <div class="mb-3">
                            <input type="date" placeholder="Arrival Date" oninput="this.className = ''" name="arrival_date[]">
                        </div>
                        <div class="mb-3">
                            <input type="date" placeholder="Departure Date" oninput="this.className = ''" name="departure_date[]">
                        </div>
                    </div>

                    <div class="step">
                        <p class="text-center mb-4">Emergency Contact</p>
                        <div class="mb-3">
                            <input type="text" placeholder="Emergency Contact Name" oninput="this.className = ''" name="econtact_name[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Emergency Contact Email" oninput="this.className = ''" name="econtact_email[]">
                        </div>
                        <div class="mb-3">
                            <input type="number" placeholder="Emergency Contact Phone Number" oninput="this.className = ''" name="econtact_phone_no[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Emergency Contact Address" oninput="this.className = ''" name="econtact_address[]">
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Relationship" oninput="this.className = ''" name="relationship[]">
                        </div>
                    </div>
                    <div class="form-footer d-flex">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>

                <div class="form-group row mt-5">
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
                </form> --}}

        </div>
    </div>
</div>
@endsection


