<?php
	/**
     * You are in an infinite 2D grid where you can move in any of the 8 directions:       
     * (x,y) to 
     * (x+1, y), 
     * (x - 1, y), 
     * (x, y+1), 
     * (x, y-1), 
     * (x-1, y-1), 
     * (x+1,y+1), 
     * (x-1,y+1), 
     * (x+1,y-1) 
     * You are given a sequence of points and the order in which you need to cover the points. Give the minimum number of steps in which you can achieve it. You start from the first point.
     * Input:
     * Given two integer arrays A and B, where A[i] is x coordinate and B[i] is y coordinate of ith point respectively.
     * Output:
     * Return an Integer, i.e minimum number of steps.
     * Example:
     * Input : [(0, 0), (1, 1), (1, 2)]
     * Output : 2
     * It takes 1 step to move from (0, 0) to (1, 1). It takes one more step to move from (1, 1) to (1, 2).
     * https://www.interviewbit.com/problems/min-steps-in-infinite-grid/
     * 
     * 
     * Solution approach is use the formula to find the mininum distance between two points in graph
     * 
     * Distance = maximum (absolute value of (X1 cordinate - X2 cordinate), absolute value of (Y1 cordinate - Y2 cordinate))
     * 
	* @input $a -> array of integers
	* @input $b -> array of integers
	*/
	// return an integer //

	function coverPoints($a, $b){
		$n = count($a);
        $minDistance = 0;
        
        if ($n === 1) return 0;
        
        for ($i=0; $i < $n-1; $i++) {
            if (abs($a[$i] - $a[$i+1]) <= abs($b[$i] - $b[$i+1])) {
                $minDistance += abs($b[$i] - $b[$i+1]);    
            } else {
                $minDistance += abs($a[$i] - $a[$i+1]);
            }
        }
        return $minDistance;
	}
    $a = [ 4, 8, -7, -5, -13, 9, -7, 8 ];
    $b = [ 4, -15, -10, -3, -13, 12, 8, -8 ];
    printf(coverPoints($a, $b));
?>