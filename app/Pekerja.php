<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    //
    protected $fillable = ['name','email'];
    protected $visible = ['id','name','email'];
    public $timestamps = true;
    public function Pekerjas()
    {
    	return $this->belongsTo('App\Pekerja');
    }

    

    
}
