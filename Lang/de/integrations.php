<?php declare(strict_types=1);

return array(

    /*
     * 5.0.0
     */
    "app_id"                           => "App-ID",
    "app_secret"                       => "App-Secret",
    "api_key"                          => "API-Schlüssel",

    "algolia_documentation"            => "Bitte lesen Sie unsere Dokumentation zum Einrichten von <a href=':link'>Algolia</a>.",

    "facebook_documentation"           => "Bitte lesen Sie unsere Dokumentation zum Einrichten von <a href=':link'>Facebook</a>.",
    "facebook_redirect_url"            => "Die folgende URL <strong>muss</strong> für das Facebook-Login unter 'Valid OAuth redirect URIs' eingetragen werden:",

    "google_documentation"             => "Bitte lesen Sie unsere Dokumentation zum Einrichten von <a href=':link'>Google</a>.",
    "google_redirect_url"              => "Die folgende(n) URL(s) <strong>müssen</strong> für Google unter 'Authorized redirect URIs' eingetragen werden:",

    "microsoft_documentation"          => "Bitte lesen Sie unsere Dokumentation zum Einrichten von <a href=':link'>Microsoft</a>.",
    "microsoft_redirect_url"           => "Die folgende(n) URL(s) <strong>müssen</strong> für die Anwendung unter 'Redirect URIs' eingetragen werden:",

    "pusher_hosting"                   => "Hosting",
    "pusher_cloud"                     => "Cloud (pusher.com)",
    "pusher_self_hosted"               => "Selbst gehostet",
    "pusher_key"                       => "Schlüssel",
    "pusher_secret"                    => "Secret",
    "pusher_cluster"                   => "Cluster",
    "pusher_internal_host"             => "Interner Host",
    "pusher_internal_host_desc"        => "Der interne Hostname oder die IP-Adresse des WebSocket-Servers.",
    "pusher_internal_port_desc"        => "Der Port des internen WebSocket-Servers.",
    "pusher_external_host"             => "Externer Host",
    "pusher_external_host_desc"        => "Der Hostname oder die IP-Adresse des WebSocket-Servers, auf den die Öffentlichkeit zugreifen kann. Bitte leer lassen, um standardmäßig den Hostnamen Ihres Support-Portals zu verwenden.",
    "pusher_external_port_desc"        => "Der Port des öffentlichen WebSocket-Servers. Bitte leer lassen, um standardmäßig denselben Port wie Ihr Webserver zu verwenden.",
    "pusher_encryption_desc"           => "Aktivieren, wenn Sie ein SSL-Zertifikat auf dem WebSocket-Server konfiguriert haben.",
    "pusher_unable_to_receive_updates" => "Echtzeit-Updates können nicht empfangen werden. Bitte überprüfen Sie Ihre Internetverbindung.",

    "steam_documentation"              => "Bitte lesen Sie unsere Dokumentation zum Einrichten von <a href=':link'>Steam</a>.",

    "twilio_account_details"           => "Kontodetails",
    "twilio_account_details_desc"      => "Die Konto-SID und das Auth-Token finden Sie in Ihrer Konto-Konsole unter 'Account Info'.",
    "twilio_account_sid"               => "Konto-SID",
    "twilio_auth_token"                => "Auth-Token",
    "twilio_api_details"               => "API-Details",
    "twilio_api_details_desc"          => "Suchen Sie in der Konsole nach 'API Keys'. Erstellen Sie einen API-Schlüssel und geben Sie den Schlüssel und das Secret unten ein.",
    "twilio_api_secret"                => "API-Secret",
    "twilio_number_verification"       => "Nummernverifizierung",

    "twitter_api_key_secret"           => "API-Schlüssel-Secret",

    /*
     * 5.3.0
     */
    "twitter_documentation"            => "Bitte lesen Sie unsere Dokumentation zur Einrichtung von <a href=':link'>X</a>.",
    "twitter_redirect_url"             => "Die folgende URL <strong>muss</strong> als 'Callback URL' der X-App eingetragen werden:",

    /*
     * 5.4.1
     */
    "twilio_verify_sid"                => "Verification SID",
    "twilio_number_verification_desc"  => "Optional - Geben Sie eine Verification-Service-SID ein, um die Verifizierung der Telefonnummern von Benutzern zu aktivieren. Dies ermöglicht es Benutzern, ihre eigenen eingegebenen Telefonnummern zu verifizieren - der <a target='_blank' href='https://www.twilio.com/verify'>Verify-Dienst</a> von Twilio ist kostenpflichtig.",
    "twilio_verify_countries"          => "Zugelassene Länder verifizieren",
    "twilio_verify_countries_desc"     => "Beschränken Sie die Verifizierung von Telefonnummern auf bestimmte Länder, um Kosten und das Missbrauchsrisiko zu reduzieren. Telefonnummern aus Ländern, die nicht auf der zugelassenen Liste stehen, können von Mitarbeitern manuell als verifiziert markiert werden.",

    /*
     * 5.5.0
     */
    "algolia_frontend_search_rate_limit" => "Ratenbegrenzung der Frontend-Suche",
    "algolia_max_daily"                => "Maximale Anfragen pro Tag",
    "algolia_max_daily_desc"           => "Die maximale Anzahl an API-Aufrufen, die vom Frontend aus an Algolia gesendet werden können.",
    "algolia_max_min"                  => "Maximale Anfragen pro Minute",
    "algolia_max_min_desc"             => "Die maximale Anzahl an API-Aufrufen, die vom Frontend aus an Algolia gesendet werden können, pro authentifiziertem Benutzer / IP-Adresse.",

    /*
     * 5.7.0
     */
    "microsoft_tenant_id"               => "Tenant-ID",
    "microsoft_tenant_id_desc"          => "Wenn Sie für die unterstützten Kontotypen einen einzelnen Tenant verwenden müssen, geben Sie die Tenant-ID ein; andernfalls lassen Sie dieses Feld leer. Die Tenant-ID finden Sie in der Übersicht von Microsoft Entra Identity.",

);
