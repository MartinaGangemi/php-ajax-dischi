<?php
require __DIR__ . '/../db.php' ;

 ?>

<div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-4 mt-4" >
    <?php foreach ($cdList as $cd) : ?>
    <div class="col" >
        <div class="card rounded-0">
            <!-- img -->
            <div class="box-img">
                <img src="<?= $cd["poster"] ?>" alt="">
            </div>
            <!-- text -->
            <div>
                <h5 class="text-white mt-3 text-uppercase text-center"><?= $cd["title"] ?> </h5>
                <p class="text-center">
                     <?= $cd["author"]?> <br>
                     <?= $cd["year"]?>
                </p>
            </div>
             
        </div>
    </div>
    <?php endforeach ?>
</div>