<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model {

	protected $table = 'repairs';
	protected $fillable = ['id_r','r_name'];

    public function orders(){
        return $this->hasMany('App\Order');
    }



}
