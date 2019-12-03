<?php

namespace Models;

class Coachs extends Model
{
    public function getCoachByTeam($idTeam)
    {
        $stmt = $this->db->prepare('SELECT 
            *
            FROM coachs 
            INNER JOIN coachs_has_teams ON coachs.id = coachs_has_teams.id_coach
            WHERE coachs.id = :id_team');
            $stmt->bindValue(':id_team', $idTeam);
            $stmt->execute();
            return $stmt->fetch();
    }
}