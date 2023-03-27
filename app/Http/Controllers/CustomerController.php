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
        // dd($customer);
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
    public function store(AddFormValidation $request, $group)
    {
        // $this->customer->storeData($request, $group);
        // return redirect()->route('group.create',$group);
    }

    public function signature($group)
    {
        $groups = Group::where('slug',$group)->first();
        $users = $groups->customers;
        return view('trip.signatureform', compact('group','users'));
    }

    public function addSignature(AddFormValidation $request, $group)
    {

        $this->customer->updateData($request, $group);
        session()->flash('status','Trip Booked Successfully');
        return redirect()->route('index');
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
