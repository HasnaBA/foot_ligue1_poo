<?php $extend = 'public/index.php'; ?>

<style>
    h1 {
        font-family: 'Ibarra Real Nova', serif;
        font-size: 5rem;
        text-align: center;
        margin-top: 50px;

    }


    #description {
        font-family: 'Lato', sans-serif;
    }

    h3 {}
</style>


<div class="container text-align center">


    <h1>Description de l'équipe</h1>

    <div class="row">
        <div class="col-md-12 ">



            <ul id="description" class="list-group ">
                <li class="list-group-item"></li>
                <li class="list-group-item">Nom :<strong><?php echo $team->getName(); ?></strong></li>
                <li class="list-group-item">Fondé en : <strong><?php echo  $team->getFundation_date(); ?></strong></li>
                <li class="list-group-item">Président :<strong> <?php echo  $team->getPresident(); ?></strong></li>
                <li class="list-group-item">Entraîneur :<strong> <?php echo  $team->getCoach_name(); ?></strong></li>
            </ul>
            <img class="card-img-top" style="width: 18rem" src="<?php echo $team->getLogo(); ?> " alt="team_logo">

        </div>
    </div>









</div>




