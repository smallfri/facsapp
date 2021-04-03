<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class TUser extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    protected $table = 't_user';

    public function items()
    {
        return $this->hasMany(RItemUser::class);
    }

}
