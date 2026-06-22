<?php

return array(

    "deleted"               => "Gelöscht!",
    "success"               => "Erfolgreich",
    "error"                 => "Fehler",
    "in_progress"           => "In Arbeit",

    "save_order"            => "Es wird versucht, die aktualisierte Reihenfolge der Elemente zu speichern",

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
    "cant_find_page"        => "Die gewünschte Seite konnte nicht gefunden werden.",

    "please_report"         => "Bitte setzen Sie sich mit einem Administrator in Verbindung, wenn Sie dieses Ergebnis nicht erwartet haben.",

    "return_to"             => "Zu :page zurückkehren.",

    "session_refresh"       => "Ihre Sitzung ist abgelaufen - Bitte aktualisieren Sie diese Seite und versuchen es erneut.",

    "general_error"         => "Ein Fehler ist aufgetreten. Bitte versuchen Sie es erneut.",

    "no_results"            => "Keine Ergebnisse.",

    "assign_incomplete"     => "Die Aktion konnte nicht komplett ausgeführt werden. :names konnte einigen Tickets nicht zugewiesen werden.",

    "maintenance_mode"      => "Der Wartungs-Modus ist aktiv. Das Support-Portal ist derzeit für Ihre Benutzer nicht erreichbar. Bitte denken Sie daran, den Wartungs-Modus zu deaktivieren.",

    "invalid_captcha"       => "Der eingegebene Sicherheitscode ist falsch oder ungültig. Bitte versuchen Sie es noch einmal.",
    "blocked_as_spam"       => "Ihre Anfrage wurde als SPAM erkannt. Bitte kontaktieren Sie einen Administrator, wenn Sie denken, dass dies fälschlicherweise erfolgt ist.",
    "account_exists"        => "Es existiert bereits ein aktives Konto mit dieser E-Mail.",
    "error_loading_comments" => "Es gab ein Problem beim Laden der Kommentare.",

    "invalid_auth"          => "Falsche Zugangsdaten.",

    "forbidden"             => "Verboten",

    "not_logged_exception"  => "<strong>Uuuups! Etwas ist schiefgelaufen.</strong><br />Bitte informieren Sie einen Administrator, falls der Fehler weiterhin besteht.",

    "not_operator"          => "Etwas ist schiefgelaufen. Der ausgewählte Mitarbeiter ist nicht gültig. Bitte stellen Sie sicher, dass der Mitarbeiter einer Gruppe zugewiesen und der Gruppe eine Rolle zugewiesen wurde.",

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
    "unable_to_connect_db"  => "<strong>Dienst derzeit nicht verfügbar.</strong><br />Es konnte keine Verbindung zur Datenbank hergestellt werden.",
    "category_required"     => "Der Artikel muss einer oder mehreren Kategorien zugeordnet sein.",
    "warning"               => "Warnung",
    "note"                  => "Hinweis",
    "brand_invalid_dept"    => "Die Aktion konnte nicht vollständig abgeschlossen werden. Die Abteilung konnte bei einigen Tickets aufgrund ihrer Marke nicht aktualisiert werden.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Anhang \":filename\" konnte nicht hochgeladen werden, Grund: \":reason\"",
    "upload_max_size"       => "Die Datei muss kleiner als :size sein",
    "upload_wrong_type"     => "Dieser Dateityp ist nicht zulässig",

    /*
     * 2.3.0
     */
    "delete_record"         => "Löschen :record?",
    "cannot_be_undone"      => "Diese Aktion ist unwiederruflich.",
    "warn_delete"           => "Dies wird die <strong>:name</strong> :record dauerhaft aus dem System löschen.",
    "delete_confirm"        => "Ja, :record löschen",
    "keep_record"           => "Nein, :record behalten",
    "delete_relations"      => "Löschen von <strong>:name</strong> :record wird auch alle folgenden Daten löschen:",
    "please_check"          => "Sie müssen alle Kästchen anwählen, um Ihr Verständnis der Unumkehrbarkeit dieser Aktion zu bestätigen.",
    "failed_attachments"    => "Konnte einige Dateien nicht anhängen.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Erfolg - Email wurde gesendet.",
    "task_already_running"  => "Die geplante Aufgabe läuft bereits, bitte versuchen Sie es später erneut.",
    "linked_account"        => "Der 'social account' wurde erfolgreich mit Ihrem Konto verbunden.",
    "already_linked"        => "Der 'Social Account' ist bereits mit einem anderen Konto verbunden. Bitte melden Sie sich mit dem anderen Konto an und entfernen Sie die Verbindung zum 'Social Account'.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Sieht das korrekt aus?",
    "no_revert"             => "Nein! Stellen Sie die Änderung zurück",
    "attachment_not_found"  => "Der Anhang wurde nicht gefunden.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Ihr Konto wurde geschlossen. Bitte kontaktieren Sie uns, wenn dies ein Irrtum sein sollte.",
    "leave_record"          => "Verlassen :record?",
    "leave_record_warn"     => "Das wird Sie dauerhaft von dem :record entfernen.",
    "success_trashed"       => "Verschieben von :item in den Papierkorb war erfolgreich!",
    "error_trashed"         => "Verschieben von :item in den Papierkorb ist fehlgeschlagen.",
    "blocked_by_rule"       => "Die Anfrage wurde durch die Spam-Regel ':text' blockiert.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Der Browser blockiert Popups. Bitte erlauben Sie Popups, um das Vorschau-Feature nutzen zu können.",
    "error_editing_message" => "Beim Versuch, diese Nachricht zu bearbeiten, ist ein Fehler aufgetreten.",

    /*
     * 4.1.1
     */
    "brand_not_enabled"     => "Diese Aktion kann nicht ausgeführt werden, da die Marke nicht aktiviert ist.",
    "cannot_reply_to_internal" => "Ein Benutzer kann nicht auf ein internes Ticket antworten.",

    /*
     * 4.3.0
     */
    "show_all_results"      => "Alle Ergebnisse für ':search' anzeigen",

    /*
     * 5.0.0
     */
    "lock_timeout"          => "Sperrzeitüberschreitung",
    "lock_timeout_desc"     => "Der Server ist derzeit mit der Bearbeitung anderer Anfragen ausgelastet. Bitte versuchen Sie es erneut.",

    /*
     * 5.4.1
     */
    "throttle_error"        => "Zu viele Versuche, bitte versuchen Sie es :in_time erneut.", // :in_time becomes in 1 minute, etc

    /*
     * 6.0.0
     */
    "session_expired"       => "Ihre Sitzung ist abgelaufen - Bitte loggen Sie sich neu ein.",

);
