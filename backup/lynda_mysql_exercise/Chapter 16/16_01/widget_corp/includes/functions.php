<?php

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed.");
		}
	}
	
?>
