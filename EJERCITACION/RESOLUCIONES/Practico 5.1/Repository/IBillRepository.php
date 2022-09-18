<?php namespace Repository;

use Model\Bill as Bill;
use Model\Item as Item;

interface IBillRepository{
	//Methods
	public function Add(Bill $bill);
	public function AddItem(Bill $bill, Item $item);
	public function Remove($billType, $billNumber);
	public function GetAll();
}

?>