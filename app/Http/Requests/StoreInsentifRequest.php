<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreInsentifRequest extends FormRequest
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
            //
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'dosen_anggota' => isset($this->dosen_anggota) ? implode(',', $this->dosen_anggota) : $this->dosen_anggota,
            'tahun' => isset($this->tahun) ? Carbon::createFromFormat('Y', $this->tahun)->format('Y') : $this->tahun,
            'jumlah' => (int)Str::replace(',', '', $this->jumlah),
        ]);
    }
}
