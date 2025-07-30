<?php
require 'model.php';
require 'view.php';

class Controller {
    public function showMessage() {
        $model = new Model();
        $view = new View();

        $message = $model->getMessage();
        $view->displayMessage($message);
    }
}
?>