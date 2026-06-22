<?php

return array(

    "user"                          => "Benutzer|Benutzer",
    "user_details"                  => "Benutzer Details",
    "add_user"                      => "Benutzer hinzufügen",
    "account_active"                => "Account aktiv",
    "account_active_desc"           => "Umschalten, um den Zugriff auf authentifizierte Bereiche zu aktivieren oder zu deaktivieren.",

    "op_settings_dept_desc"         => "Abteilung, die ein Mitarbeiter bearbeiten kann.",

    "organisation"                  => "Firma|Firmen",
    "members"                       => "Mitglied|Mitglieder",
    "owner"                         => "Besitzer",
    "manager"                       => "Manager",
    "access_level"                  => "Zugriffslevel",
    "access_level_desc"             => "Legt die Zugriffsebene für den Benutzer in der Organisation fest, basierend auf den folgenden Informationen:<br /><strong>Manager</strong> - Kann von allen Benutzern der Organisation erstellte Tickets einsehen und Benutzer der Organisation verwalten<br /><strong>Benutzer</strong> - Kann nur selbst erstellte Tickets einsehen",
    "manage_organisation"           => "Firma bearbeiten",
    "leave_organisation"            => "Firma verlassen",
    "user_membership"               => "Mitgliedschaft",
    "transfer_ownership"            => "Inhaberschaft übertragen",
    "transfer_ownership_desc"       => "Als aktueller Eigentümer der Organisation können Sie nicht als Manager entfernt werden, und nur Sie können die Organisation löschen. Sie können die Eigentümerschaft der Organisation auf eine andere Person übertragen. Beachten Sie, dass diese Aktion nicht rückgängig gemacht werden kann.",
    "transfer_ownership_operator"   => "Nur der Eigentümer kann die Organisation löschen und kann nicht aus ihr entfernt werden. Verwenden Sie diese Option, um die Eigentümerschaft auf einen anderen Benutzer in der Organisation zu übertragen.",
    "start_typing_name"             => "Tippen Sie einen Namen ein...",
    "organisation_desc"             => "Jede Organisation kann <strong>Manager</strong> haben, die Benutzer verwalten sowie die Tickets anderer lesen und beantworten können, und <strong>Benutzer</strong>, die Tickets erstellen, aber die Tickets anderer nicht lesen oder beantworten können.",
    "organisation_operator_desc"    => "Fügen Sie dieser Organisation vorhandene Benutzer hinzu, indem Sie auf \"Benutzer hinzufügen\" klicken und nach deren Namen suchen. Beachten Sie, dass durch das Hinzufügen eines Benutzers alle Verknüpfungen entfernt werden, die dieser mit einer anderen Organisation hat.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Kann andere Benutzer verwalten sowie die Tickets anderer Benutzer anzeigen &amp; beantworten.<br /><strong>Benutzer</strong> - Kann nur Tickets im Namen der Organisation erstellen und eigene Tickets beantworten.",
    "send_password_reset"           => "Link zum Zurücksetzen des Passworts senden",

    "profile"                       => "Profil",

    "login"                         => "Anmelden",
    "remember_me"                   => "Login merken",
    "logout"                        => "Abmelden",
    "return_to_login"               => "Zurück zum Login",

    "user_register_disabled"        => "Derzeit ist die öffentliche Registrierung deaktiviert.",
    "success_register"              => "Konto erfolgreich registriert!",
    "register_now"                  => "Jetzt anmelden",
    "register"                      => "Anmelden",
    "register_account"              => "Benutzerkonto anlegen",
    "signed_up"                     => "Registriert",
    "last_active"                   => "Zuletzt aktiv",

    "forgot_password"               => "Passwort vergessen?",
    "reset_password"                => "Passwort zurücksetzen",
    "set_password"                  => "Neues Passwort setzen",
    "please_set_password"           => "Bitte legen Sie unten Ihr neues Passwort fest.",
    "missing_email_or_reset"        => "Fehlende E-Mail oder fehlerhafter Sicherheitsschlüssel.",

    "firstname"                     => "Vorname",
    "lastname"                      => "Nachname",
    "formatted_name"                => "Formatierter Name",
    "country"                       => "Land",
    "avatar"                        => "Profilbild",
    "confirm_password"              => "Passwort bestätigen",

    "group"                         => "Benutzergruppe|Benutzergruppen",
    "group_members"                 => "Gruppenmitglieder",
    "operator_group"                => "Mitarbeitergruppe|Mitarbeitergruppen",
    "add_group"                     => "Zur Gruppe hinzufügen",

    "customfield"                   => "Benutzerdefiniertes Feld|Benutzerdefinierte Felder",
    "customfield_order"             => "Zeilen per Drag and Drop verschieben um die Reihenfolge anzupassen.",

    "role"                          => "Rolle|Rollen",

    "operator_login_log"            => "Mitarbeiter-Login Log",
    "system_activity_log"           => "Systemaktivitäts-Log",
    "activity_log"                  => "Aktivitäts-Log",

    "mass_email"                    => "Massenmail verschicken",
    "send_email"                    => "E-Mail versenden",
    "choose_template"               => "Vorlage auswählen...",

    "ldap_account"                  => "LDAP Konto|LDAP Konten",
    "ldap_operator_desc"            => "Neuen Mitarbeiter erstellen oder bestehenden Mitarbeiter auswählen.",
    "ldap_server_desc"              => "Der Hostname des Servers. Alternativ kann auch die komplette LDAP-Adresse angegeben werden. So verbindet die Adresse ldaps://ldap.server:1234/ per SSL zu Port 1234.",
    "ldap_username"                 => "LDAP-Benutzername",
    "ldap_username_desc"            => "Der Benutzername des Mitarbeiters, den dieser zur Anmeldung nutzt.",
    "ldap_rdn"                      => "LDAP, RDN oder DN",
    "ldap_rdn_desc"                 => "Der Distinguished Name für den LDAP-Benutzernamen, zum Beispiel: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP-Details",

    "operator_details"              => "Mitarbeiter-Details",

    "enable_ldap"                   => "LDAP aktivieren",
    "enable_ldap_desc"              => "Wenn Sie LDAP aktivieren, können Sie es für die Anmeldung nutzen. Nach dem Aktivieren müssen Sie die Einstellungen in den LDAP Zugängen bearbeiten.",
    "user_reg_enabled"              => "Benutzerregistrierung aktivieren",
    "user_reg_enabled_desc"         => "Neuen Benutzer können sich über das Frontend anmelden.",
    "user_reg_captcha"              => "Captcha",
    "user_reg_captcha_desc"         => "Bei der Registrierung muss ein Captcha bestätigt werden.",
    "user_name_format"              => "Namensformat",
    "first_last"                    => "Vorname",
    "last_first"                    => "Nachname",
    "first_l"                       => "Vorname N.",
    "f_last"                        => "V. Nachname",
    "password_length"               => "Passwortlänge",
    "password_length_desc"          => "Minimale Passwortlänge.",
    "password_strength"             => "Passwortstärke",
    "password_strength_desc"        => "Zeichen die in einem Passwort verwendet werden müssen.",
    "password_str_must_contain"     => "Passwort muss enthalten:",
    "password_str_letters"          => "Mindestens einen Buchstaben.",
    "password_str_digits"           => "Mindestens eine Zahl.",
    "password_str_case"             => "Groß- und Kleinschreibung.",
    "password_str_symbols"          => "Mindestens eine Sonderzeichen.",

    "load_template"                 => "Vorlage laden",
    "load_template_desc"            => "Wenn Sie eine Vorlage laden, wird die vorhandene E-Mail und Nachricht ersetzt.",
    "clear_template"                => "Template leeren",

    "personal_settings"             => "Einstellungen",
    "personal_settings_desc"        => "Passen Sie Ihr Profil an.",
    "two_fa"                        => "Zwei-Faktor Authentifizierung",
    "notifications"                 => "Benachrichtigungen",
    "two_fa_success_disabled"       => "Zwei-Faktor Authentifizierung wurde deaktiviert.",
    "two_fa_success_enabled"        => "Zwei-Faktor Authentifizierung wurde aktiviert.",
    "two_fa_incorrect"              => "Der eingegebene Code ist falsch. Bitte überprüfen Sie Ihren Code.",
    "two_fa_enabled"                => "2FA aktiviert",
    "two_fa_disable"                => "Bitte bestätigen Sie, dass Sie die 2FA deaktivieren möchten.",
    "two_fa_enable"                 => "Um die 2FA zu aktivieren, richten Sie bitte das Konto auf Ihrem Smartphone und verifizieren es mit den aufgeführten Daten.",
    "verify_code"                   => "Code überprüfen",
    "verify_and_disable"            => "Überprüfen & Deaktivieren",
    "verify_and_enable"             => "Überprüfen & Aktivieren",
    "verify_code_desc"              => "Bitte geben Sie einen gültigen Code ein, um die 2FA zu deaktivieren.",
    "qr_code"                       => "QR-Code",
    "two_fa_code"                   => "2FA-Code",
    "two_fa_secret"                 => "2FA Geheimnis",
    "two_fa_secret_desc"            => "Bitte speichern Sie das 'Geheimnis' an einem sicheren Ort, um bei einem Verlust die 2FA wiederherstellen zu können.",
    "desktop_notifications"         => "Desktop Benachrichtigungen",
    "browser_notifications"         => "Browser Benachrichtigungen",

    "search_for_user"               => "Benutzer suchen...",
    "select_operator"               => "Mitarbeiter auswählen...",
    "select_group"                  => "Gruppe auswählen...",

    "your_ip_has_been_banned"       => "Ihre IP wurde gesperrt.",
    "password_reset_success"        => "Passwort erfolgreich zurückgesetzt!",

    "simpleauth_token_expired"      => "Der Zugriffstoken ist abgelaufen.",
    "simpleauth_token_invalid"      => "Der Zugriffstoken ist nicht gültig.",
    "simpleauth_invalid_guard"      => "Login nicht möglich.",
    "simpleauth_not_allowed"        => "Sie können sich derzeit nicht per SimpleAuth anmelden.",

    /*
     * 2.0.2
     */

    "email_history"                 => "E-Mail Verlauf",
    "view_email"                    => "E-Mail anzeigen",

    "ban_after_count"               => "IP nach fehlgeschlagenen Anmeldungen sperren",
    "ban_after_count_user"          => "Die Anzahl der fehlgeschlagenen Logins nach der die Benutzer IP Adresse gesperrt wird. Die Benutzer können sich dann für die konfigurierte Zeitspanne nicht mehr anmelden. Den Wert auf 0 setzen deaktiviert die Funktionalität.",
    "ban_after_count_operator"      => "Die Anzahl der fehlgeschlagenen Logins nach der die Client IP Adresse gesperrt wird. Die Mitarbeiter haben danach von dieser IP aus keinen Zugriff mehr auf den Mitarbeiter-Bereich und die API für einen konfigurierten Zeitraum. Den Wert auf 0 setzen deaktiviert die Funktionalität.",
    "ban_length"                    => "Dauer der IP-Sperre",
    "ban_length_desc"               => "Die Dauer der IP Sperre wenn das konfigurierte Maximum an fehlgeschlagenen Logins erreicht wurde in einem Tag.",
    "n_failed_logins"               => ":count fehlgeschlagene Logins in 24h",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Ich gönne mir eine Pause...",
    "operator_session_expired"      => "Sie waren für eine zeitlang inaktiv oder haben sich von einem anderen Gerät angemeldet. Bitte melden Sie sich erneut an.",
    "log_back_in"                   => "Anmelden",
    "all_users"                     => "Alle Benutzer",
    "all_operators"                 => "Alle Mitarbeiter",
    "email_per_batch"               => "E-Mails pro Bündel",
    "email_per_batch_desc"          => "Die Anzahl der E-Mails, die zusammen übertragen werden.",
    "batch_interval"                => "Übertragungs-Intervall",
    "batch_interval_desc"           => "Die Pause zwischen Übertragungs-Intervallen (in Minuten) - 1 Minute ist das Minimum.",
    "select_user_groups"            => "Benutzer-/Mitarbeitergruppe oder E-Mail eingeben...",
    "mass_email_sending_time"       => "Es wird ca. :time benötigen, um alle E-Mail zu senden.",
    "organisations_enabled"         => "Firma aktiviert",
    "organisations_enabled_desc"    => "Benutzer können normalerweise Ihrem Profil eine Firma hinzufügen und andere Benutzer dieser Firma zuweisen. Firmen können deaktiviert werden und sind dann nicht mehr auswählbar.",
    "manager_notifications"         => "Verwalter Benachrichtigungen",
    "manager_notifications_desc"    => "Sollen Verwalter von Firmen E-Mail Updates von anderen Firmenmitglieder erhalten. Jeder Verwalter kann diese Einstellungen in seinem persönlichen Profil überschreiben.",
    "manager_email_notifications_desc" => "Sollen Benachrichtungen per E-Mail über Updates anderer Firmenmitglieder empfangen werden.",
    "organisation_notifications_desc" => "Sollen Benachrichtungen per E-Mail über Updates anderer Firmenmitglieder empfangen werden.",
    "select_operator_group_desc"    => "Bitte wählen Sie mindestestens eine Gruppe für diesen Mitarbeiter.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Benutzerdefiniertes Feld der Organisation|Benutzerdefinierte Felder der Organisation",
    "recent_users"                  => "Kürzlich aktive Benutzer",
    "recent_organisations"          => "Kürzlich aktive Organisationen",
    "group_brand_desc"              => "Wählen Sie die Marken aus, auf die diese Gruppe Zugriffsberechtigung erhält.",
    "select_operators"              => "Wählen Sie Mitarbeiter aus...",
    "select_groups"                 => "Wählen Sie Gruppe(n) aus...",
    "group_department_desc"         => "Weisen Sie allen Mitgliedern dieser Gruppe den Abteilungen zu. Mitarbeiter können auch individuell den Abteilungen zugewiesen werden.",
    "op_settings_group_dept"        => "Durch Gruppen zugewiesen:",
    "op_settings_group_dept_desc"   => "Diese Abteilungen wurden automatisch vererbt durch die oben ausgewählten Gruppen. Um durch eine Gruppe zuzuweisen, muss entweder die Gruppe oder die Abteilungseinstellungen geändert werden.",
    "op_settings_individual_dept"   => "Individuell zugewiesen:",
    "op_settings_individual_dept_desc" => "Diese Abteilungen sind zusätzlich zu den durch Gruppen zugewiesenen Abteilungen.",
    "also_registered_other_brand"   => "Dieser Benutzer ist auch in der Marke :brands registriert.|Dieser Benutzer ist auch in den Marken :brands registriert.",
    "view_organisation"             => "Organisation anzeigen",
    "new_owner"                     => "Neuer Besitzer",
    "operator_role"                 => "Mitarbeiter-Rolle|Mitarbeiter-Rollen",
    "manage_users"                  => "Benutzer verwalten",
    "manage_organisations"          => "Organisationen verwalten",
    "manage_operators"              => "Mitarbeiter verwalten",
    "user_profile"                  => "Benutzer Profil",
    "organisation_access_level"     => "Organisationszugriffsebene",
    "organisation_notifications"    => "Organisations Benachrichtigungen",
    "organisation_users"            => "Organisations Benutzer",
    "organisation_users_ticket"     => "Oben ist eine Liste der Organisations Besitzer die auch bei Ticket Updates informiert werden.",

    /*
     * 2.1.1
     */
    "change_password"               => "Passwort ändern",
    "current_password"              => "Aktuelles Passwort",
    "new_password"                  => "Neues Passwort",
    "personal_confirm_password"     => "Bitte geben Sie das Passwort erneut ein, um es zu bestätigen. Dadurch sinkt auch die Wahrscheinlichkeit für Tippfehler.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Suche nach Benutzern oder Mitarbeitern...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Das Format für die Anzeige der Benutzername im System.",
    "operator_name_format_desc"     => "Das Format für die Anzeige der Mitarbeiternamen im System.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Entfernen von :record?",
    "remove_from_warn"              => "Dies entfernt den Benutzer <strong>:name</strong> permanent von :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "login_via"                     => "Anmelden über :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Bitte melden Sie sich an um die Verbindung mit 'Social Login' zu bestätigen.",
    "social_linking_register"       => "Bitte füllen Sie das Formular aus um Ihre Registration zu vervollständigen. Ihr 'Social Login' wird automatisch verknüpft.",
    "already_registered"            => "Bereits registriert?",
    "linked_accounts"               => "Verknüpfte Konten",
    "unlink_account"                => "Verknüpfung :record vom Konto entfernen",
    "unlink_account_warning"        => "Nach dem Entfernen der Verknüpfung können Sie diesen 'Social Login' nicht mehr für die Anmeldung nutzen.",
    "failed_login"                  => "fehlgeschlagner Login|fehlgeschlagene Logins",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "muss die Berechtigung \":permission\" haben",
    "deleted_user"                  => "Gelöschter Benutzer",
    "access_level_not_owner"        => "Die Berechtigung des Organisationsbesitzers kann nicht geändert werden. Transferieren Sie die Besitzrolle zuerst über Organisation anzeigen, 'Benutzer' tab.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Wählen Sie eine existierende Organisation oder geben Sie eine neue ein...",

    /*
     * 2.5.0
     */
    "success_register_desc"         => "Vielen Dank für das Registrieren Ihres Kontos. Bitte überprüfen Sie Ihren Posteingang oder Spam-Ordner um das Konto fertigzustellen.",
    "use_gravatar"                  => "Gravatar benutzen",
    "use_gravatar_desc"             => "Gravatar ist ein externer Dienst, sie beschreiben sich so: Ihr Gravatar ist ein Bild, das Sie von Website zu Website begleitet. Es erscheint neben Ihrem Namen, wenn Sie Kommentare oder Beiträge in Blogs verfassen. Avatare helfen dabei, Ihre Beiträge in Blogs und Webforen zu identifizieren, warum also nicht auf jeder Website?.",

    /*
     * 2.6.0
     */
    "continue_to_login"             => "Folgen Sie dem Link um sich <a href=':route'>anzumelden</a>.",
    "reset_request_desc"            => "Falls ein passendes Konto gefunden wurde, ist ein Email mit einem Link zum Passwortzurücksetzen geschickt worden.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Das Konto wurde für LDAP basierten Login eingerichtet, bitte geben Sie den LDAP Benutzernamen an.",
    "operator_message"              => "Mitarbeiter-Nachrichten",
    "force_two_fa"                  => "Erzwinge 2FA",
    "force_two_fa_desc"             => "Erzwinge Zwei-Faktor-Authentifizierung auf allen Konten. Jedes Konto ohne aktivierte Zwei-Faktor-Authentifizierung durchläuft automatisch beim nächsten Login den Prozess.",
    "two_fa_required"               => "Zwei-Faktor-Authentifizierung (2FA) ist erforderlich. Bitte folgen Sie den Anweisungen unten um fortzufahren.",
    "two_fa_user_enable"            => "Die Benutzer können 2FA in ihren Profileinstellungen aktivieren.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Erlauben Sie Benutzern, sich mit ihrem Social-Media-Konto zu registrieren und anzumelden.",
    "manage_social_login_options"   => "Um Social-Login-Optionen hinzuzufügen oder zu verwalten, besuchen Sie bitte die Seite <a href=\":route\">Drittanbieter-Integrationen</a>.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Installieren Sie eine der folgenden Applikationen und scannen Sie damit den QR Code oder geben Sie den geheimen Schlüssel ein. Das richtet Ihr Gerät für dieses Konto ein, dann können Sie das Konto sehen und es generiert einen 6 stelligen Code den Sie eingeben müssen um die Einrichtung abzuschließen. Klicken Sie auf Prüfen bevor der Code abläuft. Die Uhrzeit des Servers muss mit NTP synchronisiert sein damit das funktioniert.",
    "two_fa_successfully_enabled"   => "Zwei Faktor Authentifizierung (2FA) wurde erfolgreich eingerichtet und aktiviert.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Telefonnummer|Telefonnummern",

    /*
     * 3.6.0
     */
    "security_settings"             => "Sicherheitseinstellungen",
    "security_settings_desc"        => "Passwort ändern, 2FA aktivieren und andere sicherheitsrelevante Einstellungen für Ihr Konto.",
    "active_sessions"               => "Aktive Sessions",
    "active_sessions_desc"          => "Liste der Sitzungen mit Gerät auf denen Sie angemeldet sind, Sie können die Sitzungen löschen.",
    "current_session"               => "Aktive Session",
    "logged_in"                     => "Angemeldet",
    "revoke_session_desc"           => "Das Löschen der Sitzung wird auch alle 'Angemeldet bleiben'-Tokens löschen.",

    /*
     * 4.0.0
     */
    "verify_phone_number"           => "Telefonnummer bestätigen",
    "verify_phone_method"           => "Wählen Sie eine Methode um Ihre Telefonnummer zu bestätigen.",
    "verify_phone_code_sent"        => "Ein Bestätigungscode wurde an Ihr Telefon gesendet, geben Sie ihn bitte unten ein.",
    "verify_phone_code_send_error"  => "Fehler beim Senden des Bestätigungscodes. Bitte versuchen Sie es später wieder.",
    "verify_phone_code_error"       => "Das Prüfen des Bestätigungscodes schlug fehl.",
    "logged_in_as"                  => "Angemeldet als :name",

    /*
     * 4.1.0
     */
    "merge_users"                   => "Benutzer zusammenführen",
    "merge_user_into"               => "Benutzer auswählen, in den zusammengeführt werden soll",
    "merge_organisations"           => "Organisationen zusammenführen",
    "merge_organisation_into"       => "Organisation auswählen, in die zusammengeführt werden soll",
    "search_for_organisation"       => "Nach Organisation suchen...",

    /*
     * 4.2.0
     */
    "reply_template"                => "Antwortvorlage|Antwortvorlagen",
    "reply_template_desc"           => "Legen Sie eine persönliche Antwortvorlage fest, die das Textfeld vorbefüllt, wenn Sie beginnen, eine Antwort zu verfassen, mit der Möglichkeit, sie je nach Marke/Abteilung des Tickets anzupassen. Die Standard-Antwortvorlage wird verwendet, wenn keine Antwortvorlage für eine bestimmte Abteilung und/oder Marke gefunden werden kann.",
    "operator_reply_template"       => "Mitarbeiter-Antwortvorlage|Mitarbeiter-Antwortvorlagen",
    "ticket_reply_template_desc"    => "Legen Sie die Standard-Ticket-Antwortvorlage des Mitarbeiters fest.",
    "operator_reply_template_desc"  => "Weitere Antwortvorlagen für bestimmte Abteilungen und/oder Marken können im Bereich <a href=':route' target='_blank'>Mitarbeiter-Antwortvorlagen</a> festgelegt werden.",

    /*
     * 5.0.0
     */
    "verified"                      => "Verifiziert",
    "unverified"                    => "Nicht verifiziert",
    "unverified_email_desc"         => "Der Benutzer hat die Inhaberschaft dieser E-Mail-Adresse nicht verifiziert.",
    "unverified_account"            => "Bitte prüfen Sie Ihre E-Mails, um die Inhaberschaft dieser E-Mail-Adresse zu verifizieren.",
    "changing_email_desc"           => "Das ändern der Benutzer Email Adresse zwingt ihn dazu sie beim nächsten Login zu bestätigen.",
    "unregistered_user_desc"        => "Dieser Benutzer wurde automatisch erstellt und besitzt kein Passwort. Sie können unten ein Bestätigungs/Willkommens Mail auslösen damit der Benutzer die Einrichtung seines Kontos vervollständigt.",
    "send_verification_email"       => "Verifizierungs-E-Mail senden",
    "mark_as_verified"              => "Als verifiziert markieren",
    "password_reset_already"        => "Sie haben bereits den Besitz dieser Email Adresse bestätigt, fahren Sie mit dem Login fort.",
    "verification_email_resent"     => "Eine neue Verifizierungs-E-Mail wurde gesendet und sollte in wenigen Minuten eintreffen.",
    "verified_set_password_desc"    => "Vielen Dank für die Verifizierung der Inhaberschaft Ihrer E-Mail. Bitte geben Sie unten ein Passwort ein, um die Einrichtung Ihres Kontos abzuschließen.",
    "thank_you_for_verifying_email" => "Vielen Dank für die Verifizierung der Inhaberschaft Ihrer E-Mail-Adresse.",
    "organisation_domain_desc"      => "Geben Sie jede Domäne ein die zur Organisation gehört. Benutzer deren Mailadresse mit der Domäne übereinstimmt werden automatisch Mitglied der Organisation. Wir empfehlen den Zugehörigkeit des Benutzers zur Firma zu prüfen, und sicherzustellen dass die Email Adresse bestätigt wurde.",
    "resend_verification_email"     => "Verifizierungs-E-Mail erneut senden",
    "updating_email_address"        => "Um das Ändern der Email Adresse abzuschließen muss sie bestätigt werden. Es wurde ein Mail an :email geschickt, folgen Sie den Anweisungen im Mail um die Adresse zu bestätigen.",
    "email_verification"            => "E-Mail-Verifizierung",
    "email_verification_already_in_use" => "Die E-Mail-Adresse wird bereits von einem anderen Konto verwendet.",
    "verification_link_expired"     => "Der Verifizierungslink ist möglicherweise abgelaufen. Falls Ihr Link aus irgendeinem Grund nicht funktioniert, fordern Sie bitte einen neuen an.",
    "user_invited_to_organisation"  => "Der Benutzer wurde per E-Mail in die Organisation eingeladen. Er muss auf den Link klicken und ein Passwort festlegen, um die Einrichtung seines Kontos abzuschließen.",
    "invite_user"                   => "Benutzer einladen",
    "organisation_invite_user"      => "Benutzer in Organisation einladen",
    "user_already_in_organisation"  => "Der Benutzer ist bereits Teil einer Organisation.",
    "invitations"                   => "Einladung|Einladungen",
    "invite_exists"                 => "Der Benutzer wurde bereits eingeladen.",
    "success_join"                  => "Sie sind nun Mitglied der Organisation :name.",
    "error_join"                    => "Der Einladungscode konnte nicht gefunden werden oder ist abgelaufen.",
    "verify_to_view_tickets"        => "Bitte verifizieren Sie alle zusätzlichen E-Mail-Adressen oder entfernen Sie nicht verifizierte E-Mail-Adressen in Ihrem Kontoprofil.",

    /*
     * 5.3.0
     */
    "email_verified"                => "E-Mail verifiziert",
    "registered_desc"               => "Ob der Benutzer ein Passwort festgelegt hat und sich im Frontend anmelden kann.",
    "new_operator_account_desc"     => "Sie können eine Verifizierungs-E-Mail senden, damit der Mitarbeiter sein eigenes Konto einrichtet, oder umschalten, um unten ein Passwort für ihn festzulegen.",
    "operator_set_password_desc"    => "Bitte geben Sie unten ein Passwort ein, um die Einrichtung Ihres Mitarbeiter-Kontos abzuschließen.",
    "password_set_success"          => "Passwort erfolgreich festgelegt!",

    /*
     * 5.7.0
     */
    "reply_template_cursor_position" => "Verwenden Sie im Editor die Option 'Cursor-Position festlegen', um anzugeben, wo der Cursor positioniert wird, wenn der Benutzer den Editor öffnet, um auf ein Ticket zu antworten.",
    "system_bot_desc"               => "Dies ist ein System-Bot-Konto, das für automatisierte Aktionen verwendet wird. Sie können nur dessen Namen und Avatar bearbeiten.",
    "notification_settings"         => "Benachrichtigungseinstellungen",
    "operator_notifications"        => "Mitarbeiter-Benachrichtigungen",
    "operator_notifications_desc"   => "Aktualisieren Sie die Benachrichtigungseinstellungen für das Mitarbeiter-Konto.",
    "default_department_subscription" => "Standard-Abteilungsabonnement",
    "default_department_subscription_desc" => "Legen Sie das Standard-Benachrichtigungsabonnement fest, um zu bestimmen, wann Benachrichtigungen bei Ticket-Ereignissen gesendet werden. Dieses Abonnement wird für jede Abteilung verwendet, für die kein spezifisches Abonnement konfiguriert ist.",
    "department_subscriptions"      => "Abteilungsabonnements",
    "department_subscriptions_desc" => "Passen Sie das Benachrichtigungsabonnement für jede Abteilung an.",
    "subscription_type"             => "Abonnementtyp",
    "subscription_default"          => "Standard",
    "subscription_default_desc"     => "Das Standard-Abonnement der Abteilung für diese Abteilung verwenden.",
    "subscription_all_activity"     => "Alle Aktivitäten",
    "subscription_all_activity_desc" => "Benachrichtigungen über alle Aktivitäten in dieser Abteilung erhalten.",
    "subscription_unassigned_and_assigned" => "Nicht zugewiesen und zugewiesen",
    "subscription_unassigned_and_assigned_desc" => "Benachrichtigungen aus dieser Abteilung erhalten, wenn dem Ticket niemand zugewiesen ist oder wenn es Ihnen zugewiesen wird. Benachrichtigungen werden auch gesendet, wenn Sie das Ticket beobachten oder mit @ erwähnt werden.",
    "subscription_assigned_only"    => "Nur zugewiesen",
    "subscription_assigned_only_desc" => "Benachrichtigungen aus dieser Abteilung nur erhalten, wenn das Ticket Ihnen zugewiesen ist. Benachrichtigungen werden auch gesendet, wenn Sie das Ticket beobachten oder mit @ erwähnt werden.",
    "subscription_ignore"           => "Ignorieren",
    "subscription_ignore_desc"      => "Keine Benachrichtigungen über Aktivitäten in dieser Abteilung erhalten, außer wenn Sie das Ticket beobachten oder mit @ erwähnt werden.",
    "configure_on_operator_notifications" => "Abteilungsspezifische Benachrichtigungs-Abonnements können auf der Seite <a href=':route' target='_blank'>Mitarbeiter-Benachrichtigungen</a> festgelegt werden.",
    "notification_channel_email"    => "E-Mail",
    "notification_channel_browser"  => "Browser",
    "browser_notifications_desc"    => "Das System benachrichtigt Sie über bestimmte Ereignisse über den Browser. Sie können zwischen Desktop-Benachrichtigungen, In-App-Benachrichtigungen oder einer vollständigen Deaktivierung wählen.",
    "failed_login_notification"     => "Fehlgeschlagene Mitarbeiter-Anmeldung",
    "failed_login_notification_desc" => "Benachrichtigt Sie, wenn sich jemand nicht im Mitarbeiter-Bereich anmelden kann oder dessen IP aufgrund mehrerer fehlgeschlagener Anmeldeversuche gesperrt wurde.",
    "notifications_desc"            => "Wählen Sie die Kanäle aus, über die Sie über Systemereignisse benachrichtigt werden möchten, oder deaktivieren Sie einzelne Benachrichtigungen vollständig.",
    "in_app_notifications"          => "In-App-Benachrichtigungen",

    /*
     * 6.0.0
     */
    "ldap_start_tls_desc"           => "Ob unverschlüsselt verbunden und die Verbindung anschließend per StartTLS aufgewertet werden soll. Wenn Sie das LDAPS-Protokoll verwenden, sollte diese Option nicht genutzt werden.",
    "ldap_ca_cert"                  => "CA-Zertifikat",
    "ldap_ca_cert_desc"             => "Optional können Sie die CA-Zertifikatsdatei des LDAP-Servers hochladen. Dies ist nur bei der Verwendung selbstsignierter Zertifikate erforderlich.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_hostname"          => "Hostname",
    "ldap_server_name_desc"         => "Ein sprechender Name zur Identifizierung dieses LDAP-Servers.",
);
