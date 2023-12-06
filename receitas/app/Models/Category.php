<?php

namespace App\Models;
use App\Models\User;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipes(){
        return $this->belongsTo(Recipe::class);
    }
}
