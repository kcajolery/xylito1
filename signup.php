<?php
  $user_id = $_POST['user_id'];

  $user_pw = $_POST['user_pw'];

  $email = $_POST['email'];

  $connect = mysqli_connect("localhost","root","@dmin","web") or die("fail");

  if(!$connect)
  {
    echo 'error';
  }

  $query = "insert into member(user_id,user_pw,email) values('$user_id','$user_pw','$email')";

  $result = mysqli_query($connect,$query);

  if($result)
  {
    ?>
    <script>
      alert("Success");
      location.replace("./login.html");
    </script>
<?php
  }
  else
  {
    ?>
    <script>
      alert("Fail");
    </script>
<?php
  }
  mysqli_close($connect);
?>
