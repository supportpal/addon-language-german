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
        "file"    => ":attribute muss zwischen :min und :max Kilobytes liegen.",
        "string"  => ":attribute muss zwischen :min und :max Zeichen liegen.",
        "array"   => ":attribute muss zwischen :min und :max Elementen liegen.",
    ),
    "boolean"                   => ":attribute muss \"true\" oder \"false\" sein.",
    "confirmed"                 => ":attribute Bestätigung stimmt nicht überein.",
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
    "ip"                        => ":attribute muss eine gültige IP sein.",
    "max"                       => array(
        "numeric" => ":attribute darf nicht größer sein als :max.",
        "file"    => ":attribute darf nicht größer sein als :max Kilobytes.",
        "string"  => ":attribute darf nicht größer sein als :max Zeichen.",
        "array"   => ":attribute darf nicht mehr als :max Elemente enthalten.",
    ),
    "mimes"                     => ":attribute muss eine Datei folgendes Typs sein: :values.",
    "min"                       => array(
        "numeric" => ":attribute muss mindestens :min sein.",
        "file"    => ":attribute muss mindestens :min Kilobytes groß sein.",
        "string"  => ":attribute muss mindestens :min Zeichen enthalten.",
        "array"   => ":attribute muss mindestens :min Elemente enthalten.",
    ),
    "not_in"                    => ":attribute ist ungültig.",
    "numeric"                   => ":attribute muss eine Zahl sein.",
    "regex"                     => "Das Format von :attribute ist ungültig.",
    "required"                  => ":attribute ist ein Pflichtfeld.",
    "required_if"               => ":attribute ist ein Pflichtfeld wenn :other :value ist.",
    "required_with"             => ":attribute ist ein Pflichtfeld wenn :values vorhanden ist.",
    "required_with_all"         => ":attribute ist ein Pflichtfeld wenn :values vorhanden ist.",
    "required_without"          => ":attribute ist ein Pflichtfeld :values nicht vorhanden ist.",
    "required_without_all"      => ":attribute ist ein Pflichtfeld wenn keines von :values vorhanden ist.",
    "same"                      => ":attribute und :other müssen übereinstimmen.",
    "size"                      => array(
        "numeric" => ":attribute muss :size groß sein.",
        "file"    => ":attribute muss :size Kilobytes groß sein.",
        "string"  => ":attribute muss :size Zeichen lang sein.",
        "array"   => ":attribute muss :size Elemente enthalten.",
    ),
    "unique"                    => ":attribute wurde schon benutzt.",
    "url"                       => ":attribute hat ein ungültiges Format.",
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
    "max_translation"           => "Die Übersetzung :translation für das Feld :attribute darf nicht länger als :max Zeichen sein.",
    "unique_translation"        => "Die Übersetzung :translation für das Feld :attribute wurde bereits benutzt.",

    /*
     * 2.3.0
     */
    "required_translation"      => "Die Übersetzung :translation für das Feld :attribute ist erforderlich.",
    "customfield_not_cyclic"    => "Das Feld darf nicht von seinen eigenen Kindern abhängig sein.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Das Slug-Feld darf nur alphanumerische Zeichen enthalten. Bitte kodieren Sie Sonderzeichen per Prozent-Codierung.",
    "article_slug_unique"       => "Das slug ist bereits in Verwendung.",
    "captcha_required"          => "Das captcha ist erforderlich.",
    "ticket_number_format"      => "Das Format der Ticketnummer ist ungültig.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "Das Datum :attribute muss nach oder gleich dem Datum :date sein.",
    "before_or_equal"           => "Das Datum :attribute muss vor oder gleich dem Datum :date sein.",
    "dimensions"                => "Die Bilddatei :attribute hat ungültige Dimensionen.",
    "distinct"                  => "Das Feld :attribute hat einen doppelten Wert.",
    "file"                      => "Das Feld :attribute muss eine gültige Bilddatei sein.",
    "filled"                    => "Das Feld :attribute muss einen Wert haben.",
    "gt"                        => array(
        "numeric" => "Die Zahl :attribute muss größer sein als :value.",
        "file"    => "Die Datei :attribute muss größer sein als :value Kilobytes.",
        "string"  => "Der Text :attribute muss länger sein als :value Zeichen.",
        "array"   => "Das Array :attribute muss mehr als :value Einträge haben.",
    ),
    "gte"                       => array(
        "numeric" => "Die Zahl :attribute muss gleich oder größer sein als :value.",
        "file"    => "Die Datei :attribute muss gleich oder größer sein als :value Kilobytes.",
        "string"  => "Der Text :attribute muss gleich lang oder länger sein als :value Zeichen.",
        "array"   => "Das Array :attribute muss :value Elemente oder mehr haben.",
    ),
    "in_array"                  => "Das Feld :attribute existiert nicht in :other.",
    "ipv4"                      => "Das Feld :attribute muss eine gültige IP Adresse sein.",
    "ipv6"                      => "Das Feld :attribute muss eine gültige IPv6 Adresse sein.",
    "json"                      => "Das Feld :attribute muss ein gültiger JSON Text sein.",
    "lt"                        => array(
        "numeric" => "Die Zahl :attribute muss kleiner sein als :value.",
        "file"    => "Die Datei :attribute muss kleiner sein als :value Kilobytes.",
        "string"  => "Der Text :attribute muss kürzer sein als :value Zeichen.",
        "array"   => "Das Array :attribute muss weniger als :value Einträge haben.",
    ),
    "lte"                       => array(
        "numeric" => "Die Zahl :attribute muss gleich oder kleiner sein als :value.",
        "file"    => "Die Datei :attribute muss gleich oder kleiner sein als :value Kilobytes.",
        "string"  => "Der Text :attribute muss gleich lang oder kürzer sein als :value Zeichen.",
        "array"   => "Das Array :attribute muss :value Elemente oder weniger haben.",
    ),
    "mimetypes"                 => "Das Feld :attribute muss eine gültige Datei vom MIME Typ: :values sein.",
    "not_regex"                 => "Das Feld :attribute konnte nicht erfolgreich validiert werden.",
    "present"                   => "Das Feld :attribute muss vorhanden sein.",
    "required_unless"           => "Das Feld :attribute ist erforderlich, außer :other hat einen Wert von :values.",
    "string"                    => "Das Feld :attribute muss einen Text als Inhalt haben.",
    "timezone"                  => "Das Feld :attribute muss eine gültige Zeitzone sein.",
    "uploaded"                  => "Die Datei :attribute konnte nicht hochgeladen werden.",

    /*
     * 2.5.0
     */
    "domain"                    => "Einer oder mehrere Domänen Namen sind nicht gültig.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "Das Feld :attribute ist ungültig. Bitte benutzen Sie die 'Vorschau' Funktion für weitere Fehler Details.",

    /*
     * 3.0.0
     */
    "embed_image"               => "Die Datei :attribute muss vom Typ: jpeg, png, or gif sein.",
    "starts_with"               => "Das Feld :attribute muss mit einem der folgenden Werte beginnen: :values.",

    /*
     * 3.5.0
     */
    "phone"                     => "Die angegebene Telefonnummer ist ungültig.",

    /*
     * 4.3.0
     */
    "is_invalid"                => "Das Feld :attribute ist ungültig.",

    /*
     * 5.0.0
     */
    "current_password"           => "Das Passwort ist falsch.",
    "department_email_per_brand" => "Für jede dieser Abteilung zugewiesene Marke muss ein E-Mail-Konto vorhanden sein.",
    "department_has_a_priority"  => "Die Abteilung(en) :departments sind öffentlich und müssen mindestens einer Priorität zugewiesen werden.",

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
            "exists" => "Die ausgewählte Rolle ist ungültig.",
        ),
        "category.*.type" => array(
            "required" => "Ein oder mehrere Inhaltstypen müssen für das Self-Service Frontend definiert werden.",
        ),
        "category.*.categories" => array(
            "required" => "Eine oder mehrere Kategorien sind erforderlich, wenn ein Inhaltstyp ausgewählt ist.",
            "exists"   => "Eine oder mehrere der ausgewählten Kategorien sind ungültig.",
        ),
        "brand.*" => array(
            "exists" => "Die ausgewählte Marke ist ungültig.",
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
