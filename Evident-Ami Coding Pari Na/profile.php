<!DOCTYPE html>
<html>
<head>
    <title >khoj the search </title >
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

        input[type=submit], button {
          background-color: #4CAF50;
          color: white;
          padding: 14px 20px;
          margin: 8px 0;
          border: none;
          cursor: pointer;
          width: 100%;
        }

        a:link, a:visited {
          background-color: white;
          color: black;
          border: 2px solid green;
          padding: 10px 20px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
        }

        a:hover, a:active {
          background-color: red;
          color: white;
        }

        input[type=submit]:hover {
          opacity: 0.8;
        }

        .container {
          padding: 16px;
        }

      </style>

</head>

<body>
<?php 
@session_start(); 
if(isset($_SESSION['user'])){
	echo '<button><a href="logout.php">Logout</a></button>';
}else{
	if(isset($_SESSION['data'])){
  echo '<button><a href="logout.php">Logout</a></button>';
  }else{
    header('Location: login.php');
  }
}
?>
<h2 >Khoj The Search  </h2 >
  <form id="form" method="post" action="operation.php">

    <label for="input"><b>Input Values:</b></label>  
    <input id="input" type="text" placeholder="Enter Your Values" name="input" required />

    <label for="search"><b>Search Value:</b></label>  
    <input id="search" type="number" placeholder="Enter Your Email" name="search" required />

    <input type="submit" name="submit" value="Khoj" onclick="sort()" / >

    <input type="hidden" name="userID" value="<?php echo '$_SESSION["user"]';?>" />
    <input type="hidden" name="data" id="data" required/>
    <input type="hidden" name="result" id="res" required/>

  </form >

<h3>Result:</h3>
<span id="result"></span>

<?php
if(isset($_SESSION['data'])){
  echo '<script>document.getElementById("result").innerHTML ='.$_SESSION["data"].' </script>';
}else{
  header('Location: register.php');
}
?>
  
<script type="text/javascript" >
  function sort() {
    var input = document.getElementById("input").value;
    var str = JSON.stringify(input);
    var res = str.replace(/"/g, "");
    var arr = res.split(",");
    
    arr.sort(function(a, b) {
      return b - a;
    });
    document.getElementById("data").value = arr;
    
    var search  = document.getElementById("search").value;
    var result = arr.includes(search);
    document.getElementById("result").innerHTML = result;
   }
</script>
</body>
</html>

