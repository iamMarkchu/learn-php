<?php
/**
 * 时间: 201507
 * 地点: 乐其
 * 目的: 写一个函数 当n=3的时候 输出   1 2 3 2 1
 *                                     2 3 4 3 2
 *                                     3 4 5 4 3
 *                                     2 3 4 3 2
 *                                     1 2 3 2 1
 */

test(5);

function test($n = 3)
{
    //观察得知一共有 2n-1行
    for ($i=0; $i < ($n*2-1); $i++) { 
    	//每行有2n-1个数字
    	if($i > $n-1)
    	{
    		$tmp = ($n*2 -1)-$i-1;
    	}else{
    		$tmp = $i;
    	}
    	for ($j=0; $j < ($n*2-1); $j++) { 
    		//会有一个阈值
    		if($j > $n-1)
    		{
                echo $tmp+($n*2 -1)-($j)."\t"; 
    		}else{
    		    echo $tmp+($j+1). "\t";	
    		}
    		
    	}
    	echo "\n";
    }
}