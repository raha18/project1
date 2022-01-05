<?php
$names = ['ahmed' , 'essam' , 'hossam'];
$names = array('ahmed' , 'essam' , 'hossam');
echo $names[2];
foreach($names as $name)
{
    echo '<h1>'.$name.'</h1>';
} 
$students =
[
    'name' => 'raha',
    'degree' => 15,
];
echo $students['name'];