<?php

use LaraBillPlz\BillPlz;
use LaraBillPlz\BillPlzCollection;
use LaraBillPlz\BillPlzBill;

if (! function_exists('createBillPlz')) {
	function createBillPlz($callbackurl, $redirecturl, $data = []) {
		// Create collection first
	    $collection = createCollectionBillPlz($data);
	    
	    // Create bill
	    $data['collection_id'] = $collection['id'];
	    $data['callback_url'] = $callbackurl;
	    $data['redirect_url'] = $redirecturl;
	    
	    // TODO: save responses to respective models - collections, bills
	    /*
			Models - Collection, Bill
			Migrations - collections, bills
				publish
	    */
		$bill = (new BillPlzBill())->create_bill($data);
	    return [
	    	'collection' => $collection, 
	    	'bill' => $bill
	    ];
	}
}

if(! function_exists('createCollectionBillPlz')) {
	function createCollectionBillPlz($data)
	{
		return (new BillPlzCollection())->create_collection($data);
	}
}

if(! function_exists('createOpenCollectionBillPlz')) {
	function createOpenCollectionBillPlz($data)
	{
		return (new BillPlzCollection())->create_open_collection($data);
	}
}

if(! function_exists('getBillPlz')) {
	function getBillPlz($id) 
	{
		return (new BillPlzBill())->get_bill( $id );
	}	
}

if(! function_exists('deleteBillPlz')) {
	function deleteBillPlz($id) 
	{
		return (new BillPlzBill())->delete_bill( $id );
	}	
}