<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [

            'user_id',
            'department_id',
            'description',
            'customer_name',
            'customer_company',
            'customer_phone',
            'status',
            'observation',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
