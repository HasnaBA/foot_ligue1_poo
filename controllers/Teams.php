<?php

namespace Controllers;


use Models\Teams as ModelTeams;
use Models\Coachs;
use Models\Players;
use Models\Matchs;
class Teams extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new ModelTeams;
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
            'team' => $this->model->getTeam($id),
            'coach' => (new Coachs)->getCoachByTeam($id),
            'player' => (new Players)->getPlayersByTeam($id),
            'matchPlayed' => (new Matchs)->getMatchsPlayed($id),
            'matchNotPlayed' => (new Matchs)->getMatchsNotPlayed($id) // en vert le model 'new Matchs
        ]);

    }
}
