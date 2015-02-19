<?PHP
	try
	{
		if($argc == 2)
		{
			$zoned_str = $argv[1];
		}
		else
		{
			throw new Exception('Usage: php conv_zoned.php [ZONED_STRING_HERE]');
		}
	}
	
	catch(Exception $ex)
	{
		echo $ex . PHP_EOL;
		exit(1);
	}

	try
	{
		echo from_zoned($zoned_str) . PHP_EOL;
	}
	catch(Exception $ex)
	{
		echo $ex . PHP_EOL;
		exit(1);
	}
	
	exit(0);
	
	function from_zoned($str)
	{
		if(!is_string($str))
		{
			throw new Exception('from_zoned() is expecting string parameter.');
		}
		switch(substr($str,-1))
		{
			case '{':
				$str = substr($str, 0, strlen($str)-1) . '0';
				break;
			case 'A':
				$str = substr($str, 0, strlen($str)-1) . '1';
				break;
			case 'B':
				$str = substr($str, 0, strlen($str)-1) . '2';
				break;
			case 'C':
				$str = substr($str, 0, strlen($str)-1) . '3';
				break;
			case 'D':
				$str = substr($str, 0, strlen($str)-1) . '4';
				break;
			case 'E':
				$str = substr($str, 0, strlen($str)-1) . '5';
				break;
			case 'F':
				$str = substr($str, 0, strlen($str)-1) . '6';
				break;
			case 'G':
				$str = substr($str, 0, strlen($str)-1) . '7';
				break;
			case 'H':
				$str = substr($str, 0, strlen($str)-1) . '8';
				break;
			case 'I':
				$str = substr($str, 0, strlen($str)-1) . '9';
				break;
			case '}':
				$str = substr($str, 0, strlen($str)-1) . '0';
				break;
			case 'J':
				$str = '-' . substr($str, 0, strlen($str)-1) . '1';
				break;
			case 'K':
				$str = '-' . substr($str, 0, strlen($str)-1) . '2';
				break;
			case 'L':
				$str = '-' . substr($str, 0, strlen($str)-1) . '3';
				break;
			case 'M':
				$str = '-' . substr($str, 0, strlen($str)-1) . '4';
				break;
			case 'N':
				$str = '-' . substr($str, 0, strlen($str)-1) . '5';
				break;
			case 'O':
				$str = '-' . substr($str, 0, strlen($str)-1) . '6';
				break;
			case 'P':
				$str = '-' . substr($str, 0, strlen($str)-1) . '7';
				break;
			case 'Q':
				$str = '-' . substr($str, 0, strlen($str)-1) . '8';
				break;
			case 'R':
				$str = '-' . substr($str, 0, strlen($str)-1) . '9';
				break;
			default:
				throw new Exception('Unexpected input: ' . $str);
				break;
				
		}
		return intval($str)/100;
	}
?>
