<?php

namespace App\Http\Requests\Admin\Person;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdatePerson extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.person.edit', $this->person);
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
            'tutor' => ['sometimes', 'string'],
            'edad' => ['sometimes', 'string'],
            'telefono' => ['sometimes', 'string'],
            'nivel' => ['sometimes', 'string'],
            'teacher' => ['required',],
            'schedule' => ['required', ],
            
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
