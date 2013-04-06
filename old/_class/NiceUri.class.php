<?php
class NiceUri
{
	//klasa sluzaca do operowania na przyjemnych adresach, a wlasciwie uri

	protected $uri;
	protected $parameters = array();
	protected $zone;
	protected $directory;
	protected $file;
	protected $defaultZone;
	protected $defaultDirectory;
	protected $defaultFile;

	function __construct($uri = '', $defaultZone='pl', $defaultDirectory='historia', $defaultFile='default'){
		$this->defaultZone = $defaultZone;
		$this->defaultDirectory = $defaultDirectory;
		$this->defaultFile = $defaultFile;
		if ($uri != ''){
			$this->uri = $_SERVER['REQUEST_URI'];
		}
	}

	function __get($parameter){
		// zwraca parametr
		if (isset($this->parameters[$parameter])) {
			return $this->parameters[$parameter];
		}
		return 'null';
	}

	function __set($parameter, $value){
		// ustawia parametr
		$this->parameters[$parameter] = $value;
	}


	function parseUri(){
		// rozklada uri na elementy skladowe
		$elements = explode('/', substr($_SERVER['REQUEST_URI'], 1));	
		if (sizeof($elements) >= 3){
			$this->zone = $this->protect($elements[0]);
			$this->directory = $this->protect($elements[1]);
			$this->file = $this->protect($elements[2]);
			for ($i=3; $i < sizeof($elements); $i=$i+2){
				$this->parameters[$this->protect($elements[$i])] = $this->protect($elements[$i+1]);
			}
			if (($this->zone != 'pl') && ($this->zone != 'sk')){
				$this->zone = 'pl';
			}
		}else{
			//jesli sciezka jest niepelna to nalezy ja uzupelnic
			$this->zone = $this->defaultZone;
			$this->directory = $this->defaultDirectory;
			$this->file = $this->defaultFile;
		}
	}

	function createUri(){
		// tworzy uri z podanych parametrow i akcji
		$tmp = '/' .$this->getPath();
		foreach ($this->parameters as $key => $value){
			$tmp .= '/' .$key .'/' .$value;
		}
		$this->uri = $tmp;
		return $this->uri;
	}

	function setZone($zone){
		//definiuje zmienna zone
		$this->zone=$zone;
	}

	function getZone(){
		//zwraca zmienna zone
		return $this->zone;
	}

	function setDirectory($directory){
		//definiuje zmienna directory
		$this->directory=$directory;
	}

	function getDirectory(){
		//zwraca zmienna zone
		return $this->directory;
	}

	function setFile($file){
		//definiuje zmienna file
		$this->file=$file;
	}

	function getFile(){
		//zwraca zmienna zone
		return $this->file;
	}

	function getUri(){
		//zwraca zmienna uri
		return $this->uri;
	}

	function getPath(){
		//pobiera pierwsze 3 parametry w postaci sciezki
		$filePath =  $this->zone .'/' .$this->directory .'/' .$this->file .'.tpl';		
		if (file_exists(getcwd() .'/_smarty/templates/' .$filePath)){
			return $filePath;
		}else{
			return $this->zone .'/errorFile.tpl';
		}
	}

	function setPath($zone, $directory, $file){
		//definuje parametry okreslajace sciezke
		$this->zone = $zone;
		$this->directory = $directory;
		$this->file = $file;
	}

	protected function protect ($tmp){
		//magic quotes na pobranych danych
		return addslashes($tmp);
	}
}
?>