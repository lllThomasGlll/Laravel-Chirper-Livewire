<?php

// [tl! collapse:start]
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// [tl! collapse:end]
class Chirp extends Model
{
    // [tl! collapse:start]
    use HasFactory;
    // [tl! collapse:end]
    protected $fillable = [ // [tl! add:start]
        'message',
    ]; // [tl! add:end]

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
