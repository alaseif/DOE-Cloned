<?php
    function getSeason($date) {
        $season_names = array('Winter', 'Spring', 'Summer', 'Fall');  
        if (strtotime($date) < strtotime($date_year.'-03-21') || strtotime($date) >= strtotime($date_year.'-12-21')) {  
            return $season_names[0]; // Must be in Winter
        } elseif (strtotime($date) >= strtotime($date_year.'-09-23')) {  
            return $season_names[3]; // Must be in Fall  
        } elseif (strtotime($date) >= strtotime($date_year.'-06-21')) {  
            return $season_names[2]; // Must be in Summer  
        } elseif (strtotime($date) >= strtotime($date_year.'-03-21')) {  
            return $season_names[1]; // Must be in Spring  
        }  
    }