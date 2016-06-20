<?php

namespace App\Http\Requests;

use Request;
use App\User;

class UserRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        $user = User::find($this->users);

        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
                        'name' => 'required|min:3',
                        'email' => 'required|email|unique:users,email',
                        'password' => 'required|min:4',
                        'type' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
                        'name' => 'required|min:3',
                        'email' => 'required|email|unique:users,email,' . $user->id,
                        'password' => 'required|min:4',
                        'type' => 'required',
                    ];
                }
            default:break;
        }
    }

}
