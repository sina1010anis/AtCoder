<?php

// ------------------------------------------ Start File 1

// [$n, $m] = explode(' ', readline());

// $output = [];

// $str = 'AABB';

// if ($n == 1 and $m > 1) {

//     echo str_repeat('A', $m)."\n";

//     exit();

// } elseif ($m == 1 and $n > 1) {
    
//     for ($i = 0 ; $i < $n ; $i++) {

//         echo 'A'."\n";

//     }

//     exit();

// } elseif ($m == 1 and $n == 1) {

//     echo 'A'."\n";

//     exit();

// } elseif ($n == 2 and $m > 2) {

//     echo str_repeat('A', $m)."\n";

//     echo str_repeat('B', $m)."\n";

//     exit();


// } elseif ($m == 2 and $n > 2) {

//     $m_temp = 1;

//     for ($i = 0 ; $i < $n ; $i++) {

//         echo 'AB'."\n";

//     }

//     exit();

// } elseif ($n == 2 and $m == 2) {

//     echo 'AA'."\n";

//     echo 'BB'."\n";

//     exit();

// } elseif ($m == 3 and $n == 2) {

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     exit();

// } elseif ($n == 3 and $m == 3) {

//     echo 'AAB'."\n";

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     exit();

// } elseif ($n == 3 and $m == 4) {

//     echo '.AAB'."\n";

//     echo 'AABB'."\n";

//     echo 'BBB.'."\n";

//     exit();

// } elseif ($n == 4 and $m == 3) {

//     echo 'AAB'."\n";

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     echo 'B..'."\n";

//     exit();


// } elseif ($n == 4 and $m == 4) {

//     echo '.AAB'."\n";

//     echo 'AABB'."\n";

//     echo 'ABB.'."\n";

//     echo 'BB..'."\n";

//     exit();

// } elseif ($m > 4 and $n > 4) {

//     if ($n == $m) {

//         for ($i = 0 ; $i < $n ; $i++) {

//             if ($i == 0) {
    
//                 $output[] = str_repeat('.', $m-3).'AAB'; 
    
//             } elseif ($i == $n-1) {
    
//                 $output[] = 'BB' . str_repeat('.', $m-2);
    
//             } elseif ($i == $n-2) {
    
//                 $output[] = 'ABB' . str_repeat('.', $m-3);
    
//             } 
    
//             else {
    
//                 $number_befor = $i - 1;
    
//                 $dot_befor = str_repeat('.', $number_befor);
    
//                 $number_after = $number_befor + 4;
                
//                 $dot_after = str_repeat('.', $m - $number_after);
    
//                 $output[] = $dot_after.$str.$dot_befor;
    
//             }
    
//         }

//     } elseif ($n < $m) {

//         for ($i = 0 ; $i < $n ; $i++) {

//             if ($i == 0) {
    
//                 $output[] = str_repeat('.', $m-3).'AAB'; 
    
//             } elseif ($i == $n-1) {
    
//                 $output[] = 'BB' . str_repeat('.', $m-2);
    
//             } elseif ($i == $n-2) {
    
//                 $output[] = 'ABB' . str_repeat('.', $m-3);
    
//             } elseif ($i == $n-3) {

//                 $number_befor = $i - 1;
    
//                 $dot_befor = str_repeat('.', $number_befor);
    
//                 $number_after = $number_befor + 4;
                
//                 $dot_after = str_repeat('A', $m - $number_after);
    
//                 $output[] = $dot_after.$str.$dot_befor;

//             } else {
    
//                 $number_befor = $i - 1;
    
//                 $dot_befor = str_repeat('.', $number_befor);
    
//                 $number_after = $number_befor + 4;
                
//                 $dot_after = str_repeat('.', $m - $number_after);
    
//                 $output[] = $dot_after.$str.$dot_befor;
    
//             }
    
//         }

//     }



// }

// foreach ($output as $val) {

//     echo $val."\n";

// } 

// ------------------------------------------ End File 1


// ------------------------------------------ Start File 2
// [$n, $m] = explode(' ', readline());

// $output = [];

// if ($n == 1 and $m > 1) {

//     echo str_repeat('A', $m)."\n";

//     exit();

// } elseif ($m == 1 and $n > 1) {
    
//     for ($i = 0 ; $i < $n ; $i++) {

//         echo 'A'."\n";

//     }

//     exit();

// } elseif ($m == 1 and $n == 1) {

//     echo 'A'."\n";

//     exit();

// } elseif ($n == 2 and $m > 2) {

//     echo str_repeat('A', $m)."\n";

//     echo str_repeat('B', $m)."\n";

//     exit();


// } elseif ($m == 2 and $n > 2) {

//     $m_temp = 1;

//     for ($i = 0 ; $i < $n ; $i++) {

//         echo 'AB'."\n";

//     }

//     exit();

// } elseif ($n == 2 and $m == 2) {

//     echo 'AA'."\n";

//     echo 'BB'."\n";

//     exit();

// } elseif ($m == 3 and $n == 2) {

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     exit();

// } elseif ($n == 3 and $m == 3) {

//     echo 'AAB'."\n";

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     exit();

// } elseif ($n == 3 and $m == 4) {

//     echo '.AAB'."\n";

//     echo 'AABB'."\n";

//     echo 'BBB.'."\n";

//     exit();

// } elseif ($n == 4 and $m == 3) {

//     echo 'AAB'."\n";

//     echo 'ABB'."\n";

//     echo 'BB.'."\n";

//     echo 'B..'."\n";

//     exit();


// } elseif ($n == 4 and $m == 4) {

//     echo '.AAB'."\n";

//     echo 'AABB'."\n";

//     echo 'ABB.'."\n";

//     echo 'BB..'."\n";

//     exit();

// } elseif ($m > 4 and $n > 4) {

//     for ($j = 0 ; $j < $n ; $j++) {

//         if ($j == 0) {

//             $output[] = str_repeat('A', $m);

//         } elseif ($j == $n-1) {

//             $output[] = 'A' . str_repeat('B', $m-1);

//         } else {

//             $output[] = 'A' . str_repeat('.', $m-2) . 'B';

//         }

//     }


// }

// foreach ($output as $val) {

//     echo $val."\n";

// } 


// ------------------------------------------ End File 2


// ------------------------------------------ Start File 3

// [$n, $m] = explode(' ', readline());

// $output = [];

// if ($n > $m and $m == 1) {

//     for ($i = 0 ; $i < $n ; $i++) {

//         $output[] = 'A';

//     }

// } else {

//     for ($j = 0 ; $j < $n ; $j++) {

//         if ($j == 0) {

//             $output[] = str_repeat('A', $m);

//         } elseif ($j == $n-1) {

//             $output[] = str_repeat('B', $m);

//         } else {

//             $output[] = 'A' . str_repeat('.', $m-2) . 'B';

//         }
        

//     }

// }


// foreach ($output as $val) {

//     echo $val."\n";

// } 



// ------------------------------------------ End File 3