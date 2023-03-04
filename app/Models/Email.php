<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Str;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'to',
        'body',
    ];

    protected function body(): Attribute
    {
        return Attribute::get(fn (string $value) => Str::limit($value, 20));
    }

    public function person(): HasOne
    {
        return $this->hasOne(Person::class, 'email', 'to');
    }
}
