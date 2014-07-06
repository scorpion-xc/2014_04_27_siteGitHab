<?php
//--------------------вывод многомерного массива

function print_tab_1 ($cols, $rows)
	{
		echo "\n\t-----print_tab_1-----\n\n";
		echo "\t";
		for ($f=1; $f<=$cols; $f++)
			{
				echo $f;
				echo "\t";
			}
				echo "\n\n";	
			for ($j=1; $j<=$rows; $j++)
			{
				echo $j;
				echo "\t";
				for ($i=1; $i<=$cols; $i++)
				{
					echo $i*$j;
					echo "\t";
				}
				echo "\n";
			}
		
		//echo "\n";		

	}

function print_tab_2 ($cols, $rows)
	{
		echo "\n\t-----print_tab_2-----\n\n";
		for ($i=1; $i<=$rows; $i++)
		{		

			for ($j=1; $j<=$cols; $j++)
			{
				echo $i*$j;
				echo "\t";
			}
			echo "\n";

		}
		echo "\n";		

	}
 print_tab_1 (9, 9);
 print_tab_2 (9, 9);
?>