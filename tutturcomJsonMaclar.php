<?php 
$url = 'https://www.tuttur.com/draw/events/type/football';

$cek = file_get_contents($url);

$parse = json_decode($cek);
echo '<table border=1>';
foreach($parse->events as $abc){
	if(isset($abc->code)){
		echo '<tr>';
		echo('<td>Maç kodu :'.$abc->code.'</td>');
		echo('<td>Lig:'.$abc->leagueName.'</td>');
		echo('<td>Ev sahibi:'.$abc->homeTeamName.'</td>');
		echo('<td>Deplasman:'.$abc->awayTeamName.'</td>');
		echo('<td>'.date("d.m.Y",$abc->startDate).'</td>');
		$lim = 0;
		/*
		foreach($abc->odds as $oranAd => $oran){
				if($lim != 5){
						echo $oranAd .':'.$oran.'<br>';
				$lim++;
				}
			}
			*/
		echo '</tr>';
	}
}
echo '<table>';
?>


