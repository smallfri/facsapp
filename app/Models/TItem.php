<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Console\Question\Question;


class TItem extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'description'];

    protected $table = 't_item';

    public function items(){
        return $this->hasMany(TItem::class);
    }

    public function userItems(){
        return $this->hasMany(RItemUser::class);
    }


}
