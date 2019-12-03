<?php

namespace Models;

class Teams extends Model
{
    public function getTeams()
    {
        $stmt = $this->db->prepare('SELECT * FROM teams');
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_CLASS, 'Entities\Team');
    }
    public function getTeam(int $id)
    {
        $stmt = $this->db->prepare('SELECT 
        teams.*, stadiums.id AS stadiumId
        FROM teams ');
        $stmt->execute();
        return $stmt->fetch;
    }
}
