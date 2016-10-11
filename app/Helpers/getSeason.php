<?php
   
   function getSeason($date="", $hemisphere="northern") {  
      
    // Set $date to today if no date specified  
    if ($date=="") { $date = date("Y-m-d"); }  
      
    // Specify the season names  
    $season_names = array('Winter', 'Spring', 'Summer', 'Fall');  
  
    // Get year of date specified  
    $date_year = date("Y", strtotime($date));  
  
    // Declare season date ranges  
    switch (strtolower($hemisphere)) {  
        case "northern": {  
            if (  
                strtotime($date)<strtotime($date_year.'-03-21') ||   
                strtotime($date)>=strtotime($date_year.'-12-21')  
            ) {   
                return $season_names[0]; // Must be in Winter  
            }elseif (strtotime($date)>=strtotime($date_year.'-09-23')) {  
                return $season_names[3]; // Must be in Fall  
            }elseif (strtotime($date)>=strtotime($date_year.'-06-21')) {  
                return $season_names[2]; // Must be in Summer  
            }elseif (strtotime($date)>=strtotime($date_year.'-03-21')) {  
                return $season_names[1]; // Must be in Spring  
            }  
            break;  
        }  
        case "southern": {  
            if (  
                strtotime($date)<strtotime($date_year.'-03-21') ||   
                strtotime($date)>=strtotime($date_year.'-12-21')  
            ) {   
                return $season_names[2]; // Must be in Summer  
            }elseif (strtotime($date)>=strtotime($date_year.'-09-23')) {  
                return $season_names[1]; // Must be in Spring  
            }elseif (strtotime($date)>=strtotime($date_year.'-06-21')) {  
                return $season_names[0]; // Must be in Winter  
            }elseif (strtotime($date)>=strtotime($date_year.'-03-21')) {  
                return $season_names[3]; // Must be in Fall   
            }  
            break;  
        }  
        case "australia": {  
            if (  
                strtotime($date)<strtotime($date_year.'-03-01') ||   
                strtotime($date)>=strtotime($date_year.'-12-01')  
            ) {   
                return $season_names[2]; // Must be in Summer  
            }elseif (strtotime($date)>=strtotime($date_year.'-09-01')) {  
                return $season_names[1]; // Must be in Spring  
            }elseif (strtotime($date)>=strtotime($date_year.'-06-01')) {  
                return $season_names[0]; // Must be in Winter  
            }elseif (strtotime($date)>=strtotime($date_year.'-03-01')) {  
                return $season_names[3]; // Must be in Fall   
            }  
            break;  
        }  
        default: { echo "Invalid hemisphere set"; }  
    }  
  
}