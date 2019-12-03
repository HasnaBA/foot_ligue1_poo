<?php

namespace Controllers;


use Models\Teams as ModelTeams;

class Teams extends Controller
{
    private $model;
    
    public function ___contstruct()
    {
        $this->model= new ModelTeams;
    }
    public function listTeams() 
    {
        $this->render('views/listTeams.php', [
            // passer les variables à la view
            'teams' => $this->model->getTeams() 
        ]);

    }

    public function showTeam(int $id) 
    {
        $this->render('views/showTeam.php', [
            // passer les variables à la view
        'team' => $this->model->getTeam($id)
            
        ]);

    }
}
