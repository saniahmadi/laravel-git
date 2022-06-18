<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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

//            'title'=>['required','max:20', new Uppercase()],
            'title'=>['required','max:20'],
            'description'=>'required',
            'file'=>['required','max:1000','mimes:jpeg,png,jpg']


        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'عنوان مطلب خود راانتخاب کنید',
            'title.max'=>'عنوان مطلب شما نباید بیشتر از 20 کارکتر باشد',
            'description.required'=>'توضیحات مطلب شما نباید خالی باشد',
            'file.required'=>'لطفا تصویر اصلی این مطلب رااضافه کنید',
            'file.max'=>'حجم تصویرنبایدبیش از 1 مکابایت باشد.',
            'file.mimes'=>'نوع تصویر باید jpg یا jpeg یا png باشد',
            ];

    }
}
