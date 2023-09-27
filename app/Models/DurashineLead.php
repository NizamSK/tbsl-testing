<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DurashineLead extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id', 'name', 'phone', 'email', 'profession', 'company_name', 'state', 'city', 'message', 'ip','previous_url', 'created_at', 'updated_at'
    ];

    public function State() {
        return $this->hasOne(StateMaster::class,'id', 'state');
    }

    public function City() {
        return $this->hasOne(DistrictMaster::class,'id', 'state');
    }
}


