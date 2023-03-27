<?php

namespace App\Http\Livewire;
use App\Http\Requests\Customer\AddFormValidation;
use Livewire\WithFileUploads;
use App\Models\Customer;
use App\Models\Group;
use App\Providers\AppServiceProviders;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

use Livewire\Component;

class FileUpload extends Component
{
    use WithFileUploads;
    public $signatures = [];
    public $title;
    public $users;
    public $group;
    public $user_id = [];

    public function render()
    {
        return view('livewire.file-upload');
    }

    public function submit()
    {
        $validate_signature = $this->validate([
            'signatures.*'=>'image|mimes:png,jpg,jpeg',
        ]);


        foreach($this->users as $key => $signature){

            $filename = rand(0,9999).'_'.$this->signatures[$key]->getClientOriginalName();
            $attributes['signature'] = $filename;
            $this->signatures[$key]->storeAs('images',$filename,'public');

            $signature->update([
                'signature' => $filename,
            ]);

        }

        $groups = Group::where('slug',$this->group)->first();
        $groups->update(['status'=>1]);

        session()->flash('status','Trip Booked Successfully');
        return redirect()->route('index');

    }


}
