<?php

namespace Controllers;


use Models\Teams as ModelTeams;

class Teams extends Controller
{
    public function listTeams() 
    {
        $model = new ModelTeams;
        $teams = $model->getTeams();
        $this->render('views/listTeams.php', [
            // passer les variables à la view
            'teams' => $teams, 
        ]);

    }

    public function showTeam($id) 
    {
        $model = new ModelTeams;
        $teams = $model->getTeam($id);

        $this->render('views/showTeam.php'); 
            // passer les variables à la view
        var_dump($teams);

       

    }
}
