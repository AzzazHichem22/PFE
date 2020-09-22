<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'dossier_id','description','valide','path',
    ];


    public function dossier()
    {
        return $this->belongsTo('App\dossier');
    }



    protected $table = 'documents';
}
