<?php namespace App\Http\Controllers;

use ConverseApi\Services\Curl\Converse;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Response;

abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

	protected $headers = array();
	private $baseUrl;

	public function __construct()
	{
		$this->baseUrl = env('CONVERSE_API_URL');
		$this->headers = [
			'Content-Type' => 'application/json',
			'Accept' => 'application/json',
			'X-Auth-Token' => env('CONVERSE_API_KEY'),
		];
	}

	/**
	 * @param $resource
	 *
	 * @return mixed
	 */
	public function get($resource)
	{
		return Converse::make()->withHeaders($this->headers)
			->get($this->baseUrl . $resource);
	}

	/**
	 * @param $url
	 * @param $params
	 *
	 * @return mixed
	 */
	public function post($url, $params)
	{
		return Converse::make()->withHeaders($this->headers)
			->post($this->baseUrl . $url, $params);
	}

	/**
	 * @return Response
	 */
	protected function respondWithSuccess()
	{
		return Response::json([
			'status' => 'success',
			'data' => 'Thank you for getting in touch with us',
		], \Illuminate\Http\Response::HTTP_OK);
	}

	/**
	 * @param $errors
	 *
	 * @return Response
	 */
	protected function respondWithErrors($errors)
	{
		return Response::json([
			'status' => 'error',
			'data' => $errors,
		], \Illuminate\Http\Response::HTTP_BAD_REQUEST);
	}
}
