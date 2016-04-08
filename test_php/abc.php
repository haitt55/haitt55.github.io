<?php 

	// Find the 5th largest number in array
	$arrToFind = [11,22,13,4,5,6,7,8,9,10,11,30,27,12,13,14,15,28,29,16,1,18,19,20,21,22,22,23,34,24,25,26,27,28,29,30];
	function fifthLargest($arr) {
		if (count($arr) < 5) {
			echo 'there are no number to find';
			return;
		}
		$index = -1;
		$count = 0;
		for ($i = 0; $i < count($arr) - 1; $i++) {
			for ($j = count($arr) - 1; $j >= $i+1; $j--) {
				if ($arr[$j] > $arr[$j-1]) {
					$temp = $arr[$j-1];
					$arr[$j-1] = $arr[$j];
					$arr[$j] = $temp;
				}
			}
			if ($i == 0) {
				$index ++;
				$count ++;
			} else {
				$index ++;
				if ($arr[$i] < $arr[$i - 1]) {
					$count ++;
					if ($count == 5) {
						return $arr[$index];
					}
				}
			}
		}
		echo 'there are no number to find';
		return;
	}

	//echo fifthLargest($arrToFind);

	// Hanoi tower
	function hanoi_tower($n, $cocA, $cocB, $cocC) {
		if ($n == 0) {
			echo 'empty dish';
			return;
		}
		if ($n == 1) {
			move_dish(1, $cocA, $cocC);
		} else {
			hanoi_tower($n - 1, $cocA, $cocC, $cocB);
			move_dish($n, $cocA, $cocC);
			hanoi_tower($n - 1, $cocB, $cocA, $cocC);
		}
		return;
	}

	function move_dish($n, $a, $b) {
		echo "chuyen dia thu $n tu $a sang $b \n";
	}

	// hanoi_tower(4, 'coc A', 'coc B', 'coc C');

	// Find ucln of m and n
	function ucln($m, $n) {
		if ($m == 0 || $n == 0) {
			if ($m == 0) {
				return $n;
			} else {
				return $m;
			}
		} else {
			if ($m > $n) {
				return ucln($m%$n, $n);
			} else {
				return ucln($n%$m, $m);
			}
		}
	}

	// echo ucln(108,45);
	// echo ucln(45,108);
	
	// Calculate n!
	function giai_thua($n) {
		if ($n == 0) {
			return 1;
		} else {
			return $n*giai_thua($n-1);
		}
	}

	//echo giai_thua(4);

	// Display matchs
	$a = array('A', 'B', 'C', 'D');

	function display_matchs($a) {
		if (count($a) == 0 || count($a) == 1 ) {
			return;
		}
		if (count($a) == 2) {
			echo $a[0] . $a[1];
			return;
		} else {
			for ($i = 1; $i < count($a); $i++) {
				echo $a[0].$a[$i] . ', ';
			}
			unset($a[0]);
			$newArr = array_values($a);
			display_matchs($newArr);
		}
	}

	function for_matchs($a) {
		if (count($a) == 0 || count($a) == 1 ) {
			return;
		}
		if (count($a) == 2) {
			echo $a[0] . $a[1];
			return;
		} else {
			for ($i = 0; $i < count($a) - 1; $i++) {
				for ($j = $i + 1; $j < count($a); $j++) {
					if ($i == count($a) - 2) {
						echo $a[$i].$a[$j];
						return;
					}
					echo $a[$i].$a[$j] . ', ';
				}
			}
		}
	}

?>