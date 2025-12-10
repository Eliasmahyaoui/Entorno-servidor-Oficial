<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Space extends Model
{
    public function clients(): BelongsToMany
    {
       return $this->belongsToMany(Client::class);

    }
}
