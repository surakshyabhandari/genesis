<?php

namespace App\Repositories\Customer;

use App\Models\Customer;
use App\Repositories\Customer\CustomerInterface;
use App\Models\Group;
use Mail;
use App\Mail\CustomerDetail;

class CustomerRepository implements CustomerInterface
{
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function getData()
	{
	    return $this->customer->get();
	}

    public function storeData($input, $group)
    {


        // $group=Group::where('slug',$group)->first();
        // foreach($input->first_name as $key => $data){

        //     $group->customers()->create([
        //         'first_name'=> $input->first_name[$key],
        //         'middle_name'=>$input->middle_name[$key],
        //         'last_name'=>$input->last_name[$key],
        //         'nationality'=>$input->nationality[$key],
        //         'gender'=>$input->gender[$key],
        //         'passport_number'=>$input->passport_number[$key],
        //         'passport_issue_date'=>$input->passport_issue_date[$key],
        //         'passport_expiry_date'=>$input->passport_expiry_date[$key],
        //         'date_of_birth'=>$input->date_of_birth[$key],
        //         'address1'=>$input->address1[$key],
        //         'address2'=>$input->address2[$key],
        //         'phone_no1'=>$input->phone_no1[$key],
        //         'phone_no2'=>$input->phone_no2[$key],
        //         'customer_email'=>$input->customer_email[$key],
        //         'company_name'=>$input->company_name[$key],
        //         'company_email'=>$input->company_email[$key],
        //         'policy_no'=>$input->policy_no[$key],
        //         'company_phone_no'=>$input->company_phone_no[$key],
        //         'fitness_level'=>$input->fitness_level[$key],
        //         'outdoor_experience'=>$input->outdoor_experience[$key],
        //         'high_altitude'=>$input->high_altitude[$key],
        //         'training'=>$input->training[$key],
        //         'flight_no'=>$input->flight_no[$key],
        //         'arrival_date'=>$input->arrival_date[$key],
        //         'departure_date'=>$input->departure_date[$key],
        //         'econtact_name'=>$input->econtact_name[$key],
        //         'econtact_email'=>$input->econtact_email[$key],
        //         'econtact_phone_no'=>$input->econtact_phone_no[$key],
        //         'econtact_address'=>$input->econtact_address[$key],
        //         'relationship'=>$input->relationship[$key],
        //     ]);
        // }

    }

    public function findById($id)
    {
        return $this->customer->find($id);
    }

    public function findBySlug($slug)
    {
        return Group::where('slug',$slug)->first();
    }

    public function updateData($input, $id)
    {
        // foreach($input->signature as $key => $signature){
        //     $this->findById($input->user_id[$key])->update(['signature' => $signature]);

        // }
        // $this->findBySlug($id)->update(['status'=>1]);

        Mail::send(new CustomerDetail($this->findBySlug($id)));

    }
}
