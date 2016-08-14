<?php

use LaraBillPlz\Billplz;
use LaraBillPlz\BillplzCollection;
use LaraBillPlz\BillplzBill;

if (! function_exists('createBillPlz')) {
	function createBillPlz($callbackurl, $redirecturl, $data = []) {
		// Create collection first
	    $collection = createCollectionBillPlz();

	    // Create bill
	    $data['collection_id'] = $collection->id;
	    $data['callback_url'] = $callbackurl;
	    $data['redirect_url'] = $redirecturl;
	    
	    return (new BillPlzBill())->create_bill($data));
	}
}

if(! function_exists('createCollectionBillPlz')) {
	function createCollectionBillPlz()
	{
		return (new BillPlzCollection())->create_collection();
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