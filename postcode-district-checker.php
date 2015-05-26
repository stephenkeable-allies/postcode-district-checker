<?php
	
/**
 * Check UK postcode district against array
 *
 * Check the district portion (section before space such as NR14) against 
 * array of allowed postcode districts supplied
 *
 * @param	string	$postcode    Input string
 * @param	array	$allowed    Input string
 * @return	mixed	TRUE or FALSE and errors as string
 */

function check_postcode_district_allowed($postcode, $allowed) {
	
	if (is_string($postcode) and !empty(trim($postcode))) {
	
		if (is_array($allowed) and !empty($allowed)) {

			// clean up the postcode so we can compare it
			$postcode = strtoupper($postcode);
			$postcode = preg_replace("/[^A-Za-z0-9]/", '', $postcode);
	
			// remove the Inward code (last three characters)
			$district = substr($postcode, 0, -3);
	
			// check if postcode is in array of allowed
			return in_array($district, $allowed);
			
		} else {
	
			return "Input allowed not array or array is empty";
	
		}
	
	} else {
	
		return "Input postcode not string or string is empty";
	
	}

}

?>