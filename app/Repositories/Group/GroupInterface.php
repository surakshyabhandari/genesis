<?php

namespace App\Repositories\Group;

interface GroupInterface
{
    public function getData();
    public function storeData($input, $id);
	// public function updateData($id, $input);
	// public function removeData($id);
	public function findById($id);
    public function findBySlug($slug);
}

