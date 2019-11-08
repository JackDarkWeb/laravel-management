<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminLockFormRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'category' => ['required', 'string',
                           Rule::in(['Récrutement', 'Conseils','Audit-Formation', 'MATÉRIEL-PROFESSIONNEL', 'Création-de-site-web', 'Immobilier-Mobilier', 'véhicule', 'Electronique-Média']),
                ],
            'type' => ['required', Rule::in(['particulier', 'entreprise'])],
            'price' => ['string'],
            'devise' => [Rule::in(['fcfa', 'dollar', 'euro'])],
            'description' => ['required', 'string'],
            'address' => ['string'],
            'country' => ['required', 'string'],
            'city' => ['required', 'string', 'max:50'],
            'phone' => ['required', 'string', 'max:14'],
            'file' => ['file','string']
        ];
    }
}
