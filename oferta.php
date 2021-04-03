<?php


@include_once(__DIR__.'/modules/start.php');

@include_once(__DIR__.'/classes/Diet.php');

?>

<section class="index--offer">
    <h2>Oferta</h2>
    <div class="card_slider">
        <div class="card_slider--container">
            <?php
                $diets = Diet::getAllDiets();
                foreach($diets as $diet) {
                    ?>
                        <div class="card_slider--item">
                            <div class="card_slider--item--image" style="<?php $diet['diet_photo'] != '' ? 'background-image:`'.$diet['diet_photo'].'`' : '' ?>">
                            
                            </div>
                            <div class="card_slider--item--title">
                                <?php echo $diet['diet_name']?>
                            </div>
                            <div class="card_slider--item--price">
                                <span class="card_slider--item--price__first">od <span class="card_slider--item--price__second"><?php echo $diet['diet_price'] ?>zł</span>
                            </div>
                            <div class="card_slider--item--button">
                                <a href="zamow.php?id=<?php echo $diet['diet_id']?>">We tu klikni</a>
                            </div>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</section>



<?php

@include_once(__DIR__.'/modules/end.php');


?>