<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Group\GroupInterface;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct(GroupInterface $group)
    {
        $this->group =$group;
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
        return view('trip.groupform', compact('group'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group)
    {
        $this->group->storeData($request, $group);
        return redirect()->route('signature.create',compact('group'));

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
