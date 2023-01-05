<?php

namespace App\Models;
use App\Models\User;
use App\Models\Group;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','content','media'];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function group()
{
    return $this->belongsTo(Group::class);
}


}
