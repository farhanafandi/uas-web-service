<?php
namespace Aksesoris;
class Laptop{
	function tambahLaptop($LaptopBrand, $LaptopModel, $LaptopReleaseYear){
		$db = new Db();
		
		$stmt = $db->prepare("INSERT INTO laptops (LaptopBrand, LaptopModel, LaptopReleaseYear) VALUES (?, ?, ?)");
		$stmt->bindParam(1, $LaptopBrand);
		$stmt->bindParam(2, $LaptopModel);
		$stmt->bindParam(3, $LaptopReleaseYear);
		$stmt->execute();
		
		echo "Sukses";
	}
	
	function tambahParts($PartLaptopId, $PartCategory, $PartNumber, $PartDescription){
		$db = new Db();
		
		$stmt = $db->prepare("INSERT INTO parts (PartLaptopId, PartCategory, PartNumber, PartDescription) VALUES (?, ?, ?, ?)");
		$stmt->bindParam(1, $PartLaptopId);
		$stmt->bindParam(2, $PartCategory);
		$stmt->bindParam(3, $PartNumber);
		$stmt->bindParam(4, $PartDescription);
		$stmt->execute();
		
		echo "Sukses";
	}
	
	function tambahCategory($PartCategoryName){
		$db = new Db();
		
		$stmt = $db->prepare("INSERT INTO part_categories (PartCategoryName) VALUES (?)");
		$stmt->bindParam(1, $PartCategoryName);
		$stmt->execute();
		
		echo "Sukses";
	}	
}