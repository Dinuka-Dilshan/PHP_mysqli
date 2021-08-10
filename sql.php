<?php

  $connection = mysqli_connect('localhost','Dinuka','abcd1234','php_sql');

  $GLOBALS['connection'] = $connection;
  function executeQuery($query){

    if( $GLOBALS['connection']){
      return mysqli_query( $GLOBALS['connection'],$query);
    }else{
      return 0;
    }
  }

  function closeConnection(){
    mysqli_close( $GLOBALS['connection']);
  }

  function releaseResult($result){
    mysqli_free_result($result);
  }


?>

