abstract class MkDatUtil
{


    /**
     * return numero de la semaine dans l'année
     * @param $datestring String
     * @return Integer
     */
    static function getWeekNumber($datestring){
        /** @var \DateTime $date */
        $date= new \DateTime($datestring);
        return  $date->format("W");
    }

    /**
     * return nombre de la semaines entre 2 dates dans l'année
     * @param $date1 Date
     * @param $date2 Date
     * @return Integer
     */
    static function getNumbreOfWeek($date1,$date2){
        $week1=DateUtil::getWeekNumber($date1);
        $week2=DateUtil::getWeekNumber($date2);
        return $week2-$week1+1;
    }
    /**
     * @param $dateday String
     * @return String nom de la semaine 3 lettres
     */
    static function getDayname($dateday){
        $date= new \DateTime($dateday);
       return strftime("%a",$date->getTimestamp());
        return  $date->format("M");
    }
    /**
     * @param $dateday String
     * @return integer numero du jour dans la semaine
     */
    static function getDayNumberInWeek($dateday){
        $date= new \DateTime($dateday);
        return  $date->format("w");
    }

    static function getDayNumberYear($dateday){
        $date= new \DateTime($dateday);
        return  $date->format("z");
    }

    static function getNbDayMonth($dateday){
        $date= new \DateTime($dateday);
        return  $date->format("t");
    }

    static function getSqltoDate($dateday){
        $date= new \DateTime($dateday);
        return  $date->format("d-m-Y");
    }
    static function getDatetoSql($dateday){
        $date= new \DateTime($dateday);
        return  $date->format("Y-m-d");
    }
    static function getNextDay($dateday){
        $date= new \DateTime($dateday);
        $dd=  $date->modify('+1 day');
        return $dd->format("d-m-Y");
    }
    static function getPrevDay($dateday){
        $date= new \DateTime($dateday);
        $dd=  $date->modify('-1 day');
        return $dd->format("d-m-Y");
    }
    static function getNextMonth($date){
        $date= new \DateTime($date);
        $dd=  $date->modify('+1 month');
        return $dd->format("m-Y");
    }
    static function getPrevtMonth($date){
        $date= new \DateTime($date);
        $dd=  $date->modify('-1 month');
        return $dd->format("m-Y");
    }

    static function getInterval($date1,$date2){
        $ago = "";
        if(new \DateTime($date1)) {
            $datetime1= new \DateTime($date1);
            $datetime2= new \DateTime($date2);
            $interval = $datetime1->diff($datetime2);
            $years = $interval->format('%y');
            $months = $interval->format('%m');
            $days = $interval->format('%d');

            if ($years != 0) {
                $ago = $years . ' ans ';
            }
            if ($months != 0)
                $ago .= $months . ' mois ';
            if ($days != 0)
                $ago .= $days . ' jours ';
        }
        return $ago;

    }

    public static function getYear($date)
    {
        if(new \DateTime($date)) {
            $datetime= new \DateTime($date);
            return $datetime->format('Y');

        }
        return false;
    }

}
