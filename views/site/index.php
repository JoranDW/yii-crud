<?php

/** @var yii\web\View $this */

$this->title = 'Joran Crud Challange';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4"><?php
            if (!Yii::$app->user->isGuest) {
                echo 'Hello, ' . Yii::$app->user->identity->username . " (" . Yii::$app->user->identity->role . ")";
            } else {
                echo 'Hello, Guest';
            }
            ?>!</h1>

        <p class="lead">Welkom op de (schoolnaam) docenten omgeving!</p>

        <p><a class="btn btn-lg btn-success" href="">Maak kennis met de omgeving</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <h2>Student te laat?</h2>

                <p>Is er een leerling te laat? Meld het dan nu in het leerling te laat form. Zet hier alle informatie
                    erbij en wij doen de rest. </p>
                <br>
                <p> Is de leerling langer dan 5 minuten te laat? Zet het dan in het systeem!</p>

                <p><a class="btn btn-outline-secondary" href="/student">Te laat melden &raquo;</a></p>
            </div>
            <div class="col-lg-4 mb-3">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/forum/">Yii Forum &raquo;</a>
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-outline-secondary" href="https://www.yiiframework.com/extensions/">Yii Extensions
                        &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
