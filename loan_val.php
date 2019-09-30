<?php
$name=$_POST['uname'];
$ty=$_POST['ty'];
$bank=$_POST['bname'];
$amount=$_POST['amt'];
$gender=$_POST['gender'];

if($gender=='male')
{
	$gender='Mr.';
}
else
{
	$gender='Ms.';
}
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<h1>Hello!!  $gender  $name </h1>";

if($bank=='ICICI')
{
	ICICI($amount,$ty,$bank);
}

elseif($bank=='HDFC')
{
	HDFC($amount,$ty,$bank);
}
elseif($bank=='PNB')
{
	PNB($amount,$ty,$bank);
}
elseif($bank=='CBI')
{
	CBI($amount,$ty,$bank);
}

function ICICI(float $amt,$ty,$bank)
{	
	if($ty=='HL')
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='EL')
	{
	$ir=10;
	$interest=0.1*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='CL')
	{
	$ir=7.1;
	$interest=0.71*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	</t><th>Duration(Months)</th>	</t><th>Interest Rate(%)</th></t> <th>Interest Amount(Rs.)</th> </t><th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	else
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$tat=$three_m+$amt;
	$six_m=$interest/6;
	$tas=$six_m+$amt;
	$nine_m=$interest/9;
	$tan=$nine_m+$amt;
	$twelve_m=$interest/12;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	
}

function CBI(float $amt,$ty,$bank)
{	
	if($ty=='HL')
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='EL')
	{
	$ir=10;
	$interest=0.1*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='CL')
	{
	$ir=7.1;
	$interest=0.71*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	</t><th>Duration(Months)</th>	</t><th>Interest Rate(%)</th></t> <th>Interest Amount(Rs.)</th> </t><th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	else
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$tat=$three_m+$amt;
	$six_m=$interest/6;
	$tas=$six_m+$amt;
	$nine_m=$interest/9;
	$tan=$nine_m+$amt;
	$twelve_m=$interest/12;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	
}

function PNB(float $amt,$ty,$bank)
{	
	if($ty=='HL')
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='EL')
	{
	$ir=10;
	$interest=0.1*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='CL')
	{
	$ir=7.1;
	$interest=0.71*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	</t><th>Duration(Months)</th>	</t><th>Interest Rate(%)</th></t> <th>Interest Amount(Rs.)</th> </t><th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	else
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$tat=$three_m+$amt;
	$six_m=$interest/6;
	$tas=$six_m+$amt;
	$nine_m=$interest/9;
	$tan=$nine_m+$amt;
	$twelve_m=$interest/12;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	
}

function HDFC(float $amt,$ty,$bank)
{	
	if($ty=='HL')
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='EL')
	{
	$ir=10;
	$interest=0.1*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	elseif($ty=='CL')
	{
	$ir=7.1;
	$interest=0.71*$amt;
	$three_m=$interest/3;
	$six_m=$interest/6;
	$nine_m=$interest/9;
	$twelve_m=$interest/12;
	$tat=$three_m+$amt;
	$tas=$six_m+$amt;
	$tan=$nine_m+$amt;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	</t><th>Duration(Months)</th>	</t><th>Interest Rate(%)</th></t> <th>Interest Amount(Rs.)</th> </t><th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	else
	{
	$ir=9;
	$interest=0.09*$amt;
	$three_m=$interest/3;
	$tat=$three_m+$amt;
	$six_m=$interest/6;
	$tas=$six_m+$amt;
	$nine_m=$interest/9;
	$tan=$nine_m+$amt;
	$twelve_m=$interest/12;
	$tatw=$twelve_m+$amt;
	echo"<h2>Your total amount is = $amt<h2>";
	echo"<h2>Bank : $bank</h2>";
	echo"<table style = 'font-size:18px;align:center;'>
	<tr>	<th>Duration(Months)</th>	<th>Interest Rate(%)</th> <th>Interest Amount(Rs.)</th> <th>Total Amount(Rs.)</th>	</tr>

	<tr>	<td>THREE</td>	<td>$ir</td> <td>$three_m</td> <td>$tat</td>	</tr>
	<tr>	<td>SIX</td>	<td>$ir</td> <td>$six_m</td> <td>$tas</td>	</tr>
	<tr>	<td>NINE</td>	<td>$ir</td> <td>$nine_m</td> <td>$tan</td>	</tr>
	<tr>	<td>TWELVE</td>	<td>$ir</td> <td>$twelve_m</td> <td>$tatw</td>	</tr>
	</table>";
	}
	
}



?>