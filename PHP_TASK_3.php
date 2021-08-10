<?php
function isClear($var){

    $var = trim(stripslashes(htmlspecialchars($var))); 
    return $var; 
}


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $name = isClear($_POST["name"]); 
        $email = filter_var($_POST["email"], FILTER_VALIDATE_URL);
        $password = $_POST["password"];
        $address = isClear($_POST["address"]); 
        $url = filter_var($_POST["url"], FILTER_VALIDATE_URL);
        
        
        $errors = [];
        $counter = 0;  

        if(empty($name)){
            $errors["Name"] = "Name is not found";
            $counter++;  
        }
        if(empty($email)){
            $errors["Email"] = "Email is not found"; 
            $counter++; 
        }
        if(empty($password)){
            $error["Password"] = "Password is allowed"; 
            $counter++; 
        }
        if(empty($address) || strlen($address > 10)){
            $errors["Address"] = "Address not found"; 
            $counter++; 
        }
        if(empty($url)){
            $errors["URL"] = "URL is not correct"; 
            $counter++;
        }

        if(count($errors) > 0){

            foreach($errors as $error){
            echo "<p>".$error."</p>";
            }
        }

        else{
            echo "<p>".$name."</p>";
        }


    }


?>

<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email"  name="email">
  </div>
  <div class = "form-group">
    <label>Password</label>
    <input type="password" name="password">    
</div>
<div>
    <label>Address</label>
    <input type="text" name="address">
</div>
<div>
    <label>Gender</label>
    <select name="gender" id="">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>
</div>
<div>
    <label>LINKED-IN URL</label>
    <input type="text" name="url">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
