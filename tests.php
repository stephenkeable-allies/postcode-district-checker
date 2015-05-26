<pre>
<?php

	require "postcode-district-checker.php";
	
	$allowed_array = array(
		"NR1",
		"NR2",
		"NR13",
		"NR14",
		"NR23"
	);
	
	var_dump(check_postcode_district_allowed("NR14 7PZ", $allowed_array));
	var_dump(check_postcode_district_allowed("NR147PZ", $allowed_array));
	var_dump(check_postcode_district_allowed("NR 14 7 PZ", $allowed_array));
	var_dump(check_postcode_district_allowed("NR1 7XX", $allowed_array));
	
	var_dump(check_postcode_district_allowed("NR41 4XX", $allowed_array));
	var_dump(check_postcode_district_allowed("NR46XX", $allowed_array));
	var_dump(check_postcode_district_allowed("NR11 7XX", $allowed_array));
	var_dump(check_postcode_district_allowed("NR21 7XX", $allowed_array));
	
?>
</pre>