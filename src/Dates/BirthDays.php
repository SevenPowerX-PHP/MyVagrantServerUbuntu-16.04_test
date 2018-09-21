<?php
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 21.09.18
	 * Time: 13:00
	 */
	
	namespace Splx\Dates;
	
	
	class BirthDays
	{
		private $birthDate;
		private $todayDate;
		
		/**
		 * BirthDays constructor.
		 * @param $birthDate
		 */
		public function __construct($birthDate)
		{
			$this->birthDate = $birthDate;
			$this->todayDate = date('Y-m-d');
		}
		
		public function findTotalDays()
		{
			$birthTime = strtotime($this->birthDate);
			$todayTime = strtotime($this->todayDate);
			
			$totalSecs = $todayTime -$birthTime;
			$totalDays = floor($totalSecs / 3600 /24);
			
			return $totalDays;
		}
	}