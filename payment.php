<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="style.css" class="css"/>
</head>

<body>
	<div class="container">
	<div class="main-content">
		<p class="text">Payment</p>
	</div>

	<div class="centre-content" style="text-align: center;">
		<h1 class="price" style="margin-top: 40px;">600<span>/-</span></h1>
		<p class="course">Book ticket now !</p>
	</div>

	<div class="last-content" style="margin-left: 25px;"">
		<button type="button" class="pay-now-btn" style="font-size: 1.5vw;">
			Apply coupons
		</button>
		<button type="button" class="pay-now-btn" style="font-size: 1.5vw;">
			Pay with netbanking
		</button>
	</div>

	<div class="card-details" style="margin-top: 20px; text-align:center ">
		<p><h3>Pay using Credit or Debit card</h3></p>
		<br/>

		<div class="card-number">
		<label> Card number </label>
		<input type="text" class="card-number-field" placeholder="####-####-####-####"/>
		</div>
		
		<br />
		
		<div class="date-number">
		<label> Expiry date </label>
		<input type="text" class="date-number-field" placeholder="MM/YY" />
		</div>
        
		<br />
		
		<div class="cvv-number">
		<label> CVV number </label>
		<input type="text" class="cvv-number-field" placeholder="xxx" />
		</div>
        
		<br />
		
		<div class="nameholder-number">
		<label> Card holder name </label>
		<input type="text" class="card-name-field" placeholder="Enter your Name"/>
		</div>

        <br /><br />
		<button type="submit" class="submit-now-btn" style="width: 280px; height: 35px; margin: auto; font-size: 1.5vw">
	    	Proceed
		</button>
	</div>
	</div>
</body>
</html>
