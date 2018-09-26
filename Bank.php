<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
if(isset($_POST['sub']))
{
	$date=date("Y-m-d",strtotime($_POST['ddi']));
	$monday=date("Y-m-d",strtotime("monday this week",strtotime($date)));
	//echo $date." ";
	//echo $monday;
	if($date==$monday)
	{
		 
		

			$weekDay=date('Y-m-d', strtotime($date. ' + 21 days'));
			echo $weekDay;
			/*$weekDay = weekOfMonth($weekDay);
			echo $weekDay;
		*/
		 
    }
    
	else if($date!=$monday)
	{
		$nonWeekday=date('Y-m-d', strtotime($date. ' + 28 days'));	
		echo date("Y-m-d",strtotime("monday this week",strtotime($nonWeekday)));
	}
}

function weekOfMonth($weekDay)
{
	//Get the first day of the month.
    $firstOfMonth = date("Y-m-01", strtotime($weekDay));
    	//echo $firstOfMonth;
    //Apply above formula.
    	//$collectionW=strtotime(date("Y-m-d",strtotime($weekDay)));
    	//echo $weekDay;q2
    	//echo intval(date("W",$weekDay));
    //return intval(date("W", strtotime($weekDay))) - intval(date("W", strtotime($firstOfMonth))) + 1;
}
?>
