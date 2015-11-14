<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Belajar ngeGit kk</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Ini adalah basic penggunaan git.</h1>
	<ul>
		<li>Ini List 12</li>
		<li>Ini List 21</li>
		<li>Ini List 34</li>
		<li>Ini List 55</li>
	</ul>
</body>
</html>
=======
<?php

// require "Bird.php";
// require "Eagle.php";

// $eagle = new Eagle;
// echo $eagle->attack();

// $date = new DateTime();
// echo "Format <pre>".print_r($date->format('d M Y H:i:s'), 1)."</pre>";

class AndyDateTime
{
	private $date;

	private $format;

	public function __construct($strTime = '')
	{
		$this->format = "d M Y H:i:s";

		if(empty($strTime))
			$strTime = date($this->format);

		$this->date = date($this->format, strtotime($strTime));
		return $this->date;
	}

	public function addDays($days)
	{
		$date = $this->date;
		$strDate = strtotime($date);
		$format = $this->format;
		$newDate = date($format, strtotime("+{$days} Days", $strDate));
		return $this->date = $newDate;
	}

	public function addHours($hours)
	{
		$date = $this->date;
		$strDate = strtotime($date);
		$format = $this->format;
		$newDate = date($format, strtotime("+{$hours} Hours", $strDate));
		return $this->date = $newDate;
	}

	public function addMinutes($minutes)
	{
		$date = $this->date;
		$strDate = strtotime($date);
		$format = $this->format;
		$newDate = date($format, strtotime("+{$minutes} Minutes", $strDate));
		return $this->date = $newDate;
	}

	/**
	 * @return int
	 */
	public function hourRangeWith($otherDate)
	{
		$newDate = new AndyDateTime($otherDate);
		$newString = strtotime($otherDate);
		$curString = strtotime($this->date);
		$rangeDate = $curString - $newString;
		// $secInDay = 3600 * 24;
		// $secInYear = 3600;
		$secInHour = 3600;
		$result = $rangeDate / $secInHour;
		$result = abs($result);

		return round($result);
	}

	/**
	 * @return int
	 */
	public function dayRangeWith($otherDate)
	{
		$newDate = new AndyDateTime($otherDate);
		$newString = strtotime($otherDate);
		$curString = strtotime($this->date);
		$rangeDate = $curString - $newString;
		$secInDay = 3600 * 24;
		// $secInYear = 3600;
		// $secInHour = 3600;
		$result = $rangeDate / $secInDay;
		$result = abs($result);

		return round($result);
	}
}

$date = new AndyDateTime();
echo $date->getDate;
echo "<br/>";
// echo "Add 10 Days: ".$date->addDays(10);
// echo "<br/>";
// echo "Add 5 Hours: ".$date->addHours(5);
// echo "<br/>";
// echo "Add 20 Minutes: ".$date->addMinutes(20);
// echo "<br/>";
echo "Hour Range With 2015-10-09 12:00:00 => ".$date->hourRangeWith("2015-10-09 12:00:00")." Hours";
echo "<br/>";
echo "Day Range With 2015-10-11 12:00:00 => ".$date->dayRangeWith("2015-10-11 12:00:00")." Days";
// $date->addHours(10);

// $date2 = new AndyDateTime();
// $date2->hourRangeWith($date); // 10

// echo $date->format('d M Y');
