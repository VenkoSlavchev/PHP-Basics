<?php
function getWednesdays($y, $m)
{
    return new DatePeriod(
        new DateTime("first sunday of $y-$m"),
        DateInterval::createFromDateString('next sunday'),
        new DateTime("next month $y-$m-01")
    );
}
foreach (getWednesdays(2014, 8) as $sunday) {
    echo $sunday->format("jS F Y\n");
}
?>