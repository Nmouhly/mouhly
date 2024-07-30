<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'status',
        'team_id',
        'etat',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
