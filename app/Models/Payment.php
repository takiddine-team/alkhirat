<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentMethod;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Payment extends Model {

	protected $table = 'payments';
	public $timestamps = true;

	//use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable =  [
        "supporter_id",
        "amount",
        "paymentMethod_id",
        "attachment",
        "note",
    ];

	public function supporter()
	{
		return $this->belongsTo(Supporter::class);
	}

	public function payment_method()
	{
		return $this->belongsTo(PaymentMethod::class, 'paymentMethod_id', 'id');
	}

}
