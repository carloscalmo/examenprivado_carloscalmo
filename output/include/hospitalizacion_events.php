<?php 
class eventclass_hospitalizacion  extends eventsBase
{ 
	function eventclass_hospitalizacion()
	{
	// fill list of events
		$this->events["BeforeDelete"]=true;


//	onscreen events


	}
// Captchas functions	

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
				// Before record deleted
function BeforeDelete($where,&$deleted_values,&$message,&$pageObject)
{

		
//**********  Check if specific record exists  ************
global $conn;
$strSQLExists = "select * from AnyTable where SomeColumn='SomeValue'";
$rsExists = db_query($strSQLExists,$conn);
$data=db_fetch_array($rsExists);
if($data)
{
	// if record exists do something
}
else
{
	// if dont exist do something else
}


;		
} // function BeforeDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
//	onscreen events

} 
?>
