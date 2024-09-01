<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','phone'];

    protected $appends = ['country','code','valid'];

    protected function country(): Attribute
    {
        return Attribute::make(
            get: fn() => getCountryName($this->code),
        );

    }

    public function code(): Attribute
    {
        return Attribute::make(
            get: fn() => substr($this->phone,0,3),
        );
    }

    public function valid(): Attribute
    {
        return Attribute::make(
            get: fn() => isValidNumber($this->phone),
        );
    }

}
