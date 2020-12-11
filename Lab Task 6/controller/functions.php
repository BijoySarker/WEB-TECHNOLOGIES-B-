<?php 

require_once 'model.php';

function fetchAllFarmers(){
	return showAllFarmers();

}
function fetchFarmer($id){
	return showFarmer($id);

}
function fetch_user_byusername($username)
{
	return fetchuserbyusername($username);
}
function fetch_user($id)
{
	return fetchuser($id);
}