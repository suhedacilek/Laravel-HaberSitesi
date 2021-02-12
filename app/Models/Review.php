<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'haber_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];
    public function haber()
    {
        return $this->belongsTo(Haber::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }
}
