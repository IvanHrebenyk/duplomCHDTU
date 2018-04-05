<?

class Controller{
	
	public $n = 4;

	public static function sendNumber($number){
		$numberResult = Model::numberSquare($number);
		View::showNumber($numberResult);
	}
	
}

?>