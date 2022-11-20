<html>
<head>
    <title>Table</title>
    </head>
    <body>
        <?php
 $username = $_POST['username']; 
 $password = $_POST['password'];
 $dle = $_POST['dle'];
 $slc = $_POST['slc'];
 $plus2 = $_POST['2'];
 $bachelors = $_POST['bachelors']; 
 $masters = $_POST['masters'];
 $male = $_POST['male'];
 $female = $_POST['female'];
        
        <table border="1" style="border-collapse:collapse">
            <tr>
                <th>Username</th>
                <th>Password</th>
                 <th>DLE</th>
                 <th>SLC</th>
                 <th>+2</th>
                 <th>Bachelors</th>
                 <th>Masters</th>
                 <th>Male</th>
                  <th>Female</th>
            </tr>
            <tr>
                <th>echo "$username"th>
                <th>echo "$password"</th>
                 <th>echo "$dle"</th>
                 <th>echo "$slc"</th>
                 <th>echo "$plus2"</th>
                 <th>echo "$bachelors"</th>
                 <th>echo "$masters"</th>
                 <th>echo "$male"</th>
                  <th>echo "$female"</th>
            </tr>
            </table>
            
            
            
            
            
            
        
        
        
        
        
        ?/>
    </body>
</html>