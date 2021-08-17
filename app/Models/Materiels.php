<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiels extends Model
{
    use HasFactory;
    
    public function type(){
        $this->belongsTo(Lot::class, "lot_id");
    }
}
