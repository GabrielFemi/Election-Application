<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = [
      'position_id',
      'session_id',
    ];

    public function link($id)
    {
    	$this->belongsTo('App\Link', $id);
    }

    public function getCurrentPoll()
    {
    	return $_GET["poll"];
    }
}
