<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Category extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;


    public $timestamps = false;

    public function getLocalKeyName()
    {
        return 'id';
    }

    public function getParentKeyName()
    {
        return "parent_id";
    }

    public function getDepthName()
    {
        return "level";
    }
}
