<?php

return array(

    "deleted"               => "Gelöscht!",
    "success"               => "Erfolgreich",
    "error"                 => "Fehler",
    "in_progress"           => "In Arbeit",

    "save_order"            => "Attempting to save the updated order of the items",

    "are_you_sure"          => "Sind Sie sicher?",
    "yes_im_sure"           => "Ja, ich bin mir sicher!",

    "success_created"       => ":item erfolgreich erstellt!",
    "error_created"         => ":item konnte nicht erstellt werden.",

    "success_deleted"       => ":item erfolgreich gelöscht!",
    "error_deleted"         => ":item konnte nicht gelöscht werden.",

    "success_updated"       => ":item erfolgreich aktualisiert!",
    "error_updated"         => ":item konnte nicht aktualisiert werden.",

    "error_notfound"        => ":item mit der angegebenen ID wurde nicht gefunden.",
    "error_notfound_name"   => ":item mit dem angegebenen Namen wurde nicht gefunden.",
    "report_notfound"       => "Der Bericht mit der angegebenen Kategorie und dem angegebenen Namen wurde nicht gefunden.",

    "success_ordering"      => "Reihenfolge erfolgreich aktualisiert!",
    "error_ordering"        => "Reihenfolge konnte nicht aktualisiert werden.",

    "error_login"           => "Loginversuch fehlgeschlagen.",
    "success_logout"        => "Login erfolgreich.",

    "please_correct"        => "Bitte beheben Sie die folgenden Fehler und versuchen Sie es noch einmal.",

    "success_settings"      => "Einstellungen erfolgreich aktualisiert!",
    "error_settings"        => "Einstellungen konnten nicht aktualisiert werden.",

    "success_action"        => "Aktion erfolgreich ausgeführt!",
    "error_action"          => "Aktion konnte nicht ausgeführt werden.",

    "error_embed_image"     => "Fehler beim Bildupload.",

    "unauthorised"          => "Unbefugt",
    "not_authorised"        => "Sie sind nicht berechtigt die Aktion durchzuführen.",
    "not_permitted"         => "Sie sind nicht berechtigt diese Seite anzuzeigen. Wenn Sie denken, dass es sich um einen Fehler handelt, wenden Sie sich bitte an Ihren Administrator.",

    "page_not_found"        => "Seite nicht gefunden",
    "cant_find_page"        => "Sie gewünschte Seite konnte nicht gefunden werden.",

    "please_report"         => "Bitte setzen Sie sich mit einem Administrator in Verbindung, wenn Sie dieses Ergebnis nicht erwartet haben.",

    "return_to"             => "Zu :page zurückkehren.",

    "session_expired"       => "Ihre Sitzung ist abgelaufen - Bitte loggen Sie sich neu ein.",
    "session_refresh"       => "Ihre Sitzung ist abgelaufen - Bitte aktualisieren Sie diese Seite und versuchen es erneut.",

    "general_error"         => "Ein Fehler ist aufgetreten. Bitte versuchern Sie es erneut.",

    "no_results"            => "Keine Ergbenisse.",

    "assign_incomplete"     => "Die Aktion konnte nicht komplett ausgeführt werden. :names konnte einigen Tickets nicht zugewiesen werden.",

    "maintenance_mode"      => "Der Wartungs-Modus ist aktiv. Der HelpDesk ist derzeit für Ihre Benutzer nicht errreichbar. Bitte denken Sie daran den Wartungs-Modus zu deaktivieren.",

    "invalid_captcha"       => "Der eingegebene Sicherheitscode ist falsch oder ungültig. Bitte versuchen Sie es noch einmal.",
    "blocked_as_spam"       => "Ihre Anfrage wurde als SPAM deklariert. Bitte melden Sie sich telefonisch, falsch Sie denken, dass es sich hierbei um einen Fehler handelt.",
    "account_exists"        => "Es existiert bereits ein aktives Konto mit dieser E-Mail.",
    "error_loading_comments" => "Es gab ein Problem beim Laden der Kommentare.",

    "invalid_auth"          => "Falsche Zugangsdaten.",

    "forbidden"             => "Verboten",

    "not_logged_exception"  => "<strong>Uuuups! Etwas ist schiefgelaufen.</strong><br />Bitte informieren Sie einen Administrator, falls der Fehler weiterhin besteht.",

    "too_many_ticket_reqs"  => "Zuviele Ticketanfragen von der Adresse :email. Es sind maximal :max Anfragen in :decay minutes erlaubt.",

    "not_operator"          => "Etwas ist schiefgelaufen. Der ausgewählte Mitarbeiter ist nicht gültig. Bitte stellen Sie sicher, dass der Mitarbeiter einer gruppe zugewiesen und der Gruppe eine Rolle zugewiesen wurde.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Uuuups! Etwas ist schiefgelaufen.</strong><br />Ein Fehler ist beim Laden der Daten aufgetreten. Bitte informieren Sie einen Administrator, falls der Fehler weiterhin besteht.",

    "missing_extension"     => "Fehlende Erweiterung",
    "php_ldap_missing"      => "Die php-ldap Erweiterung wird für LDAP-Authentifizierung benötigt.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Es sind ausschließlich SSL-Verbindung zugelassen.",
    "queued_emails"         => "Erfolgreich - Die E-Mails wurden in die Warteschlange übertragen und in Kürze verschickt.",
    "error_loading_message" => "Ein Fehler ist beim Laden der Nachricht aufgetreten. Bitte versuchen Sie es noch einmal.",
    "please_refresh"        => "Bitte aktualisieren Sie diese Seite.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Service currently unavailable.</strong><br />Unable to connect to the database.",
    "category_required"     => "The article must belong to one or more categories.",
    "warning"               => "Warning",
    "note"                  => "Note",
    "brand_invalid_dept"    => "The action could not be completed in full. The department could not be updated on some tickets due to their brand.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Failed to upload attachment \":filename\", reason: \":reason\"",
    "upload_max_size"       => "File must be smaller than :size",
    "upload_wrong_type"     => "File type is not allowed",

    /*
     * 2.3.0
     */
    "delete_record"         => "Lösche :record?",
    "cannot_be_undone"      => "Diese Aktion is unwiederruflich.",
    "warn_delete"           => "Das wird  <strong>:name</strong> :record permanent löschen.",
    "delete_confirm"        => "Ja, lösche :record",
    "keep_record"           => "Nein, behalte :record",
    "delete_relations"      => "Löschen von <strong>:name</strong> :record wird auch alle folgenden Daten löschen:",
    "please_check"          => "Sie müssen alle checkboxen anwählen um ihr Verständnis der unwiederruflichkeit der Aktion zu bestätigen.",
    "failed_attachments"    => "Konnte einige Dateien nicht anhängen.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Erfolg - Email wurde gesendet.",
    "task_already_running"  => "Die geplante Aufgabe läuft bereits, bitte versuchen sie es später erneut.",
    "linked_account"        => "Der 'social account' wurde erfolgreich mit Ihrem Konto verbunden.",
    "already_linked"        => "Der 'social account' ist bereits mit einem anderen Konto verbunden. Bitte melden sie sich mit dem anderen Konto an und entfernen sie die Verbindung zum 'social account'.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Sieht das korrekt aus?",
    "no_revert"             => "Nein! Stell die Änderung zurück",
    "attachment_not_found"  => "Der Anhang wurde nicht gefunden.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Dein Konto wurde geschlossen. Bitte kontaktieren sie uns wenn das ein Irrtum ist.",
    "leave_record"          => "Verlasse :record?",
    "leave_record_warn"     => "Das wird sie permanent vom:record entfernen.",
    "success_trashed"       => "Verschieben von :item in den Papierkorb war erfolgreich!",
    "error_trashed"         => "Verschieben von :item in den Papierkorb ist fehlgeschlagen.",
    "blocked_by_rule"       => "Die Anfrage wurde duchr die Spam Regel ':text' blockiert.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Den Browser blockiert Popups. Bitte erlauben sie Popups um das Vorschau Feature nutzen zu können.",
    "error_editing_message" => "There was an error while trying to edit this message.",

    /*
     * 4.1.1
     */
    "brand_not_enabled"     => "This action cannot be performed as the brand is not enabled.",
    "cannot_reply_to_internal" => "A user cannot reply to an internal ticket.",

    /*
     * 4.3.0
     */
    "show_all_results"      => "Show all results &raquo;",

    /*
     * 5.0.0
     */
    "lock_timeout"          => "Lock Timeout",
    "lock_timeout_desc"     => "The server is currently busy processing other requests. Please try again.",

);
