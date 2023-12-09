<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'app_type',
        'platform',
        'package',
        'app_name',
        'business_name',
        'business_details',
        'app_description',
        'email',
        'phone',
        'has_domain',
        'domain_name',
    ];
}
