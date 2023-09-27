<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LysaghtLead extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id', 'name', 'phone', 'email', 'profession', 'company_name', 'state', 'city', 'message', 'ip', 'created_at', 'updated_at'
    ];
}
