<?php
if (!empty($newsList)) :
    foreach ($newsList as $item) :?>

        <h1><?=$item['title']?></h1>
        <p><?=$item['content']?></p>
        <hr>

    <?php endforeach;
endif;