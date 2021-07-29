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
            'post.title'=>'required|max:40',
            'post.body' => 'required|string|max:4000',
            'post.category_id' => 'required|integer',
        ];
    }
    
    /**
     * エラーメッセージを日本語化
     * 
     */
    public function messages()
    {
        return [
            'title.required' => '香水名を入力してください',
            'title.max' => '香水名は40文字以内で入力してください',
            'body.required' => '説明を入力してください',
            'body.max' => '説明は4000文字以内で入力してください',
            'category_id.required' => 'カテゴリーを選択してください',
            'category_id.integer' => 'カテゴリーの入力形式が不正です',
        ];
    }
    
    
}
