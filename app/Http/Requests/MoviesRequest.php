<?php
/**
 * Created by PhpStorm.
 * User: wal13
 * Date: 10/03/16
 * Time: 16:51
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MoviesRequest
 * @package App\Http\Requests
 */
class MoviesRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(){

        return [
            'title' => 'required|min:3|max:255',
            'synopsis' => 'required|min:20|max:400'
        ];
    }


    public function messages()
    {
        return[
            'title.required' => 'Le titre est obligatoire',
            'title.max' => 'Le titre doit contenir moins de 255 caractères',
            'title.min' => 'Le titre doit contenir plus de 3 caractères',
            'synopsis.required' => 'Le synopsis est obligatoire',
            'synopsis.max' => 'Le synopsis doit contenir moins de 400 caractères',
            'synopsis.min' => 'Le synopsis doit contenir plus de 20 caractèress'
        ];
    }

    public function authorize(){
        return true;
    }


}