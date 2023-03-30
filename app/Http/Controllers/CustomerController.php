<?php

namespace App\Http\Controllers;
use App\Repositories\Customer\CustomerInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\AddFormValidation;
use App\Models\Group;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(CustomerInterface $customer)
    {
        $this->customer = $customer;
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {

        return view('trip.customerform', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
       //
    }

    public function signature($group)
    {
        $groups = Group::where('slug',$group)->first();
        $users = $groups->customers;
        return view('trip.signatureform', compact('group','users'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
