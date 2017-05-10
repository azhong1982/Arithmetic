<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of arithmetic
 *
 * @author Administrator
 */
class Arithmetic {

    /**
     * king 猴子选国王算法  
     * 函数的含义说明 
     * 
     * @access public 
     * @param int $n 猴子总数 
     * @param int $m 约定的数
     * @return int 
     */
    function King($n, $m) {
        $monkeys = range(1, $n);

        $i = 1;
        $k = $n;
        //当$m>$n时 取余 减少循环次数
        if ($m > $n) {
            $temp = $m % count($monkeys); //
        } else {

            $temp = $m;
        }

        while (count($monkeys) > 1) {

            //当$temp == 0 时 次数是 count($monkeys)
            if ($temp == 0) {
                $temp = count($monkeys);
            }
            foreach ($monkeys as $key => $val) {
                if (($i ) % $temp == 0) { //当($i )被$temp整除 即数到$m 时 删除当前项 重新计数
                    $i = 1;
                    unset($monkeys[$key]);
                    $num = count($monkeys);
                    if ($num <= 1) {
                        // 当符合条件时 返回 国王数据
                        return array_pop($monkeys);
                    }
                    $temp = $m % $num;
                    if ($temp == 0) {
                        $temp = $num;
                    }
                    continue;
                } else {
                    $i++;
                }
            }
        }
// 当符合条件时 返回 国王数据
        return array_pop($monkeys);
    }

    /**
     * Fibonacci 斐波那契算法 
     * 函数的含义说明 
     * 
     * @access public 
     * @param int $n 输入的数据  
     * @param int $strat 返回的  
     * @param int $end 输入的数据  
     * @return int 
     */
    function Fibonacci($n, $strat = 1, $end = 1) {

        if ($n < 1) {

            return 0;
        }
        if ($n < 2) {

            return $strat;
        } else {

            return $this->Fibonacci($n - 1, $strat, $strat + $end);
        }
    }
/**

	 * 判断完全数

	 * 

	 * @param num

	 * @return

	 */
	function isWanshu(int num) {
		boolean flag = false;
		int yzh = 0;// 各因子之和


		// 循环计算所有因子之和

		for (int i = 1; i <= num / 2; i++) {
			if (num % i == 0) {
				yzh = yzh + i;
			}
		}

		// 判断所有因子之和是否和该数本身相等,相等则为完数

		if (yzh == num) {
			flag = true;
		}

		return flag;
	}
 
	public function jitu(String[] args) {
		for (int ji = 0; ji <= 35; ji++) {
			int tu = 35 - ji;
			if ((2 * ji + 4 * tu) == 94) {
				System.out.println("鸡=" + ji + "\t" + "兔=" + tu);
			}
		
	}
 /**

 * 舍罕王赏麦子 Created by titi on 2017/4/17.

 */
	public function maizi(String[] args) {
		// 麦子数量

		double sum = 0;
		double temp = 1;
		// 国际象棋棋盘共64个格

		for (int i = 1; i <= 64; i++) {
			// 等比数列

			temp = temp * 2;
			sum = sum + temp;
		}
		System.out.println("赏赐的麦子数量:" + sum + "粒");
		// 假设25000粒麦子为1公斤

		double weight = sum / 25000 / 1000;
		System.out.println("约合:" + weight + "吨");
	}

}
/**

 * 木马板凳 Created by titi on 2017/4/18.

 */

	public function  mmbd(String[] args) {
		for (int muma = 1; muma <= 33; muma++) {
			int bandeng = 33 - muma;
			// 木马三只脚,板凳4只脚

			if ((3 * muma + 4 * bandeng) == 100) {
				System.out.println("木马=" + muma + "\t" + "板凳=" + bandeng);
			}
		}
	
}
    /**
     * Binsch 二分查找 
     * 函数的含义说明 
     * 
     * @access public 
     * @param array $array 输入的数组  
     * @param int $strat 低的部分  
     * @param int $end 高的部分
     *   @param int $k 需要查找的数
     * @return int 
     */
    function Binsch($array, $low = 0, $high = 0, $k) {


        if ($low <= $high) {
            $mid = intval(($low + $high) / 2);
            if ($array[$mid] == $k) {
                return $mid;
            } elseif ($k < $array[$mid]) {
                return bin_sch($array, $low, $mid - 1, $k);
            } else {
                return bin_sch($array, $mid + 1, $high, $k);
            }
        }
        return -1;
    }

    /**
     * Binsch 顺序查找 
     * 函数的含义说明      * 
     * @access public 
     * @param array $array 被查找的数组  

     * @param int $k 需要查找的数
     * @return int 
     */
    function Seqch($array, $k) {

        for ($i = 0, $num = count($array); $i < $num; $i++) {
            if ($array[$i] == $k) {//判断是否是查找的值 查找$k的键值
                return $i;
            }
        }

        return -1;
    }

    /**
     * DeleteArrayElement 线性表的删除 
     * 函数的含义说明      * 
     * @access public 
     * @param array $array 被查找的数组  
     * @param int $i 被删除的个数

     * @return array 
     */
    function DeleteArrayElement($array, $i) {
        $len = count($array);
        for ($j = $i; $j < $len; $j ++) {
            $array[$j] = $array [$j + 1];
        }
        array_pop($array);
        return $array;
    }

    /**
     * BubbleSort 冒泡排序 
     * 函数的含义说明      * 
     * @access public 
     * @param array $array 被排序的数组  


     * @return array 
     */
    function BubbleSort($array) {
        $count = count($array); //计算数组个数
        if ($count <= 0) {//当数组不存在时返回 false
            return false;
        }
        for ($i = 0; $i < $count; $i ++) {
            for ($j = $count - 1; $j > $i; $j--) {
                if ($array[$j] < $array [$j - 1]) {//数组交换
                    $tmp = $array[$j];
                    $array[$j] = $array[$j - 1];
                    $array [$j - 1] = $tmp;
                }
            }
        }
        return $array;
    }

    /**
     * QuickSort 快速排序 
     * 快速排序
     * C.R.A.Hoare于1962年提出的一种划分交换排序。
     * 它采用了一种分而治之的策略，
     * 通常称其为分治法(Divide-and-ConquerMethod)。
     * 基本思想：
     * 将原问题分解为若干个规模更小但结构与原问题相似的子问题。
     * 递归地解这些子问题，然后将这些子问题的解组合为原问题的解。
     */
    function QuickSort(&$list, $left = 0, $right = null) {
        if (is_null($right)) {
            $right = count($list) - 1;
        }
        $middle = intval(($left + $right) / 2);
        $pivot = $list[$middle];
        $i = $left;
        $j = $right;
        //partition
        while ($i <= $j) {
            while ($list[$i] < $pivot) {
                $i++;
            }
            while ($list[$j] > $pivot) {
                $j--;
            }
            if ($i <= $j) {
                $temp = $list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $temp;
                $i++;
                $j--;
            }
        }
        //recusion
        if ($left < $j) {
            $this->QuickSort($list, $left, $j);
        }
        if ($i < $right) {
            $this->QuickSort($list, $i, $right);
        }
    }

    /**
     * InsertSort 插入排序 
     * 函数的含义说明      * 
     * @access public 
     * @param array $array 被排序的数组  


     * @return array 
     */
    function InsertSort($array) {
        $len = count($arr);        // 数组个数
        for ($i = 1; $i < $len; $i++) {
            $tmp = $arr[$i];
            //内层循环控制，比较并插入
            for ($j = $i - 1; $j >= 0; $j--) {
                if ($tmp < $arr[$j]) {
                    //发现插入的元素要小，交换位置，将后边的元素与前面的元素互换
                    $arr[$j + 1] = $arr[$j];
                    $arr[$j] = $tmp;
                } else {
                    //如果碰到不需要移动的元素，由于是已经排序好是数组，则前面的就不需要再次比较了。
                    break;
                }
            }
        }
        return $arr;
    }

    /**
     * MergeSort 归并排序  
     * 函数的含义说明      * 
     * @access public 
     * @param array $a 被排序的数组  
     * @param array $b 被排序的数组  

     * @return array 
     */
    function MergeSort($a, $b) {
        $a_i = $b_i = 0;
        $count_a = count($a);
        $count_b = count($b);
        $ret = []; //临时数组;存放排序后的数组
        while ($a_i < $count_a && $b_i < $count_b) {
            if ($a[$a_i] > $b[$b_i]) {
                array_push($ret, $b[$b_i]); //向$ret中插入数据
                $b_i++;
            } else {
                array_push($ret, $a[$a_i]); //向$ret中插入数据
                $a_i++;
            }
        }
        if ($a_i < $count_a) {
            $ret = $this->MergeSort($ret, array_slice($a, $a_i)); //从数组中取出未排序的数组;
        }
        if ($b_i < $count_b) {
            $ret = $this->MergeSort($ret, array_slice($b, $b_i)); //从数组中取出未排序的数组;
        }
        return $ret;
    }

    /**
     * 堆排序
     * 基本思想:
     * 堆排序(HeapSort)是一树形选择排序。
     * 在排序过程中，将R[l..n]看成是一棵完全二叉树的顺序存储结构，
     * 利用完全二叉树中双亲结点和孩子结点之间的内在关系，
     * 在当前无序区中选择关键字最大(或最小)的记录。
     * 　
     * 根结点(亦称为堆顶)的关键字是堆里所有结点关键字中最小者的堆称为小根堆。
     * 根结点(亦称为堆顶)的关键字是堆里所有结点关键字中最大者，称为大根堆。
     */
    function heapSort(array $list) {
        $length = count($list);
        $this->buildHeap($list, $length - 1);
        while (--$length) {
            $temp = $list[0];
            $list[0] = $list[$length];
            $list[$length] = $temp;
            $this->heapAdjust($list, 0, $length);
        }
        return $list;
    }

    function buildHeap(array &$list, $num) {
        for ($i = floor(($num - 1) / 2); $i >= 0; $i--) {
            $this->heapAdjust($list, $i, $num + 1);
        }
    }

    function heapAdjust(array &$list, $i, $num) {
        if ($i > $num / 2) {
            return;
        }
        $key = $i;
        $leftChild = $i * 2 + 1;
        $rightChild = $i * 2 + 2;
        if ($leftChild < $num && $list[$leftChild] > $list[$key]) {
            $key = $leftChild;
        }
        if ($rightChild < $num && $list[$rightChild] > $list[$key]) {
            $key = $rightChild;
        }
        if ($key != $i) {
            $val = $list[$i];
            $list[$i] = $list[$key];
            $list[$key] = $val;
            $this->heapAdjust($list, $key, $num);
            // heapPrint($list);
        }
    }

}

$arithmetic = new Arithmetic();

$list = array(3, 6, 2, 4, 10, 1, 9, 8, 5, 7);
$arithmetic->QuickSort($list);
var_dump($list);
