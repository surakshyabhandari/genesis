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

    }
}

