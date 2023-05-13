<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BranchType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['branch_type'];

    public function scopeAmount($query)
    {
        return $query->where('amount', 1500);
    }
}
