<?php

use yii\helpers\Url;

foreach ($list as $item): ?>
    <h3>
        <a href="<?= Url::to(['test/view', 'id' => $item['id']]) ?>"><?= $item['title'] ?></a>
    </h3>
    <p>
        <?= $item['content'] ?>
    </p>
    <hr>
<?php endforeach;