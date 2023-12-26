<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LysaghtLead extends Model
{
    use HasFactory;

    protected $table = 'lysaght_leads';

    protected $fillable = [
        'campaign_id', 'name', 'phone', 'product', 'quantity', 'email', 'profession', 'company_name', 'state', 'city', 'message', 'ip', 'created_at', 'updated_at'
    ];

    public function State() {
        return $this->hasOne(StateMaster::class,'id', 'state');
    }

    public function City() {
        return $this->hasOne(DistrictMaster::class,'id', 'state');
    }
}
