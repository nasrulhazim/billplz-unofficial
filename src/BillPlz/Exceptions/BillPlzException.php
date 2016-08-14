<?php 

/* Future Implementation */

namespace LaraBillPlz\Exceptions;

/**
* 
*/
class BillPlzException extends Exception
{
	public function errorMessage() 
	{
		return '<b>BillPlz Exception:</b> Invalid Request';
	}
}

/**
* 
*/
class BillPlzCollectionException extends Exception
{
	
	public function errorMessage() 
	{
		return '<b>BillPlz Exception:</b> Invalid Collection Request';
	}
}

/**
* 
*/
class BillPlzBillException extends Exception
{
	
	public function errorMessage() 
	{
		return '<b>BillPlz Exception:</b> Invalid Bill Request';
	}
}