<?php

/**
 * Created by PhpStorm.
 * User: denys
 * Date: 17.04.17
 * Time: 13:01
 */
class AppController
{
    public function actionIndex(){

        echo('<p>actionIndex Controller');

        require_once(ROOT.'/views/app/index.php');
        return true;
    }
}