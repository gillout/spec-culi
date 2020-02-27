<?php

use App\App;
use App\Autoloader;
use App\Ctrl\RecetteCtrl;

require '../app/Autoloader.php';

Autoloader::register();

if (!isset($_GET['target']) || $_GET['target'] == '' || $_GET['target'] == 'recette') {
    $ctrl = new recetteCtrl(App::getInstance()->getDb());
    if (!isset($_GET['action'])) {
        $ctrl->index();
    } elseif ($_GET['action'] == 'list') {
        $ctrl->list();
    } elseif ($_GET['action'] == 'show' && isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = intval($_GET['id']);
        $ctrl->show($id);
    }
}
/*
} elseif (isset($_GET['']) && $_GET[''] != '') {

} elseif (isset($_GET['']) && $_GET[''] != '') {

} elseif (isset($_GET['']) && $_GET[''] != '') {

}
*/

