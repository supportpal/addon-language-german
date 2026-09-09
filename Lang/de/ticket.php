<?php

return array(

    "feedback_question"         => "Frage, die dem Benutzer angezeigt wird.",
    "open_new"                  => "Ticket erstellen",
    "select_department"         => "Abteilung wählen",
    "select_department_desc"    => "Bitte wählen Sie eine passende Abteilung für Ihr Anliegen aus.",
    "no_departments"            => "Keine Abteilungen gefunden.",
    "department_user_details"   => "Abteilungen und Kunde",
    "enter_your_details"        => "Geben Sie Ihre Kontaktdaten ein",
    "enter_ticket_details"      => "Details",
    "enter_subject_message"     => "Betreff und Nachricht",
    "invalid_user"              => "Stellen Sie sicher, dass die eingegebenen Benutzer korrekt sind.",

    "registered_users"          => "Nur registrierte Benutzer",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Betreff",
    "no_subject"                => "Betreff fehlt",
    "last_action"               => "letzte Aktivität",
    "due_time"                  => "Fertigstellung",
    "created_time"              => "Erstellungsdatum",
    "submitted"                 => "Übertragen",
    "ticket_reply"              => "Ticketanwort",
    "ticket_note"               => "Ticketnotiz",
    "ticket_type"               => "Ticketart",

    "user_ticket"               => "Benutzerticket",
    "user_ticket_desc"          => "Ein neues Ticket im Namen eines neuen oder bestehenden Benutzer erstellen.",
    "existing_user"             => "Bestehender Benutzer",
    "new_user"                  => "Neuer Benutzer",
    "internal"                  => "Intern",
    "internal_ticket_desc"      => "Erstellt ein Ticket für den internen Gebrauch. Das Ticket wird Ihnen zugewiesen.",
    "ticket_opened"             => "Ihr Ticket wurde erfolgreich erstellt.",
    "enter_user_details"        => "Bitte geben Sie Ihre Informationen ein, oder melden Sie sich mit Ihrem bestehenden Konto an.",
    "already_have_account"      => "Sie haben bereits ein Benutzerkonto. Bitte melden Sie sich mit diesem an und eröffnen dann ein Ticket.",

    "recent_tickets"            => "kürzlich eingereichte Tickets",
    "last_message_text"         => "Letzte Nachricht",

    "settings"                  => "Ticketeinstellungen",

    "priority"                  => "Priorität|Prioritäten",

    "channel"                   => "Kanal|Kanäle",
    "account"                   => "Benutzerkonto|Benutzerkonten",

    "assign_operator"           => "Mitarbeiter zuweisen",
    "assigned_operator"         => "zuständiger Mitarbeiter",
    "assigned_to"               => "zugewiesen an",
    "assigned"                  => "zugewiesen",

    "department"                => "Abteilung|Abteilungen",
    "change_department_order"   => "Sortieren Sie die Abteilungen mit Ziehen, um die Anzeige für die Benutzer zu beeinflussen.",
    "department_applicable"     => "auswählbare Abteilungen",
    "department_applicable_desc" => "Abteilungen die den Benutzern ermöglichen die Priorität der Tickets festzulegen. Gilt nur für das Frontend, alle Prioritäten in allen Abteilungen stehen dem Mitarbeiter zur Verfügung.",

    "send_now"                  => "Jetzt senden",

    "tag"                       => "Stichwort|Stichwörter",

    "track_ticket"              => "Ticket verfolgen",
    "view_ticket"               => "Ticket anzeigen",

    // Recent activity
    "recent_activity"           => "Kürzliche Aktivität",

    "ticket_number"             => "Ticket Nummer",
    "ticket_format"             => "Ticket Nummer Format",

    // Departments
    "department_public_desc"    => "Ist die Abteilung im Frontend sichtbar.",
    "department_parent_desc"    => "Ist die Abteilung eine Subabteilung, wählen Sie die Mutter aus. Unterabteilungen sind für interne Eskalationsprozesse und Verwaltung, deshalb entfernt diese Einstellung einige Optionen unten.",
    "department_priority"       => "Abteilungsprioritäten",
    "department_priority_desc"  => "Prioritäten die den Benutzern zur Verfügung stehen, mindestens eine muss ausgewählt sein. Im Standard sind alle Prioritäten in der Abteilung verfügbar.",
    "department_no_format"      => "Optional, kann das Ticket Nummerformat übersteuern, leerlassen für Standard.",
    "department_operator"       => "Abteilungs-Mitarbeiter",
    "department_default_assign" => "Standardmäßig zuweisen an",
    "dept_default_assign_desc"  => "Nutzen Sie diese Optionen wenn neue Tickets in der Abteilung an einen oder mehrere Mitarbeiter zugewiesen werden sollen.",

    // Department emails
    "email_accounts_desc"       => "Konfigurieren Sie E-Mail-Adressen für die Abteilung, alle eingehenden Mails werden Tickets in der Abteilung eröffnen. Die erste Adresse ist die Standard Absenderadresse der Abteilung.",
    "department_port"           => "Standardwerte sind: 110 für POP3, 995 für sicheres POP3, 143 für IMAP und 993 für sicheres IMAP. Leer lassen, um den Standardwert zu verwenden.",
    "department_encryption"     => "Manche E-Mail-Anbieter benötigen SSL oder TLS, um sich zu verbinden. Bei Unklarheit leerlassen.",
    "department_delete_mail"    => "IMAP ermöglicht es die Emails am Server nicht zu löschen.",
    "protocol"                  => "Protokoll",
    "server"                    => "Mail-Server",
    "port"                      => "Port",
    "encryption"                => "Verschlüsselung",
    "delete_downloaded"         => "abgeholte Mails löschen",
    "consume_all"               => "Alle Mails abholen",
    "email_download"            => "Email abholen",
    "email_piping"              => "E-Mail-Piping",
    "email_piping_desc"         => "Richten Sie einen E-Mail-Weiterleiter wie den folgenden ein. Der Pfad zur ausführbaren PHP-Datei kann auf Ihrem Server abweichen.",
    "remote_email_piping"       => "Remote-E-Mail-Piping",

    // Department email options
    "email_options"             => "Email Optionen",
    "email_user_on_email"       => "Bestätige per Mail Tickets die per Mail eröffnet wurden",
    "email_user_on_email_desc"  => "Wählen Sie diese Option wenn Benutzer per Mail informiert werden sollen dass ihre Mail ein Ticket eröffnet hat.",
    "email_operators"           => "Mitarbeiter benachrichtigen",
    "email_operators_desc"      => "Sollen die Mitarbeiter per Mail benachrichtigt werden. Standardmäßig entscheidet die \"email operators\" Option im Mitarbeiter-Panel, und sendet automatisch eine Mail für alle Mitarbeiter-Antworten.",
    // Department email templates
    "new_ticket_opened"         => "Neues Ticket eröffnet",
    "waiting_for_response"      => "Warten auf Antwort",
    "ticket_auto_closed"        => "Ticket wurde automatisch geschlossen",
    "closed_by_operator"        => "geschlossen durch einen Operator",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Feedback Formular|Feedback Formulare",
    "feedback_form_desc"        => "Feedback Formulare werden in der dargestellten Reihenfolge abgearbeitet, ziehen Sie um die Reihenfolge zu ändern.",
    "view_feedback"             => "Feedback anzeigen",
    "ticket_feedback"           => "Ticket-Feedback",
    "feedback_fields_error"     => "Es gab ein Problem die Ticketfeedback Felder zu lesen.",
    "time_after_resolved"       => "Zeit nach der Lösung",
    "time_after_resolved_desc"  => "Zeitspanne nach Lösung des Tickets, nach der eine Feedbackanfrage an den Benutzer geschickt wird.",
    "expires_after"             => "Ablaufdatum",
    "expires_after_desc"        => "Zeitspanne nach der das Feedbackformular nicht mehr gültig ist. Wir empfehlen 7 Tage, mit 0 kann das ablaufen deaktiviert werden.",
    "form_conditions"           => "Formular Kriterien",
    "form_conditions_desc"      => "Welche Kriterien muss das gelöste Ticket erfüllen damit dieses Formular zum Einsatz kommt. Wenn mehrere Formulare gültig sind, wird das oberste aus der Liste gewählt. Die Liste kann durch ziehen der Formulare an eine neue Position geändert werden.",
    "form_fields"               => "Formularfelder",
    "rating"                    => "Bewertung",
    "feedback_desc"             => "Vielen Dank für Ihre Anfrage, wir hoffen es zu Ihrer Zufriedenheit gelöst zu haben. Bitte bewerten Sie unsere Antwort unten.",
    "good_satisfied"            => "Gut, ich bin zufrieden.",
    "bad_not_satisfied"         => "Schlecht, ich bin unzufrieden",
    "feedback_not_found"        => "Ihr Feedback konnte nicht akzeptiert werden, Bitte senden Sie uns Ihr Feedback in einem Ticket.",
    "feedback_malformed_token"  => "Ihr Feedback konnte aufgrund technischer Probleme nicht verarbeitet werden. Bitte senden Sie uns Ihr Feedback in einem Ticket",
    "feedback_expired"          => "Das Ticket wurde bereits vor längerer Zeit gelöst, dadurch kann es nicht mehr bewertet werden.",
    "feedback_questions"        => "Bitte beantworten Sie folgende Fragen, um uns die Möglichkeit zu geben den Support zu verbessern.",
    "feedback_for_ticket"       => "Feedback für das Ticket #:number",

    // Custom fields
    "customfield"               => "Ticket Benutzerdefiniertes Feld|Ticket Benutzerdefinierte Felder",
    "customfield_order"         => "Ziehen Sie die Zeilen, um die Reihenfolge zu ändern, in der benutzerdefinierte Felder den Benutzern beim Erstellen von Tickets über das Web angezeigt werden.",

    // Canned responses
    "cannedresponse"            => "Textbaustein|Textbausteine",

    // Filters
    "filter"                    => "Filter",
    "filter_condition"          => "Filter Kriterien",
    "filter_condition_desc"     => "Definieren Sie die Kriterien nach denen die Tickets angezeigt werden.",

    // Macros
    "macro"                     => "Makro|Makros",
    "macro_condition"           => "Macro Kriterien",
    "macro_action"              => "Macro Aktionen",
    "macro_action_desc"         => "Definieren Sie Aktionen die das Makro ausführt. Bitte stellen Sie sicher dass die Aktionen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert.",

    "from"                      => "Von",
    "to"                        => "An",
    "cc"                        => "Blindkopie / CC",

    "allowed_files"             => "Erlaubte Dateitypen als Anhang",

    // Drafts
    "save_draft"                => "Entwurf speichern",
    "discard_draft"             => "Entwurf löschen",

    // Locked
    "error_ticket_locked"       => "Dieses Ticket wurde gesperrt und kann nicht mehr geändert werden, Bitte eröffnen Sie für weitere Hilfe ein neues Ticket.",

    // Ticket Followups
    "follow_up"                 => "Nachverfolgung",
    "follow_up_status_desc"     => "Setzen Sie das Ticket auf einen anderen Status bis zum Nachverfolgungsdatum.",
    "exact_date_time"           => "Exakte Datum und Uhrzeit",
    "time_from_now"             => "Zeit von jetzt",

    // Schedule
    "schedule"                  => "Zeitplan|Zeitplane",
    "business_hour"             => "Geschäftszeiten",
    "business_hour_desc"        => "Geschäftszeiten zeigen an wenn Mitarbeiter anwesend sind um Anfragen zu beantworten. Diese Zeiten beeinflussen die definierte Ablaufzeit.",

    // Holidays
    "holiday"                   => "Ferien",
    "holiday_or_on_the"         => "oder, am",
    "holiday_month_year_desc"   => "Das Jahr ist bei wiederkehrenden Ferien leer zu lassen. Wähle das Jahr nur aus wenn sich das Datum jedes Jahr ändert.",

    // SLA Plans
    "sla_plan"                  => "SLA Plan|SLA Pläne",
    "specific_schedule"         => "Speizifische Zeitpläne",
    "calendar_hours_24"         => "Kalenderstunden (24 Stunden)",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA Kriterien",
    "sla_condition_desc"        => "Kriterien an das Ticket für das automatisierte zuweisen einer SLA. Wenn mehrere SLAs zutreffen wird die erste zugewiesen. Die Reihenfolge der SLAs kann beinflusst werden.",
    "escalation_rule"           => "Eskalationsregeln",
    "escalation_rule_desc"      => "Definieren Sie Aktionen die ausgeführt werden wenn das Ticket kurz vor dem ablaufen oder schon abgelaufen ist. Bitte stellen Sie sicher dass die Aktionen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert.",
    "condition"                 => "Bitte stellen Sie sicher, dass die Aktionen für die Abteilung des Tickets gültig sind, ansonsten werden sie ignoriert",
    "condition_group"           => "Kriterien Gruppe",
    "all_groups"                => "Alle Gruppen müssen den Kriterien entsprechen",
    "any_group"                 => "Eine oder mehrere Gruppen können den Kriterien entsprechen",
    "all_conditions"            => "Alle Kriterien in der Gruppe müssen entsprechen",
    "any_condition"             => "Eine oder mehrere Kriterien in der Gruppe müssen entsprechen",
    "sla_plan_desc"             => "SLA Pläne werden in der Reihenfolge abgearbeitet in der sie angezeigt werden. Ziehen Sie die Zeilen um die Reihenfolge zu ändern.",

    // Reply options
    "reply_options"             => "Antwortoptionen",
    "send_email_to_users"       => "E-Mail an Benutzer senden",
    "send_email_to_operators"   => "E-Mail an Mitarbeiter senden",
    "take"                      => "Nehmen",
    "take_ownership"            => "Besitz übernehmen",
    "pause_duetime"             => "Ablaufzeit pausieren",
    "add_to_canned_responses"   => "Zu den Textbausteinen hinzufügen",
    "visible_to_all_operators"  => "Sichtbar für alle Operatoren",
    "set_status"                => "Status setzen",
    "add_selfservice_link"      => "Hinzufügen des Self-Service Links",
    "search_selfservice"        => "Suche nach Artikeln im Self-Service",
    "search_canned"             => "Suche nach Textbausteinen",

    "mark_resolved"             => "Markieren als gelöst",

    "ticket_signature"          => "Ticket Signatur",

    "default_open_status"       => "Standard Status nach eröffnen des Tickets",

    "default_resolve_status"    => "Standard Status nach lösen des Tickets",
    "default_resolve_status_desc" => "Wählen Sie den Standardstatus für gelöste Tickets aus.",

    "waiting_response_time"      => "Zeitraum wie lange auf eine Antwort des Benutzers geantwortet wird.",
    "waiting_response_time_desc" => "Nach Ablauf bekommt der Benutzer eine Erinnerung über das inaktive Ticket, und wird gefragt ob das Ticket gelöst ist. Mit 0 wird keine Mail geschickt.",

    "close_inactive_tickets"    => "Schließe inaktive Tickets",
    "close_inactive_tickets_desc" => "Nach Ablauf der Zeit werden inaktive Tickets geschlossen. Setzen Sie den Wert auf 0 dann werden die Tickets nicht automatisch geschlossen.",

    "ticket_reply_order"        => "Reihenfolge der Nachrichten im Ticket",
    "ticket_reply_order_desc"   => "Wählen Sie die Reihenfolge der Nachrichten in der Ticketanzeige, Aufsteigend die neueste Nachricht oben oder absteigend mit der ältesten Nachricht oben.",

    "ticket_notes_position"     => "Ticket Notiz Position",
    "ticket_notes_position_desc" => "Wählen Sie aus wo in der Ticketanzeige die Notizen angezeigt werden sollen.",
    "ticket_notes_top_messages" => "Oben und in den Nachrichten",
    "ticket_notes_top"          => "Nur oben",
    "ticket_notes_messages"     => "Nur in den Nachrichten",

    "unregistered_only"         => "Nur unregistrierten Benutzern",

    "allow_unauth_users"        => "Erlaube anonyme Benutzer",
    "allow_unauth_users_desc"   => "Erlauben Sie anonymen Benutzern das Ticket anzuzeigen. Deaktiviert die 'Track Ticket' Funktion, und Benutzer müssen sich registrieren und anmelden um Tickets zu sehen.",

    "default_department"        => "Standard Abteilung",
    "default_department_desc"   => "Standard Abteilung für alle eingehenden Tickets über diesen Kanal.",

    "show_related_articles"     => "Ähnliche Artikel anzeigen",
    "show_related_articles_desc" => "Wenn der Nutzer den Titel/Betreff des neuen Tickets eingibt werden ihm ähnliche Artikel angezeigt. Benötigt das aktivierte Self-Service Modul mit mindestens MySQL Version 5.6+",

    // Email Channel Settings
    "default_priority"          => "Standard Priorität",
    "default_priority_desc"     => "Priorität die allen Tickets über diesen Kanal zugewiesen wird.",

    "last_reply"                => "Letzte Antwort",
    "opened_at"                 => "geöffnet am",

    "change_department"         => "Abteilung wechseln",
    "change_status"             => "Status wechseln",
    "no_statuses"               => "Kein Status gefunden. Klicken Sie <a href=':route'>hier</a> um einen zu erstellen.",
    "no_priorities"             => "Keine Priorität gefunden. Klicken Sie <a href=':route'>hier</a> um eine zu erstellen.",
    "no_templates"              => "Keine Benutzerdefinierte Email Vorlage gefunden. Klicken Sie <a href=':route'>hier</a> um eine zu erstellen.",
    "no_tags"                   => "Keine Ticket Tags gefunden. Klicken Sie <a href=':route'>hier</a> um welche zu erstellen.",
    "no_departments_found"      => "Keine Abteilung gefunden. Klicken Sie <a href=':route'>hier</a> um eine zu erstellen.",
    "no_operators_found"        => "Keine Mitarbeiter gefunden. Klicken Sie <a href=':route'>hier</a> um einen zu erstellen.",
    "change_priority"           => "Priorität wechseln",

    "unlock"                    => "Entsperren",
    "merged"                    => "Zusammengeführt",
    "unmerge"                   => "Trennen",
    "close_and_lock"            => "Schließen und Sperren",

    "mass_reply"                => "Massenantwort",

    "due_today"                 => "Läuft Heute ab",
    "overdue"                   => "Abgelaufen",
    "unassigned"                => "Nicht zugewiesen",

    "pause_duetime_desc"        => "Falls das Ticket einem aktiven SLA Plan zugewiesen ist, pausiere die Ablaufzeit bis zur ersten Nachverfolgung. Die Ablaufzeit startet mit der nächsten Notiz oder Antwort zum Ticket (Inklusive der Nachverfolgung).",

    "reply_above_line"          => "Bitte antworten Sie oberhalb dieser Linie",

    "email_settings"            => "Email Einstellungen",
    "web_settings"              => "Web Einstellungen",
    "split_selected_replies"    => "Trenne ausgewählte Antworten",

    "track_ticket_not_found"    => "Konnte kein Ticket mit dieser Nummer und Benutzer-E-Mail-Adresse finden.",

    "type_in_tags"              => "Tags eingeben",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Keine Mitarbeiter Gruppen gefunden. Klicken Sie <a href=':route'>hier</a> um eine zu erstellen.",
    "no_user_groups"            => "Keine Benutzergruppen gefunden. Klicken Sie <a href=':route'>hier</a> um eine zu erstellen.",
    "remote_email_piping_desc"  => "Laden Sie das <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>Remote-E-Mail-Piping-Skript</a> herunter und folgen Sie der <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>Dokumentation</a> zur Konfiguration auf Ihrem Mailserver.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "SupportPal kann anhand der Mailadresse entscheiden an welche Abteilung das Ticket geleitet wird. Mit dieser Einstellung bekommt diese Abteilung alle Tickets mit unbekannten AN Adressen im Mail",
    "default_reply_options"     => "Standard Antwort Optionen",
    "default_reply_options_desc" => "Wählen Sie die Standard Antwort option beim öffnen oder beantworten eines Tickets. Die  ':reply_option' Option wird Ticketbasiert auf grund der Abteilungs Option  ':department_option' gesetzt.",
    "associate_response_tag"    => "Textbaustein einem Tag zuweisen...",
    "canned_response_tags_desc" => "Fügen Sie Tags hinzu um einen Textbaustein als Antwort finden zu können.",
    "unassign_operator"         => "Mitarbeiter entfernen",
    "message_clipped"           => "[Nachricht abgeschnitten]",
    "view_entire_message"       => "Gesamte Nachricht anzeigen",
    "no_custom_fields"          => "Keine Benutzerdefinierten Felder gefunden. Klicken Sie <a href=':route'>hier</a> um welche zu erstellen.",
    "disable_user_email_replies" => "Deaktivieren Sie Benutzer-Antworten",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Standard Ticket Filter",
    "default_ticket_filter_desc" => "Dieser Filter wird verwendet wenn man auf den  'Verwalte Tickets' link klickt. Kann auf 'None', als Standard Option, stehen dadurch werden alle ungelösten Tickets angezeigt.",
    "recent_filters"            => "Kürzlich verwenden Filter",
    "inactive_tickets"          => "Inaktive Tickets",
    "default_open_status_desc"  => "Setzen Sie den Standardstatus wenn der Benutzer ein Ticket eröffnet oder auf Ticket antwortet bevor ein Mitarbeiter eine Antwort geschrieben hat.",
    "default_reply_status"      => "Standard Antwort Status",
    "default_reply_status_desc" => "Wählen Sie den Standardstatus der gesetzt werden soll wenn ein Benutzer auf eine Mitarbeiter Nachricht antwortet.",
    "ticket_reply_order_default" => "System benutzt den Wert der unter Ticketeinstellungen gesetzt ist..",
    "select_a_parent"           => "Wählen Sie eine Mutterabteilung...",
    "select_a_department"       => "Wählen Sie eine Abteilung...",
    "department_operator_desc"  => "Sie können auch einzelne Mitarbeiter einer Abteilung zuweisen. Diese Mitarbeiter sind Zusätzlich zu den zugewiesenen Gruppen.",
    "department_group"          => "Abteilungsgruppen",
    "department_group_desc"     => "Sie können auch Gruppen der Abteilung zuweisen, empfohlen bei vielen Mitarbeitern oder häufig wechselnden.",
    "ticket_other_brands"       => "Tickets in anderen Marken",
    "add_for_department"        => "Der Abteilung hinzufügen...",
    "record_order"              => "Ziehen Sie die Zeile um die Reihenfolge der Datensätze zu ändern.",
    "reply_all"                 => "Antworten an Alle",
    "reply_without_cc"          => "Antworten (nur AN, Keine Blindkopie)",
    "email_accounts"            => "Email Konten",
    "add_another_email"         => "Füge eine zusätzliche E-Mail-Adresse hinzu",
    "follow_up_date"            => "Nachverfolgungsdatum",
    "post_reply"                => "Antwort senden",
    "post_note"                 => "Notiz senden",
    "ticket_details"            => "Ticket-Details",
    "organisation_tickets"      => "Organisations Tickets",
    "manage_tickets"            => "Tickets verwalten",
    "via_channel"               => "über :channel",
    "department_parent"         => "Abteilungsmutter",
    "department_brands"         => "Abteilungsmarken",
    "email_item"                => "E-Mail :item",
    "from_name"                 => "Von Name",
    "from_address"              => "Von Adresse",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user am :date",
    "prioritise_reply-to"       => "Benutze Mail Header Reply-To",
    "prioritise_reply-to_desc"  => "Den Reply-To Mailheader benutzen anstatt die Von Adresse als Benutzer für das Ticket.",
    "note_options"              => "Notiz Optionen",
    "escalation_rules_desc"     => "Vom unten angeführten SLA Plan werden die geplanten Eskalationsregeln nach den angeführten Zeiten ausgeführt. Diese Zeiten ändern sich oder die Eskalationsregeln werden entfernt wenn der Operator antwortet.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Kein registrierter Benutzer. Der Email Kanal erlaubt nur Tickets von registrierten Mail Adressen.",
    "display_name"              => "Email Anzeige Name",
    "display_name_desc"         => "Optional, nur gesetzt um den Anzeigenamen für ausgehende Emails von dieser Abteilung zu überschreiben, leer lassen für Standard.",
    "display_name_options"      => "Die folgenden Twig Variablen:<br />{{ brand.name }} - Markenname<br />{{ department.name }} - Abteilungsname<br />{{ department.frontend_name }} - Zeigt den Abteilungsnamen, wenn das Ticket zu einer Tochterabteilung gehört.<br />{{ operator.formatted_name }} - Mitarbeiter Name<br /><em>Der Mitarbeiter wird nicht immer verfügbar sein, benutzen Sie deshalb die 'not empty' Bedingung z. B. {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Anhang abgelehnt",
    "enable_subaddresses"       => "Aktiviere Sub Adressen",
    "enable_subaddresses_desc"  => "Aktivieren um Sub Adressen für alle Abteilungen zu erlauben. Das erzeugt eindeutige Subadressen je Ticket die als  Reply-To Adresse in den ausgehenden Emails steht. Ihr Mail Server muss mit Sub Adressen umgehen können, Zusätzliche Konfigurationsschritte können nötig sein wenn Sie Remote Piping für den Email Versand verwenden. Das aktivieren dieser Funktion ermöglicht es die Ticketnummer aus dem Betreff der Mails zu entfernen.",
    "email_replies_disabled"    => "Email Antworten sind deaktiviert",
    "disable_user_email_replies_desc" => "Antworten auf ein Ticket per Mail sind gesperrt, das entfernt auch die Trennlinie in den ausgehenden Emails. Im Standard werden Antworten still ignoriert. Aber Sie können den User informieren dass Antworten nicht erlaubt sind, durch das ändern der Vorlage in der  'Email Antworten deaktiviert' Option unten.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "An Ticket zugewiesen",
    "user_ticket_reply"         => "Benutzerantwort an Ticket",
    "new_internal_ticket"       => "Neues internes Ticket",
    "department_changed"        => "Abteilung geändert",
    "operator_ticket_reply"     => "Operator Ticket Antwort",
    "new_ticket_note"           => "Neue Ticket Notiz",
    "email_template_desc"       => "Sie können eine andere Email Vorlage als die Standard auswählen für Nachrichten an Benutzer und Mitarbeiter. Diese Vorlage ist dann der Standard für diese Abteilung.",
    "create_new_user"           => "Neuen Benutzer erstellen",
    "user_reply_internal_ticket" => "Kein Operator. Nur Operator dürfen interne Tickets ansehen.",
    "enter_email_address"       => "E-Mail Adresse eingeben...",
    "email_user_frontend"       => "Eine E-Mail an Benutzer senden wenn das Ticket über das Frontend eröffnet wurde",
    "email_user_frontend_desc"  => "Diese Option steuert ob er ein Mail an sich selbst bekommt wenn er ein Ticket über das Frontend eröffnet.",
    "department_template_disabled" => "Die relevante Emailvorlage der Abteilung ist deaktiviert, deshalb kann kein Email geschickt werden.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Öffne ein neues Ticket im Namen eines existierenden Benutzers.",
    "canned_response_tag"       => "Textbaustein Tag|Textbaustein Tags",
    "response"                  => "Antwort|Antworten",
    "response_desc"             => "Der Textbaustein kann in mehreren Spreachen erstellt werden. Die richtige Sprache wird anhand der Benutzereinstellungen ausgewählt.",
    "no_slaplans"               => "Kein SLA-Plan gefunden. Klicken Sie <a href=':route'>hier</a>, um einen zu erstellen.",
    "filter_performance"        => "Performance Überlegungen und Empfehlungen",
    "filter_performance_desc"   => "<li>Filter die mehrere Tickets auswählen sind langsamer, versuchen Sie, gelöste Tickets auszugrenzen</li><li>Filter die  'is not' Kriterien nutzen sind langsamer als 'is' Kriterien.</li><li>Filter die auf NULL prüfen (z.B Ticket tag is None) sind langsamer.</li><li>Vermeide Filter die auf mehrere Strings/Wörter prüfen da sie die Komplexität start steigern.</li><li>Kriterien mit 'begins with' oder 'contains' sind generall langsamer als 'equals' oder 'ends with' Kriterien.</li><li>Gelöste Tickets werden nicht für die Anzahl in der Sidebar mitgezählt.</li>",
    "run_macro"                 => "Makro ausführen",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Aktivieren um Abteilung nur angemeldeten Benutzern anzuzeigen und um Emails nur von aktiv registrierten Adressen zu akzeptieren. Wenn aktiv werden Emails von nicht registrierten Adressen mit einer Antwort abgelehnt, um das Email zu ändern oder zu deaktivieren sehen Sie bitte  'Nur Registrierte Benutzer' Vorlagen option unten.",
    "form_fields_desc"          => "Wenn Sie mehr Informationen vom Benutzer einsammeln möchten können Sie das Formular um benutzerdefinierte Felder erweitern. Der Feldtyp ist nicht mehr änderbar sobald ein Benutzer das Formular benutzt hat.",
    "email_and_other_accounts"  => "Email oder andere Kanal Konten",
    "delete_message"            => "Nachricht löschen",
    "linked_tickets"            => "referenzierte Tickets",
    "add_linked_ticket"         => "Auf Ticket referenzieren",
    "create_linked_ticket"      => "Referenziertes Ticket erstellen",
    "copy_link"                 => "Link kopieren",
    "forward_message"           => "Weiterleiten der Nachricht",
    "forward_from_here"         => "Weiterleiten der Nachricht ab hier",
    "forward"                   => "Weiterleiten",
    "forward_options"           => "Weiterleitungsoptionen",
    "forwarded_to"              => "Weiterleiten An",
    "new_operator_reply"        => "Neue Operator Antwort",
    "new_user_reply"            => "Neue Benutzer Antwort",
    "at_least_one_recipient"    => "Definieren Sie mindestens einen Empfänger",
    "forwarded_message"         => "------------------- Weitergeleitete Nachricht -------------------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Info: Beeinflusst nur Tickets mit den Status 'Close Inactive Tickets' aktiviert.",
    "close_inactive_status_desc" => "Wechsle den Aktivierungsstatus des automaischen Schließens und Benachrichtigungen inaktiver Tickets ('Waiting For Response' und  'Ticket Auto Closed' Vorlagen). Wenn aktiv kann die Zeit nach der die Benachrichtigung verschickt wird den Allgemeinen Ticketeinstellungen geändert werden.",
    "from_header_missing"       => "From: Header fehlt im Email.",
    "move_ticket"               => "Ticket verschieben",
    "move_ticket_step1"         => "Schritt 1: Wählen Sie die neue Marke aus",
    "move_ticket_step2"         => "Schritt 2: Wählen Sie eine Abteilung der neuen Marke aus",
    "current_record"            => "Aktueller :record",
    "new_record"                => "Neuer :record",
    "department_email"          => "Abteilung Email",
    "select_a_department_email" => "Wählen Sie eine Abteilungs Mail Adresse aus...",
    "record_public_desc"        => "Wechseln Sie um die :record nur für Sie zugänglich zu machen.",
    "record_group_desc"         => "Wenn Sie die Sichtbarkeit von :record auf eine Mitarbeiter Gruppe einschränken wollen. Leer lassen damit alle Mitarbeiter sie sehen.",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Schalten Sie um um das Makro zu deaktivieren. Das verhindert das automatische ausführen und macht es unsichtbar in der Ticketansicht",
    "macro_order_drag"          => "Ziehen Sie die Zeilen um die Reihenfolge der Makros zu ändern.",
    "macro_order_processed"     => ":type Makros werden in der angezeigten Reihenfolge abgearbeitet.",
    "macro_type"                => "Macro Typ",
    "macro_type_desc"           => "Es gibt 3 Typen von Makros. Manuelle Makros können nur aus der Ticketansicht oder einer Tabelle ausgeführt werden, Automatische Makros laufen stündlich beziehen sich auf nicht gelöste Tickets, und 'Hook' Makros können auch auf bestimmte Zeitpläne limitiert werden. Ein 'Hook' Makro kann kein anderes 'Hook' Makro starten um schleifen zu verhindern.",
    "macro_run_at_most"         => "Höchstens ",
    "macro_run_times"           => "mal laufen", // As in '5 times'
    "macro_run_at_most_desc"    => "Limitieren Sie wieviele Durchläufe ein Makro für ein Ticket maximal haben darf, leer lassen für eine unbeschränkte Anzahl an Durchläufen.",
    "macro_events_desc"         => "Wählen Sie ein oder mehr Ereignisse aus die das Makro starten. Die Kriterien unten werden geprüft bevor das Makro gestartet wird.",
    "macro_schedules_desc"      => "Im Standard kann das Makro 24/7 laufen, aber Sie können es auf die Zeiten in einem oder mehreren Zeitplänen einschränken.",
    "macro_condition_desc"      => "Definieren Sie die Kriterien mit denen die Gültigkeit des Makros auf die Tickets bestimmt wird. Im Standard, ohne Kriterien, gilt es für alle Tickets. Mindestens ein Kriterium muss gesetzt sein für automatische Makros.",
    "add_remove_headers"        => "Hinzufügen und entfernen von Headers",
    "webhook_merge_fields"      => "Platzhalter können in der URL und im Inhaltsfeld verwendet werden. <a href=\"https://docs.supportpal.com/current/Merge+Fields\">Dokumentation über Platzhalter</a>.",
    "webhook_ticket_required"   => "Ein Ticket muss existieren damit diese Funktion funktioniert.",
    "not_permitted"             => "Entschuldigung, Sie sind nicht berechtigt das/die Ticket/Tickets anzusehen. Wenn das nicht korrekt ist wenden Sie sich bitte an den Administrator.",
    "watch"                     => "Beobachte",
    "unwatch"                   => "Ignoriere",
    "watching"                  => "Beobachtend",
    "internal_ticket"           => "Internes Ticket|Interne Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Herunterladen...",
    "downloading_desc"          => "Wenn der Download nicht automatisch in ein paar Sekunden beginnt, klicken Sie bitte auf <a href=':href'>hier</a> um den Download manuell zu starten.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(gehört zu :name)",
    "block_user"                => "Benutzer sperren",
    "merge_tickets"             => "Füge Tickets zusammen",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Nachverfolgungen",
    "follow_up_no_actions"      => "Die Nachverfolgung hat keine Aktionen, bitte bestätigen Sie dass Sie weiter möchten.",
    "status_after_running"      => "Status nach Durchlauf",
    "older_messages"            => ":count alte Nachrichten",
    "holiday_single_day"        => "Ein Tag",
    "holiday_date_range"        => "Datumsbereich",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Wähle das Ziel Ticket für die Zusammenführung",
    "im_not_sure"               => "Ich bin nicht sicher",
    "auto_reply_detected"       => "Automatische Antwort wurde erkannt - Es werden keinen Informationen an den/die Benutzer gesendet.",
    "cc_desc"                   => "Sie können einen Blindempfänger hinzufügen durch Eingabe der Mail Adresse.",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Manuell einrichten",
    "unresolved"                => "Ungelöst",
    "resolved"                  => "Gelöst",
    "manage_oauth_options"      => "Um OAuth-Optionen hinzuzufügen oder zu verwalten, besuchen Sie bitte die Seite <a href=\":route\">Drittanbieter-Integrationen</a>.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Ihre Rückmeldung wurde gespeichert.",
    "how_was_the_help"          => "Wie gut wurden Ihnen geholfen?",
    "update_feedback"           => "Rückmeldung aktualisieren",
    "verify_user"               => "Bitte überprüfen Sie die Echtheit des Benutzers.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets, die über die Frontend-Oberfläche für Benutzer oder den Mitarbeiter-Bereich für Mitarbeiter erstellt wurden.",
    "email_channel_name"        => "E-Mail",
    "email_channel_desc"        => "Tickets, die aus der Verarbeitung eingehender E-Mails erstellt wurden.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets und Antworten, die über die API erstellt wurden.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Erstellt im Namen von ",
    "reply_canned_be_posted"    => "Es ist jetzt nich möglich auf dieses Ticket zu Antworten; Der Kanal oder das Kanals Konto sind deaktiviert.",

    /*
     * 4.1.0
     */
    "ticket_format_desc"        => "Kann alphanumerische und Sonderzeichen beinhalten <code>-_.+!*,</code><br />Auch folgende Variablen: %S für eine fortlaufende Nummer | %N für eine Zufallsnummer | %L für einen Zufallsbuchstaben<br />Benutzen Sie {number} um <strong>nur</strong> nach %N oder %L zu wiederholen, z. B. %N{4} ergibt 4 Zufallsnummern, %L{3} ergibt 3 Zufallsbuchstaben <br />Die PHP Funktion <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Datum</a> Parameter mit dem Prefix % Y,y,m,d,j,g,G,h,H,i,s",
    "check_spam"                => "Spam-Regeln prüfen",
    "check_spam_api_desc"       => "Nachrichten blockieren, die Spam-Regeln entsprechen.",
    "captcha_desc"              => "Wann soll ein Captcha beim eröffnen von Tickets abgefragt werden.",

    /*
     * 5.0.0
     */
    "also_viewing"              => "Betrachtet auch das Ticket:",
    "mark_as_read"              => "Als gelesen markieren",
    "mark_as_unread"            => "Als ungelesen markieren",
    "sla_targets"               => "SLA-Ziel|SLA-Ziele",
    "sla_targets_desc"          => "Legen Sie Zielzeiten fest, innerhalb derer ein Ticket je Priorität beantwortet und gelöst werden muss. Die Zeit wird nur während der Geschäftszeiten gemäß den gewählten Zeitplänen gezählt; Dezimalwerte können verwendet werden. Lassen Sie den Wert leer, um für diese Priorität kein Ziel festzulegen.",
    "first_reply_time"          => "Zeit bis zur ersten Antwort",
    "next_reply_time"           => "Zeit bis zur nächsten Antwort",
    "resolution_time"           => "Lösungszeit",
    "reply_due_in"              => "Antwort fällig :time",
    "resolve_in"                => "Lösung :time",
    "paused_ago"                => "Pausiert :time",
    "reply_due_time"            => "Fälligkeitszeit der Antwort",
    "resolution_due_time"       => "Fälligkeitszeit der Lösung",
    "set_reply_due_time"        => "Fälligkeitszeit der Antwort festlegen",
    "set_resolution_due_time"   => "Fälligkeitszeit der Lösung festlegen",

    /*
     * 5.2.0
     */
    "block_user_desc"           => "Der Benutzer kann keine weiteren Tickets mehr erstellen, und das Ticket wird in den Papierkorb verschoben.",

    /*
     * 5.3.0
     */
    "reject_duplicate_emails"   => "Doppelte E-Mails ablehnen",
    "reject_duplicate_emails_desc" => "Verhindert, dass E-Mails mehr als einmal importiert werden; erkannt anhand des Message-ID-Headers.",
    "duplicate_email_detected"  => "Doppelte E-Mail, die bereits importiert wurde.",

    /*
     * 5.5.0
     */
    "rate_limiting"             => "Ratenbegrenzung",
    "max_requests"              => "Max. Anfragen",
    "decay_time"                => "Abklingzeit",
    "exclude_addresses"         => "Adressen ausschließen",
    "exclude_addresses_desc"    => "Eine Liste von E-Mail-Adressen, die von Ratenbegrenzungen ausgenommen sind.",
    "enable_throttling"         => "Ratenbegrenzung aktivieren",
    "enable_throttling_api_desc" => "Begrenzt die Anzahl der Tickets und Nachrichten, die Benutzer innerhalb eines Zeitraums erstellen können, danach werden sie gedrosselt. Die Grenzwerte können in den Einstellungen des Web-Kanals angepasst werden.",
    "close_without_notify"      => "Schließen (ohne Benachrichtigung)",
    "lock"                      => "Sperren",
    "pin"                       => "Anheften",
    "unpin"                     => "Lösen",

    /*
     * 5.6.0
     */
    "copy_to_new_filter"        => "In neuen Filter kopieren",
    "alias_support"             => "Alias-Unterstützung",
    "alias_support_desc"        => "Die Alias-Unterstützung analysiert die Empfängeradressen eingehender E-Mails, um zu bestimmen, in welcher Abteilung die E-Mail geöffnet werden soll. Wird die Alias-Unterstützung deaktiviert, werden alle E-Mails unabhängig von den Empfängeradressen in der Abteilung geöffnet, in der sie abgerufen wurden.",

    /*
     * 5.7.0
     */
    "run_as_operator"           => "Ausführen als",
    "run_as_operator_desc"      => "Die folgenden Aktionen als der ausgewählte Mitarbeiter ausführen: \":actions\"",
    "use_ticket_print_view"     => "Bitte verwenden Sie die dedizierte Druckansicht, um dieses Ticket zu drucken. Sie erreichen sie, indem Sie in der Ticket-Ansicht auf die Option 'Drucken' klicken.",
    "save_feedback"             => "Feedback speichern",
    "ticket_opened_notification" => "Neues Ticket erstellt",
    "ticket_opened_notification_desc" => "Benachrichtigt Sie, wenn ein neues Benutzer- oder internes Ticket erstellt wurde.",
    "user_reply_notification"   => "Benutzer-Ticketantwort veröffentlicht",
    "user_reply_notification_desc" => "Benachrichtigt Sie, wenn ein Benutzer auf ein bestehendes Ticket antwortet.",
    "operator_reply_notification" => "Mitarbeiter-Ticketantwort veröffentlicht",
    "operator_reply_notification_desc" => "Benachrichtigt Sie, wenn ein anderer Mitarbeiter auf ein Ticket antwortet.",
    "operator_note_notification" => "Mitarbeiter-Notiz zum Ticket erstellt",
    "operator_note_notification_desc" => "Benachrichtigt Sie, wenn ein anderer Mitarbeiter eine Notiz zu einem Ticket erstellt.",
    "assigned_notification"     => "Einem Ticket zugewiesen",
    "assigned_notification_desc" => "Benachrichtigt Sie, wenn Sie einem Ticket zugewiesen werden.",
    "department_changed_notification" => "Abteilung geändert",
    "department_changed_notification_desc" => "Benachrichtigt Sie, wenn ein Ticket die Abteilung wechselt.",
    "mention_notification"       => "Erwähnt",
    "mention_notification_desc" => "Benachrichtigt Sie, wenn Sie in einem Ticket erwähnt werden.",
    "mark_resolved_and_post_reply" => "Als gelöst markieren & Antwort senden",
    "allowed_files_desc"        => "Liste der Dateierweiterungen, separiert durch das pipe | Symbol die als Anhang erlaubt sind. Als Beispiel: txt|png|jpg. Um alle zu erlauben geben Sie folgendes ein: ?.*",

    /*
     * 6.0.0
     */
    "back_to_grid"              => "Zurück zur Tickettabelle",
    "stay_on_ticket"            => "Beim Ticket bleiben",
    "draft_saved"               => "Entwurf gespeichert um :time",
    "drafting_message"          => ":name war beim Verfassen einer Nachricht :time",
    "feedback_notification"     => "Feedback abgegeben",
    "feedback_notification_desc" => "Benachrichtigt Sie, wenn Feedback zu einem Ticket abgegeben wird.",
    "notify_feedback"           => "Feedback-Benachrichtigungen",
    "notify_feedback_desc"      => "Legen Sie fest, welche Feedback-Antworten aus diesem Formular Benachrichtigungen an Mitarbeiter auslösen sollen.",
    "notify_all_feedback"       => "Bei jedem Feedback benachrichtigen",
    "notify_neutral_bad_feedback" => "Nur bei neutralem & schlechtem Feedback benachrichtigen",
    "notify_bad_feedback"       => "Nur bei schlechtem Feedback benachrichtigen",
    "timeline"                  => "Zeitleiste",
    "filter_timeline"           => "Zeitleiste filtern",
    "timeline_replies"          => "Antworten",
    "timeline_forwards"         => "Weiterleitungen",
    "timeline_customfields"     => "Änderungen an benutzerdefinierten Feldern",
    "timeline_sla"              => "Änderungen an SLA & Fälligkeitszeit",
    "timeline_messages"         => "Änderungen an Nachrichten & Notizen",
    "timeline_userinfo"         => "Benutzerinformationen & Änderungen",
    "timeline_assignment"       => "Änderungen an der Zuweisung",
    "timeline_state"            => "Statusänderungen",
    "timeline_merging"          => "Zusammenführen, Verknüpfen & Aufteilen",
    "max_requests_desc"         => "Legt die maximale Anzahl verfügbarer Tokens fest, bevor ein Benutzer ratenbegrenzt wird. Die Ratenbegrenzung funktioniert über ein Token-System: Das Erstellen eines neuen Tickets kostet 3 Tokens, das Beantworten eines bestehenden Tickets 1 Token. Die Gesamtzahl der verfügbaren Tokens wird nach Ablauf der Decay-Zeit zurückgesetzt.",
    "decay_time_desc"           => "Die Anzahl der Minuten, bis die verfügbaren Tokens zurückgesetzt werden.",

    /*
     * 6.1.0
     */
    "change_user"               => "Change User",

);
