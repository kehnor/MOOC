<?php
function getData() {
    $array = array(112,500,66,40);
    return $array;
}

function getNameLesson() {
    $array = array('Statistique','Probabilité','Algo','Diagramme');
    return $array;
}

function buildCheckBox($array) {
	echo "<a href='#' class='list-group-item active'>Tout <input title='toggle all' type='checkbox' class='all pull-right'></a>";
	$count = count($array);
	for($i=0; $i<$count;$i++){
		echo "<a href='#' class='list-group-item'>".$array[$i]."<input type='checkbox' value ='".$array[$i]."' class='pull-right'></a>";
	}
}

?>