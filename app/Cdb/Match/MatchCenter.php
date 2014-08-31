<?php namespace Cdb\Match;

class MatchCenter
{
    /**
     * @var
     */
    protected $matches = [];

    /**
     * Calculate the won, lost, drawn match count
     *
     * @param $teamId
     * @return array
     */
    public function matchStats($teamId)
    {
        $stats = [
            'won'   => 0,
            'lost'  => 0,
            'drawn' => 0,
        ];

        foreach ($this->matches as $match) {
            $teamScoreField = ($match->home_team_id == $teamId) ? 'home_team_score' : 'away_team_score';
            $otherScoreField = ($match->home_team_id == $teamId) ? 'away_team_score' : 'home_team_score';

            if ($match->$teamScoreField > $match->$otherScoreField) {
                $stats['won'] = $stats['won'] + 1;
            } elseif ($match->$teamScoreField < $match->$otherScoreField) {
                $stats['lost'] = $stats['lost'] + 1;
            } else {
                $stats['drawn'] = $stats['drawn'] + 1;
            }
        }

        return $stats;
    }

    /**
     * Calculate the won, lost, drawn game count
     *
     * @param $teamId
     * @return array
     */
    public function gameStats($teamId)
    {
        $stats = [
            'won'   => 0,
            'lost'  => 0,
            'drawn' => 0,
        ];

        foreach ($this->matches as $match) {
            $teamScoreField = ($match->home_team_id == $teamId) ? 'home_team_score' : 'away_team_score';
            $otherScoreField = ($match->home_team_id == $teamId) ? 'away_team_score' : 'home_team_score';

            foreach ($match->games as $game) {
                if ($game->$teamScoreField > $game->$otherScoreField) {
                    $stats['won'] = $stats['won'] + 1;
                } elseif ($game->$teamScoreField < $game->$otherScoreField) {
                    $stats['lost'] = $stats['lost'] + 1;
                } elseif ($game->$teamScoreField && $game->$teamScoreField == $game->$otherScoreField) {
                    $stats['drawn'] = $stats['drawn'] + 1;
                }
            }
        }

        return $stats;
    }

    public function teamMapStats($teamId)
    {
        $stats = [];

        foreach ($this->matches as $match) {
            $teamScoreField = ($match->home_team_id == $teamId) ? 'home_team_score' : 'away_team_score';
            $otherScoreField = ($match->home_team_id == $teamId) ? 'away_team_score' : 'home_team_score';

            foreach ($match->games as $game) {
                if ($game->$teamScoreField != $game->$otherScoreField && $game->$teamScoreField) {
                    $stats[$game->map->id]['map'] = $game->map;
                    $stats[$game->map->id]['count'] = (isset($stats[$game->map->id]['count'])) ? $stats[$game->map->id]['count'] + 1 : 1;

                    if ($game->$teamScoreField > $game->$otherScoreField) {
                        $stats[$game->map->id]['won'] = (isset($stats[$game->map->id]['won'])) ? $stats[$game->map->id]['won'] + 1 : 1;
                    } elseif ($game->$teamScoreField < $game->$otherScoreField) {
                        $stats[$game->map->id]['lost'] = (isset($stats[$game->map->id]['lost'])) ? $stats[$game->map->id]['lost'] + 1 : 1;
                    } elseif ($game->$teamScoreField && $game->$teamScoreField == $game->$otherScoreField) {
                        $stats[$game->map->id]['drawn'] = (isset($stats[$game->map->id]['drawn'])) ? $stats[$game->map->id]['drawn'] + 1 : 1;
                    }
                }
            }
        }

        usort($stats, function ($a, $b) {
            return $a['count'] < $b['count'];
        });

        return $stats;
    }

    /**
     * @param mixed $matches
     */
    public function setMatches($matches)
    {
        $this->matches = $matches;
    }
}