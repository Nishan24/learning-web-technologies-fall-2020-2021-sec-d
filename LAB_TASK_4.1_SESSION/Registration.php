<!DOCTYPE html>
<html>
<head>
   
    <title>Registration form</title>
</head>
<body>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
    
    <form action="">
        
        <table border="2" width="80%">
            
            <tr>
                
                <td>
                    
                    <img src="img/logo.png" alt="Logo">
                    
                   
                    
                </td>
                
                <td align="right">
                    
                    
				<a href ="homepage.php" target="blank"> Home</a> |
                        <a href ="Login.php" target="blank"> Login </a> |
						<a href ="Registration" target="blank"> Registration </a> 
                    
                </td>
 
                
            </tr>
            
            <tr>
                
                <td colspan="2" align ="center" height=200px>
                <form>
                <fieldset  style="width: 400px;">
                    <legend> Registration </legend>
                  Name :  <input type="text" name="name"> <hr>
                  Email : <input type="email" name="email"  > <button title="hint:sample@example.com"><b>i</b></button> <hr> 
                 User Name :  <input type="text" name="UserName"> <hr>
                 Confirm password:  <input type="text" name="password"> <hr>

                 <fieldset style="width:400px">

				<legend>GENDER</legend>

				<input type="radio" name="gender" value= "<?=$m ?>" > Male
				<input type="radio" name="gender"  value="<?=$f ?>" > Female
				<input type="radio" name="gender" value="<?=$o ?>" > Other 
				
				
			</fieldset>
            <fieldset style="width: 400px;">
            

				<legend>DATE OF BIRTH</legend>
				
				

				<input type="text" name="day" size="2">/<input type="text" name="month" size="2">/<input type="text" name="year" size="4">(dd/mm/yyyy)
			
				
			</fieldset>
            <hr>
            <input type="Submit" name="Submit" value="Submit">
            <input type="Reset" name="Reset" value="Reset">




</fieldset>



                </fieldset>
                
                </form>
                
                
                
                
                
                
                </td>
                
            </tr>
            
            <tr>
                
			<td   colspan ="2" align ="center" >    copyright   @ 2017                 </td>
                
            </tr>
            
        </table>
        
    </form>
    
</body>
</html>

