
<?php
$a = 'Мои знания на';
$b = 1000;
$c = '%'; 
?>

<?php
  $price = 15;
  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php $birthDate = '1992-08-16';
	$time = strtotime($birthDate);
	if(date('m-d') == date('m-d', $time)) {
		$dr = 'Сегодня мой день рождения'; }
		else {
			$dr = 'Сегодня не мой день рождения'; }
?>