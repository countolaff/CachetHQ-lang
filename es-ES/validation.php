<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'   => ':attribute que deberán ser aceptadas.',
    'active_url' => ':attribute no es una dirección de Internet válida.',
    'after'      => ':attribute debe ser una fecha después :date.',
    'alpha'      => ':attribute sólo puede consistir en letras.',
    'alpha_dash' => ':attribute sólo puede contener letras, números, Binde- y subraya. diéresis  (ä, ö, ü) y carácter (ß) No están permitidos.',
    'alpha_num'  => ':attribute sólo puede contener letras, números, Binde- y subraya. diéresis (ä, ö, ü) y carácter (ß) No están permitidos.',
    'array'      => ':attribute debe ser Array.',
    'before'     => ':attribute debe antes de una fecha :date.',
    'between'    => [
        'numeric' => ':attribute debe entre :min & :max.',
        'file'    => ':attribute debe entre :min & :max Kilobytes de grande.',
        'string'  => ':attribute debe entre :min & :max caracteres de longitud.',
        'array'   => ':attribute debe entre :min & :max tener elementos.',
    ],
    'boolean'        => ':attribute debe entweder \'true\' o \'false\'.',
    'confirmed'      => ':attribute no coincide con el acuerdo de confirmación.',
    'date'           => ':attribute debe ser una fecha válida.',
    'date_format'    => ':attribute Por favor, introduzca un formato válido para :format.',
    'different'      => ':attribute y :other debe ser diferente.',
    'digits'         => ':attribute debe :digits.',
    'digits_between' => ':attribute debe estar entre :min y :max.',
    'email'          => ':attribute debe ser una dirección válida de correo electrónico.',
    'exists'         => 'El valor elegido para :attribute no es válido.',
    'filled'         => ':attribute deben ser rellenados.',
    'image'          => ':attribute debe ser una imagen.',
    'in'             => 'El :attribute seleccionado es inválido.',
    'integer'        => ':attribute debe ser un entero.',
    'ip'             => ':attribute debe ser una dirección IP válida.',
    'json'           => 'El :attribute debe ser una cadena JSON válida.',
    'max'            => [
        'numeric' => ':attribute no debe exceder :max.',
        'file'    => ':attribute no debe exceder :max Kilobytes de grande.',
        'string'  => ':attribute no debe exceder :max que firma.',
        'array'   => ':attribute no debe exceder :max tener elementos.',
    ],
    'mimes' => ':attribute debe presentar type :values.',
    'min'   => [
        'numeric' => ':attribute debe por lo menos :min.',
        'file'    => ':attribute debe por lo menos :min Kilobytes de grande.',
        'string'  => ':attribute debe por lo menos :min caracteres.',
        'array'   => ':attribute debe por lo menos :min tener elementos.',
    ],
    'not_in'               => 'El :attribute seleccionado es inválido.',
    'numeric'              => ':attribute debe ser un número.',
    'regex'                => ':attribute formato no es válido.',
    'required'             => ':attribute debe llenarse.',
    'required_if'          => ':attribute debe ser completada si :other :value.',
    'required_unless'      => 'El campo :attribute es obligatorio a no ser que :other se encuentre en :values.',
    'required_with'        => ':attribute debe especificar si :values se llenó.',
    'required_with_all'    => 'El campo del :attribute se requiere cuando :values es presente.',
    'required_without'     => ':attribute debe especificar si :values no se llena.',
    'required_without_all' => ':attribute debe especificar si ninguno de los campos :values se llenó.',
    'same'                 => ':attribute y :other debe coincidir.',
    'size'                 => [
        'numeric' => ':attribute debe igual :size.',
        'file'    => ':attribute debe tamaño :size Kilobytes.',
        'string'  => ':attribute debe :size caracteres.',
        'array'   => ':attribute debe :size elementos de tamaño.',
    ],
    'string'   => ':attribute debe ser una cadena.',
    'timezone' => ':attribute debe ser una zona horaria válida.',
    'unique'   => ':attribute ya está en uso.',
    'url'      => 'El formato :attribute es inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'Mensaje Individual',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
