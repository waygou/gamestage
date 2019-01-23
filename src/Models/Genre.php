<?php

namespace Waygou\Gamestage\Models;

use Waygou\Gamestage\Models\Game;
use Illuminate\Database\Eloquent\Model;
use Waygou\Gamestage\Abstracts\GamestageModel;

class Genre extends GamestageModel
{
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
