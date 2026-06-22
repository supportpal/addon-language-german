<?php

return array(

    "customfield"               => "Benutzerdefiniertes Feld|Benutzerdefinierte Felder",

    // Options
    "boolean"                   => "Boolescher Wert",
    "checkbox"                  => "Kontrollkästchen",
    "checklist"                 => "Checkliste",
    "date"                      => "Datum",
    "multiple"                  => "Multiple Optionen",
    "options"                   => "Optionen",
    "radio"                     => "Optionsfelder",
    "rating"                    => "Bewertung (1 bis 5)",
    "text"                      => "Text",
    "textarea"                  => "Textbereich",

    "public"                    => "Öffentlich",
    "public_desc"               => "Soll jeder das Feld sehen können, oder nur die Mitarbeiter?",
    "encrypted"                 => "Verschlüsselt",
    "purge_desc"                => "Soll das Ticket gelöscht werden, nachdem es als \"gelöst\" markiert wurde?",
    "locked"                    => "Gesperrt",
    "locked_desc"               => "Soll der Benutzer das Feld nur einmal setzen/bearbeiten können?",
    "department_desc"           => "Welcher Abteilung soll das Feld zur Verfügung stehen?",

    /*
     * 2.0.2
     */
    "please_select"             => "Bitte auswählen...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Hilfstext der unterhalb des Feldes angezeigt wird - kein Pflichtfeld",

    /*
     * 2.1.0
     */
    "brand_desc"                => "In welchen Marken soll das Feld zur Verfügung stehen.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Das Löschen vorhandener Optionen wird alle gespeicherten Felder löschen, die aktuell diese Option haben.",
    "regex_basic_desc"          => "Optional kann die Eingabe mit einer Regular Expression geprüft werden.",
    "regex_desc"                => "Der reguläre Ausdruck berücksichtigt Groß- und Kleinschreibung. Es müssen keine RegEx-Trennzeichen verwendet werden. Schrägstriche werden automatisch maskiert. Beispiel: ^[a-z0-9_-]{6,18}\$ würde erzwingen, dass der Wert 6-18 Zeichen lang ist und nur eine Mischung aus alphanumerischen Zeichen, Unterstrichen und Bindestrichen enthält.",
    "regex_error_message"       => "Überprüfungsfehlermeldung",
    "regex_error_message_desc"  => "Optional kann eine Fehlermeldung für diesen Fall angegeben werden; ansonsten wird eine Standardmeldung generiert. Die Meldung wird genauso angezeigt wie sie angegeben wird. Deshalb empfehlen wir den Feldnamen mit anzugeben um die Meldung klar zuordnen zu können.",
    "custom_field_values"       => "Benutzerdefinierte Feldwerte",
    "depends_on"                => "hängt ab von",
    "depends_on_desc"           => "Wenn aktiviert, wird das Feld nur angezeigt, wenn der Benutzer den angegebenen Wert ausgewählt hat. Die Marken und Abteilungssicherheit wird vom bezogenen Feld vererbt.",
    "select_option"             => "Wählen Sie eine Option...",
    "purge"                     => "löschen",
    "encrypted_desc"            => "Soll das benutzerdefinierte Feld verschlüsselt in der Datenbank gespeichert werden? Diese Einstellung kann nachträglich nicht mehr geändert werden.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Muss das benutzerdefinierte Feld ausgefüllt sein? Für Checkbox-, Checklisten- oder mehrfache Optionen muss der Benutzer mindestens eine Option ausgewählt haben.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** VERSCHLÜSSELT **",
);
