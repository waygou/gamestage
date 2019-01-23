<?php

namespace Waygou\Gamestage\Abstracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

abstract class GamestageModel extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
