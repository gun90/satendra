<?php 
      $darr["RNORTH"] = "EAST";
	  $darr["REAST"]  = "SOUTH";
	  $darr["RSOUTH"] = "WEST";
	  $darr["RWEST"]  = "NORTH";
	  
	  $darr["LNORTH"] = "WEST";
	  $darr["LWEST"]  = "SOUTH";
	  $darr["LSOUTH"] = "EAST";
	  $darr["LEAST"]  = "NORTH";
	  
	$stdin = fopen('php://stdin', 'r');
	echo   "Enter Current X Position \n";
	$x     = trim(fgets($stdin));
	echo   "Enter Current Y Position \n";
	$y     = trim(fgets($stdin));
	echo   "Current Direction Facing NORTH,EAST,SOUTH,WEST \n";
	$d     = trim(fgets($stdin)); 
	echo   "How much time you want to walk \n";
	$si    = trim(fgets($stdin)); 
	
	for($i=1;$i<=$si;$i++)
	{
	echo   "Walk String \n";
	$s     = trim(fgets($stdin)); // STRING
	$t     = substr ($s,0,1);     // TURN
	$w     = substr ($s,2,2);     // WALK
	if($t=="L" || $t=="R")
	 {
	  $x1 =  $t.$d;
	  $d  =  $darr[$x1];
	 } 
   else if($t=="W")
     {
       $w     = substr ($s,1,2);     // WALK
	 }
   if($d=="WEST")
	 {
	   $x = $x-$w;	 
	 }
   else if($d=="EAST")
	 {
	   $x = $x+$w;	 
	 }
   else if($d=="NORTH")
	 {
	   $y = $y+$w;	 
	 }  
   else if($d=="SOUTH")
	 {
	   $y = $y-$w;	 
	 }
	echo "(".$x.",".$y.")\n".$d."\n"; 
   }
?>