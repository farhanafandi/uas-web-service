<?php
namespace Aksesoris;
class Db extends \PDO {
	function __construct(){
		parent::__construct('mysql:host=localhost;dbname=uas_webservice','root','');
	}
}