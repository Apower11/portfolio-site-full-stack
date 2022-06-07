<?php 
class MonthAndYear{
    public $month;
    public $year;

    function get_month(){
        return $this->month;
    }

    function get_month_word(){
        $month_word = "";
        switch($this->month){
            case "01":
                $month_word = "January";
                break;
            case "02":
                $month_word = "February";
                break;
            case "03":
                $month_word = "March";
                break;
            case "04":
                $month_word = "April";
                break;
            case "05":
                $month_word = "May";
                break;
            case "06":
                $month_word = "June";
                break;
            case "07":
                $month_word = "July";
                break;
            case "08":
                $month_word = "August";
                break;
            case "09":
                $month_word = "September";
                break;
            case "10":
                $month_word = "October";
                break;    
            case "11":
                $month_word = "November";
                break;   
            case "12":
                $month_word = "December";
                break;   
        }
        return $month_word;
    }

    function get_year(){
        return $this->year;
    }

    function set_month($month){
        $this->month = $month;
    }

    function set_year($year){
        $this->year = $year;
    }
}
?>