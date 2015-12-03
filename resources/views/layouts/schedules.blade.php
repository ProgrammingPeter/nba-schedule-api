<html>
	<head>
		<title> Pick em</title>
	</head>

	<body>

	<?php 
		foreach ($schedules as $schedule) {
			$date = $schedule['date'];

			if (date('Ymd') === date('Ymd', strtotime($date))) {
				echo nl2br($schedule['away_team'] . ' at ' . $schedule['home_team'] . ' ' . $date . ' ' . $schedule['network'] . "\n");
				echo nl2br("\n");
				$teamNames = [];
				foreach ([$schedule['away_team'], $schedule['home_team']] as $teamName) {
					$teamNames[] = $teamName;
				    echo "<form action='checkbox-form.php' method='post'> {$teamName} <input type='checkbox' name={$teamName} value='Yes' />
	    			<input type='submit' name='formSubmit' value='Submit' /> </form>";
    			}
			}

		};
	?>

	</body>

</html>