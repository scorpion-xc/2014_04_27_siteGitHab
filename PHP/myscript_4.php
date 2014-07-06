<?php
//--------------------вывод многомерного массива

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
					echo "$el\n";
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

//--------------------описание человека с помощью массива
$human=	[
		'physique'=>	[
							'gender'=>	['male'],
							'age'=>	[30],
							'weight'=>	[90],
							'height'=>	[190],
						],
		'preferences'=>	[
							'food'=>	[
											'meat'=>		['chicken', 'beef'],
											'fish'=>		['trout', 'salmon'],
											'fruit'=>		['cherry', 'peach'],
											'vegetables'=>	['cabbage', 'carrot'],
											'trimmings'=>	['rice', 'french fries'],											
										],							
							'hobby'=>	[
											'meat'=>		['chicken', 'beef'],
											'fish'=>		['trout', 'salmon'],
											'fruit'=>		['cherry', 'peach'],
										],
							'music'=>	[
											'classical music'=>		[
																		'Wolfgang Theophilus Mozart'=>		['Don Giovanni', 'Lucio Silla'],
																	],
											'chanson'=>				[
																		'Gregory Lepc'=>		['The best day', 'glass of vodka on the table'],
																	],
											'trance'=>				[
																		'Armin van Buuren'=>		['A State of Trance', 'Intense', 'Imagine'],
																		'Markus Schulz'=>		['Without You Near', 'Scream'],
																	],							
										],
							'sport'=>	['table tennis', 'football', 'swimming'],
						],						
		
		];
	
print_arr ($human);
?>