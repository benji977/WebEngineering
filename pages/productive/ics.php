<?php
 include "..\\..\\includes\\db.inc.php";
                              
      $abfrage = "select exam.name, exam.date, exam.time, exam.place, user.mail, exam.id from exam join user on user.id = exam.contact_id";
         $ergebnis = mysqli_query($link, $abfrage) or die(mysqli_error($link));



header("Content-type:text/calendar; charset=utf-8");
header("Content-Disposition: attachment; filename=Examinations.ics");
 
$eol = "\r\n";

echo 'BEGIN:VCALENDAR'.$eol.'
VERSION:2.0'.$eol.'
PRODID:-//ABC Corporation//NONSGML My Product//EN'.$eol.'
CALSCALE:GREGORIAN'.$eol;

  while ($row = mysqli_fetch_array($ergebnis, MYSQLI_ASSOC)){
  
  $examDate = $row['date'];
  $examTime = $row['time'];
  
  
  
  $icsExamDate = str_replace("-", "", $examDate);
  

  
  if ($examTime == "Morgens"){
    $icsStartTime = "081500";
    $icsEndTime = "121500";
  }else {
  $icsStartTime = "131500";
      $icsEndTime = "171500";
  }
  
  	$dtStart = $icsExamDate."T".$icsStartTime;
		$dtEnd = $icsExamDate."T".$icsEndTime;
		
			$datum = date("Y-m-d"); 
		$zeit = date("H:i:s");
		
				$date = str_replace("-", "", $datum);
		$time = str_replace(":", "", $zeit);
		
			$icsCreated = $date."T".$time;
		$icsLastModified = $date."T".$time;
		$icsDTStamp = $date."T".$time;
		
		$icsName = $row['name'];
		
			
		
		echo'BEGIN:VEVENT'.$eol.
		'DTSTART:'.$dtStart.$eol.
		'DTEND:'.$dtEnd.$eol.
		'LOCATION:'.$row['place'].$eol.
		'DTSTAMP:'.$icsCreated.$eol.
		'SUMMARY:'.$icsName.$eol.
		'END:VEVENT'.$eol;
	}

echo 'END:VCALENDAR';
?>
