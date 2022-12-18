<?php

namespace App\Models;
use App\Models\Media;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'receiver_id', 'message','attachment', 'is_read'];

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}
