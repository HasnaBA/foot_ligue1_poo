<?php

namespace Models;

class Players extends Model
{
    public function getPlayersByTeam(int $id)
    {
        $stmt = $this->db->prepare('SELECT 
        players.*, players_has_teams.number
        FROM players 
        INNER JOIN players_has_teams ON players.id = players_has_teams.id_player
        WHERE players_has_teams.id_team = :id 
        AND players_has_teams.number != 0 
        ORDER BY players_has_teams.number');
    
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}


