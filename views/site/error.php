<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception$exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        <?php
        if ($exception->getCode() == 403) {
            echo 'U heeft geen toestemming';
        } else {
            echo 'De bovenstaande fout is opgetreden terwijl de webserver uw verzoek verwerkte.';
        }
        ?>
    </p>
    <p>
        Neem alstublieft contact met ons op als u denkt dat dit een serverfout is. Dank u.
    </p>

</div>