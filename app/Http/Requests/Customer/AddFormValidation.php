<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class AddFormValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name.*'=>'required',
            'middle_name.*'=>'required',
            'last_name.*'=>'required',
            'nationality.*'=>'required',
            'gender.*'=>'required',
            'passport_number.*'=>'required',
            'passport_issue_date.*'=>'required',
            'passport_expiry_date.*'=>'required',
            'date_of_birth.*'=>'required',
            'address1.*'=>'required',
            'address2.*'=>'required',
            'phone_no1.*'=>'required',
            'phone_no2.*'=>'required',
            'customer_email.*'=>'required',

            'flight_no.*'=>'required',
            'arrival_date.*'=>'required',
            'departure_date.*'=>'required',

            'econtact_name.*'=>'required',
            'econtact_email.*'=>'required',
            'econtact_phone_no.*'=>'required',
            'econtact_address.*'=>'required',
            'relationship.*'=>'required',

            'company_name.*'=>'required',
            'policy_no.*'=>'required',
            'company_email.*'=>'required',
            'company_phone_no.*'=>'required',

            'fitness_level.*'=>'required',
            'outdoor_experience.*'=>'required',
            'high_altitude.*'=>'required',
            'training.*'=>'required',
            'signature.*'=>'image|max:1024|mimes:png,jpg,jpeg',

        ];
    }

    public function messages()
    {
        return [
            'first_name.*.required'=>'First Name is required.',
            'middle_name.*.required'=>'Middle Name is required',
            'last_name.*.required'=>'Last name is required',
            'nationality.*.required'=>'Nationality is required',
            'gender.*.required'=>'Gender is required',
            'passport_number.*.required'=>'Passport issue date is required',
            'passport_expiry_date.*.required'=>'Passport expiry date is required',
            'date_of_birth.*.required'=>'Date of birth is required',
            'address1.*.required'=>'Address1 is required',
            'address2.*.required'=>'Address2 is required',
            'phone_no1.*.required'=>'Phone Number1 is required',
            'phone_no2.*.required'=>'Phone Number2 is required',
            'customer_email.*.required'=>'Customer email is required',
            'flight_no.*.required'=>'Flight no is required',
            'arrival_date.*.required'=>'Arrival date is required',
            'departure_date.*.required'=>'Departure date is required',
            'econtact_name.*.required'=>'Contact name is required',
            'econtact_email.*.required'=>'Contact email is required',
            'econtact_phone_no.*.required'=>'Contact Phone number is required',
            'econtact_address.*.required'=>'Contact address is required',
            'relationship.*.required'=>'Relationship is required',
            'company_name.*.required'=>'Insurance Company Name is required',
            'policy_no.*.required'=>'Insurance Policy Number is required',
            'company_email.*.required'=>'Company Email is required',
            'company_phone_no.*.required'=>'Company phone number is required',
            'fitness_level.*.required'=>'Fitness Level is required',
            'outdoor_experience.*.required'=>'Outdoor Experience is required',
            'high_altitude.*.required'=>'Achieved high altitude is required',
            'training.*.required'=>'Training before departure is required',
            'signature.*.image'=>'Signature must be in jpg/png/jpeg file and should be less than 1MB',

        ];
    }
}
