<?php
  //Abre conexão com o MySql
  function DBConnect(){
    $link = @mysqli_connect("localhost", "root", "", "madden");
    $link->set_charset('utf8');
    return $link;
  }
  //Fecha conexão com o MySql
  function DBClose($link){
    @mysql_close($link);
  }
  //Protege contra SQL Injection
  function DBEscape($dados){
    $link = DBConnect();
    if (!is_array($dados))
      $dados = mysqli_real_escape_string($link, $dados);
    else{
      $arr = $dados;
      foreach ($arr as $key => $value) {
        $key = mysqli_real_escape_string($link, $key);
        $value = mysqli_real_escape_string($link, $value);
        $dados[$key] = $value;
      }
    }
    DBClose($link);
    return $dados;
  }
  //EXecuta Query
  function DBExecute($query){
    $link = DBConnect();
    $result = mysqli_query($link, $query);
    DBClose($link);
    return $result;
  }
?>