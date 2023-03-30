<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Customer;
use App\Exports\ExportCustomers;
use Maatwebsite\Excel\Facades\Excel;

use PDF;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::get();
        return view('admin.groups', compact('groups'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $group = Group::with('customers')->find($id);
        return view('admin.groupdetail', compact('group'));
    }

    public function export($id)
    {
        $filename = 'groupdetail.csv';
        $group = Group::with('customers')->find($id);
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$filename",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"

        );

        $columns = array('group_id','First Name','Last Name', 'Nationality', 'Gender', 'Address1', 'Address2', 'Phone No1', 'Phone No2', 'Customer Email', 'Emergency Contact Name', 'Emergency Address', 'Emergency Phone No.', 'Emergency Email');

        $callback = function() use($group, $columns){
            $file = fopen('php://output','w');
            fputcsv($file,$columns);

            foreach($group->customers as $customer){
                $row['group_id'] = $customer->group_id;
                $row['First Name'] = $customer->first_name;
                $row['Last Name'] = $customer->last_name;
                $row['Nationality'] = $customer->nationality;
                $row['Gender'] = $customer->gender;
                $row['Address1'] = $customer->address1;
                $row['Address2'] = $customer->address2;
                $row['Phone No1'] = $customer->phone_no1;
                $row['Phone No2'] = $customer->phone_no2;
                $row['Customer Email'] = $customer->customer_email;
                $row['Emergency Contact Name'] = $customer->econtact_name;
                $row['Emergency Address'] = $customer->econtact_address;
                $row['Emergency Phone No.'] = $customer->econtact_phone_no;
                $row['Emergency Email'] = $customer->econtact_email;

                fputcsv($file, array($row['group_id'], $row['First Name'], $row['Last Name'], $row['Nationality'], $row['Gender'], $row['Address1'], $row['Address2'], $row['Phone No1'], $row['Phone No2'], $row['Customer Email'], $row['Emergency Contact Name'], $row['Emergency Address'], $row['Emergency Phone No.'], $row['Emergency Email']));

            }
            fclose($file);
        };
        return response()->stream($callback, 200, $headers);
        // return Excel::download(new Exportgroup, 'groupdetail.xlsx');
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
    public function destroy($id)
    {
        $group = Group::find($id)->delete();
        return redirect(route('admin.index'));
    }
}
