<?php

	$a[] = "Narayonganj";
	$a[] = "Gazipur";
	$a[] = "Faridpur";
	$a[] = "Tangail";
	$a[] = "Manikganj";

	$b[] = "Narail";
	$b[] = "Jessore";
	$b[] = "Magura";
	$b[] = "Chuadanga";
	$b[] = "Kushtia";
	$b[] = "Jhenaidha";
	$b[] = "Satkhira";



	$q = $_REQUEST["q"];

	$sugg = "";

	if ($q !== "/") {
	  $q = strtolower($q);
	  $sugg="<select>";
	  if($q=="khulna"){
	  foreach($a as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }
	  }
	  if($q=="dhaka"){
	  foreach($b as $name) {
	      $sugg=$sugg."<option>".$name."</option>";
	    }	    
	  }
	  $sugg=$sugg."</select>";
	}
	echo $sugg === "" ? "<select><option>Districts</option></select>" : $sugg;
?> 