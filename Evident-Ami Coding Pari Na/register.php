<html >
	<head >
		<title >Simple Registraion Form </title >
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <style>
	      body {
	        font-family: Arial, Helvetica, sans-serif;
	      }

	      form {
	        border: 3px solid #f1f1f1;
	      }

	      input {
	        width: 100%;
	        padding: 12px 20px;
	        margin: 8px 0;
	        display: inline-block;
	        border: 1px solid #ccc;
	        box-sizing: border-box;
	      }

	      input[type=submit] {
	        background-color: #4CAF50;
	        color: white;
	        padding: 14px 20px;
	        margin: 8px 0;
	        border: none;
	        cursor: pointer;
	        width: 100%;
	      }

	      input[type=submit]:hover {
	        opacity: 0.8;
	      }

	      .container {
	        padding: 16px;
	      }

	    </style>
	</head >
	<body >
	 <h2 >Registration Form  </h2 >
	 <form method="post" action="procedure.php" >

		<label for="name"><b>Full Name:</b></label>  
		<input type="text" placeholder="Enter Your Name" name="name" required />

		<label for="email"><b>Email-Address:</b></label>  
		<input type="email" placeholder="Enter Your Email" name="email" required />

		<label for="password"><b>Password:</b></label>
		<input type="password" placeholder="Enter Your Password" name="password" required/>

		<label for="confirm"><b>Password:</b></label>
		<input type="password" placeholder="Re-Enter Your Password" name="confirm" required/>

		<input type="submit" name="submit" value="Submit"/ >
	 </form >
	</body >
</html >