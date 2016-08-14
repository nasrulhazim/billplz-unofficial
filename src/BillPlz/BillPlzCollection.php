<?php

namespace LaraBillPlz;

use LaraBillPlz\BillPlz;

/**
* 
*/
class BillPlzCollection extends BillPlz
{
	public function create_collection($data)
	{
		// https://www.billplz.com/api#create-a-collection14
		// should use BillPlzValidator
		if(!is_array($data)) {
			$title = $data;
			$data = ['title' => $data];
		} else {
			if(count($data) < 1 || !isset($data['title'])) {
				$data = ['title' => 'BillPlz Malaysia Payment Gateway'];
			}
		}
		$this->data = $data;

		return $this->run('collections');
	}

	public function create_open_collection($data)
	{
		// https://www.billplz.com/api#create-an-open-collection
		// should use BillPlzValidator
		if(!is_array($data)) {
			throw new Exception('Parameter passed is not array.');
		} else {
			if(!isset($data['title'] || !isset($data['description'] || !isset($data['amount']) {
				throw new Exception('You are missing required paramters. Please refer to BillPlz Create Open Collection at https://www.billplz.com/api#create-an-open-collection');
			}
		}

		$this->data = $data;

		return $this->run('open_collections');
	}
}