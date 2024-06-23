<?php
// 110
// Выведите даты всех выходных дней текущего года в виде списка ul.

function geDayYear($year)
{

    $resultat = [];

    for($mount = 1; $mount <= 12; $mount++){

        $firstDayOnMonth = new DateTime("01-". $mount . "-" . $year);
        $daysInMonth = $firstDayOnMonth->format('t');

        for($i = 1; $i <= $daysInMonth; $i++){

            $daysWeek = $firstDayOnMonth->format('w');

            if($daysWeek == 6 || $daysWeek == 7){

                $resultat[] = $firstDayOnMonth->format('Y-m-d');

            }
            
        }


    }

    return $resultat;

}

var_dump(geDayYear(2022));

    // $firstDayOnMonth = new \DateTime("01-09-2023");
    // $daysInMonth = $firstDayOnMonth->format('t');
    // var_dump($daysInMonth);

?>