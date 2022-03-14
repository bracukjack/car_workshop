<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cars extends Model
{

    protected $table = 'cars';
    protected $guarded = [];

    public function services()
    {
        return $this->belongsTo('App\Models\Services','services_id');
    }

    public function owners()
    {
        return $this->belongsTo('App\Models\User','car_owners_id');
    }

    public function mechanics()
    {
        return $this->belongsTo('App\Models\User','mechanics_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
