<?php namespace Repository;

use Repository\IBillRepository as IBillRepository;
use Model\Bill as Bill;
use Model\Item as Item;

class BillRepository implements IBillRepository{

    private $billList;

    
    //Methods
    public function Add(Bill $newBill){
        
        $this->RetrieveData();
        
        array_push($this->billList, $newBill);

        $this->SaveData();
    }

    public function AddItem(Bill $bill, Item $item){
        $this->RetrieveData();
        
        foreach($this->billList as $billValue){
            if(($billValue->getBillNumber() == $bill->getBillNumber()) && ($billValue->getBillType() == $bill->getBillType())){
                $billValue->pushItem($item);
                $bill = $billValue;
            }
        }

        $this->SaveData();

        return $bill;
    }

    public function Remove($billType, $billNumber){

        $this->RetrieveData();

        foreach($this->billList as $billValue){

            if($billValue->getBillNumber() == $billNumber && $billValue->getBillType() == trim($billType)){
                $key = array_search($billValue, $this->billList);
                unset($this->billList[$key]);
            }
        }

        $this->SaveData();
    }

    public function GetAll()
    {
        $this->RetrieveData();

        return $this->billList;
    }


    public function GetBill($billType, $billNumber)
    {
        $this->RetrieveData();
        $billExists = null;

        foreach($this->billList as $bill){
            if(($bill->getBillNumber() == $billNumber) && ($bill->getBillType() == $billType)){
                $billExists = $bill;
            }
        }
        
        return $billExists;
    }

    //Json Persistence
    private function SaveData()
    {
        $arrayToEncode = array();

        foreach($this->billList as $bill)
        {
            //Bill
            $valuesArray["billDate"] = $bill->getBillDate();
            $valuesArray["billType"] = $bill->getBillType();
            $valuesArray["billNumber"] = $bill->getBillNumber();

            //Items
            $valuesArray["items"] = array();
            foreach($bill->getItemList() as $item){
                $valuesArray["items"][] = array(
                    'code' => $item->getCode(),
                    'name' => $item->getName(),
                    'description' => $item->getDescription(),
                    'quantity' => $item->getQuantity(),
                    'price' => $item->getPrice()
                );
            }

            array_push($arrayToEncode, $valuesArray);
        }

        $jsonContent = json_encode($arrayToEncode, JSON_PRETTY_PRINT);

        $jsonPath = $this->GetJsonFilePath();

        file_put_contents($jsonPath, $jsonContent);
    }

    private function RetrieveData()
    {
        $this->billList = array();

        $jsonPath = $this->GetJsonFilePath(); //Get correct json path

        $jsonContent = file_get_contents($jsonPath);

        $arrayToDecode = ($jsonContent) ? json_decode($jsonContent, true) : array();

        foreach($arrayToDecode as $valuesArray)
        {
            $bill = new Bill();
            $bill->setBillDate($valuesArray["billDate"]);
            $bill->setBillType($valuesArray["billType"]);
            $bill->setBillNumber($valuesArray["billNumber"]);

            foreach($valuesArray["items"] as $itemValue){
                $item = new Item();
                $item->setCode($itemValue["code"]);
                $item->setName($itemValue["name"]);
                $item->setDescription($itemValue["description"]);
                $item->setQuantity($itemValue["quantity"]);
                $item->setPrice($itemValue["price"]);

                $bill->pushItem($item);

            }
            array_push($this->billList, $bill);
        }
    }
    
    //Need this function to return correct file json path
    function GetJsonFilePath(){

        $initialPath = "Data/bills.json";
        
        if(file_exists($initialPath)){
            $jsonFilePath = $initialPath;
        }else{
            $jsonFilePath = "../".$initialPath;
        }

        return $jsonFilePath;
    }
}

?>

