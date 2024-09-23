<?php

return array(

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

    "accepted"                  => ":attribute muss akzeptiert werden.",
    "active_url"                => ":attribute ist keine gültige URL.",
    "after"                     => ":attribute muss ein Datum nach :date sein.",
    "alpha"                     => ":attribute darf nur Buchstaben enthalten.",
    "alpha_dash"                => ":attribute darf nur Buchstaben, Zahlen und Bindestriche enthalten.",
    "alpha_num"                 => ":attribute darf nur Buchstaben und Zahlen enthalten.",
    "array"                     => ":attribute muss ein Array sein.",
    "before"                    => ":attribute muss ein Datum vor :date sein.",
    "between"                   => array(
        "numeric" => ":attribute muss zwischen :min und :max liegen.",
        "file"    => ":attribute muss zwischen :min und :max kilobytes liegen.",
        "string"  => ":attribute muss zwischen :min und :max characters liegen.",
        "array"   => "The :attribute must have between :min and :max items.",
    ),
    "boolean"                   => ":attribute muss \"true\" oder \"false\" sein.",
    "confirmed"                 => ":attribute confirmation does not match.",
    "date"                      => ":attribute ist kein gültiges Datum.",
    "date_format"               => ":attribute stimmt nicht mit dem Format :format überein. ",
    "different"                 => ":attribute und :other müssen unterschiedlich sein.",
    "digits"                    => ":attribute muss :digits Zeichen enthalten.",
    "digits_between"            => ":attribute muss zwischen :min und :max Zeichen liegen.",
    "email"                     => ":attribute muss eine gültige E-Mail-Adresse enthalten.",
    "exists"                    => "Das ausgewählte :attribute ist ungültig.",
    "image"                     => ":attribute muss ein Bild sein.",
    "in"                        => "Das ausgewählte :attribute ist ungültig.",
    "integer"                   => ":attribute muss ein \"integer\" sein.",
    "ip"                        => ":attribute must eine gültige IP sein.",
    "max"                       => array(
        "numeric" => "The :attribute may not be greater than :max.",
        "file"    => "The :attribute may not be greater than :max kilobytes.",
        "string"  => "The :attribute may not be greater than :max characters.",
        "array"   => "The :attribute may not have more than :max items.",
    ),
    "mimes"                     => ":attribute muss eine Datei folgendes Typs sein: :values.",
    "min"                       => array(
        "numeric" => "The :attribute must be at least :min.",
        "file"    => "The :attribute must be at least :min kilobytes.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ),
    "not_in"                    => ":attribute ist ungültig.",
    "numeric"                   => "The :attribute must be a number.",
    "regex"                     => "Das Format von :attribute ist ungültig.",
    "required"                  => ":attribute ist ein Pflichtfeld.",
    "required_if"               => ":attribute ist ein Pflichtfeld wenn :other :value ist.",
    "required_with"             => ":attribute ist ein Pflichtfeld wenn :values vorhanden ist.",
    "required_with_all"         => ":attribute ist ein Pflichtfeld :values vorhanden ist.",
    "required_without"          => ":attribute ist ein Pflichtfeld :values nicht vorhanden ist.",
    "required_without_all"      => ":attribute ist ein Pflichtfeld wenn keines von :values vorhanden ist.",
    "same"                      => ":attribute and :other must match.",
    "size"                      => array(
        "numeric" => "The :attribute must be :size.",
        "file"    => "The :attribute must be :size kilobytes.",
        "string"  => "The :attribute must be :size characters.",
        "array"   => "The :attribute must contain :size items.",
    ),
    "unique"                    => ":attribute wurde schon benutzt.",
    "url"                       => ":attribute hast ein ungültiges Format.",
    "template_exists"           => ":attribute ist kein gültiges Template.",
    "is_valid_captcha"          => "Der eingegebene Captcha ist ungültig oder Sie haben sich vertippt. Bitte probieren Sie es noch einmal.",
    "user_password_strength"    => ":attribute muss beinhalten: :user_password_strength.",
    "operator_password_strength" => ":attribute muss beinhalten: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Das Logo muss zu einer gültigen Bilddatei zeigen (Vollständige URL oder relative URL zum Basis Verzeichnis).",

    /*
     * 2.2.0
     */
    "required_with_translation" => "Die Übersetzung :translation für das Feld :attribute ist zwingend erforderlich wenn :values gesetzt ist.",
    "max_translation"           => "Die Übersetzung :translation für das Feld :attribute darf nich länger als  :max Zeichen sein.",
    "unique_translation"        => "Die Übersetzung :translation für das Feld :attribute wurde bereits benutzt.",

    /*
     * 2.3.0
     */
    "required_translation"      => "ie Übersetzung :translation für das Feld :attribute ist erforderlich.",
    "customfield_not_cyclic"    => "Das Feld darf nicht von seinen eigenen Kindern abhängig sein.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Das slug Feld darf nur alphanumerische Zeichen beinhalten. Benutzen sie %Syntax um andere Zeichen zu verwenden",
    "article_slug_unique"       => "Das slug ist bereits in Verwendung.",
    "captcha_required"          => "Das captcha ist erforderlich.",
    "ticket_number_format"      => "Das Format der Ticketnummer ist ungültig.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "Das Datum :attribute muss nach oder gleich dem Datum :date sein.",
    "before_or_equal"           => "Das Datum :attribute mus bevor oder gleich dem Datum :date sein.",
    "dimensions"                => "Die Bilddatei :attribute hat ungültige Dimenionen .",
    "distinct"                  => "Das Feld :attribute hat einen doppelten Wert.",
    "file"                      => "The :attribute must be a file.",
    "filled"                    => "Das Feld :attribute muss einen Wert haben.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "Das Feld :attribute existiert nicht in :other.",
    "ipv4"                      => "Das Feld :attribute muss eine gültige IP Adresse sein.",
    "ipv6"                      => "Das Feld :attribute muss eine gültige IPv6 Adresse sein.",
    "json"                      => "Das Feld :attribute muss ein gültiger JSON Text sein.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "Das Feld :attribute muss einen gültige Dateim vom MIME Typ: :values sein.",
    "not_regex"                 => "Das Feld :attribute konnte nicht erfolgreich validiert werden.",
    "present"                   => "Das Feld :attribute muss vorhanden sein.",
    "required_unless"           => "Das Feld :attribute ist nötig außer :other hat eien Wert von :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "Das Feld :attribute muss eine gültige Zeitzone sein.",
    "uploaded"                  => "Die Datei :attribute konnte nicht hochgeladen werden.",

    /*
     * 2.5.0
     */
    "domain"                    => "Einer oder mehrere Domänen Namen sind nicht gültig.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "Das Feld :attribute ist ungültig. Bitte benutzen sie die 'Vorschau' Funktion für weitere Fehler Details.",

    /*
     * 3.0.0
     */
    "embed_image"               => "Die Datei :attribute muss vom Typ: jpeg, png, or gif sein.",
    "starts_with"               => "The :attribute must start with one of the following: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "The supplied phone number is invalid.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "The :attribute is invalid.",

    /*
     * 5.0.0
     */
    "current_password"           => "The password is incorrect.",
    "department_email_per_brand" => "An email account must exist for each brand assigned to this department.",
    "department_has_a_priority"  => "Department(s) :departments are public and must be assigned to at least one priority.",

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

    "custom" => array(
        "roles.*" => array(
            "exists" => "The selected role is invalid.",
        ),
        "category.*.type" => array(
            "required" => "One or more self-service types must be selected.",
        ),
        "category.*.categories" => array(
            "required" => "One or more categories are required when a self-service type has been selected.",
            "exists"   => "One or more of the selected categories is invalid.",
        ),
        "brand.*" => array(
            "exists" => "The selected brand is invalid.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
