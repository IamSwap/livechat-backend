<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $appends = ['sent_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getSentAtAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
