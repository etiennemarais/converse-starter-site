<?php namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		// TODO Remove for production
		return view('home');
	}

	/**
	 * @param MessageRequest $request
	 *
	 * @return mixed
	 */
	public function postMessage(MessageRequest $request)
	{
		try {
			$response = $this->post('/messages', $request->all());
			return $this->respondWithSuccess();
		} catch (\Exception $e) {
			return $this->respondWithErrors([
				'Something went wrong, Please contact us directly, info@converseapp.co',
				$e->getMessage()
			]);
		}
	}
}
