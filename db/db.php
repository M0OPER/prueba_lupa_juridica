<?php

class Conexion{

  public static function initial(){
    $conexion=new mysqli("localhost", "root", "usbw", "lupa_juridica");
    $conexion->query("SET NAMES 'utf8'");
    if ($conexion->connect_error) {
      die('SERVER ERROR');
    }
    @date_default_timezone_set('America/Bogota');
    @set_time_limit(60);
    @ini_set('max_execution_time', 60);
    @ini_set("session.cookie_lifetime","20000");
    @ini_set("session.gc_maxlifetime","20000");
    @session_start();
    if (!isset($_SESSION["status"])) { $_SESSION["status"] = "OFF";}
    return $conexion;
  }

  public static function logout(){

    if(ini_get("session.use_cookies")){
      $params     = @session_get_cookie_params();
      @setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
      session_destroy();
      //header("Refresh:0");
    }

  }

}

?>
