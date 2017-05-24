<!doctype html>
<html>
<head>
 <title>Lesson 15 copy</title>
</head>
<body>

<?php

 $dbconn=pg_connect("host=localhost dbname=twi2_sql user=postgres password=330117");
 if ($dbconn===false)
 {
  echo "Error opening DB!<br>";
  exit(0);
 }

//pg_query($dbconn,"DROP table dte1234rentiev_sotr");
 
 pg_query($dbconn,"create table dte1234rentiev_sotr (
					nom integer,
						 f varchar,
						 i varchar,
						 o varchar,
						 age integer,
						 salary integer
						);"

		    );



 pg_query($dbconn,"insert into dte1234rentiev_sotr 
			    (nom,f,i,o,age,salary)
			     values 
			    ('6','Terentiev','Dmitry','Michailovich','29','1000000');"
			);
//	 id serial,

//pg_query($dbconn,"DROP table dte123rentiev_sotr");

// pg_query($dbconn,"update dterentiev_sotr set age=31 where f='Terentiev';");

// pg_query($dbconn,"delete from dterentiev_sotr where id=1;");
 
//$qresult=pg_query($dbconn,"select * from dte1234rentiev_sotr;");

$qresult=pg_query($dbconn,"select * from emedvedevGoods7;");

// $qresult=pg_query($dbconn,"select * from dte1234rentiev_sotr order by id;");
 $a=pg_fetch_all($qresult);
 foreach($a as $kk=>$vv)
 {
  echo $kk.": [";
  foreach ($vv as $ll=>$ww)
  {
   echo $ll."=>".$ww." ";
  }
  echo "]<br>";
 }

 pg_close($dbconn);
?>

</body>
</html>