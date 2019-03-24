<?php
	
	//Config carbon
	use Carbon\Carbon;

	Carbon::setLocale('es');

	function getDateWithCarbon(){

		$date = Carbon::now()->toDateTimeString();

		return $date;
	} 
?>