<html>

<form action='q2_send_mail.php' method="POST">
<style>
     #feedback{
       color: green;
       background-color: lightgray;
       text-shadow: 1px 1px black;
       border-top: 2px solid black;
       position: fixed;
       border-bottom: 2px solid black;
       position:fixed;
       border-right: 2px solid black;
       position: fixed;
       border-left: 2px solid black;
       position: fixed;
       left: 10%

       }
      #page{
        background-color: lightblue;
      }
      #credental{
           border-top: 4px dotted black;
           position: fixed;
           top: 10%;
           border-bottom: 4px dotted black;
           position: fixed;
           border-left: 4px dotted black;
           position: fixed;
           left: 10%;
           border-right: 4px dotted black;
           position: fixed;
           right: 50%;

      }


</style>
<body id="page">
<h2 id="feedback" >FEEDBACK FORM</h2>
<div id="credental">
<pre><h3>NAME :</h3> <input type='text' name='name'></pre>
<pre><h3>EMAIL ID :</h3> <input type='text' name='email'></pre>
<pre><h3>FEEDBACK :</h3> <textarea name="feedback"></textarea></pre>

<pre><input type='submit' name='submit' value="Submit"></pre>

</div>

</body>
</html>

<?php
     if(isset($_POST['submit']))
     {
         $name=$_POST['name'];
         $to=$_POST['email'];
         $feedback=$_POST['feedback'];
         $reply= ("Hello ".$name."<br>Thank for your valuable feedback...");
         $reply_to_admin = ("Feedback from ".$name."( ".$to." )"."<br><br>".$feedback);
         $admin = "admin@gmail.com";
         $ad_sub="Feedback from ".$name;


         if($name && $to && $feedback)
         {
               mail($to," Feedback form " , $reply);
               mail($admin,$ad_sub,$reply_to_admin);
         }

     }


?>
