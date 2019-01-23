<?php

namespace Waygou\Gamestage\Models;

use Waygou\Gamestage\Models\Genre;
use Waygou\Gamestage\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Waygou\Gamestage\Abstracts\GamestageModel;

class Game extends GamestageModel
{
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function developer()
    {
        return $this->belongsTo(Company::class);
    }

    public function publisher()
    {
        return $this->belongsTo(Company::class);
    }

    public function re_releaser()
    {
        return $this->belongsTo(Company::class);
    }

    public function licencer()
    {
        return $this->belongsTo(Company::class);
    }
}
