<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bettor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user', 'birthday', 'cpf'
    ];
}
