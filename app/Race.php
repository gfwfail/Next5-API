<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }

    public function competitors()
    {
        return $this->hasMany(Competitor::class);
    }

    /**
     * scoping by non-suspend race.
     *
     * @param $scope
     * @return Builder
     */
    public function scopeOfAvaliable($scope)
    {
        return $scope->where('suspend', '>', time());
    }
}
