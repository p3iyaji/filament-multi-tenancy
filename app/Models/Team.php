<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

   public function members(): BelongsToMany
   {
       return $this->belongsToMany(User::class);
   }

   public function customers(): HasMany
   {
       return $this->hasMany(Customer::class);
   }


}
