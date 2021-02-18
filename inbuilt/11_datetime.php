<?php
$date1 = new DateTime('2012-11-05 10:44:00', new DateTimeZone('IST'));
$date1->setTimezone(new DateTimeZone('GMT'));

$date2 = new DateTime('2012-11-04 05:04:00');

$interval = date_diff($date1,$date2);

echo $interval->format('%h:%i:%s');