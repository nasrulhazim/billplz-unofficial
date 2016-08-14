<?php

use Kidino\Billplz\Billplz;

if (! function_exists('createBillPlz')) {
	function createBillPlz($callbackurl, $redirecturl, $data = []) {
		// Create collection first
	    $collection = createCollectionBillPlz();

	    // Create bill
	    $data['collection_id'] = $collection->id;
	    $data['callback_url'] = $callbackurl;
	    $data['redirect_url'] = $redirecturl;
	    $data['metadata[token]'] = str_random(42);

	    $bplz = billPlz();
		$bplz->set_data($data);

	    return json_decode($bplz->create_bill());
	}
}

if(! function_exists('createCollectionBillPlz')) {
	function createCollectionBillPlz()
	{
		return responseBillPlz(billPlz()->create_collection());
	}
}

if(! function_exists('getBillPlz')) {
	function getBillPlz($id) 
	{
		return responseBillPlz(billPlz()->get_bill( $id ));
	}	
}

if(! function_exists('deleteBillPlz')) {
	function deleteBillPlz($id) 
	{
		return responseBillPlz(billPlz()->delete_bill( $id ));
	}	
}

if(! function_exists('responseBillPlz')) {
	function responseBillPlz($billplz)
	{
		list($rheader, $rbody) = explode("\n\n", $billplz);
		$result = json_decode($rbody);
		return $result;
	}	
}

if(! function_exists('billPlz')) {
	function billPlz()
	{
		return new Billplz([
			'api_key' => config('billplz.'.env('APP_ENV').'.api_key'),
			'host' => config('billplz.'.env('APP_ENV').'.api_endpoint')
		]);
	}	
}
