<?php

namespace App\Services\Modules\MTeam;

use App\Models\Contest;
use App\Models\Team as ModelsTeam;
use App\Models\User as ModelsUser;

class Team implements MTeamInterface
{
    public function __construct(private ModelsTeam $team)
    {
    }

    public function getTotalTeamActive()
    {
        return $this->team::with('contest')
            ->whereHas('contest', function ($q) {
                $q->whereIn('status', [config('util.CONTEST_STATUS_REGISTERING'), config('util.CONTEST_STATUS_GOING_ON')]);
            })
            ->count();
    }

    public function getTeamByContestId($id)
    {
        return $this->team::where("contest_id", $id)->get();
    }
}