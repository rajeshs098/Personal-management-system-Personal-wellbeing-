<?php

require('../src/phpCalendar/Calendar.php');

use benhall14\phpCalendar\Calendar;

$calendar = new Calendar();

$calendar
    ->addEvent(date('Y-10-22'), date('Y-10-22'), 'maha navami', true)
    ->addEvent(date('Y-11-10'), date('Y-11-10'), 'diwali', true)
    ->addEvent(date('Y-03-07'), date('Y-03-07'), 'holi', true)
    ->addEvent(date('Y-01-26'), date('Y-01-26'), 'republic day', true)
    ->addEvent(date('Y-01-15'), date('Y-01-15'), 'sankranthi', true)
    ->addEvent(date('Y-04-14'), date('Y-04-14'), 'ambedkar jayanthi', true)
    ->addEvent(date('Y-09-19'), date('Y-09-19'), 'ganesha chathurthy', true)
    ->addEvent(date('Y-04-21'), date('Y-04-21'), 'EID', true)
    ->addEvent(date('Y-10-02'), date('Y-10-02'), 'gandhi jayanthi', true)
    ->addEvent(date('Y-08-15'), date('Y-08-15'), 'EID', true)
    ->addEvent(date('Y-02-14'), date('Y-02-14'), 'valentine`s day', true)


    
    ->addEvent(date('Y-12-25'), date('Y-12-25'), 'Christmas', true);

#   or
/*
$events = array(
    array(
        'start' => date('Y-01-14'),
        'end' => date('Y-01-14'),
        'summary' => 'My Birthday',
        'mask' => true
    ), 
    array(
        'start' => date('Y-12-25'),
        'end' => date('Y-12-25'),
        'summary' => 'Christmas',
        'mask' => true
    )
);
$calendar->addEvents($events);
*/
?>
<!doctype html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Calendar </title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700" rel="stylesheet"> 

        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

        <link rel="stylesheet" type="text/css" href="css/calendar.css">

    </head>

    <body>
        
        <h1>Calendar </h1>
        
        <div class="container">

            
            
            
    
            <div class="row fix">

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-1-1'), ''); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-2-1'), 'pink'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-3-1'), 'blue'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-4-1'), 'orange'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-5-1'), 'purple'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-6-1'), 'yellow'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-7-1'), 'green'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-8-1'), 'grey'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-9-1'), 'pink'); ?>

                    <hr />    

                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-10-1'), 'blue'); ?>
                
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-4">
                
                    <?php echo $calendar->draw(date('Y-11-1'), 'orange'); ?>
                
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                    
                    <?php echo $calendar->draw(date('Y-12-1'), 'purple'); ?>

                </div>

            </div>


        </div>

    </body>

</html>
