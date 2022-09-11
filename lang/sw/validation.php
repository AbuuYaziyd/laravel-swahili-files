<?php

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

    'accepted' => ':attribute lazima ukubaliwe.',
    'accepted_if' => ':attribute lazima ikubaliwe wakati :other ni :value.',
    'active_url' => ':attribute si URL halali.',
    'after' => ':attribute lazima iwe tarehe baada ya :date.',
    'after_or_equal' => ':attribute lazima iwe tarehe baada au sawa na :date.',
    'alpha' => ':attribute lazima iwe na herufi pekee.',
    'alpha_dash' => ':attribute lazima iwe na herufi, nambari, deshi au mistari chini pekee.',
    'alpha_num' => ':attribute lazima iwe na herufi au nambari pekee.',
    'array' => ':attribute lazima iwe safu.',
    'before' => ':attribute lazima iwe tarehe kabla :date.',
    'before_or_equal' => ':attribute lazima iwe tarehe kabla au sawa na :date.',
    'between' => [
        'array' => ':attribute lazima iwe na kati ya :min na :max.',
        'file' => ':attribute lazima iwe kati ya :min na :max KB.',
        'numeric' => ':attribute lazima iwe kati ya :min na :max.',
        'string' => ':attribute mlazima iwe kati ya herufi :min na :max .',
    ],
    'boolean' => ':attribute lazima iwe kweli au si kweli.',
    'confirmed' => ':attribute uthibitisho haulingani.',
    'current_password' => 'Nenosiri si sahihi.',
    'date' => ':attribute sio tarehe halali.',
    'date_equals' => ':attribute lazima iwe tarehe sawa na :date.',
    'date_format' => ':attribute hailingani na fomati :format.',
    'declined' => ':attribute lazima kukataliwa.',
    'declined_if' => ':attribute lazima kukataliwa wakati :other ni :value.',
    'different' => ':attribute na :other lazima iwe tofauti.',
    'digits' => ':attribute mlazima iwe :digits tarakimu.',
    'digits_between' => ':attribute mlazima iwe kati ya tarakimu :min na :max.',
    'dimensions' => ':attribute ina vipimo batili vya picha.',
    'distinct' => ':attribute ina data iliyorudiwa.',
    'doesnt_end_with' => ':attribute  isiishie na mojawapo ya yafuatayo: :values.',
    'doesnt_start_with' => ':attribute  usianze na mojawapo ya yafuatayo: :values.',
    'email' => ':attribute lazima iwe barua pepe halali.',
    'ends_with' => ':attribute lazima imalizie na mojawapo ya yafuatayo: :values.',
    'enum' => ':attribute iliyochaguliwa ni batili.',
    'exists' => ':attribute iliyochaguliwa tayari ishatumika.',
    'file' => ':attribute lazima iwe faili.',
    'filled' => ':attribute lazima iwe na imejazwa.',
    'gt' => [
        'array' => ':attribute lazima iwe na zaidi ya :values.',
        'file' => ':attribute lazima iwe kubwa kuliko :value KB.',
        'numeric' => ':attribute lazima iwe kubwa kuliko :value.',
        'string' => ':attribute lazima izidi herufi :value.',
    ],
    'gte' => [
        'array' => ':attribute lazima iwe na vitu zaidi ya :value.',
        'file' => ':attribute must be greater than or equal to :value kilobytes.',
        'numeric' => ':attribute must be greater than or equal to :value.',
        'string' => ':attribute must be greater than or equal to :value characters.',
    ],
    'image' => ':attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => ':attribute field does not exist in :other.',
    'integer' => ':attribute must be an integer.',
    'ip' => ':attribute must be a valid IP address.',
    'ipv4' => ':attribute must be a valid IPv4 address.',
    'ipv6' => ':attribute must be a valid IPv6 address.',
    'json' => ':attribute must be a valid JSON string.',
    'lt' => [
        'array' => ':attribute must have less than :value items.',
        'file' => ':attribute must be less than :value kilobytes.',
        'numeric' => ':attribute must be less than :value.',
        'string' => ':attribute must be less than :value characters.',
    ],
    'lte' => [
        'array' => ':attribute must not have more than :value items.',
        'file' => ':attribute must be less than or equal to :value kilobytes.',
        'numeric' => ':attribute must be less than or equal to :value.',
        'string' => ':attribute must be less than or equal to :value characters.',
    ],
    'mac_address' => ':attribute must be a valid MAC address.',
    'max' => [
        'array' => ':attribute must not have more than :max items.',
        'file' => ':attribute must not be greater than :max kilobytes.',
        'numeric' => ':attribute must not be greater than :max.',
        'string' => ':attribute must not be greater than :max characters.',
    ],
    'max_digits' => ':attribute must not have more than :max digits.',
    'mimes' => ':attribute must be a file of type: :values.',
    'mimetypes' => ':attribute must be a file of type: :values.',
    'min' => [
        'array' => ':attribute must have at least :min items.',
        'file' => ':attribute must be at least :min kilobytes.',
        'numeric' => ':attribute must be at least :min.',
        'string' => ':attribute must be at least :min characters.',
    ],
    'min_digits' => ':attribute must have at least :min digits.',
    'multiple_of' => ':attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => ':attribute format is invalid.',
    'numeric' => ':attribute must be a number.',
    'password' => [
        'letters' => ':attribute must contain at least one letter.',
        'mixed' => ':attribute must contain at least one uppercase and one lowercase letter.',
        'numbers' => ':attribute must contain at least one number.',
        'symbols' => ':attribute must contain at least one symbol.',
        'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    ],
    'present' => ':attribute field must be present.',
    'prohibited' => ':attribute field is prohibited.',
    'prohibited_if' => ':attribute field is prohibited when :other is :value.',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'prohibits' => ':attribute field prohibits :other from being present.',
    'regex' => ':attribute format is invalid.',
    'required' => 'Hapa ni Lazima kujaza',
    'required_array_keys' => ':attribute field must contain entries for: :values.',
    'required_if' => ':attribute field is required when :other is :value.',
    'required_unless' => ':attribute field is required unless :other is in :values.',
    'required_with' => ':attribute field is required when :values is present.',
    'required_with_all' => ':attribute field is required when :values are present.',
    'required_without' => ':attribute field is required when :values is not present.',
    'required_without_all' => ':attribute field is required when none of :values are present.',
    'same' => ':attribute and :other must match.',
    'size' => [
        'array' => ':attribute must contain :size items.',
        'file' => ':attribute must be :size kilobytes.',
        'numeric' => ':attribute must be :size.',
        'string' => ':attribute must be :size characters.',
    ],
    'starts_with' => ':attribute must start with one of the following: :values.',
    'string' => ':attribute must be a string.',
    'timezone' => ':attribute must be a valid timezone.',
    'unique' => ':attribute has already been taken.',
    'uploaded' => ':attribute failed to upload.',
    'url' => ':attribute must be a valid URL.',
    'uuid' => ':attribute must be a valid UUID.',

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
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
