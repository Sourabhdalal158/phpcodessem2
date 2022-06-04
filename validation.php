<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body>
      <?php
         $nameErr = $emailErr = $genderErr = $websiteErr = "";
         $name = $email = $gender = $comment = $website = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = input_data($_POST["name"]);
               if (!preg_match("/^[a-zA-Z]*$/",$name)){
                  $nameErr = "Only alphabets are allowed";
               }
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = input_data($_POST["email"]);
               
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["mobileno"])) {
               $mobilenoErr = "Mobile no is required";
            }else {
               $mobleno = input_data($_POST["mobileno"]);
               if (!preg_match ("/^[0-9]*$/", $mobileno)){
                  $mobilenoErr = "Only numeric value allwed";
               }
            }
            
            if (empty($_POST["comment"])) {
               $comment = "";
            }else {
               $comment = input_data($_POST["comment"]);
            }
            
            if (empty($_POST["gender"])) {
               $genderErr = "Gender is required";
            }else {
               $gender = input_data($_POST["gender"]);
            }
         }
         
         function input_data($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
     
      <h2>My form</h2>
     
      <p><span class = "error">* required field.</span></p>
     
      <form method = "post" action = "<?php 
         echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <table>
            <tr>
               <td>Name:</td>
               <td><input type = "text" name = "name">
                  <span class = "error">* <?php echo $nameErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>E-mail: </td>
               <td><input type = "text" name = "email">
                  <span class = "error">* <?php echo $emailErr;?></span>
               </td>
            </tr>
           
            <tr>
               <td>Mobile:</td>
               <td> <input type = "text" name = "website">
                  <span class = "error"><?php echo $websiteErr;?></span>
               </td>
            </tr>
            
            <tr>
               <td>Classes:</td>
               <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
            </tr>
            
            <tr>
               <td>Gender:</td>
               <td>
                  <input type = "radio" name = "gender" value = "female">Female
                  <input type = "radio" name = "gender" value = "male">Male
                  <span class = "error">* <?php echo $genderErr;?></span>
               </td>
            </tr>
				
            <td>
               <input type = "submit" name = "submit" value = "Submit"> 
            </td>
				
         </table>
			
      </form>
      
      <?php
         echo "<h2>Your given values are as:</h2>";
         echo $name;
         echo "<br>";
         
         echo $email;
         echo "<br>";
         
         echo $website;
         echo "<br>";
         
         echo $comment;
         echo "<br>";
         
         echo $gender;
      ?>
   
   </body>
</html>