<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Branch extends Model
{
    use HasFactory ,SoftDeletes;

    protected $fillable = [''];



    public function branchType()
    {
        return $this->hasOne(BranchType::class, 'id', 'branch_type_id');
    }
}
