<?php 
session_start();
$pdo = null;
function connect(){
    global $pdo;
    /* Connect to a MySQL database using driver invocation */
    $dsn = 'mysql:host=localhost;dbname=test;charset=UTF8';
    $user = 'root';
    $password = '';

    try{    
        $pdo = new PDO($dsn, $user, $password);
    }catch (PDOException $e){
        die (message('danger', $e->getMessage()));
    }
 
    if (! $pdo){
        die (message('danger', serialize($pdo->errorInfo())));
    }
}
function message(string $class, string $message){
    print <<<EOD
    <div class="alert alert-$class text-center my-2" role="alert">
    $message
  </div>
  
EOD;
}
function checkToken(){
    if (! isset($_SESSION['token'])) return false;
    if (! isset($_REQUEST['token'])) return false;
    if ($_SESSION['token'] != $_REQUEST['token']) return false;
    return true;
  }
