<?php 
namespace repositories;

use repositories\IBeers as IBeers;
use model\Beer as Beer;

class BeerRepository implements IBeers{
	
	private $beerList = array();

	public function add(Beer $newBeer){
		$this->retrieveData();
		array_push($this->beerList, $newBeer);
		$this->saveData();
	}

	public function getAll(){
		$this->retrieveData();
		return $this->beerList;
	}
	public function delete($code){
		$this->retrieveData();
		$newList = array();
		foreach ($this->beerList as $beer) {
			if($beer->getCode() != $code){
				array_push($newList, $beer);
			}
		}

		$this->beerList = $newList;
		$this->saveData();
	}

	public function saveData(){
		$arrayToEncode = array();

		foreach ($this->beerList as $beer) {
			$valueArray['code'] = $beer->getCode();
			$valueArray['name'] = $beer->getName();
			$valueArray['description'] = $beer->getDescription();
			$valueArray['type'] = $beer->getType();

			array_push($arrayToEncode, $valueArray);

		}
		$jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);
		file_put_contents('../Data/beer.json', $jsonContent);
	}

	public function retrieveData(){
		$this->beerList = array();

		$jsonPath = $this->GetJsonFilePath();

		// $jsonContent = file_get_contents('../Data/beer.json');
		$jsonContent = file_get_contents($jsonPath);
		
		$arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

		foreach ($arrayToDecode as $valueArray) {
			$beer = new Beer($valueArray['code'],$valueArray['name'],$valueArray['description'],$valueArray['type']);
			
			array_push($this->beerList, $beer);
		}
	}

	//Es necesario para evitar los problemas de requires por el ruteo
    function GetJsonFilePath(){

        $initialPath = "Data/beer.json";
        if(file_exists($initialPath)){
            $jsonFilePath = $initialPath;
        }else{
            $jsonFilePath = "../".$initialPath;
        }

        return $jsonFilePath;
    }
}

 ?>