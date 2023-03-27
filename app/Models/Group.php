<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Trip;
use App\Models\Customer;
use Illuminate\Support\Str;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=['id'];
    protected $softDeletes = true;

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
