<?php

namespace LaraBillPlz;

use LaraBillPlz\BillPlz;

/**
* 
*/
class BillPlzBill extends BillPlz
{
	public function create_bill($data)
	{
		// https://www.billplz.com/api#create-a-bill17
		// should use BillPlzValidator
		$this->data = $data;
		return $this->run('bills');
	}

	public function get_bill($id)
	{
		// https://www.billplz.com/api#v3-get-a-bill18
		// should use BillPlzValidator
		return $this->run('bills/' . $id);
	}

	public function delete_bill()
	{
		// https://www.billplz.com/api#delete-a-bill20
		// should use BillPlzValidator
		$this->data = $data;
		return $this->run('bills', true);
	}
}