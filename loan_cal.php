<!DOCTYPE html>
<html>
<head>
<title>Loan Calculator</title>
<link rel="stylesheet" type = "text/css" href="text_box.css">
<style>
h1.ed {
	border:1px solid grey;
	text-align:center;
	text-size:60px;
	font-family:Cambria;
	background-color:rgba(0,0,255,0.3);
	text-size:100px;
	color:gold;
	
}
select {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.3);
}
h2 {
	text-align:left;
	color:gold;
	background-color:rgba(0,0,255,0.3);
}
img {
	padding:4% 4% 4% 4%
	
}

</style>
<body style="background-color:rgba(63,191,127,0.3);">

<h1 class="ed"> Loan Calculator</h1>

<br>
<br>
<br>
<img src = "loan1.jpg" alt = "Loan Image Error" height = "15%" width = "15%" align="right" style="border-radius:50%;">
<form style="float:center;" method = "post" action = "loan_val.php">
<div name="form-handle">
<h1><input type = "text" name = "uname" placeholder = "Enter Your Name"></h1>
<table>
<tr><td> Gender: <input type="radio" name="gender" value="male" checked> Male  <input type="radio" name="gender" value="female"> Female  </td></tr>
</table>
  <br>
<input type="radio" name="ty" value="HL"> House Loan
<br>
<input type="radio" name="ty" value="CL" >Car Loan
<br>
<input type="radio" name="ty" value="EL"> Education Loan
<br>
<input type="radio" name="ty" value=" BL"> Business Loan
<br>
<br>
</div>
<br>
<br>

<h2>PLEASE CHOOSE THE NAME OF THE BANK:</h2>
  <select name="bname">
    
      <option value="ICICI">Industrial Credit and Investment Corporation of India(ICICI)</option>
	 
      <option value="HDFC">Housing Development Finance Corporation Limited(HDFC)</option>
     
	  <option value="CBI">Central Bank of India(CBI)</option>
	  
	  <option value="PNB">Punjab National Bank(PNB)</option>
	   
	  
    </select>
<h2>Enter Amount</h2>
<input type= "number" name ="amt" placeholder="xxxxx">
	<br>
	<br>
	<br>
<input type = "submit" value = "CALCULATE" style="box-sizing: border-box;align:center;">
</form>
<img src="loan.jpg.jpg" alt="LOAN IMAGE ERROR" height="10%" width="30%" align="center" style="border-radius:8px; display: block;margin-left: auto;
  margin-right: auto;
  width: 50%;">
</body>
</html>
