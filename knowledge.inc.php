
<?php
$a = 'Таким образом я проверил свои знания на';
$b = 1000;
$c = '%'; 
?>

<?php
  if($_SESSION['data'] >= 15 && $_SESSION['data'] <= 20)
      $d = 'И это число находится между 15 и 20. Прикольно, да?';
  else 
	  $d = 'И это число не находится между 15 и 20. Вот здорово, не правда ли?';
?>

<?php $birthDate = '1992-08-16';
	$time = strtotime($birthDate);
	if(date('m-d') == date('m-d', $time)) {
		$dr = 'Хотя нет, вот еще...' . '<br>' . '/n' . 'Уточнил, значит, сегодняшнюю дату. Оказывается сегодня мой день рождения'; }
		else {
			$dr = 'Хотя нет, вот еще...' . '<br>' . 'Уточнил, значит, сегодняшнюю дату. Оказалось, что сегодня не мой день рождения'; }
?>