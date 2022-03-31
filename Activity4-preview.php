<?php

 if(empty($_POST['name']) == false)
 {
     echo $_POST['name']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['username']) == false)
 {
     echo $_POST['username']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['password']) == false)
 {
     echo $_POST['password']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['address']) == false)
 {
     echo $_POST['address']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['country']) == false)
 {
     echo $_POST['country']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['zipcode']) == false)
 {
     echo $_POST['zipcode']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['email']) == false)
 {
     echo $_POST['email']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(empty($_POST['gender']) == false)
 {
     echo $_POST['gender']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }
 if(!empty($_POST['checklist'])) {
    foreach($_POST['checklist'] as $check) {
            echo $check."<br/>";}
    }
    else{
        echo "Language:Not Provided"."<br/>";
    }
 if(empty($_POST['about']) == false)
 {
     echo $_POST['about']."<br/>";
 }
 else{
     echo "Not Provided"."<br/>";
 }




?>