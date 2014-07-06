<?php
//--------------------вывод многомерного массива (с табуляцией вложенных массивов)

function print_arr ($arr, $n=0)
	{
		$n++;
		foreach($arr as $key => $el)
		{
			if (!is_array($el))
				{
					for ($i=1; $i<$n; $i++)
					{
						echo "\t";
					}
					echo "$key = $el\n";
				}	
			else
				{
					//$n--;
					//$n=1;
					for ($i=1; $i<$n; $i++)
					{
						echo "\t";
					}
					//$n++;
					echo "$key = \n";
					//echo "\t";
					print_arr ($el, $n);
					// foreach($el as $key => $el2)
					// {
						// echo "\t$key = $el2\n";
					// }
				}
			//$n=1;
		}
	}

$arr1=	[
		'fruits'=>		['apple', 'orange', 'cherry'],
		'vegetables'=>	['carrot', 'cabbage', 'potato'],
		'other'=>		[
						'meat'=>	['chicken', 'beef', 'pork'],
						'beans'=>	[],
						],
		];
$arr1[]='something else';
$arr1[fruits][]='lala';
//var_dump($arr1);
	
print_arr ($arr1);
?>