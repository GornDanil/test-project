<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Paste extends Model
{
    use HasFactory;

    protected $with = [
      'langs',
      'users'
    ];

    protected $fillable = [
        'title',
        'code',
        'access_mode',
        'expiration_time',
        'lang_id',
        'user_id',
        'slug',
    ];

    public function lang(): BelongsTo
    {
        return $this->belongsTo(Lang::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
