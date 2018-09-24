<?php
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 24.09.18
	 * Time: 21:43
	 */
	
	namespace Splx\Dates;
	
	
	use PHPUnit\Framework\TestCase;
	
	final class BirthDaysTest extends TestCase
	{
		public function testTodayZero(){
			$todayDate = date('Y-d-m');
			$days = new BirthDays($todayDate);
			$todayDate = $days->findTotalDays();
			
			$this->assertEquals(0,$todayDate);
		}
		public function testBackToYear(){
			$todayDate = date('Y-d-m',time()-365*24*3600);
			$days = new BirthDays($todayDate);
			$todayDate = $days->findTotalDays();
			
			$this->assertEquals(365,$todayDate);
		}
	}
