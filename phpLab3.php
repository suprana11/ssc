<html> 
<head> 
<title>Form</title> 
</head> 
<body> 
<form action="form_detail.php" method="POST"> 
Name: 
<input type="text" name="name"/><br> 
Gender: 
<input type="radio" name="gender" id="male" value="Male"> <label for="male"> Male</label> 
<input type="radio" name="gender" id="female" value="Female"> <label for="female">Female</label><br> 
Hobbies: 
<input type="checkbox" name="lang[]" value="Sports">Sports  <input type="checkbox" name="lang[]" value="Music">Music  
<input type="checkbox" name="lang[]" value="Writing">Writing  <input type="checkbox" name="lang[]" value="Dancing">Dancing <br> Country:  
<select name="country" id="cars"> 
<option value="Nepal">Nepal</option> 
<option value="India">India</option> 
<option value="Others">Others</option> 
</select> <br> 
<input type="submit" value="Submit"/> 
</form> 
</body> 
</html> 
 
