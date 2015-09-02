<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

    protected $table = 'customers';
    protected $fillable = ['id','fio','phone'];


    public function orders(){
        return $this->hasMany('App\Order');
    }

}
