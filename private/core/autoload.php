<?php 
  require "config.php" ;
  require "funcoes.php" ;
  require "database.php" ;
  require "model.php" ;
  require "controller.php" ;
  require "app.php" ;

  
  spl_autoload_register(function($class_name){

    require "../private/models/". ucfirst($class_name) . ".php";
  });

;?>