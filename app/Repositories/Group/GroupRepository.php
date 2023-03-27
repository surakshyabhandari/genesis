<?php

namespace App\Repositories\Group;
use App\Models\Group;
use App\Repositories\Group\GroupInterface;

class GroupRepository implements GroupInterface
{
    public function __construct(Group $group)
    {
        $this->group = $group;
    }

    public function getData()
	{
	    return $this->group->get();
	}

    public function findById($id)
    {
        return $this->group->find($id);
    }

    public function findBySlug($slug)
    {
        return Group::where('slug',$slug)->first();
    }

    public function storeData($input, $id)
    {

        $this->findBySlug($id)->update([
            'dietary'=>$input->dietary,
            'allergies'=>$input->allergies,
            'medical_condition'=>$input->medical_condition,
        ]);
    }
}
