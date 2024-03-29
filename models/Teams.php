<?php

namespace Models;
use Entities\Team AS EntityTeam;
class Teams extends Model
{
    public function getTeams()
    {
        $stmt = $this->db->prepare('SELECT * FROM teams');
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function getTeam(int $id)
    {
        $stmt = $this->db->prepare('SELECT * FROM teams WHERE id = :id');
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    
}
