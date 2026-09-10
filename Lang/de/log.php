<?php

return array(

    // Standard messages
    "item_created"                      => "Neues :item :rel erstellt.",
    "item_updated"                      => ":item :rel aktualisiert.",
    "item_deleted"                      => ":item :rel gelöscht.",

    // Custom messages
    "ip_ban_created"                    => "Neue Sperre für IP :rel erstellt.",
    "ip_ban_updated"                    => "Sperre für IP :rel aktualisiert.",
    "ip_ban_deleted"                    => "Sperre für IP :rel gelöscht.",
    "banned_ip_on_login"                => "IP :rel für 15 Minuten gesperrt.",

    "ip_whitelist_created"              => "IP :rel zur Whitelist hinzugefügt.",
    "ip_whitelist_updated"              => "IP :rel auf der Whitelist aktualisiert.",
    "ip_whitelist_deleted"              => "IP :rel aus der Whitelist gelöscht.",

    "system_cleanup"                    => "Systembereinigung am :rel ausgeführt.",

    "api_failed_login"                  => "IP :rel konnte sich nicht bei der API authentifizieren.",

    "user_successful_login"             => "Beim Support-Portal angemeldet.",
    "user_failed_login"                 => "Authentifizierung fehlgeschlagen.",
    "user_successful_logout"            => "Vom Support-Portal abgemeldet.",

    "user_registered"                   => "Ein Konto registriert.",
    "user_confirmed"                    => "Das eigene Konto bestätigt.",
    "user_password_set"                 => "Ein Passwort für das eigene Konto festgelegt.",
    "user_password_reset"               => "Das Passwort für das eigene Konto zurückgesetzt.",

    "user_added_to_organisation"        => "Benutzer :rel zur Organisation :new_value hinzugefügt.",
    "user_removed_from_organisation"    => "Benutzer :rel aus der Organisation :old_value entfernt.",
    "user_profile_updated"              => "Kontoprofil aktualisiert.",
    "user_left_organisation"            => "Organisation :rel verlassen.",
    "user_organisation_emptied"         => "Alle Benutzer aus der Organisation :rel entfernt.",
    "user_organisation_updated"         => "Zugriffsebene von :rel für die Organisation von :old_value zu :new_value geändert.",
    "organisation_membership_updated"   => "Benutzermitgliedschaft der Organisation :rel aktualisiert.",
    "organisation_profile_updated"      => "Profil der Organisation :rel aktualisiert.",
    "organisation_owner_updated"        => "Eigentümerschaft der Organisation :rel an :new_value übertragen.",

    "mass_email_queued"                 => ":new_value E-Mails in Stapeln zum Versand eingereiht.",
    "mass_email_sent"                   => ":new_value E-Mails in der Warteschlange gesendet.",

    "email_queue_deleted"               => "Eingereihte E-Mail an :rel gelöscht.",

    "scheduled_task_run"                => "Geplante Aufgabe :rel wurde manuell ausgeführt.",

    "selfservice_article_upvoted"       => "Artikel :rel positiv bewertet.",
    "selfservice_article_downvoted"     => "Artikel :rel negativ bewertet.",
    "selfservice_comment_posted"        => "Einen neuen :rel veröffentlicht.",
    "selfservice_comment_upvoted"       => "Bewertung von :rel positiv bewertet, von :old_value auf :new_value.",
    "selfservice_comment_downvoted"     => "Bewertung von :rel negativ bewertet, von :old_value auf :new_value.",

    "ticket_opened"                     => "Neues Ticket #:rel geöffnet.",
    "ticket_opened_on_behalf"           => "Neues Ticket #:rel im Auftrag von :new_value geöffnet.",
    "ticket_opened_email"               => "E-Mail als neues Ticket #:rel importiert.",

    "ticket_message_reply"              => "Eine neue Antwort auf Ticket #:rel veröffentlicht.",
    "ticket_message_note"               => "Eine neue Notiz zu Ticket #:rel veröffentlicht.",
    "ticket_message_deleted"            => "Eine Nachricht in Ticket #:rel gelöscht.",

    "ticket_user_updated"               => "Den Benutzer von Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_subject_updated"            => "Den Betreff von Ticket #:rel aktualisiert.",
    "ticket_department_updated"         => "Die Abteilung von Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_status_updated"             => "Den Status von Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_priority_updated"           => "Die Priorität von Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_tag_added"                  => "Schlagwort :new_value zu Ticket #:rel hinzugefügt.",
    "ticket_tag_updated"                => "Schlagwörter auf Ticket #:rel aktualisiert.",
    "ticket_tag_removed"                => "Schlagwort :new_value aus Ticket #:rel entfernt.",
    "ticket_slaplan_updated"            => "Den SLA-Plan von Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_duetime_updated"            => "Die Fälligkeit von Ticket #:rel auf :new_value aktualisiert.",
    "ticket_customfield_updated"        => "Benutzerdefinierte Felder auf Ticket #:rel aktualisiert.",
    "ticket_converted_user"             => "Internes Ticket #:rel in Benutzer-Ticket umgewandelt.",
    "ticket_converted_internal"         => "Benutzer-Ticket #:rel in internes Ticket umgewandelt.",

    "ticket_assigned_operator"          => ":new_value dem Ticket #:rel zugewiesen.",
    "ticket_unassigned_operator"        => ":new_value vom Ticket #:rel entfernt.",
    "ticket_assigned_self"              => "Sich selbst dem Ticket #:rel zugewiesen.",
    "ticket_assigned_updated"           => "Zugewiesene Mitarbeiter auf Ticket #:rel aktualisiert.",

    "ticket_locked"                     => "Ticket #:rel gesperrt.",
    "ticket_unlocked"                   => "Ticket #:rel entsperrt.",
    "ticket_locked_reply"               => "Antwort konnte dem gesperrten Ticket #:rel nicht hinzugefügt werden.",

    "ticket_unmerged"                   => "Ticket :rel wurde getrennt.",

    "ticket_user_blocked"               => "E-Mail :new_value blockiert (vom Benutzer auf Ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel wurde geschlossen.",
    "ticket_inactive_closed"            => "Inaktives Ticket #:rel aus dem Status :old_value geschlossen.",
    "ticket_awaiting_response"          => "Wartet-auf-Antwort-E-Mail an den Benutzer auf Ticket #:rel gesendet.",

    "ticket_split_from"                 => "Nachrichten vom alten Ticket #:rel in das neue Ticket #:new_value aufgeteilt.",
    "ticket_split_to"                   => "Nachrichten vom alten Ticket #:old_value in das neue Ticket #:rel aufgeteilt.",

    "ticket_attachment_saved"           => "Anhang zu Ticket #:rel hinzugefügt.",
    "ticket_attachment_deleted"         => "Anhang aus Ticket #:rel gelöscht.",

    "ticket_throttled"                  => "Neues Ticket von :rel aufgrund von Drosselung abgelehnt.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Anhang ':new_value' zum Artikel mit ID :rel hinzugefügt.",
    "selfservice_attachment_deleted"    => "Anhang ':new_value' aus dem Artikel mit ID :rel gelöscht.",
    "ticket_unassigned_self"            => "Sich selbst von Ticket #:rel entfernt.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Antwort konnte nicht hinzugefügt werden, da das Ticket zu einer deaktivierten Marke gehört #:rel.",
    "personal_signatures_updated"       => "Persönliche Signaturen aktualisiert.",
    "check_email_failed"                => "Fehler: E-Mail konnte nicht vom Konto :old_value heruntergeladen werden: ':rel'.",
    "invalid_department_brand"          => "Abteilung konnte nicht auf ':new_value' für Ticket #:rel gesetzt werden, die Abteilung gehört nicht zur Marke des Tickets.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Eine E-Mail mit dem Betreff ':extra_rel1' an :rel gesendet.",
    "sent_template_email_to"            => "E-Mail ':extra_rel1' an :rel gesendet.",
    "sent_ticket_email_to_user"         => "E-Mail ':extra_rel1' für Ticket #:rel an Benutzer gesendet.",
    "sent_email_to_operators"           => "E-Mail ':extra_rel1' an Mitarbeiter gesendet.",
    "sent_ticket_email_to_operators"    => "E-Mail ':extra_rel1' für Ticket #:rel an Mitarbeiter gesendet.",
    "sent_email_to_operator_group"      => "E-Mail ':extra_rel1' an Mitarbeitergruppe ':new_value' für Ticket #:rel gesendet.",
    "ticket_macro_applied"              => "Das Makro ':new_value' wurde auf Ticket #:rel ausgeführt.",
    "ticket_macro_automatic"            => "Das Makro ':new_value' wurde automatisch auf Ticket #:rel ausgeführt.",
    "email_template_not_found"          => "E-Mail-Vorlage mit ID ':new_value' nicht gefunden, Versand der E-Mail abgebrochen.",
    "private_conversation_started"      => "Eine Unterhaltung mit :rel begonnen.",
    "private_message_sent"              => "Eine Nachricht an :rel gesendet.",
    "not_imported_replies_disabled"     => "Eine E-Mail :extra_rel1 wurde für Ticket #:rel empfangen, aber nicht importiert, da Antworten per Ticket-E-Mail deaktiviert sind.",
    "not_imported_ticket_locked"        => "Eine E-Mail :extra_rel1 wurde für Ticket #:rel empfangen, aber nicht importiert, da das Ticket gesperrt ist.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket-Benutzer zur Benutzergruppe :new_value hinzugefügt.",
    "ticket_user_removed_from_group"    => "Ticket-Benutzer aus der Benutzergruppe :old_value entfernt.",
    "email_on_behalf"                   => ":extra_rel2 im Namen von ':extra_rel1' in Ticket #:rel weitergeleitet.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "E-Mail ':extra_rel1' an :new_value gesendet, die Abteilung akzeptiert keine E-Mails von nicht registrierten Benutzern.",
    "deleted_user"                      => ":item ':rel' mit E-Mail-Adresse ':email_address' (ID :user_id) gelöscht.",
    "linked_ticket"                     => "Ticket #:rel mit Ticket :extra_rel1 verknüpft.",
    "unlinked_ticket"                   => "Verknüpfung von Ticket #:rel mit Ticket :extra_rel1 aufgehoben.",
    "email_queue_attachment_deleted"    => "Anhang ':old_value' aus der E-Mail-Warteschlange ':rel' gelöscht.",
    "forward_ticket_email"              => "Ticket #:rel an Dritte weitergeleitet, E-Mail ':extra_rel1' anzeigen.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => ":rel von :extra_rel1 aktualisiert.",
    "selfservice_comment_status"        => "Status von :rel durch :extra_rel1 von :old_value auf :new_value geändert.",
    "selfservice_comment_deleted"       => "Kommentar von :extra_rel1 gelöscht.",
    "ticket_message_posted"             => ":extra_rel1 zu Ticket #:rel hinzugefügt.",
    "ticket_message_edited"             => ":extra_rel1 in Ticket #:rel bearbeitet.",
    "email_send_failed"                 => "E-Mail konnte nicht gesendet werden.",
    "ticket_brand_updated"              => "Marke auf Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "export_scheduled"                  => "Ein Export des Benutzers :rel wurde geplant.",
    "deleted_inactive_records"          => ":old_value inaktive :rel automatisch gelöscht.",
    "deleted_old_records"               => "Alte :rel-Datensätze automatisch gelöscht.",
    "sent_email_to_user_group"          => "E-Mail an Benutzergruppe ':new_value' für Ticket #:rel in Warteschlange eingereiht.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Ticket #:rel wird beobachtet.",
    "ticket_unwatching"                 => "Ticket #:rel wird nicht mehr beobachtet.",
    "ticket_watch_operator"             => ":new_value als Beobachter für Ticket #:rel festgelegt.",
    "ticket_unwatch_operator"           => ":new_value als Beobachter für Ticket #:rel entfernt.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Besitz der E-Mail-Adresse im Namen des Benutzers :rel bestätigt.",
    "ticket_department_email_updated"   => "Abteilungs-E-Mail auf Ticket #:rel von :old_value auf :new_value aktualisiert.",
    "ticket_watching_updated"           => "Beobachtende Mitarbeiter auf Ticket #:rel aktualisiert.",
    "ticket_deleted"                    => "Ticket ':old_value' (#:rel) endgültig gelöscht.",
    "ticket_trashed"                    => "Ticket #:rel in den Papierkorb verschoben.",
    "ticket_restored"                   => "Ticket #:rel aus dem Papierkorb wiederhergestellt.",
    "emptied_ticket_trash"              => "Den Ticket-Papierkorb automatisch von ':old_value' Datensätzen bereinigt.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Eine neue Nachverfolgung wurde für Ticket #:rel eingerichtet.",
    "ticket_followup_updated"           => "Eine Nachverfolgung für Ticket #:rel wurde aktualisiert.",
    "ticket_followup_deleted"           => "Eine Nachverfolgung für Ticket #:rel wurde gelöscht.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artikel :rel neutral bewertet.",

    /*
     * 4.1.0
     */
    "user_merged"                       => "Benutzer :old_value in Benutzer :rel zusammengeführt.",
    "user_organisation_merged"          => "Benutzerorganisation :old_value in Benutzerorganisation :rel zusammengeführt.",

    /*
     * 4.2.0
     */
    "operator_reply_templates_updated"  => "Antwortvorlagen von :rel aktualisiert.",

    /*
     * 5.0.0
     */
    "addon_activated"                   => ":item (Add-on) :rel aktiviert.",
    "addon_deactivated"                 => ":item (Add-on) :rel deaktiviert.",
    "addon_installed"                   => ":item (Add-on) :rel installiert.",
    "addon_uninstalled"                 => ":item (Add-on) :rel deinstalliert.",
    "addon_cancelled"                   => ":item (Add-on) :rel gekündigt.",
    "addon_updated"                     => ":item (Add-on) :rel auf Version :new_value aktualisiert.",
    "ticket_reply_duetime_updated"      => "Fälligkeitszeit für Antwort auf Ticket #:rel auf :new_value aktualisiert.",
    "ticket_resolve_duetime_updated"    => "Fälligkeitszeit für Lösung auf Ticket #:rel auf :new_value aktualisiert.",
    "ticket_duetime_unset"              => "Fälligkeitszeit für die Lösung von Ticket #:rel entfernt.",
    "ticket_reply_duetime_unset"        => "Fälligkeitszeit für Antwort auf Ticket #:rel aufgehoben.",
    "ticket_resolve_duetime_unset"      => "Hat die Frist zur Lösung von Ticket #:rel zurückgesetzt.",
    "ticket_duetime_paused"             => "Fälligkeitszeiten von Ticket #:rel pausiert.",
    "ticket_duetime_unpaused"           => "Hat die Fristen für Ticket #:rel fortgesetzt.",
    "user_email_verified"               => "Hat die eigene E-Mail-Adresse bestätigt.",
    "marked_email_as_verified"          => "Hat den Besitz der E-Mail-Adresse im Namen von Benutzer :rel bestätigt.",
    "user_invited_to_organisation"      => "Benutzer :rel wurde zur Organisation :extra_rel1 eingeladen.",
    "user_accepted_organisation_invite" => "Benutzer :rel hat die Einladung zur Organisation :extra_rel1 angenommen.",
    "user_additional_email_verified"    => "Hat eine zusätzliche E-Mail-Adresse bestätigt (:new_value).",
    "export_generated"                  => "Export :new_value wurde erstellt und im System gespeichert.",
    "export_deleted"                    => "Export :old_value wurde aus dem System gelöscht.",
    "user_export_generated"             => "Export :new_value von Benutzer :rel wurde erstellt und im System gespeichert.",

    /*
     * 5.0.2
     */
    "personal_reply_templates_updated"  => "Hat die eigenen Antwortvorlagen aktualisiert.",

    /*
     * 5.1.0
     */
    "ticket_deleted_attachment"         => "Hat den Anhang ':old_value' aus Ticket #:rel gelöscht.",
    "user_added_to_group"               => "Benutzer :rel wurde zur Benutzergruppe :new_value hinzugefügt.",
    "user_removed_from_group"           => "Benutzer :rel wurde aus der Benutzergruppe :old_value entfernt.",
    "operator_added_to_group"           => "Mitarbeiter :rel wurde zur Mitarbeitergruppe :new_value hinzugefügt.",
    "operator_removed_from_group"       => "Mitarbeiter :rel wurde aus der Mitarbeitergruppe :old_value entfernt.",

    /*
     * 5.2.0
     */
    "background_job_deleted"            => "Hat den Hintergrund-Job :rel gelöscht.",
    "background_job_retried"            => "Hat den Hintergrund-Job :rel erneut ausgeführt.",

    /*
     * 5.3.0
     */
    "operator_password_set"             => "Hat ein Passwort für das eigene Konto festgelegt.",
    "password_reset_sent"               => "Link zum Zurücksetzen des Passworts an :rel gesendet.",

    /*
     * 5.4.0
     */
    "ticket_feedback_rating"            => "Ticket #:rel als :extra_rel1 bewertet.", // Rated ticket #123 as 'general.good / general.bad / general.neutral'.
    "ticket_feedback_saved"             => ":extra_rel1 für Ticket #:rel gespeichert.", // Saved (lowercase ticket.feedback) on ticket #123
    "selfservice_feedback_saved"        => ":extra_rel1 für Artikel :rel gespeichert.", // Saved (lowercase ticket.feedback) on article 'Foo bar'

    /*
     * 5.5.0
     */
    "ticket_pinned_message"             => ":extra_rel1 an Ticket #:rel angeheftet.", // Pinned message (lowercase general.message) on ticket #123.
    "ticket_unpinned_message"           => "Anheftung von :extra_rel1 an Ticket #:rel aufgehoben.", // Unpinned message (lowercase general.message) on ticket #123.

    /*
     * 5.7.0
     */
    "operator_notifications_updated"    => "Benachrichtigungseinstellungen von :rel aktualisiert.", // Updated Joe Blog's notification preferences.

    /*
     * 6.0.0
     */
    "ticket_merged"                     => ":new_value in Ticket #:rel zusammengeführt.",
    "ticket_added_cc"                   => ":new_value zur CC-Adressliste von Ticket #:rel hinzugefügt.",
    "ticket_removed_cc"                 => ":old_value aus der CC-Adressliste von Ticket #:rel entfernt.",
    "ticket_slaplan_set"  => "Hat den SLA-Plan für Ticket #:rel von Keiner auf :new_value aktualisiert.",
    "ticket_slaplan_removed"  => "Hat den SLA-Plan für Ticket #:rel von :old_value auf Keiner aktualisiert.",
    "sent_feedback_email_to_operators"  => "Hat die E-Mail über erhaltenes Feedback für Ticket #:rel an die Mitarbeiter gesendet.",
    "ticket_added_cc_multiple"          => "Hat :cc_emails zur CC-Adressliste von Ticket #:rel hinzugefügt.",
    "timeline_ticket_added_cc_multiple" => ":user_name hat CC :cc_emails hinzugefügt",
    "ticket_removed_cc_multiple"        => "Hat :cc_emails aus der CC-Adressliste von #:rel entfernt.",
    "timeline_ticket_removed_cc_multiple" => ":user_name hat CC :cc_emails entfernt",
    "ticket_assigned_operators_multiple" => "Hat :operators zu Ticket #:rel zugewiesen.",
    "timeline_ticket_assigned_operators_multiple" => ":user_name hat :operators zugewiesen",
    "ticket_unassigned_operators_multiple" => "Hat die Zuweisung von :operators zu Ticket #:rel aufgehoben.",
    "timeline_ticket_unassigned_operators_multiple" => ":user_name hat die Zuweisung von :operators aufgehoben",
    "ticket_watch_operator_multiple"    => "Hat :operators als Beobachter für Ticket #:rel festgelegt.",
    "timeline_ticket_watch_operator_multiple" => ":user_name hat :operators zu den Beobachtern hinzugefügt",
    "ticket_unwatch_operator_multiple"  => "Hat :operators als Beobachter von Ticket #:rel entfernt.",
    "timeline_ticket_unwatch_operator_multiple"  => ":user_name hat :operators von den Beobachtern entfernt",
    "ticket_tag_added_single"           => "Hat das Schlagwort :formatted_items zu Ticket #:rel hinzugefügt.",
    "timeline_ticket_tag_added_single"  => ":user_name hat das Schlagwort :formatted_items hinzugefügt",
    "ticket_tag_removed_single"         => "Hat das Schlagwort :formatted_items aus Ticket #:rel entfernt.",
    "timeline_ticket_tag_removed_single" => ":user_name hat das Schlagwort :formatted_items entfernt",
    "ticket_tag_added_multiple"         => "Hat die Schlagwörter :formatted_items zu Ticket #:rel hinzugefügt.",
    "timeline_ticket_tag_added_multiple" => ":user_name hat die Schlagwörter :formatted_items hinzugefügt",
    "ticket_tag_removed_multiple"       => "Hat die Schlagwörter :formatted_items aus Ticket #:rel entfernt.",
    "timeline_ticket_tag_removed_multiple" => ":user_name hat die Schlagwörter :formatted_items entfernt",
    "ticket_merged_multiple"            => "Hat :ticket_numbers mit Ticket #:rel zusammengeführt.",
    "timeline_ticket_merged_multiple"   => ":user_name hat :ticket_numbers mit diesem Ticket zusammengeführt",
    "linked_tickets_multiple"           => "Hat Ticket #:rel mit den Tickets :extra_rel* verknüpft.",
    "timeline_linked_tickets_multiple"  => ":user_name hat verknüpft mit :extra_rel*",
    "unlinked_tickets_multiple"         => "Hat die Verknüpfung von Ticket #:rel mit den Tickets :extra_rel* aufgehoben.",
    "timeline_unlinked_tickets_multiple" => ":user_name hat die Verknüpfung der Tickets :extra_rel* aufgehoben",
    "ticket_macro_automatic_multiple"   => "Die Makros :macros wurden automatisch für Ticket #:rel ausgeführt.",
    "timeline_ticket_macro_automatic_multiple" => ":user_name hat die Makros :macros ausgeführt",
    "ticket_customfield_updated_individual" => "Hat das benutzerdefinierte Feld ':field_name' für Ticket #:rel aktualisiert.",
    "timeline_ticket_customfield_updated_individual" => ":user_name hat das benutzerdefinierte Feld ':field_name' aktualisiert",
    "timeline_ticket_opened_on_behalf"  => ":user_name hat das Ticket im Namen von :new_value erstellt",
    "timeline_ticket_message_deleted"   => ":user_name hat die Nachricht (:message_id) von :message_user_name gelöscht",
    "timeline_ticket_user_updated"      => ":user_name hat den Benutzer von :old_value auf :new_value geändert",
    "timeline_ticket_subject_updated"   => ":user_name hat den Betreff aktualisiert <del>:old_value</del> :new_value",
    "timeline_ticket_department_updated" => ":user_name hat die Abteilung von :old_value auf :new_value geändert",
    "timeline_ticket_status_updated"    => ":user_name hat den Status von :old_value auf :new_value geändert",
    "timeline_ticket_priority_updated"  => ":user_name hat die Priorität von :old_value auf :new_value geändert",
    "timeline_ticket_slaplan_updated"   => ":user_name hat den SLA-Plan von :old_value auf :new_value geändert",
    "timeline_ticket_slaplan_set"       => ":user_name hat den SLA-Plan auf :new_value festgelegt.",
    "timeline_ticket_slaplan_removed"   => ":user_name hat den SLA-Plan entfernt (von :old_value).",
    "timeline_ticket_converted_user"    => ":user_name hat von internem Ticket zu Benutzer-Ticket umgewandelt",
    "timeline_ticket_converted_internal" => ":user_name hat von Benutzer-Ticket zu internem Ticket umgewandelt",
    "timeline_ticket_assigned_self"     => ":user_name hat sich selbst zugewiesen",
    "timeline_ticket_locked"            => ":user_name hat das Ticket gesperrt",
    "timeline_ticket_unlocked"          => ":user_name hat das Ticket entsperrt",
    "timeline_ticket_unmerged"          => ":user_name hat das Ticket getrennt",
    "timeline_ticket_user_blocked"      => ":user_name hat die E-Mail :new_value blockiert",
    "timeline_ticket_closed"            => ":user_name hat das Ticket geschlossen",
    "timeline_ticket_inactive_closed"   => ":user_name hat wegen Inaktivität geschlossen",
    "timeline_ticket_awaiting_response" => ":user_name hat eine E-Mail \"Warten auf Antwort\" an den Benutzer gesendet",
    "timeline_ticket_split_from"        => ":user_name hat Nachrichten in das neue Ticket #:new_value aufgeteilt",
    "timeline_ticket_split_to"          => ":user_name hat Nachrichten aus #:old_value aufgeteilt",
    "timeline_ticket_attachment_deleted" => ":user_name hat den Anhang (:attachment_id) :attachment_name aus <a href='#:message_id'>Nachricht</a> gelöscht",
    "timeline_ticket_unassigned_self"   => ":user_name hat die eigene Zuweisung entfernt",
    "timeline_ticket_macro_applied"     => ":user_name hat das Makro ':new_value' ausgeführt",
    "timeline_ticket_macro_automatic"   => ":user_name hat das Makro ':new_value' ausgeführt",
    "timeline_ticket_message_edited"    => ":user_name hat :extra_rel1 bearbeitet",
    "timeline_ticket_brand_updated"     => ":user_name hat die Marke von :old_value zu :new_value geändert",
    "timeline_ticket_watching"          => ":user_name hat begonnen, das Ticket zu beobachten",
    "timeline_ticket_unwatching"        => ":user_name hat aufgehört, das Ticket zu beobachten",
    "timeline_ticket_department_email_updated" => ":user_name hat die Abteilungs-E-Mail von :old_value zu :new_value geändert",
    "timeline_ticket_trashed"           => ":user_name hat in den Papierkorb verschoben",
    "timeline_ticket_restored"          => ":user_name hat aus dem Papierkorb wiederhergestellt",
    "timeline_ticket_followup_set"      => ":user_name hat eine Nachverfolgung erstellt",
    "timeline_ticket_followup_updated"  => ":user_name hat eine Nachverfolgung aktualisiert",
    "timeline_ticket_followup_deleted"  => ":user_name hat eine Nachverfolgung gelöscht",
    "timeline_ticket_reply_duetime_updated" => ":user_name hat die Fälligkeitszeit für die Antwort auf :new_value geändert",
    "timeline_ticket_resolve_duetime_updated" => ":user_name hat die Fälligkeitszeit für die Lösung auf :new_value geändert",
    "timeline_ticket_reply_duetime_unset" => ":user_name hat die Fälligkeitszeit für die Antwort entfernt",
    "timeline_ticket_resolve_duetime_unset" => ":user_name hat die Fälligkeitszeit für die Lösung entfernt",
    "timeline_ticket_duetime_paused"    => ":user_name hat die Fälligkeitszeiten pausiert",
    "timeline_ticket_duetime_unpaused"  => ":user_name hat die Fälligkeitszeiten fortgesetzt",
    "timeline_ticket_feedback_rating"   => ":user_name hat die Feedback-Bewertung auf :extra_rel1 gesetzt", // Rated as 'general.good / general.bad / general.neutral'
    "timeline_ticket_feedback_saved"    => ":user_name hat :extra_rel1 gespeichert", // Saved (lowercase ticket.feedback)
    "timeline_ticket_pinned_message"    => ":user_name hat eine <a href='#:message_id'>Nachricht</a> angeheftet",
    "timeline_ticket_unpinned_message"  => ":user_name hat eine <a href='#:message_id'>Nachricht</a> losgelöst",
    "ticket_attachment_rejected"        => "Anhang/Anhänge :files wurden aufgrund eines ungültigen Dateityps für Ticket #:rel blockiert.",
    "timeline_ticket_attachment_rejected" => "Anhang/Anhänge :files wurden aufgrund eines ungültigen Dateityps blockiert",

    /*
     * 6.1.0
     */
    "system_update_started"             => "Started system update to version :rel.",

);
