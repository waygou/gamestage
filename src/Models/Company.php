<?php

namespace Waygou\Gamestage\Models;

use Waygou\Gamestage\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Waygou\Gamestage\Abstracts\GamestageModel;

class Company extends GamestageModel
{
    public function developers()
    {
        return $this->hasMany(Game::class, 'developer_id');
    }

    public function publishers()
    {
        return $this->hasMany(Game::class, 'publisher_id');
    }

    public function re_releasers()
    {
        return $this->hasMany(Game::class, 're_releaser_id');
    }

    public function licencers()
    {
        return $this->hasMany(Game::class, 'licencer_id');
    }
}
