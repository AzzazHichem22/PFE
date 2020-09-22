<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dossier extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_id',
    ];


    //One to Many

    public function documents()
    {
        return $this->hasMany('App\document');
    }



    // Many to One 

    public function user()
    {
        return $this->belongsTo('App\User');
    }
	





	protected $table = 'dossiers';

    
}
