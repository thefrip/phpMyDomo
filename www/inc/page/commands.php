<?php
class PMD_Page extends PMD_Root_Page{

	//----------------------------------------------------------------------------------
	function Run(){
		$data=array();
		$data['rows']	=$this->o_api->GetCommands();
		$this->Assign('data',$data);
		$this->Display();
	}

} 
?>