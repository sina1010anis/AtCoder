<?php

$play_balls = [];

$red_ball = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];

$all_balls = ['red' => 1, 'white' => 0, 'blue' => 5, 'green' => 3, 'yellow' => 2, 'miss' => 0, 'brown' => 4, 'pink' => 6, 'black' => 7];

$temp_color = ['blue', 'green', 'yellow', 'brown', 'pink', 'black'];

$wp1 = 'First';

$wp2 = 'Second';

$drwa = 'Tie';

$inv = 'Invalid';

$dp1 = true;

$dp2 = false;

$point = [0, 0];

$f_red = false;

$temp_red_ball = false;

$n = readline();

for ($i = 0; $i < $n; $i++) {

    $play_balls[] = readline(); 

}

for ($i = 0; $i < $n; $i++) {


    if ($dp1) {

        if ($play_balls[$i] == 'red') {

            if (count($red_ball) > 0) {
    
                $point[0] += $all_balls['red'];
    
                $temp_red_ball = true;
        
                $count = count($red_ball)-1;
    
                unset($red_ball[$count]);
        
                
    
            } else {
    
                
    
                $f_red = true;
    
            }
    
        } elseif ($play_balls[$i] == 'white' || $play_balls[$i] == 'miss') {
    
            $dp1 = false;
    
            $dp2 = true;
    
            
    
        } else {
        
            if (count($red_ball) > 0) {
    
                if ($temp_red_ball) {

                    $point[0] += $all_balls[$play_balls[$i]];
    
                    

                } else {

                    $dp1 = false;
    
                    $dp2 = true;
        
                    $temp_red_ball = false;
            
                    

                }
    
            } else {
    
                if (in_array($play_balls[$i],$temp_color)) {
    
                    $key = array_search($play_balls[$i], $temp_color);
    
                    unset($temp_color[$key]);
    
                    
    
                } else {
    
                    echo $inv."\n";
    
                    exit;
    
                }
    
            }
    
        }
    

    } elseif ($dp2) {

        if ($play_balls[$i] == 'red') {

            if (count($red_ball) > 0) {
    
                $point[1] += $all_balls['red'];
    
                $temp_red_ball = true;
        
                $count = count($red_ball)-1;
    
                unset($red_ball[$count]);
        
                
    
            } else {
    
                
        
            }
    
        } elseif ($play_balls[$i] == 'white' || $play_balls[$i] == 'miss') {
    
            $dp1 = true;
    
            $dp2 = false;

            $temp_red_ball = false;
    
            
    
        } else {
        
            if (count($red_ball) > 0) {

                if ($temp_red_ball) {

                    $point[1] += $all_balls[$play_balls[$i]];

                    

                } else {

                    $dp1 = true;
    
                    $dp2 = false;
        
                    $temp_red_ball = false;
            
                    

                }

    
            } else {
    
                if (in_array($play_balls[$i],$temp_color)) {
    
                    $key = array_search($play_balls[$i], $temp_color);
    
                    unset($temp_color[$key]);
    
                    
    
                } else {
    
                    echo $inv;
    
                    exit;
    
                }
    
            }

            $temp_red_ball = false;
    
        }
    

    }
    

}

if ($point[0] == $point[1]) {

    echo $drwa;

    exit;

}

echo ($point[0] > $point[1]) ? $wp1 : $wp2;


