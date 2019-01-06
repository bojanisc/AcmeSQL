<!DOCTYPE html>
<html>
<head>
<title>AcmeSQL</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="index">
<b id="welcome">Welcome to the AcmeSQL demo web application<i>
</b>
<br><br>
This application is used to demonstrate exploitability of certain (esoteric) SQL injection vulnerabilities.
Feel free to test your web application scanner with it - all vulnerabilities are exploitable!<br>
Please choose one of the following options:
<br><br>
<ul>
	<li><a href="transactions0.php?id=1029322123394505">SQL injection 101</a><br>
	SELECT * FROM transactions WHERE id = '<strong>$id</strong>';<br><br>

	<li><a href="transactions.php?id=1029322123394505">SQL injection 101</a><br>
	SELECT * FROM transactions WHERE id = <strong>$id</strong>;<br><br>
	
	<li><a href="transactions1.php?id=1029322123394500">Example with addition</a><br>
	SELECT * FROM transactions WHERE id = <strong>$id</strong>+5;<br><br>
	
	<li><a href="transactions2.php?id=1029322123394505">SQL injection 101 with filtering</a><br>
	SELECT * FROM transactions WHERE id = <strong>$id</strong>;<br>
	Filtered keywords: --, SLEEP, BENCHMARK, UNION, CASE, AND, MAKE, ELT<br><br>
	
	<li><a href="transactions3.php?id=1029322123394505&type=true">No results injection with error clues; injection in IN</a><br>
	SELECT * FROM transactions WHERE source = ' . <strong>$id</strong> . ' AND mobile in ( ' . <strong>$type</strong> . ' );<br>
	Filtered keywords: --, SLEEP, BENCHMARK, UNION, CASE, AND<br><br>
</ul>
</div>
</body>
</html>
