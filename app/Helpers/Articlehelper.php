<?php
/**
 * Created by PhpStorm.
 * User: jacknouatin
 * Date: 12/10/2018
 * Time: 11:38
 */

namespace App\Helpers;


class Articlehelper
{
    /**
     * @param $data
     * @return mixed
     */
    static function formatData($data)
    {
        return $data->format('Y-m-d');
    }

    /**
     * @param $times
     * @return string
     */
    static function times_already($times)
    {
        $tpFormDate = $times;
        $times      =  strtotime($times);
        $diff_times =  time() - $times;

        $hour = explode(" ",$tpFormDate);

        if($diff_times < 5)
        {
            return 'A l\'instant';
        }

        if($diff_times >= 46800 && $diff_times <= 86340){

            return 'Aujourd\'hui  '.$hour[1];

        }else{

            $secs = array(
                31556926    => 'an',
                2629743.83  => 'mois',
                604800      => 'semaine',
                86400       => 'jour',
                3600        => 'heure',
                60          => 'minute',
                1           => 'seconde'
            );


            foreach($secs as $sec => $value)
            {
                $division = $diff_times / $sec;

                if($division >= 1)
                {
                    $times_already  = round($division);
                    $times_type     = $value;

                    if($times_already > 1 and $times_type != 'mois')
                    {
                        $times_type .= 's';
                    }

                    return $times_already. ' ' .$times_type.' déjà';

                }
            }
        }

    }
}