<?php

namespace Models;

class Matchs extends Model
{
    
    
    
    public function getMatchsPlayed ($id) 
    {
    $req = 'SELECT 
    matchs.*, ta.name AS ta_name, th.name AS th_name
    FROM matchs 
    INNER JOIN teams AS th ON matchs.id_team_home = th.id
    INNER JOIN teams AS ta ON matchs.id_team_away = ta.id
    WHERE (th.id = :id_team OR ta.id = :id_team) ';
    
    
    $stmt = $this->db->prepare($req . 'AND matchs.score_home IS NOT NULL');
        
    $stmt->bindValue(':id_team', $id);
    
    $stmt->execute(); 
    
    return $stmt->fetchAll();
    
    }

    public function getMatchsNotPlayed ($id) 
    {
    $req = 'SELECT 
    matchs.*, ta.name AS ta_name, th.name AS th_name
    FROM matchs 
    INNER JOIN teams AS th ON matchs.id_team_home = th.id
    INNER JOIN teams AS ta ON matchs.id_team_away = ta.id
    WHERE (th.id = :id_team OR ta.id = :id_team) ';
    
    
    $stmt = $this->db->prepare($req . 'AND matchs.score_home IS NULL');
        
    $stmt->bindValue(':id_team', $id);
    
    $stmt->execute();
    return $stmt->fetchAll();
    }

       
}