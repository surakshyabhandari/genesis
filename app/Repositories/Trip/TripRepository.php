<?php

namespace App\Repositories\Trip;

use App\Models\Trip;
use App\Repositories\Trip\TripInterface;


class TripRepository implements TripInterface
{
    public function __construct(Trip $trip)
	{
	    $this->trip = $trip;
	}

    public function getData()
	{
	    return $this->trip->get();
	}

    public function storeData($input)
	{
        // if(Trip::where('extension_number',$extension_number)->exists()){

        //     $this->trip->id;
        // }
        // else{
        //     $trip = $this->trip->create($input->all());
        // }

        $trip = Trip::firstOrCreate(
            ['extension_number' => $input->extension_number],
            ['name' => $input->name]
        );

        $group = $trip->groups()->create(['name'=>'grp-'.time()]);
        return $group;



	}
}
