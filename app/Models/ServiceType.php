<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = 'servicetypes';
    public $timestamps = true;
    protected $fillable = [
        "name",
        "descriptoin"
    ];

    public function service()
    {
        return $this->hasMany('Service', 'service_id');
    }
}
