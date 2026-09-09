<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systemanforderungen nicht erfüllt",

    // Index
    "supportpal_installer"      => "SupportPal-Installationsprogramm",
    "select_language"           => "Sprache auswählen",
    "install_type"              => "Installationstyp",
    "install"                   => "Neuinstallation",
    "upgrade"                   => "Bestehende Installation aktualisieren",
    "support"                   => "Der für diese Installation verwendete Lizenz-Code verfügt über kein gültiges Support- &amp; Upgrades-Abonnement und ist daher nicht berechtigt, diese Version von SupportPal zu installieren. Bitte <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>verlängern</a> Sie Ihr Support- &amp; Updates-Abonnement oder setzen Sie Ihre Installationsdateien zurück.",

    // Upgrade
    "successfully_updated"      => "Herzlichen Glückwunsch, SupportPal wurde erfolgreich aktualisiert.",

    // Install
    // Step 1
    "step_1"                    => "Schritt 1 von 7: EULA akzeptieren",
    "step_1_desc"               => "Bitte lesen Sie unsere Softwarelizenzvereinbarung unten. Wenn Sie fortfahren, stimmen Sie der Lizenz zu.",
    "i_accept_and_continue"     => "Ich akzeptiere und fahre fort",

    // Step 2
    "step_2"                    => "Schritt 2 von 7: Systemanforderungen",
    "not_available"             => "Nicht verfügbar",
    "php_version"               => "PHP-Version",
    "php_version_not_found"     => "Nicht verfügbar, gefundene PHP-Version: :version",
    "php_extensions"            => "PHP-Erweiterungen",
    "file_writeable"            => "Dateiberechtigungen",
    "file_writeable_desc"       => "Alle der folgenden Elemente sollten für den Webserver beschreibbar sein. Wir empfehlen die Verwendung der Dateiberechtigung 755, einige Systeme erfordern jedoch möglicherweise 777, wenn die Dateien nicht dem Webserver-Benutzer gehören. Verzeichnisse sollten rekursiv beschreibbar sein.",

    // Step 3
    "step_3"                    => "Schritt 3 von 7: Datenbank",
    "step_3_desc"               => "Bitte geben Sie die Details der Datenbank ein, die Sie für SupportPal eingerichtet haben.",
    "hostname"                  => "Hostname",
    "port"                      => "Port",
    "port_desc"                 => "(Nur ändern, wenn nicht der Standardport 3306 verwendet wird)",
    "database"                  => "Datenbank",
    "database_not_empty"        => "Die Datenbank darf keine Tabellen enthalten.",

    // Step 4
    "step_4"                    => "Schritt 4 von 7: Tabellen erstellen",
    "step_4_desc"               => "Die Migration wird im Hintergrund durchgeführt und ein ausführliches Protokoll wird unten geschrieben; dies kann mehrere Minuten dauern. Klicken Sie nach Abschluss bitte auf die dann erscheinende Schaltfläche „Fortfahren“.",

    // Step 5
    "step_5"                    => "Schritt 5 von 7: Mitarbeiter-Konto",
    "step_5_desc"               => "SupportPal benötigt eine gültige Lizenz, um zu funktionieren. Bitte geben Sie unten eine ein.",
    "license_desc"              => "Ihr SupportPal-Lizenz-Code ist 23 Zeichen lang und beginnt mit SP-",
    "operator_desc"             => "Bitte erstellen Sie ein Administratorkonto für den Mitarbeiter-Bereich, indem Sie alle unten stehenden Details eingeben.",
    "validating_license"        => "Lizenz wird überprüft…",

    // Step 6
    "step_6"                    => "Schritt 6 von 7: Schnelleinrichtung",
    "step_6_desc"               => "Geben Sie unten die Details zu Ihrem Unternehmen und Ihrer Website ein.",
    "locale_desc"               => "Legen Sie die Gebietsschema-Einstellungen für Ihr System fest.",
    "operator_success"          => "Ihr Administratorkonto wurde erstellt.",

    // Step 7
    "step_7"                    => "Schritt 7 von 7: Installiert!",
    "successfully_installed"    => "Herzlichen Glückwunsch, SupportPal wurde erfolgreich installiert.",
    "operator_panel"            => "Mitarbeiter-Bereich",
    "help_desc"                 => "Sollten Sie Hilfe bei der Konfiguration oder Nutzung von SupportPal benötigen, haben wir zwei wichtige Informationsquellen:",
    "submit_a_ticket"           => "Ticket erstellen",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Sie erfüllen :required von :total erforderlichen Anforderungen.",
    "optional_requirements"     => "Sie erfüllen :optional von :total optionalen Anforderungen.",
    "both_requirements"         => "Sie erfüllen :required von :total_required erforderlichen Anforderungen und :optional von :total_optional optionalen Anforderungen.",
    "php_version_is"            => "Ihre PHP-Version ist :version.",
    "enabled"                   => "Aktiviert",
    "disabled"                  => "Deaktiviert",
    "php_settings"              => "PHP-Einstellungen",
    "ipv6_support"              => "IPv6-Unterstützung",
    "memory_limit"              => ">= 128 MB Arbeitsspeicher",
    "memory_limit_error"        => "Ihr Arbeitsspeicher-Limit beträgt ':limit'.",
    "permission_denied"         => "Zugriff verweigert",
    "writable"                  => "Beschreibbar",
    "help_php_version"          => "Für Unterstützung bei der Installation einer neuen PHP-Version wenden Sie sich bitte an Ihren Hosting-Anbieter oder Server-Administrator.",
    "help_php_extensions"       => "PHP-Erweiterungen unterscheiden sich je nach Server, Host und anderen Systemvariablen. Für Unterstützung bei der Installation fehlender Erweiterungen wenden Sie sich bitte an Ihren Hosting-Anbieter oder Server-Administrator.",
    "help_php_settings"         => "Für weitere Unterstützung lesen Sie bitte die <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Hilfe zu PHP-Einstellungen</a>.",
    "disabled_functions"        => "Deaktivierte Funktionen",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Wenn Ihr Server IPv6-Netzwerkunterstützung bietet, installieren Sie bitte die Erweiterung php-sockets.",
    "email_address_desc"        => "Geben Sie die Haupt-E-Mail-Adresse Ihres Unternehmens ein. Diese wird als Standard-Absenderadresse und als E-Mail-Adresse Ihrer ersten Abteilung eingerichtet. Sie können später weitere E-Mail-Adressen hinzufügen.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders Version :required oder höher erforderlich. Gefunden: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG- & JPEG-Unterstützung",
    "allow_url_fopen"           => "'allow_url_fopen' aktiviert",
    "allow_url_fopen_failure"   => "Aktivieren Sie 'allow_url_fopen' in Ihrer php.ini-Datei, um Gravatar und andere Funktionen zu nutzen.",
    "allowed_methods"           => "Zulässige HTTP-Methoden",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Serverversion >= :min",

    "upgrade_step"              => "Schritt :num von :total: ",
    "accept_eula"               => "EULA akzeptieren",
    "system_requirements"       => "Systemanforderungen",
    "update_database"           => "Datenbank aktualisieren",
    "upgrade_complete"          => "Upgrade abgeschlossen",

    "upgrade_support"           => "Sollten Sie auf Probleme stoßen oder Hilfe bei der Nutzung der neuen Funktionen in SupportPal benötigen, lesen Sie bitte unsere Dokumentation oder eröffnen Sie ein Ticket bei uns.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Bitte klicken Sie auf die Schaltfläche unten, um zu starten.",
    "locked"                    => "Installation/Upgrade läuft",

    "error_and_empty_database"  => "Es ist ein Fehler aufgetreten. Möglicherweise müssen Sie die Datenbank leeren, bevor Sie erneut starten.",
    "login_with_details"        => "Sie können sich mit den zuvor angegebenen Daten anmelden.",
    "command_not_available"     => "Befehl nicht verfügbar. Falls Sie der Meinung sind, dass dies fälschlicherweise angezeigt wird, führen Sie bitte 'php artisan cache:clear' aus und wiederholen Sie diesen Befehl anschließend.",
    "read_upgrade_guide"        => "Unser Upgrade-Leitfaden enthält nützliche Informationen zu wesentlichen Änderungen und bewährten Vorgehensweisen für das Upgrade:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[WARNUNG] Stellen Sie sicher, dass Sie ein Backup Ihrer SupportPal-Datenbank und Anwendungsdateien erstellt haben, bevor Sie fortfahren.\nBitte bestätigen Sie, dass Sie ein Backup erstellt, dessen Integrität überprüft haben und bereit sind fortzufahren.",
    "error_and_revert_database" => "Es ist ein Fehler aufgetreten. Bitte stellen Sie die Datenbank aus Ihrem Backup wieder her, bevor Sie erneut starten.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Die Datenbank-Konfigurationsdatei existiert bereits. Wenn Sie sicher sind, dass die Anwendung noch nicht installiert ist, löschen Sie bitte /config/:environment/database.php und starten Sie erneut.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Vielen Dank, dass Sie sich für SupportPal entschieden haben. Bitte überprüfen Sie, ob der unten angegebene Installationstyp korrekt ist, und klicken Sie dann auf Weiter.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Befüllen",
    "seeded"                    => "Befüllt",
    "migrating"                 => "Migrieren",
    "migrated"                  => "Migriert",
    "database_setup_complete"   => "Datenbank-Einrichtung abgeschlossen.",
    "created_repository"        => "Repository ':name' erfolgreich erstellt.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Befehl nicht verfügbar. Bitte führen Sie app:update aus, um die neueste verfügbare Version herunterzuladen und das Upgrade durchzuführen: %s.",
    "suggest_run_upgrade"       => "Ein Upgrade läuft bereits. Bitte führen Sie stattdessen app:upgrade aus.",
    "failed_to_download"        => "Datei konnte nicht heruntergeladen werden: :message",
    "backup_failed_abort"       => "Backup fehlgeschlagen. Update wird abgebrochen.",
    "command_failed"            => "Befehl :command ist mit folgender Ausgabe fehlgeschlagen: :message.",
    "already_latest_version"    => "Sie verwenden bereits die neueste Version (:version).",
    "update_not_supported"      => "Das automatische Update auf die neueste Version (:version) wird nicht unterstützt.",
    "current_and_new_version"   => "Sie verwenden Version :current_version. Die neueste verfügbare Version ist :new_version.",
    "update_to_version"         => "Sie verwenden Version :current_version. Möchten Sie auf :new_version aktualisieren?",
    "downloading_version"       => "Version :version wird nach :path heruntergeladen...",
    "checksum_not_matched"      => "Die Prüfsummenverifizierung der heruntergeladenen Datei ist fehlgeschlagen.",

    "check_readiness"           => "Es wird geprüft, ob die Anwendung aktualisiert werden kann...",
    "read_only"                 => "Das Dateisystem unter \":path\" ist schreibgeschützt. Updates können nicht auf ein schreibgeschütztes Dateisystem angewendet werden.",
    "file_ownership"            => "Die Datei \":path\" gehört \":owner\", aber PHP läuft als \":actual\". Der Dateieigentümer und der PHP-Benutzer müssen während eines Updates für alle Anwendungsdateien identisch sein.",
    "minimum_disk_space"        => "Das Verzeichnis \":path\" hat nicht genügend Speicherplatz. Es müssen mindestens :space Megabyte frei sein.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker-Bereitstellung erkannt. Folgen Sie zum Upgrade https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Tipps zur Fehlerbehebung erhalten",

    /*
     * 4.2.0
     */
    "app_manager_version_not_supported" => "App Manager (:version) wird nicht unterstützt.",
    "running_upgrade"           => "App-Upgrade wird ausgeführt",
    "upgrade_complete_success"  => "App-Upgrade erfolgreich abgeschlossen.",
    "app_manager_requires_update" => "Der App-Manager muss aktualisiert werden, bevor das Support-Portal-Update ausgeführt wird. :command",

    /*
     * 5.0.0
     */
    "mysql_client_version"      => "Client-Version >= :min",
    "post_install"              => "Damit das System ordnungsgemäß funktioniert, muss ein Cron-Job eingerichtet werden. Bitte lesen Sie unsere <a href='https://docs.supportpal.com/current/Administration'>Dokumentation</a> für Details dazu und zu weiteren empfohlenen Maßnahmen zur Verbesserung von Funktionalität und Sicherheit.",
    "help_allowed_methods"      => "Ihr Webserver muss alle der unten aufgeführten HTTP-Methoden zulassen. Weitere Informationen finden Sie in unserer <a href='https://docs.supportpal.com/current/System+Requirements#WebServer' target='_blank'>Installations-Dokumentation</a>.",

    /*
     * 5.3.0
     */
    "check_file_permissions"    => "Dateiberechtigungen werden überprüft...",

    /*
     * 6.0.0
     */
    "mysql_server_version_desc" => "Zum Betrieb von SupportPal ist eine Datenbank-Server-Version :min oder höher erforderlich. Gefunden: ':version'.",
    "help_mysql_version"        => "Für Unterstützung bei der Installation einer neuen MySQL-Version oder einer anderen unterstützten Datenbank wenden Sie sich bitte an Ihren Hosting-Anbieter oder Server-Administrator.",
    "mysql_version"             => "MySQL Version",
    "mysql_version_not_found"   => "Nicht verfügbar, gefundene Datenbankversion: :version",
    "mysql_client_version_desc" => "Zum Betrieb von SupportPal ist eine Datenbank-Client-Version :min oder höher erforderlich. Gefunden: ':version'.",
    "update_failed"             => "App-Update fehlgeschlagen.",
    "attempting_to_restore"     => "Es wird versucht, aus dem Backup wiederherzustellen...",

    /*
     * 6.1.0
     */
    "freetype_support"          => "FreeType Support",
    "upgrade_in_progress"       => "A system upgrade is in progress. The help desk will be unavailable until an administrator completes the upgrade. Please try again later.",

);
