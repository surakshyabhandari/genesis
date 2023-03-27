<div>
    <form wire:submit.prevent="submit" id="signUpForm" method="POST">
        @csrf

        @for($i=0; $i<count($inputs); $i++)
        <h1>NST Form {{$i+1}}</h1>

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
                    <input type="text" placeholder="First Name" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.first_name'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Middle Name" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.middle_name'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Last Name" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.last_name'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Nationality" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.nationality'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Gender" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.gender'>
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Passport Number" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.passport_number'>
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="Passport Issue Date" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.passport_issue_date'>
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="Passport Expiry Date" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.passport_expiry_date'>
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="Date of birth" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.date_of_birth'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address 1" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.address1'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Address 2" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.address2'>
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Phone no 1" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.phone_no1'>
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Phone no 2" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.phone_no2'>
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.customer_email'>
                </div>
            </div>

            <div class="step">

                <p class="text-center mb-4">Insurance Details</p>
                <div class="mb-3">
                    <input type="text" placeholder="Insurance Company Name" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.company_name'>
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Insurance Company Email" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.company_email'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Policy Number" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.policy_no'>
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Phone Number" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.company_phone_no'>
                </div>

            </div>

            <div class="step">
                <p class="text-center mb-4">Fitness Information</p>
                <div class="mb-3">
                    <select oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.fitness_level'>
                        <option value="basic">Basic</option>
                        <option value="mid">Mid-Level</option>
                        <option value="expert">Expert</option>
                    </select>
                </div>
                <div class="mb-3">
                    <textarea placeholder="Recent Outdoor Experience" oninput="this.className = ''" rows='3' wire:model.lazy='inputs.{{$i}}.outdoor_experience'></textarea>
                </div>
                <div class="mb-3">
                    <textarea placeholder="Achieved High Altitude" oninput="this.className = ''" rows='3' wire:model.lazy='inputs.{{$i}}.high_altitude'></textarea>
                </div>
                <div class="mb-3">
                    <textarea placeholder="Training Before Departure" oninput="this.className = ''" rows='3' wire:model.lazy='inputs.{{$i}}.training'></textarea>
                </div>
            </div>

            <div class="step">
                <p class="text-center mb-4">Flight Details</p>
                <div class="mb-3">
                    <input type="number" placeholder="Flight Number" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.flight_no'>
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="Arrival Date" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.arrival_date'>
                </div>
                <div class="mb-3">
                    <input type="date" placeholder="Departure Date" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.departure_date'>
                </div>
            </div>

            <div class="step">
                <p class="text-center mb-4">Emergency Contact</p>
                <div class="mb-3">
                    <input type="text" placeholder="Emergency Contact Name" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.econtact_name'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Emergency Contact Email" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.econtact_email'>
                </div>
                <div class="mb-3">
                    <input type="number" placeholder="Emergency Contact Phone Number" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.econtact_phone_no'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Emergency Contact Address" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.econtact_address'>
                </div>
                <div class="mb-3">
                    <input type="text" placeholder="Relationship" oninput="this.className = ''" wire:model.lazy='inputs.{{$i}}.relationship'>
                </div>
            </div>
            <div class="form-footer d-flex">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        @endfor

        <div class="form-group row mt-3">
            <button type="button" wire:click="addNew" class="btn btn-primary">Add</button>
        </div>
        <div class="form-group row mt-5">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
