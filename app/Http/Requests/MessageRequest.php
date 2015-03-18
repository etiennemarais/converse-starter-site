<?php namespace App\Http\Requests;

class MessageRequest extends Request
{
    private $rules = array(
        'from_email' => 'required|email',
        'from_name' => 'required',
        'subject' => 'required',
        'content' => 'required',
    );

    public function rules()
    {
        return $this->rules;
    }

    public function authorize()
    {
        return true;
    }
}