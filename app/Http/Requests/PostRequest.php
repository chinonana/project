<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'perfume'=>'required|max:40',
            'discription' => 'required|string|max:4000',
            'category_id' => 'required|integer',
        ];
    }
    /**
     * エラーメッセージを日本語化
     * 
     */
    public function messages()
    {
        return [
            'perfume.required' => '件名を入力してください',
            'perfume.max' => '件名は80文字以内で入力してください',
            'discription.required' => 'メッセージを入力してください',
            'discription.max' => 'メッセージは350文字以内で入力してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',
        ];
    }
    
}
