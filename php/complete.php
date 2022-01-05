 <?php
include 'connect.php'; 
// echo $_GET['id'];
// echo '<pre>';
// print_r($_GET);


// echo $id;
// $query = $conn->prepare("SELECT completed FROM objects WHERE id='$id'");
// $query->execute();
// $completed=$query->fetch();
if(isset($_GET['id']) && isset($_GET['completed']))
{
    $id=$_GET['id'];
    $completed=$_GET['completed'];
    if($completed == 0)
    {
        $query=$conn->prepare("UPDATE objects SET completed=1 WHERE id='$id' ");
        $query->execute();
        header("Location:todo.php");
    }
  else if($completed == 1)
    {
        $query=$conn->prepare("UPDATE objects SET completed=0 WHERE id='$id' ");
        $query->execute();
        header("Location:todo.php");
    }
    else
    {
        echo "you are not authorized";
    }
}
else
{
    header("Location:todo.php");
    // echo "you are not authorized";
}    
// echo ($completed);
