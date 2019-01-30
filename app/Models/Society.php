<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;


class Society extends Model
{
    use Uuids;

    protected $fillable = [
        'id', 'name', 'category', 'slug', 'uuid',
        'user_id', 'status', 'description', 
        'linkedin', 'facebook', 'instagram', 
        'contact_mail', 'head_incharge', 'pr_incharge', 'pr_contact_number',
        'head_contact_number', 'website'        
    ];
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
