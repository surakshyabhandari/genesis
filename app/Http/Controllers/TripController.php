<?php

namespace App\Http\Controllers;

use App\Models\trip;
use App\Repositories\Trip\TripInterface;
use Illuminate\Http\Request;
use App\Http\Requests\Trip\AddFormValidation;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(TripInterface $trip){
        $this->trip = $trip;
    }
    public function index()
    {
        return view('trip.tripform');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddFormValidation $request)
    {
        $trip = $this->trip->storeData($request);
        return redirect()->route('form.create', $trip->slug);
    }

    /**
     * Display the specified resource.
     */
    public function show(trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(trip $trip)
    {
        //
    }
}
