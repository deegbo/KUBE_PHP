<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php
$output = 'date';
system($output);
?>
<br>
<br>
<br>
 <?php
$output2 = shell_exec('kubectl cluster-info');
echo "<pre>$output2</pre>";
?>
<br>
<br>
<?php
echo "The current cluster is";
$command = ' kubectl config view  | grep -i name | head -n1';
system($command);
?>
<br>
<br>
<br>
<?php
$command2 = 'hostname';
system($command2);
?>
<br>
<?php
echo "Below kubectl cmd"
?>
<br>

<?php
$date = 'date +%F'
echo "Today's date is:......$date"
?>
 </body>
</html>


