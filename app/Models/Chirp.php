<?php

// [tl! collapse:start]
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// [tl! collapse:end]
class Chirp extends Model
{
    // [tl! collapse:start]
    use HasFactory;
    // [tl! collapse:end]
    protected $fillable = [ // [tl! add:start]
        'message',
    ]; // [tl! add:end]
}
