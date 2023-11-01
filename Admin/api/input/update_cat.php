<?php
include './../../../dbcontext/connect.php';

$cat_id = $_POST['cat_id'];
$inputs = $_POST['inputs'];

foreach ($inputs as $input_id){ 
   //$cmd = "select * from cat_inputs where";
  $cmd = "insert into cat_inputs (cat_id,input_id) values('$cat_id' , '$input_id')";

  if (mysqli_query($con,$cmd))
  {
      header("Location:./../../cat_inputs.php?cat_id=".$cat_id);
  }
  else{
  die( "could not insert news right now : ". mysqli_error($con));
  }
  mysqli_close($con);

}

?>