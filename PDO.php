<?php
  //Opciones de la conexión
  $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
  //Objeto PDO, Controlador de BD, IP del servidor o localhost, nombre de la BD, usuario y contraseña
  $objetoPDO = new PDO('mysql:host=localhost;dbname=casos_covid_quintana_roo','root','',$opciones);

  try{
    $objetoPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $objetoPDO = new PDO('mysql:host=localhost;dbname=casos_covid_quintana_roo','root','');
  }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
  }

    $consulta_Municipio = "SELECT Municipio FROM casos_positivos";
    $resultado_Municipio = $objetoPDO->query($consulta_Municipio);
    $resultado_Municipio->fetch();

    $consulta_positivos = "SELECT Positivos FROM casos_positivos";
    $resultado_positivo = $objetoPDO->query($consulta_positivos);
    $resultado_positivo->fetch();

    $consulta_recuperados = "SELECT Recuperados FROM casos_positivos";
    $resultado_recuperados = $objetoPDO->query($consulta_recuperados);
    $resultado_recuperados->fetch();


    $consulta_defunciones = "SELECT Defunciones FROM casos_positivos";
    $resultado_defunciones = $objetoPDO->query($consulta_defunciones);
    $resultado_defunciones->fetch();

   

    

    

   
   
?>