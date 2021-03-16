<?php
include('./config/CDb.php');
$db = new CDb;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = file_get_contents('php://input');
    // decode the json data
    $data =  (array) json_decode($json);
    $data['date_register'] = date('Y-m-d H:i:s');
    $table_insert = $data['table'];
    # quitamos el nombre de la tabla delarreglo de dato
    unset($data['table']);
    $rows_insert = implode(", ",array_keys($data));
    $rows_bind = implode(", :",array_keys($data));
    # Insertamos a la tabla
    $id =    $db->Insert("Insert into {$table_insert} ({$rows_insert}) values
               ( :{$rows_bind})", $data);
    return $id;
        
}else if($_SERVER["REQUEST_METHOD"] == "GET"){
    

}else{

}