<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

	protected $table = 'activities';
	public $timestamps = true;
	protected $fillable = [
        "activity_name",
        "activity_code",
        "plan_code",
        "description",
        "quantity",
        "monthly_cost",
        "target_class",
        "management_id",
        "start_date",
        "end_date",
        "attachment",
        "note",
        "is_done",
    ];

    protected $appends = ['duration'];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

	public function management()
	{
		return $this->belongsTo(Management::class);
	}

    public function getDurationAttribute()
    {
        return $this->end_date->format('h:i');
    }

}
