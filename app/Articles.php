<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Articles extends Model {

	protected $fillable = [
        'title',
        'body',
        'published_at'
    ];

    protected $dates=['published_at'];


    public function scopePublished($query){

        $query->where('published_at','<=',Carbon::now());
    }

    public function scopeUnPublished($query){

        $query->where('published_at','>=',Carbon::now());
    }

    public function setPublishedAtAttribute($date){

        $this->attributes['published_at']=Carbon::createFromFormat('Y-m-d',$date);

    }

    public function scopeSortByName($query){

        $query->orderBy('title');
    }
         
      public function user(){
          
        return $this->belongsTo('App\User');
          
    }
    
      public function tags(){
          
        return $this->belongsToMany('App\Tag')->withTimestamps();
          
    }
    
    /*Bозвращает теги ,которые принадлежат текущей новости*/
      public function getTagListAttribute(){
          
        return $this->tags->lists('id');
          
    }

}
