<html>
<head>
<style>
button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>        
<body>
<HR>
    <H1> Obrigado por responder <?php echo $_POST["name"];?><br><H1>
   
<H2> 
Your email address is: <?php echo $_POST["email"]; ?><br>
Your favorite Language Is: <?php echo $_POST["fav_language"]; ?><br>
</H2>
<button class="button button2" onclick="location.href='/'">Voltar</button>

<HR>
</body>
</html>