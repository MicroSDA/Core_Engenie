<?php
/**
 * Created by PhpStorm.
 * User: bansc
 * Date: 2/15/2018
 * Time: 8:11 PM
 */

class Charts
{

    /**
     * @var
     */
    private $type;


    /**
     * Charts constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type=$type;
    }

    /**
     *
     */
    public function init(){

    }

    /**
     *
     */
    public function draw(){

        switch ($this->type){
            case 'Year':
                $this->yearlyChart();
                break;
            case 'Month':
                $this->monthlyChart();
                break;
            case 'Week':
                $this->weeklyChart();
                break;
            case 'Day':
                $this->dailyChart();
                break;

        }
    }

    /**
     *
     */
    private function dailyChart(){

        $day = date('d');
        $month = date('m');
        $year = date('Y');

        try {

            $charts = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_visitor WHERE Day=?s AND Month=?s AND Year=?s',
                $day, $month, $year);

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        $hour['00'] = 0; $hour['01'] = 0; $hour['02'] = 0; $hour['03'] = 0; $hour['04'] = 0; $hour['05'] = 0;
        $hour['06'] = 0; $hour['07'] = 0; $hour['08'] = 0; $hour['09'] = 0; $hour['10'] = 0; $hour['11'] = 0;
        $hour['12'] = 0; $hour['13'] = 0; $hour['14'] = 0; $hour['15'] = 0; $hour['16'] = 0; $hour['17'] = 0;
        $hour['18'] = 0; $hour['19'] = 0; $hour['20'] = 0; $hour['21'] = 0; $hour['22'] = 0; $hour['23'] = 0;
        foreach ($charts as $value){

            switch($value['Hour']){
                case '00':$hour['00'] +=1;break; case '01':$hour['01'] +=1;break; case '02':$hour['02'] +=1;break; case '03':$hour['03'] +=1;break;
                case '04':$hour['04'] +=1;break; case '05':$hour['05'] +=1;break; case '06':$hour['06'] +=1;break; case '07':$hour['07'] +=1;break;
                case '08':$hour['08'] +=1;break; case '09':$hour['09'] +=1;break; case '10':$hour['10'] +=1;break; case '11':$hour['11'] +=1;break;
                case '12':$hour['12'] +=1;break; case '13':$hour['13'] +=1;break; case '14':$hour['14'] +=1;break; case '15':$hour['15'] +=1;break;
                case '16':$hour['16'] +=1;break; case '17':$hour['17'] +=1;break; case '18':$hour['18'] +=1;break; case '19':$hour['19'] +=1;break;
                case '20':$hour['20'] +=1;break; case '21':$hour['21'] +=1;break; case '22':$hour['22'] +=1;break; case '23':$hour['23'] +=1;break;
            }

        }


        echo '<div id="daily_chart" style="width: 100%; height: 520px;"></div>';
        echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function (){';
        echo ' google.charts.load(\'current\', {\'packages\':[\'corechart\']});
                       google.charts.setOnLoadCallback(drawChart);
                       function drawChart() {
                       var data = google.visualization.arrayToDataTable([
                       [\'Hour\', \'Visitors\'],';
        foreach ($hour as  $key=> $value){

            echo '[\''.$key.':00\','.$value.'],';
        }
        echo ' ]);
                        var options = {
                            title: \'Daily\',
                            hAxis: {title: \'Hours\',  titleTextStyle: {color: \'#333\'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById(\'daily_chart\'));
                        chart.draw(data, options);
                    }';
        echo '});</script>';
    }

    private function weeklyChart(){


        $week_n = date('W');
        $month = date('m');
        $year = date('Y');

        try {

            $charts = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_visitor WHERE WeekN=?s AND Month=?s AND Year=?s',
                $week_n, $month, $year);

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }


        $day['Monday'] = 0; $day['Tuesday'] = 0; $day['Wednesday'] = 0; $day['Thursday'] = 0;
        $day['Friday'] = 0; $day['Saturday'] = 0; $day['Sunday'] = 0;

        foreach ($charts as $value){
            switch ($value['Week']){
                case 'Monday': $day['Monday'] +=1;break; case 'Tuesday': $day['Tuesday'] +=1;break; case 'Wednesday': $day['Wednesday'] +=1;break;
                case 'Thursday': $day['Thursday'] +=1;break; case 'Friday': $day['Friday'] +=1;break; case 'Saturday': $day['Saturday'] +=1;break;
                case 'Sunday': $day['Sunday'] +=1;break;
            }
        }

        echo '<div id="weekly_chart" style="width: 100%; height: 600px;"></div>';
        echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function (){';
        echo ' google.charts.load(\'current\', {\'packages\':[\'corechart\']});
                       google.charts.setOnLoadCallback(drawChart);
                       function drawChart() {
                       var data = google.visualization.arrayToDataTable([
                       [\'Day\', \'Visitors\'],';
        foreach ($day as  $key=> $value){
            echo '[\''.$key.'\','.$value.'],';
        }
        echo ' ]);
                        var options = {
                            title: \'Weekly\',
                            hAxis: {title: \'Days\',  titleTextStyle: {color: \'#333\'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById(\'weekly_chart\'));
                        chart.draw(data, options);
                    }';
        echo '});</script>';
    }


    public function monthlyChart(){

        $month = date('m');
        $year = date('Y');

        try {

            $charts = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_visitor WHERE Month=?s AND Year=?s',$month, $year);

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }


        $week['1']= 0; $week['2']= 0; $week['3']= 0; $week['4']= 0; $week['5']= 0;

        foreach ($charts as $value){

            if((int)$value['Day'] <= 7){
                $week['1'] +=1;
                continue;
            }

            if((int)$value['Day'] > 7 && (int)$value['Day'] <= 14){
                $week['2'] +=1;
                continue;
            }

            if((int)$value['Day'] > 14 && (int)$value['Day'] <= 21){
                $week['3'] +=1;
                continue;
            }

            if((int)$value['Day'] > 21 && (int)$value['Day'] <= 28 ){
                $week['4'] +=1;
                continue;
            }

            if((int)$value['Day'] > 28 ){
                $week['5'] +=1;
                continue;
            }

        }


        echo '<div id="monthly_chart" style="width: 100%; height: 600px;"></div>';
        echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function (){';
        echo ' google.charts.load(\'current\', {\'packages\':[\'corechart\']});
                       google.charts.setOnLoadCallback(drawChart);
                       function drawChart() {
                       var data = google.visualization.arrayToDataTable([
                       [\'Week\', \'Visitors\'],';
        foreach ($week as  $key=> $value){

            echo '[\''.$key.'\','.$value.'],';
        }
        echo ' ]);
                        var options = {
                            title: \'Monthly\',
                            hAxis: {title: \'Weeks\',  titleTextStyle: {color: \'#333\'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById(\'monthly_chart\'));
                        chart.draw(data, options);
                    }';
        echo '});</script>';
    }

    public function yearlyChart(){


        $year = date('Y');

        try {

            $charts = DataBase::getInstance()->getDB()->getAll('SELECT * FROM c_visitor WHERE Year=?s', $year);

        } catch (Exception $exception) {
            echo $exception->getMessage();
        }

        $month['September']=0;$month['October']=0;$month['November']=0;$month['December']=0;$month['January']=0;
        $month['February']=0;$month['March']=0;$month['April']=0;$month['May']=0;$month['June']=0;
        $month['July']=0;$month['August']=0;

        foreach ($charts as $value){

            switch($value['Month']){
                case '01':$month['January']+=1;break; case '02':$month['February']+=1;break; case '03':$month['March']+=1;break;
                case '04':$month['April']+=1;break; case '05':$month['May']+=1;break; case '06':$month['June']+=1;break;
                case '07':$month['July']+=1;break; case '08':$month['August']+=1;break; case '09':$month['September']+=1;break;
                case '10':$month['October']+=1;break; case '11':$month['November']+=1;break; case '12':$month['December']+=1;break;
            }

        }
            echo '<div id="yearly_chart" style="width: 100%; height: 600px;"></div>';
            echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function (){';
            echo ' google.charts.load(\'current\', {\'packages\':[\'corechart\']});
                       google.charts.setOnLoadCallback(drawChart);
                       function drawChart() {
                       var data = google.visualization.arrayToDataTable([
                       [\'Month\', \'Visitors\'],';
            foreach ($month as  $key=> $value){

                echo '[\''.$key.'\','.$value.'],';
            }
            echo ' ]);
                        var options = {
                            title: \'Yearly\',
                            hAxis: {title: \'Months\',  titleTextStyle: {color: \'#333\'}},
                            vAxis: {minValue: 0}
                        };
                        var chart = new google.visualization.AreaChart(document.getElementById(\'yearly_chart\'));
                        chart.draw(data, options);
                    }';
            echo '});</script>';

    }
}