<?php

namespace App\Repositories\Customer;

interface CustomerInterface
{
    public function getData();
    public function storeData($input, $group);
	public function updateData($input, $id);
    public function findById($id);
    public function findBySlug($slug);
	// public function removeData($id);
}

