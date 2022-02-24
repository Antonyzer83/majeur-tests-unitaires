<?php 
namespace App\Service;

class CalculatorService
{
    public function addition($value1, $value2)
    {
        return $value1 + $value2;
    }
	
	public function substraction($value1, $value2)
	{
		return $value1 - $value2;
	}

	public function division($value1, $value2)
	{
		return $value1 / $value2;
	}
	
	public function square($value1, $value2)
	{
		return $value1 * $value2;
	}
	
	public function modulo($value1, $value2)
	{
		return $value1 % $value2;
	}
	
	public function racineCarre($value)
	{
		return sqrt($value);
	}
}