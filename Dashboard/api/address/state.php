<?php
include './../../../dbcontext/connect.php';
?>
<?php
if(isset($_POST['action']) || $_GET['action'])
{
    if($_GET['action'])
    {
        $action = $_GET['action'];
        if($action == "delete")
        {
            $id = $_GET['id'];
            $cmd = "delete from states where state_id = '$id'";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../states.php?deleted=true");
            }
        }
       
    }

    else if($_POST['action'])
    {
        $action = $_POST['action'];
        if($action == "create")
        {
            $state_name = $_POST['name'];
            $state_coords = $_POST['coords'];
            $cmd = "insert into states (name ,coords) values('$state_name','$state_coords')";
            if(mysqli_query($con,$cmd))
            {
            header("Location:./../../states.php?inserted=true");
            }
        }
        else if($action == "update") 
        {
            
        }
    }


}



   
?>