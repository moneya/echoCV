<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Report;

class Company extends Model
{

    protected $table = 'companies';
    public $timestamps = true;


    protected $fillable =[
        'c_name',
        'website',
        'country',
        'pcontact',
        'tags',
        'stage',
        'status',
        'lead',
        'analyst',
    ];




     public function user()
    {
        return $this->belongsTo('User');
    }

    public function efiles()
    {
        return $this->hasMany('Efile');
    }


    public function reports()
    {
        return $this->hasOne(Report::class);
    }

}

