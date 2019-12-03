<?php $extend = 'public/index.php'; ?>

<style>

body {
    background-image: url('public/img/background1.jpg');
    background-size: cover;
    height: auto;
    width: 100%;
    background-repeat: no-repeat;
    font-family: Georgia, "DejaVu Serif", Norasi, serif;
    

}
#card{
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius:2%;
}

h1 {
    color: white;
    font-family: Georgia, "DejaVu Serif", Norasi, serif;
    font-size: 80px;
    display: flex;
    text-align: center;
    justify-content: center;
    margin-top: 50px;
}

.card {
 height: 100%;
 border-radius: 50px;
}

.card title  {
    
    display:flex ;
    text-align: center;
    justify-content: center;
}

.bouton {
    border-radius: 20px;
    width: 200px;
    height: 100px;
}



</style>

<div class="container">


    <h1>Liste des équipes</h1>



    <div class="row">
        <?php foreach ($teams as $team) { ?>
            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $team->getLogo(); ?> " alt="team_logo">
                    <div id="card" class="card-body">
                        <div class="text-center">
                            
                            <a href="./teams/<?php echo $team->getId(); ?>" class="btn btn-dark bouton"><h5 class="card-title"><strong><?php echo $team->getName();?></strong></h5></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


</div>

