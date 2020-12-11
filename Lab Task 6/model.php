<?php 

require_once 'db_connect.php';


function showAllFarmers(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `user_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showFarmers($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `user_info` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function addFarmer($data){
	$conn = db_conn();
    $selectQuery = "INSERT into user_info (Name, Username, Password)
VALUES (:name, :username, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':username' => $data['username'],
        	':password' => $data['password']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateFarmer($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE user_info set Name = ?, Username = ? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['username'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function fetchuserbyusername($username)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `farmer`.`user_info` where Username = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$row)
        {$data['ID']='0'; return $data;}
    else
        {return $row;}
}
function fetchuser($id)
{
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `farmer`.`user_info` where ID = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$row)
        {$data['id']='0'; return $data;}
    else
        {return $row;}
}