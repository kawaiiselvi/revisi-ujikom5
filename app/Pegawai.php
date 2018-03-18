<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawais';
    protected  $fillable = ['id','nama', 'cover', 'ttl','alamat','notlp','jk','agama','kewarganegaraan','status','email','hoby','sd','smp','sma','pt','pk'];
    public $timestamps = true;
}
