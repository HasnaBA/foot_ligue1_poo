<?php $extend = 'public/index.php'; ?>

<style>
    h1 {
        color: black;
        font-family: 'Ibarra Real Nova', serif;
        font-size: 5rem;
        text-align: center;
        margin-top: 100px;
        margin-bottom: 100px;

    }


    #description {
        font-family: 'Lato', sans-serif;
    }

    .logo {
        display: flex;
        text-align: center;
        justify-content: center;
        margin-top: 100px;
        background-color: white ;
    }
    .list-group{
        font-family: 'Ibarra Real Nova', serif;
    }

    h3 {}
</style>


<div class="container text-align center">

    <div class="logo">

        <h1>Tout sur le </h1>
        <img class="card-img-top" style="width: 18rem" src="<?php echo $team['logo']; ?> " alt="team_logo">
    </div>


    <div class="row">
        <div class="col-md-12 ">



            <ul id="description" class="list-group ">
                <li class="list-group-item"></li>
                <li class="list-group-item">Nom :<strong><?php echo $team['name']; ?></strong></li>
                <li class="list-group-item">Fondé en : <strong><?php echo (new \DateTime($team['fundation_date']))->format('d/m/Y'); ?></strong></li>
                <li class="list-group-item">Président :<strong> <?php echo  $team['president']; ?></strong></li>
                <li class="list-group-item">Entraîneur :<strong> <?php echo $coach['name'] ?></strong></li>
            </ul>

        </div>
    </div>

    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h3 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <strong> EFFECTIF <?php echo  $team['short_name']; ?></strong>
                    </button>
                </h3>
            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Numéro</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Pays</th>
                            <th scope="col">Né le</th>
                            <th scope="col">Poste</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($player as $players) { ?>
                            <tr>
                                <th scope="row"><?php echo  $players['number']; ?></th>
                                <th scope="row"><?php echo  $players['name']; ?></th>
                                <th scope="row"><?php echo  $players['nationality']; ?></th>
                                <th scope="row"><?php echo  $players['birthday_date']; ?></th>
                                <th scope="row"><?php echo  $players['poste']; ?></th>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        CALENDRIER
                    </button>
                </h3>
            </div>
            <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordion">
                <table class="table table-dark">
                    <thead>
                        <h4>Résultats 2019-2020</h4>
                        <tr>
                            <th scope="col">date</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($matchPlayed as $matchsPlayed) { ?>
                            <tr>
                                <th scope="row"><?php echo  $matchsPlayed['date']; ?></th>
                                <th scope="row"><?php echo  $matchsPlayed['th_name']; ?></th>
                                <th scope="row"><?php echo  $matchsPlayed['score_home']; ?></th>
                                <th scope="row"><?php echo  $matchsPlayed['score_away']; ?></th>
                                <th scope="row"><?php echo  $matchsPlayed['ta_name']; ?></th>


                            </tr>



                        <?php } ?>
                    </tbody>
                </table>

                <table class="table table-dark">
                    <thead>
                        <h4>Rencontres à venir</h4>

                    <tbody>

                        <?php foreach ($matchNotPlayed as $matchsNotPlayed) { ?>
                            <tr>
                                <th scope="row"><?php echo  $matchsNotPlayed['date']; ?></th>
                                <th scope="row"><?php echo  $matchsNotPlayed['ta_name']; ?></th>
                                <th scope="row"><?php echo  $matchsNotPlayed['score_home']; ?></th>
                                <th scope="row"><?php echo  $matchsNotPlayed['score_away']; ?></th>
                                <th scope="row"><?php echo  $matchsNotPlayed['ta_name']; ?></th>


                            </tr>
                        <?php } ?>
                    </tbody>
                </table>



            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        ADMINISTRATIF
                    </button>
                </h3>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <table class="table">

                    <tbody>

                        <tr>
                            <td>site: <a href="./team/<?php echo $team['link']; ?>"> </a><?php echo $team['link']; ?> </td>
                        </tr>
                        <tr>
                            <td>siège: <br> <strong><?php echo $team['adress']; ?></strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h3 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        STADE
                    </button>
                </h3>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <table class="table">

                    <tbody>

                        <tr>
                            <td>stade: <?php echo $team['stadiumName']; ?> </td>
                        </tr>
                        <tr>
                            <td>siège: <br> <strong><?php echo $team['stadiumAdress']; ?></strong></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>















</div>