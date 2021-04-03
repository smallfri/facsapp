<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;

class RItemUser extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'item_id', 'status'];

    protected $table = 'r_item_user';

    public function item_user()
    {
        return $this->belongsTo(RItemUser::class);
    }

}
