<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Repositories\Customer\CustomerInterface;
use App\Http\Requests\Customer\AddFormValidation;
use App\Models\Group;
use App\Models\Customer;

class CloneForm extends Component
{
    public array $first_name,$middle_name,$last_name,$nationality,
            $gender,$passport_number,$passport_issue_date,$passport_expiry_date,
            $date_of_birth,$address1,$address2,$phone_no1,$phone_no2,$customer_email,
            $company_name,$company_email,$policy_no,$company_phone_no,
            $fitness_level,$outdoor_experience,$high_altitude,$training,
            $flight_no,$arrival_date,$departure_date,
            $econtact_name,$econtact_email,$econtact_phone_no,$econtact_address,$relationship;

    private $customer;
    public $group;
    public $inputs = [];

    public function mount(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.clone-form');
    }

    public function addNew()
    {
        $this->inputs[] = [];
    }

    public function rules():array{

        return (new AddFormValidation())->rules();
    }

    public function submit()
    {

        $groups=Group::where('slug',$this->group)->first();

        foreach($this->inputs as $key => $data){
            Customer::create([
                'group_id' => $groups->id,
                'first_name'=> $data['first_name'],
                'middle_name'=>$data['middle_name'],
                'last_name'=>$data['last_name'],
                'nationality'=>$data['nationality'],
                'gender'=>$data['gender'],
                'passport_number'=>$data['passport_number'],
                'passport_issue_date'=>$data['passport_issue_date'],
                'passport_expiry_date'=>$data['passport_expiry_date'],
                'date_of_birth'=>$data['date_of_birth'],
                'address1'=>$data['address1'],
                'address2'=>$data['address2'],
                'phone_no1'=>$data['phone_no1'],
                'phone_no2'=>$data['phone_no2'],
                'customer_email'=>$data['customer_email'],
                'company_name'=>$data['company_name'],
                'company_email'=>$data['company_email'],
                'policy_no'=>$data['policy_no'],
                'company_phone_no'=>$data['company_phone_no'],
                'fitness_level'=>$data['fitness_level'],
                'outdoor_experience'=>$data['outdoor_experience'],
                'high_altitude'=>$data['high_altitude'],
                'training'=>$data['training'],
                'flight_no'=>$data['flight_no'],
                'arrival_date'=>$data['arrival_date'],
                'departure_date'=>$data['departure_date'],
                'econtact_name'=>$data['econtact_name'],
                'econtact_email'=>$data['econtact_email'],
                'econtact_phone_no'=>$data['econtact_phone_no'],
                'econtact_address'=>$data['econtact_address'],
                'relationship'=>$data['relationship'],
            ]);

        }

        return redirect()->route('group.create',$this->group);
    }
}
