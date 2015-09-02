<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    protected $table = 'orders';
	protected $fillable = [
        'date',
        'customer_id',
        'd_avto',
        'd_r'
    ];

    public function avto(){

        return $this->belongsTo('App\Avto');

    }
    public function repair(){

        return $this->belongsTo('App\Repair');

    }
    public function customer(){

        return $this->belongsTo('App\Customer');

    }


}
