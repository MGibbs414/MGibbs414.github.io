<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'il  :attribute è stato accettato.',
    'active_url'           => ':attribute non è un URL valido.',
    'after'                => ':attribute deve essere una data oltre il  :date.',
    'after_or_equal'       => 'L\'attributo deve essere una data dopo o uguale a: data.',
    'alpha'                => ':attribute può contenere solo lettere.',
    'alpha_dash'           => ':attribute può contenere solo lettere numeri e trattini.',
    'alpha_num'            => ':attribute può contenere solo lettere e numeri.',
    'array'                => 'L\'attributo: deve essere un array.',
    'before'               => ':attribute deve essere una data dopo :date.',
    'before_or_equal'      => 'L\'attributo deve essere una data precedente o uguale a: data.',
    'between'              => [
        'numeric' => ':attribute deve essere tra  :min - :max.',
        'file'    => 'il :attribute deve essere tra  :min - :max kilobytes.',
        'string'  => 'il :attribute deve essere tra :min - :max caratteri.',
        'array'   => 'L\'attributo deve avere tra: min e: max elementi.',
    ],
    'boolean'              => 'Il campo: attributo deve essere vero o falso.',
    'confirmed'            => 'il :attribute non corrisponde.',
    'date'                 => 'la :attribute non è valida.',
    'date_format'          => 'il :attribute non corrisponde al :format.',
    'different'            => 'il :attribute e :other devono essere differenti.',
    'digits'               => 'il :attribute deve essere :digits digits.',
    'digits_between'       => 'il  :attribute deve essere tra :min e :max digits.',
    'dimensions'           => 'L\'attributo: ha dimensioni di immagine non valide.',
    'distinct'             => 'Il campo attributo ha un valore duplicato.',
    'email'                => 'il formato del :attribute è invalido.',
    'exists'               => ':attribute selezzionato è invalido.',
    'file'                 => 'L\'attributo: deve essere un file.',
    'filled'               => 'Il campo: attributo deve avere un valore.',
    'image'                => 'il :attribute deve essere un immagine.',
    'import_field_empty'    => 'Il valore per :fieldname non può essere vuoto.',
    'in'                   => 'Il selezionato :attribute è invalido.',
    'in_array'             => 'Il campo attributo non esiste in: altro.',
    'integer'              => 'L\' :attribute deve essere un numero intero.',
    'ip'                   => 'L\' :attribute deve essere un indirizzo IP valido.',
    'ipv4'                 => 'L\'attributo: deve essere un indirizzo IPv4 valido.',
    'ipv6'                 => 'L\'attributo: deve essere un indirizzo IPv6 valido.',
    'is_unique_department' => 'Questo :attribute deve essere univoco per questa posizione',
    'json'                 => 'L\'attributo: deve essere una stringa JSON valida.',
    'max'                  => [
        'numeric' => 'L\' :attribute non può essere superiore di :max.',
        'file'    => 'L\' :attribute non può essere maggiore di :max kilobytes.',
        'string'  => 'L\' :attribute non può essere maggiore di :max caratteri.',
        'array'   => 'L\'attributo: non può avere più di: elementi max.',
    ],
    'mimes'                => 'L\' :attribute deve essere un file di type: :values.',
    'mimetypes'            => 'L\'attributo: deve essere un file di tipo:: valori.',
    'min'                  => [
        'numeric' => 'L\' :attribute deve essere almeno :min.',
        'file'    => 'L\' :attribute deve essere almeno :min kilobytes.',
        'string'  => 'L\' :attribute deve essere almeno :min caratteri.',
        'array'   => 'L\'attributo deve avere almeno: elementi min.',
    ],
    'starts_with'          => 'Attributo :attribute deve iniziare con uno dei seguenti: :values.',
    'ends_with'            => 'Attributo :attribute deve finire con uno dei seguenti: :values.',

    'not_in'               => 'L\' :attribute selezionato è invalido.',
    'numeric'              => 'L\' :attribute deve essere un numero.',
    'present'              => 'Il campo attributo deve essere presente.',
    'valid_regex'          => 'Questa non è una regex valida. ',
    'regex'                => 'Il formato dell\' :attribute è invalido.',
    'required'             => 'Il campo :attribute è obblogatorio.',
    'required_if'          => 'L\' :attribute è richiesto quando :other è :value.',
    'required_unless'      => 'Il campo: attributo è obbligatorio a meno che: l\'altro sia in: valori.',
    'required_with'        => 'Il campo :attribute è richiesto quando :values è presente.',
    'required_with_all'    => 'Il campo attributo è necessario quando: i valori sono presenti.',
    'required_without'     => 'Il campo :attribute è richiesto quando :values non è presente.',
    'required_without_all' => 'Il campo attributo è richiesto quando nessuno dei valori è presente.',
    'same'                 => 'L\' :attribute e :other devono corrispondere.',
    'size'                 => [
        'numeric' => 'L\' :attribute deve essere :size.',
        'file'    => 'L\' :attribute deve essere :size kilobytes.',
        'string'  => 'L\' :attribute deve essere :size characters.',
        'array'   => 'L\'attributo: deve contenere: elementi di dimensioni.',
    ],
    'string'               => 'L\'attributo: deve essere una stringa.',
    'timezone'             => 'L\'attributo: deve essere una zona valida.',
    'unique'               => 'L\' :attribute è già stato preso.',
    'uploaded'             => 'L\'attributo: non è riuscito a caricare.',
    'url'                  => 'Il formato dell\' :attribute è invalido.',
    'unique_undeleted'     => 'L\'attributo deve essere univoco.',
    'non_circular'         => ':attribute non deve creare un riferimento circolare.',
    'disallow_same_pwd_as_user_fields' => 'La password non può essere uguale al nome utente.',
    'letters'              => 'La password deve contenere almeno una lettera.',
    'numbers'              => 'La password deve contenere almeno un numero.',
    'case_diff'            => 'La password deve utilizzare maiuscole e minuscole.',
    'symbols'              => 'La password deve contenere simboli.',
    'gte'                  => [
        'numeric'          => 'Il valore non può essere negativo'
    ],


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
        'alpha_space' => 'Il campo attributo contiene un carattere non consentito.',
        'email_array'      => 'Uno o più indirizzi email non sono validi.',
        'hashed_pass'      => 'La tua password corrente non è corretta',
        'dumbpwd'          => 'Quella password è troppo comune.',
        'statuslabel_type' => 'È necessario selezionare un tipo di etichetta di stato valido',

        // date_format validation with slightly less stupid messages. It duplicates a lot, but it gets the job done :(
        // We use this because the default error message for date_format is reflects php Y-m-d, which non-PHP
        // people won't know how to format. 
        'purchase_date.date_format'     => 'La :attribute deve essere in formato AAAA-MM-GG',
        'last_audit_date.date_format'   =>  'La :attribute deve essere in formato AAAA-MM-GG hh:mm:ss',
        'expiration_date.date_format'   =>  'La :attribute deve essere in formato AAAA-MM-GG',
        'termination_date.date_format'  =>  'La :attribute deve essere in formato AAAA-MM-GG',
        'expected_checkin.date_format'  =>  'La :attribute deve essere in formato AAAA-MM-GG',
        'start_date.date_format'        =>  'La :attribute deve essere in formato AAAA-MM-GG',
        'end_date.date_format'          =>  'La :attribute deve essere in formato AAAA-MM-GG',

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
