<?php 

require_once 'model.php';

function fetchAllFarmers(){
	return showAllFarmers();

}
function fetchFarmers($id){
	return showFarmer($id);

}
