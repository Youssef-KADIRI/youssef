<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;


class Professeur extends Model
{
    public function scopeProfesseur($query)
    {
        if (Auth::user()->role_id == 2) {
            return $query->where('user_id', '=', Auth::user()->id);
        }
    }
}
