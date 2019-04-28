<!DOCTYPE html>
<html>
<head>
	<title>Test component</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>A Little Hermes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet">
</head>
<body>
	<?php
		include('component.php');
		echo $sidebar;

		echo "<style scoped>".$sidebar_style."</style>";
	?>

</body>
</html>
