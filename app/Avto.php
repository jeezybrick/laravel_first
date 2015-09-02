<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Avto extends Model {

    protected $table = 'avtos';
	protected $fillable = ['id_avto','avto_name'];

    public function orders(){
        return $this->hasMany('App\Order');
    }


}
