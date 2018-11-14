<?php
    require_once ('controllers/controller.php');
    require_once ('model/model.php');
    
    $mvc = new MvcController();
    $mvc -> index();
?>