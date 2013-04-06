<?php
class Controler{

	protected $mySmarty; //obiekt smarty
	private $lang;
	private $data;
	private $translate;
	
	public function __construct($lang){
		$this->lang = $lang;
		$this->mySmarty = Bridge::getSmartyInstance();
		$this->randomCert(); //za kazdym razem trzeba wylosowac certyfikat

		$translateArray['pl']['mailSend'] = 'Mail został wysłany';
		$translateArray['pl']['mailFailed'] = 'Niestety nie udało się wysłać maila';
		$translateArray['pl']['wrongCode'] = 'Podano błędny kod z obrazka';				
		
		$translateArray['sk']['mailSend'] = 'Mail bol odoslaný';
		$translateArray['sk']['mailFailed'] = 'Mail bol ne odoslaný';
		$translateArray['sk']['wrongCode'] = 'Kód z obrázka je chybný';

		$this->translate = $translateArray[$this->lang];
	}

	public function randomCert(){
		// losuje certyfikat z dostepnych
		$cert =  array ( array('certImg'=>'tuv.jpg', 'certDesc'=>'Certyfikat TUV posiadany przez firmę Leski'),
						 array('certImg'=>'fair_play.jpg','certDesc'=>'Certyfikat Fair Play posiadany przez firmę Leski'),
						 array('certImg'=>'rzetelna_firma.png','certDesc'=>'Certyfikat Rzetelna Firma - posiadany przez firmę Leski')
						);
		$rand = rand(0, sizeof($cert)-1); 						
		$this->mySmarty->assign('certImg',$cert[$rand]['certImg']);
		$this->mySmarty->assign('certDesc',$cert[$rand]['certDesc']);							
	}

	public function createMenuView(){
		//tworzy tablice menu
		$menu['pl'] = array (
						array ('description' => 'O nas', 'link'=>'historia',
							'pageHTMLdescription' => 'Historia firmy PTH  LESKI, od małego przedsiębiorstwa do prężnej firmy'),
						array ('description' => 'Oferta', 'link'=>'oferta',
							'pageHTMLdescription' => 'Informacje na temat oferty handlowej i wykonawczej firmy PTH LESKI'),
						array ('description' => 'Realizacje', 'link'=>'realizacje',
							'pageHTMLdescription' => 'Spis niektórych realizacji wykonanych przez PTH LESKI'),						
						array ('description' => 'Kolektory słoneczne', 'link'=>'kolektory_sloneczne',
							'pageHTMLdescription' => 'Spis niektórych realizacji wykonanych przez PTH LESKI'),
						array ('description' => 'Certyfikaty', 'link'=>'certyfikaty',
							'pageHTMLdescription' => 'Certyfikaty otrzymane przez firmę leski'),
						array ('description' => 'Referencje', 'link'=>'referencje',
							'pageHTMLdescription' => 'Referencje dla firmy Leski'),
						array ('description' => 'Kontakt', 'link'=>'kontakt',
							'pageHTMLdescription' => 'Kontakt z firmą PTH LESKI - dane teleadresowe oraz formularz kontaktowty'),
						array ('description' => 'Polecamy', 'link'=>'polecamy',
							'pageHTMLdescription' => 'Linki do firm i instytucji współpracujących z PTH LESKI'),
						);
		$menu['sk'] = array (
						array ('description' => 'O nás', 'link'=>'onas',
							'pageHTMLdescription' => 'História firmy PTH  LESKI, od malého podniku po pružnú firmu'),						
						array ('description' => 'Ponuka', 'link'=>'ponuka',
							'pageHTMLdescription' => 'Informácie o obchodnej ponuke a ponuke služieb firmy PTH LESKI'),						
						array ('description' => 'Realizácie', 'link'=>'realizacie',
							'pageHTMLdescription' => 'Zoznam niektorých realizácií dodaných firmou PTH LESKI'),						
						array ('description' => 'Certifikáty', 'link'=>'certyfikaty',
							'pageHTMLdescription' => ''),						
						array ('description' => 'Kontakt', 'link'=>'kontakt',
							'pageHTMLdescription' => 'Kontakt s firmou PTH LESKI – Kontaktné údaje a kontaktný formulár'),						
						array ('description' => 'Odporúčame', 'link'=>'odporucame',
							'pageHTMLdescription' => 'Linki do firiem a inštitúcií, ktoré spolupracujú s firmou PTH LESKI'),						
						);
		$this->data = $menu[$this->lang];

		$imgMinArray = range(1,26);
        for ($index = 0; $index < count($imgMinArray); $index++) {
            $imgMinArray[$index] .= '.jpg';
        }
		shuffle ($imgMinArray);
				
		$this->mySmarty->assign('menuArray', $menu[$this->lang]);
		$this->mySmarty->assign('imgMinArray', $imgMinArray);
	}
		
	public function createRealizacjeView(){
		$imgRealArray = range(1,26);
        for ($index = 0; $index < count($imgRealArray); $index++) {
            $imgRealArray[$index] .= '.jpg';
        }
		shuffle ($imgRealArray);
		$this->mySmarty->assign('imgRealArray', $imgRealArray);
		
		$xml = simplexml_load_file('_config/realizacje_' .$this->lang .'.xml');
		
		$this->mySmarty->assign('wyswietl', (integer)$xml->attributes()->wyswietl[0]);
		$this->mySmarty->assign('realizationArray', $xml->children());		
	}
	
	public function createKontactView(){
		$code=date("igd");
		$code = substr($code,0,5);
		$code = sha1($code .'XASD');
		$code = substr($code,0,18);	
		$this->mySmarty->assign('CAPTCHAkey', $code);
	}

	public function setPageDescription($page){
		//ustawia opis strony - pewnie sie przyda wyszukiwarce
		$aTmp = null;
		for ($i=0, $count=count($this->data); $i<$count; $i++){
			$aTmp[$this->data[$i]['link']] = $this->data[$i]['pageHTMLdescription']; 
		}
		$this->mySmarty->assign('description', $aTmp[$page]);
	}
	
	public function setTitle(){
		$title['pl'] = 'Leski - Przedsiebiorstwo Techniczno-Handlowe Nowy Targ';
		$title['sk'] = 'Leski - Technicko-Obchodný Podnik Nowy Targ';
		$this->mySmarty->assign('title', $title[$this->lang]);		
	}
}
?>