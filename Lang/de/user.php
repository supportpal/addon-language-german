<?php

return array(

    "user"                          => "Benutzer|Benutzer",
    "user_details"                  => "Benutzer Details",
    "add_user"                      => "Benutzer hinzufügen",
    "account_active"                => "Account aktiv",
    "account_active_desc"           => "Toggle to enable and disable access to authenticated sections.",

    "op_settings_dept_desc"         => "Abteilung, die ein Mitarbeiter bearbeiten kann.",

    "organisation"                  => "Firma|Firmen",
    "members"                       => "Mitglied|Mitglieder",
    "owner"                         => "Besitzer",
    "manager"                       => "Manager",
    "access_level"                  => "Zugriffslevel",
    "access_level_desc"             => "Define the access level for the user in the organisation, based on the following schedule:<br /><strong>Manager</strong> - Can view tickets opened by all users in the organisation and manage users in the organisation<br /><strong>User</strong> - Can view tickets only opened by self",
    "manage_organisation"           => "Bearbeite Firma",
    "leave_organisation"            => "Firma verlassen",
    "user_membership"               => "Mitgliedschaft",
    "transfer_ownership"            => "Inhaberschaft übertragen",
    "transfer_ownership_desc"       => "As the current owner of the organisation, you cannot be removed as a manager and only you can delete the organisation. You may transfer the ownership of the organisation to someone else, be aware that this action cannot be reversed.",
    "transfer_ownership_operator"   => "Only the owner can delete the organisation and cannot be removed from it. Use this option to change the ownership to another user in the organisation.",
    "start_typing_name"             => "Tippen Sie einen Namen ein...",
    "organisation_desc"             => "Each organisation can have <strong>managers</strong>, who can manage users and read and reply to other's tickets, and <strong>users</strong>, who can open tickets, but can't read or reply to other's tickets.",
    "organisation_operator_desc"    => "Add existing users to this organisation by clicking \"Add User\" and searching for their name, note that adding a user will remove any links they have with another organisation.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Can manage other users and view &amp; reply to other user's tickets.<br /><strong>User</strong> - Can only open tickets on behalf of organisation and reply to own tickets.",
    "send_password_reset"           => "Send Password Reset Link",

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

    "forgot_password"               => "Passswort vergessen?",
    "reset_password"                => "Passwort zurücksetzen",
    "set_password"                  => "Neues Passwort setzen",
    "please_set_password"           => "Please set your new password below.",
    "missing_email_or_reset"        => "Fehlende E-Mail oder fehlerhafter Sicherheitsschlüsseö.",

    "firstname"                     => "Vorname",
    "lastname"                      => "Nachname",
    "formatted_name"                => "Formatted Name",
    "country"                       => "Land",
    "avatar"                        => "Profilbild",
    "confirm_password"              => "Passwort bestätigen",

    "group"                         => "Benutzergruppe|Benutzergruppen",
    "group_members"                 => "Gruppenmitglieder",
    "operator_group"                => "Mitarbeitergruppe|Mitarbeitergruppem",
    "add_group"                     => "Zur Gruppe hinzufügen",

    "customfield"                   => "benutzerdefiniertes Feld|benutzerdefinierte Felder",
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
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "Der Hostname des Servers. Alternativ kann auch die komplette LDAP-Adresse angegeben werden. So verbindet die Adresse ldaps://ldap.server:1234/ per SSL zu Port 1234.",
    "ldap_username"                 => "LDAP Username",
    "ldap_username_desc"            => "Der Benutzername des Mitarbeiter, den er zur Anmeldung am benutzt.",
    "ldap_rdn"                      => "LDAP, RDN oder DN",
    "ldap_rdn_desc"                 => "The distinguished name for the LDAP username, for example: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP Details",

    "operator_details"              => "Mitarbeiter-Details",

    "email_notifications"           => "E-Mail Benachrichtigungen",
    "email_notifications_desc"      => "Die Benachrichtigungen, die vom System empfangen werden.",

    "enable_ldap"                   => "LDAP aktivieren",
    "enable_ldap_desc"              => "Wenn Sie LDAP aktivieren, können Sie es für die Anmeldung nutzen. Nach dem Aktivieren müssen Sie die Einstellungen in den LDAP Zugängen bearbeiten.",
    "user_reg_enabled"              => "Benutzerregistrierung aktivieren",
    "user_reg_enabled_desc"         => "Neuen Benutzer können sich über das Frontend anmelden.",
    "user_reg_captcha"              => "Captcha",
    "user_reg_captcha_desc"         => "Bei der Registrierung muss ein Captcha bestätigt werden.",
    "user_name_format"              => "Namensformat",
    "first_last"                    => "Vorname",
    "last_first"                    => "Nachname",
    "first_l"                       => "First L.",
    "f_last"                        => "F. Last",
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
    "two_fa_incorrect"              => "Der eingegebene Code ist falsch. Bitte überprüfen Sie Ihre Code.",
    "two_fa_enabled"                => "2FA aktiviert",
    "two_fa_disable"                => "Bitte bestätigen Sie, dass Sie die 2FA deaktivieren möchten.",
    "two_fa_enable"                 => "Um die 2FA zu aktivieren, richten Sie bitte das Konto auf Ihrem Smartphone und verifizieren es mit den aufgeführten Daten.",
    "verify_code"                   => "Code überprüfen",
    "verify_and_disable"            => "Überprüfen & Deaktivieren",
    "verify_and_enable"             => "Überprüfen & Aktivieren",
    "verify_code_desc"              => "Bitte gebene Sie einen gültigen Code ein, um die 2FA zu deaktivieren.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "2FA Code",
    "two_fa_secret"                 => "2FA Geheimnis",
    "two_fa_secret_desc"            => "Pbitte speichern sie das 'Geheimins' an einem sicheren Ort, um bei einem Verlust den 2FA wiederherstellen zu können.",
    "display_notifications"         => "Benachrichtigungen deaktivieren",
    "display_notifications_desc"    => "Das System benachtigt sie bei neuen Tickets, Antworten oder wenn sich andere Operateure anmelden während sie das Operator Panel offen haben. Sie können sich zwischen Desktop oder in Browser Notifications entscheiden oder ganz deaktivieren.",
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

    "ban_after_count"               => "IP nach fehlgeschlaften Anmeldungen sperren",
    "ban_after_count_user"          => "Die Anzahl der fehlgeschlagenen Logins nach der die Benutzer IP Adresse gesperrt wird. Die Benutzer können sich dann für die konfigurierte Zeitspanne nicht mehr anmelden. Den Wert auf 0 setzen deaktiviert die Funktionalität.",
    "ban_after_count_operator"      => "Die Anzahl der fehlgeschlagenen Logins nach der die Client IP Adresse gesperrt wird. Die Operateure haben danach von dieser IP aus keinen Zugriff mehr auf das Operator Panel und die API für einen konfigurierten Zeitraum. Den Wert auf 0 setzen deaktiviert die Funktionalität.",
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
    "batch_interval"                => "Übertraguns-Intervall",
    "batch_interval_desc"           => "Die Pause zwischen Übertraguns-Intervallen (in Minuten) - 1 Minute ist das Minimum.",
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
    "organisation_customfield"      => "Benuterdefiniertes Feld der Organisation|Benutzerdefinierte Felder der Organisation",
    "recent_users"                  => "Kürzlich aktive Benutzer",
    "recent_organisations"          => "Kürzlich aktive Organisationen",
    "group_brand_desc"              => "Wählen sie die Marken aus auf die diese Gruppe Zugriffsbereichtigungen erhält.",
    "select_operators"              => "Wähle Operator(en)...",
    "select_groups"                 => "Wähle Gruppe(n)...",
    "group_department_desc"         => "Weise allen Mitgliedern dieser Gruppe den Abteilungen zu. Operateure können auch individuell den Abteilungen zugewiesen werden.",
    "op_settings_group_dept"        => "Durch Gruppen zugewiesen:",
    "op_settings_group_dept_desc"   => "Diese Abteilungen wurden automatisch vererbt durch die oben ausgewählten Gruppen. Um durch eine Gruppe zuzuweisen müss entweder die Gruppe oder die Abteilungseinstellugen geändert werden.",
    "op_settings_individual_dept"   => "Individuell zugewiesen:",
    "op_settings_individual_dept_desc" => "Diese Abteilungen sind zusätzlich zu den durch Gruppen zugewiesenen Abteilungen.",
    "also_registered_other_brand"   => "Dieser Benuter ist auch in den Marke :brands registriert.|Dieser Benutzer ist auch in den Marken :brands registriert.",
    "view_organisation"             => "Zeige die Organisation",
    "new_owner"                     => "Neuer Besitzer",
    "operator_role"                 => "Operator Rolle|Operator Rollen",
    "manage_users"                  => "Verwalte Benutzer",
    "manage_organisations"          => "Verwalte Organisationen",
    "manage_operators"              => "Verwalte Operatoren",
    "user_profile"                  => "Benutzer Profil",
    "organisation_access_level"     => "Organisationszugriffs Nievaeu",
    "organisation_notifications"    => "Organisations Benachrichtigungen",
    "organisation_users"            => "Organisations Benutzer",
    "organisation_users_ticket"     => "Oben ist eine Liste der Organisations Besitzer die auch bei Ticket Updates informiert werden.",

    /*
     * 2.1.1
     */
    "change_password"               => "Passwort ändern",
    "current_password"              => "Aktuelles Passwort",
    "new_password"                  => "Neues Passwort",
    "personal_confirm_password"     => "Bitte geben sie das Passwort erneut ein, um es zu bestätigen. Dadurch sinkt auch die Wahrscheinlichkeit für Tippfehler",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Suche nach Benutzern oder Operatoren...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Das Format für die Anzeige der Benutzername im System.",
    "operator_name_format_desc"     => "Das Format für die Anzeige der Operatornamen im System.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Entfernen von :record?",
    "remove_from_warn"              => "Dies entfernt den Benutzer <strong>:name</strong> permanent von :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "login_via"                     => "Log in via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Bitte melden sie sich an um die Verbindung mit 'Social Login' zu bestätigen.",
    "social_linking_register"       => "Bitte füllen sie das Formular aus um Ihre Registration zu vervollständigen. Ihr 'Social Login' wird automatisch verknüpft.",
    "already_registered"            => "Bereits registriert?",
    "linked_accounts"               => "Verknüpfte Konten",
    "unlink_account"                => "Verknüpfung :record vom Konten entfernen",
    "unlink_account_warning"        => "Nach dem entfernen der Verknügung können sie diesen 'Social Login' nicht mehr für die Anmeldung nutzen.",
    "failed_login"                  => "fehlgeschlagner Login|fehlgeschlagene Logins",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "muss die Berechtigung \":permission\" haben",
    "deleted_user"                  => "Gelöschter Benutzer",
    "access_level_not_owner"        => "Die Berechtigung des Organisationsbesitzers kann nicht geändert werden. Transferieren sie die Besitzrolle zuerst über Organisation anzeigen, 'Benutzer' tab.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Wähle eine existierende Organisation oder geben sie eine neue ein...",

    /*
     * 2.5.0
     */
    "success_register_desc"         => "Vielen Dank für das registrieren ihres Kontos. Bitte überpüfen sie Ihren Posteingang oder Spam Ordner um das Konto fertigzustellen.",
    "use_gravatar"                  => "Benutze Gravatar",
    "use_gravatar_desc"             => "Gravatar ist ein externer Dienst, sie beschreiben sich so: Ihr Gravatar ist ein Bild, das sie von Website zu Website begleitet. Es erscheint neben ihrem Namen, wenn sie Kommentare oder Beiträge in Blogs verfassen. Avatare helfen dabei, ihre Beiträge in Blogs und Webforen zu identifizieren, warum also nicht auf jeder Website?.",

    /*
     * 2.6.0
     */
    "continue_to_login"             => "Folgen sie dem Link um sich <a href=':route'>anzumelden</a>.",
    "reset_request_desc"            => "Falls ein passendes Konteo gefunden wurde, ist ein Email mit einem Link zum Passwortzurücksetzen geschickt worden.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Das Konteo wurde für LDAP basierten Login eingerichtet, bitte geben sie den LDAP Benutzernamen an.",
    "operator_message"              => "Operator Nachrichten",
    "force_two_fa"                  => "Erwzinge 2FA",
    "force_two_fa_desc"             => "Erwzinge Zwei Faktor Authentisierung auf allen Konten. Jedes Konto ohne ausgerollten  zweiten Faktor durchläuft automatisch beim nächsten Login den Prozess.",
    "two_fa_required"               => "Zwei Faktor Autthentisierung (2FA) ist nötig. Bitte folgen sie den Anweisungen unten um fortzufahren.",
    "two_fa_user_enable"            => "Die Benutzer können 2FA in ihren Profileinstellungen aktivieren.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Allow users to register and log in using their social account.",
    "manage_social_login_options"   => "To add or manage social login options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Installieren sie eine der folgenden Applikationen und scannen sie damit den QR Code oder geben sie den geheimen Schlüssel ein. Das richtet ihr Gerät für dieses Konto ein, dann können sie das Konto sehen und es generiert einen 6 stelligen Code den sie eingeben müssen um die Einrichtung abzuschließen. Klicken auf Prüfen bevor der Code abläuft. Die Uhrzeit des Servers muss mit NTP sychronisiert sein damit das funktioniert.",
    "two_fa_successfully_enabled"   => "Zwei Faktor Authentifizierung (2FA) wurde erfolgreich eingerichtet und aktiviert.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Telefonnummer|Telefonnummern",

    /*
     * 3.6.0
     */
    "security_settings"             => "Sicherheitseinstellungen",
    "security_settings_desc"        => "Passwort änder, 2FA aktivieren und andere Sicherheitsrelevante Einstellungen für Ihr Konto.",
    "active_sessions"               => "Aktive Sessions",
    "active_sessions_desc"          => "Liste der Sitzungen mit Gerät auf denen sie angemeldet sind, sie können die Sitzungen löschen.",
    "current_session"               => "Aktive Session",
    "logged_in"                     => "Angemeldet",
    "revoke_session_desc"           => "Das löschen der Sitzung wird auch alle 'erinnere dich an mich tokens löschen'.",

    /*
     * 4.0.0
     */
    "verify_phone_number"           => "Bestätige die Telefonnummer",
    "verify_phone_method"           => "Wählen sie eine Methode um Ihre Telefonnummer zu bestätigen.",
    "verify_phone_code_sent"        => "Ein Bestätigungscode wurde an Ihr Telefon gesendet, Geben sie ihn bitte unten ein.",
    "verify_phone_code_send_error"  => "Fehler beim Senden des Bestätigungscodes. Bitte versuchen sie es später wieder.",
    "verify_phone_code_error"       => "Das Prüfen des Bestätigungscodes schlug fehl.",
    "logged_in_as"                  => "Angemeldet als :name",

    /*
     * 4.1.0
     */
    "merge_users"                   => "Merge Users",
    "merge_user_into"               => "Select user to merge into",
    "merge_organisations"           => "Merge Organisations",
    "merge_organisation_into"       => "Select organisation to merge into",
    "search_for_organisation"       => "Search for organisation...",

    /*
     * 4.2.0
     */
    "reply_template"                => "Reply Template|Reply Templates",
    "reply_template_desc"           => "Set a personal reply template that prefills the textarea when starting to compose a reply, with the option to customise based on the brand/department of the ticket. The default reply template is used when a reply template for a specific department and/or brand cannot be found.",
    "operator_reply_template"       => "Operator Reply Template|Operator Reply Templates",
    "ticket_reply_template_desc"    => "Set the operator's default ticket reply template.",
    "operator_reply_template_desc"  => "Further reply templates for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Reply Templates</a> section.",

    /*
     * 5.0.0
     */
    "verified"                      => "Verified",
    "unverified"                    => "Unverified",
    "unverified_email_desc"         => "User has not verified ownership of this email address.",
    "unverified_account"            => "Please check your email to verify ownership of this email address.",
    "changing_email_desc"           => "Das ändern der Benutzer Email Adresse zwingt ihn dazu sie beim nächsten Login zu bestätigen.",
    "unregistered_user_desc"        => "Dieser Benutzer wurde automatisch erstellt und besitzt kein Passwort. Sie können unten ein Bestätigungs/Willkommens Mail auslösen damit der Benutzer die Einrichtung seines Kontos vervollständigt.",
    "send_verification_email"       => "Send Verification Email",
    "mark_as_verified"              => "Mark as Verified",
    "password_reset_already"        => "Sie haben bereits den Besitz dieser Email Adresse bestätigt, fahren sie mit dem Login fort.",
    "verification_email_resent"     => "A new verification email has been sent and should arrive in a few minutes.",
    "verified_set_password_desc"    => "Thank you for verifying ownership of your email, please enter a password below to finish your account set up.",
    "thank_you_for_verifying_email" => "Thank you for verifying ownership of your email address.",
    "organisation_domain_desc"      => "Geben sie jede Domäne ein die zur Organisation gehört. Benutzer deren Mailadresse mit der Domäne überinstimmt werden automatisch Mitglied der Organisation. Wir empfehlen den Zugehörigkeit des Benutzers zur Firma zu prüfen, und sicherzustellen dass die Email Adresse bestätigt wurde.",
    "resend_verification_email"     => "Resend Verification Email",
    "updating_email_address"        => "Um das ändern der Email Adresse abzuschließen muss sie bestätigt werden. Es wurde ein Mail an :email geschickt, folgen sie den Anweisungen im Mail um die Adresse zu bestätigen.",
    "email_verification"            => "Email Verification",
    "email_verification_already_in_use" => "The email address is already in use by another account.",
    "verification_link_expired"     => "The verification link may have expired. If your link isn't working for any reason, please request a new one.",
    "user_invited_to_organisation"  => "The user has been invited to the organisation by email, they must click the link and set up a password to complete their account setup.",
    "invite_user"                   => "Invite User",
    "organisation_invite_user"      => "Invite user to organisation",
    "user_already_in_organisation"  => "The user is already part of an organisation.",
    "invitations"                   => "Invitation|Invitations",
    "invite_exists"                 => "The user has already been invited.",
    "success_join"                  => "You are now a member of the organisation :name.",
    "error_join"                    => "The invitation code could not be found, or has expired.",
    "verify_to_view_tickets"        => "Please verify all additional email addresses or remove unverified email addresses under your account profile.",

);
