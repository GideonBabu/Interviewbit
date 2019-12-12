<?php
    /**
    * Given a matrix of m * n elements (m rows, n columns), return all elements of the matrix in spiral order.
    *
    *    Example:

        Given the following matrix:

        [
            [ 1, 2, 3 ],
            [ 4, 5, 6 ],
            [ 7, 8, 9 ]
        ]
        You should return

        [1, 2, 3, 6, 9, 8, 7, 4, 5]
    */    
    /* @input $a -> constant array of array of integers
    */
    // return an array of integers //

    function spiralOrder($a){
        
        $row = count($a);
        $column = count($a[0]);
        $top = 0;
        $right = $column - 1;
        $bottom = $row - 1;
        $left = 0;                
        $direction = 0;
        $spiral = array();
            
        while ($top <= $bottom && $left <= $right) {
                switch ($direction) {
                case '0': // left to right
                    for ($i = $left; $i <= $right; $i++) array_push($spiral, $a[$top][$i]);
                    $top++;
                    break;
                
                case '1'; // top to bottom
                    for ($i = $top; $i <= $bottom; $i++) array_push($spiral, $a[$i][$right]);
                    $right--;
                    break;

                case '2'; // right to left
                    for ($i = $right; $i >= $left; $i--) array_push($spiral, $a[$bottom][$i]);
                    $bottom--;
                    break;    
                
                case '3'; // bottom to top
                    for ($i = $bottom; $i >= $top; $i--) array_push($spiral, $a[$i][$left]);
                    $left++;;
                    break;
                default:                    
                    break;
            }
            $direction = ($direction + 1) % 4;
        }
        return $spiral;

    }

    $a = [
            [ 1, 2, 3 ],
            [ 4, 5, 6 ],
            [ 7, 8, 9 ]
        ];  
    print_r(spiralOrder($a));

?>