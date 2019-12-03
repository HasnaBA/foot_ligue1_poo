<?php $extend = 'public/index.php'; ?>

<div class="container">


    <h1>Liste des équipes</h1>



    <div class="row">
        <?php foreach ($teams as $team) { ?>
            <div class="col-md-4 mt-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?php echo $team['logo']; ?> " alt="team_logo">
                    <div id="card" class="card-body">
                        <div class="text-center">
                            
                            <a href="./teams/<?php echo $team['id']; ?>" class="btn btn-dark bouton">
                                <h3 class="card-title">
                                    <strong><?php echo $team['name'];?></strong>
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>


</div>

