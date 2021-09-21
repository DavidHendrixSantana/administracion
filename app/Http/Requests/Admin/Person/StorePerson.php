<?php

namespace App\Http\Requests\Admin\Person;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StorePerson extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.person.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [

            'nombre' => ['required', 'string'],
            'tutor' => ['required', 'string'],
            'edad' => ['required', 'string'],
            'telefono' => ['required', 'string'],
            'nivel' => ['required', 'string'],
            'teacher' => ['required',],
            'schedule' => ['required', ],
            'imagen' => ['required', ],
            
            
        ];
    }

    public function getTeacherId(){
        if ($this->has('teacher')){
            return $this->get('teacher')['id'];
        }
        return null;
    }
    public function getScheduleId(){
        if ($this->has('schedule')){
            return $this->get('schedule')['id'];
        }
        return null;
    }


    /**
    * Modify input data
    *
    * @return array
    */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();

        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
