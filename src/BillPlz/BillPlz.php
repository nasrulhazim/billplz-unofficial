<?php

namespace LaraBillPlz;

class BillPlz {

	private $api_endpoint;
	private $api_key;
	private $data;
	private $_responses;

	public function __contruct()
	{
		$this->api_endpoint = config('billplz.'.env('APP_ENV').'.api_endpoint');
		$this->api_key = config('billplz.'.env('APP_ENV').'.api_key');
		$this->_responses = [];
	}

	public function responses()
	{
		return $this->_responses;
	}

	protected function run($type, $delete = false)
	{
		$process = curl_init($this->api_endpoint . $type);

        curl_setopt($process, CURLOPT_HEADER, 0);
        curl_setopt($process, CURLOPT_USERPWD, $this->api_key . ":");
        curl_setopt($process, CURLOPT_TIMEOUT, 30);
        curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);

        if($delete) {
        	curl_setopt($process, CURLOPT_CUSTOMREQUEST, "DELETE");
        }

        if(is_array($this->data) && count($this->data) > 0) {
        	curl_setopt($process, CURLOPT_POSTFIELDS, http_build_query($this->data));
        }
        
        $return = curl_exec($process);
        curl_close($process);
        $responses = json_decode($return, true);

        $this->_responses = $responses;

        return $this->responses();
	}
}