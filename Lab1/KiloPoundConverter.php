<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Kilo Pound Converter</title>
</head>
<body>
  		<h1>Results:</h1>
        <?php
			$poundsResult = 0;
			$kilosResult = 0;
		
		    if (isset($_POST['ConverttoPounds']))
		    {
		        $kilosResult = $_POST['kilos'];
		        
		        $poundsResult = $kilosResult * 2.2;
		        
		        echo "<p>" . $kilosResult . " kilos equals " . round($poundsResult, 2) . " pounds.</p>";
		    }
		    elseif (isset($_POST['ConverttoKilos']))
		    {
		    	$poundsResult = $_POST['pounds'];
		    
		    	$kilosResult = $poundsResult / 2.2;
		    	
		    	echo "<p>" . $poundsResult . " pounds equals " . round($kilosResult, 2) . " kilos.</p>";
		    }
		    else
		    {
		    	echo "<p>Nothing to do.</p>";
		    }
		?>
		<p><a href="KiloPoundForm.html">Go back.</a></p>
</body>
</html>