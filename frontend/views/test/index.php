<?php use yii\helpers\Url;

foreach ($list as $item): ?>

    <h1>
        <a href="<?= Url::to(['test/view', 'id' => $item['id']]) ?>"><?= $item['title'] ?></a>
    </h1>
    <p>
        <?= $item['content'] ?>
    </p>

    <hr>

<?php endforeach;
