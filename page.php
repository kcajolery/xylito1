<?php
               $connect = mysqli_connect('localhost', 'root', '@dmin', 'web') or die ("connect fail");
               $query ="select * from board order by number desc";
               $result = mysqli_query($connect,$query);
               $total = mysqli_num_rows($result);

               session_start();

               if(isset($_SESSION['user_id'])) {
                       echo $_SESSION['user_id'];?>님 안녕하세요
                       <br/>
       <?php
               }
               else {
       ?>              <button onclick="location.href='./login.html'">로그인</button>
                       <br />
       <?php   }
       ?>
