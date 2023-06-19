<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Events\NuevoEnrollement;

class CreateFinger extends Model
{
    use HasFactory;
    protected $table = "create_finger";


    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function (CreateFinger $createFinger) {
    //         event(new NuevoEnrollement($createFinger));
    //     });
    // }


}
