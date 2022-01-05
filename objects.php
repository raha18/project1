<?php 
// $objects =
// [
//     ['name'=>'Task1' , 'dsec'=>'Task1 dsecription' , 'completed'=>true],
//     ['name'=>'Task2' , 'dsec'=>'Task2 dsecription' , 'completed'=>false],
//     ['name'=>'Task3' , 'dsec'=>'Task3 dsecription' , 'completed'=>true],
//     ['name'=>'Task4' , 'dsec'=>'Task4 dsecription' , 'completed'=>false],
//     ['name'=>'Task5' , 'dsec'=>'Task5 dsecription' , 'completed'=>true],
// ]
include 'connect.php';
$query=$conn->prepare("SELECT * FROM objects"); //those two lines are stable in any query made with PDO and data that put in function prepare will be changed otherwise it is stable
$query->execute();
//select * from tasks mean select to me every thing(every columns) from task table
// the benefits of these guerys are collecting all tasks found
$objects=$query->fetchAll();//means get all data that you put in two querys and save them in tasks
?>