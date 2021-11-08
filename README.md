# Zielsetzung der Applikation
Online-Chat-Applikation kann sich auf jede Art von Kommunikation über das Internet beziehen,
die eine Echtzeitübertragung von Textnachrichten vom Sender zum Empfänger bietet.
Chatnachrichten sind in der Regel kurz, damit andere Teilnehmer schnell antworten können.
Dadurch wird ein einem gesprochenen Gespräch ähnliches Gefühl erzeugt, das den Chat von anderen textbasierten
Online-Kommunikationsformen wie Internetforen und E-Mail unterscheidet. Online-Chat kann Punkt-zu-Punkt-Kommunikation
sowie Multicast-Kommunikation von einem Sender zu vielen Empfängern und Sprach- und Video-Chat adressieren oder kann ein Merkmal
eines Webkonferenzdienstes sein.

Online-Chat-Applikation in einer weniger strengen Definition kann in erster Linie jeder direkte textbasierte oder videobasierte,
Einzel-Chat oder Eins-zu-viele-Gruppen-Chat sein, unter Verwendung von Tools wie Instant Messenger, Internet Relay Chat (IRC),
Talker und möglicherweise MUDs oder andere Online-Spiele. Der Ausdruck Online-Chat kommt vom Wort Chat, was "informelles Gespräch" bedeutet.
Online-Chat umfasst webbasierte Anwendungen, die eine Kommunikation ermöglichen – oft direkt adressiert, aber anonym zwischen Benutzern in einer
Mehrbenutzerumgebung. Webkonferenzen sind ein spezifischerer Onlinedienst, der oft als Dienst verkauft wird und auf einem vom Anbieter
kontrollierten Webserver gehostet wird.

Mein Projekt beinhaltet eine Chat Funktion, in welchen Sie sich mit Ihren Freunden unterhalten können.
Das Prinzip ist ein Web-Socket geschrieben in PHP, worin Nachrichten mittels JSON übermittelt und in einer Datenbank speichert.
Teilnehmen können alle Personen, die die Applikation installiert und den Web-Socket, über das entsprechende Protokoll, ansprechen können.

Ich werde einen Login, sowie separat eine Sign-Up Seite anfertigen, um sich einzuloggen, respektive sich zu registrieren.
Die dabei verwendeten Technologien sind hauptsächlich HTML/CSS, PHP, ODBC, phpMyAdmin MariaDB. Als Entwicklungsumgebung werde ich PHP-Storm
verwenden und GitHub zur Versionskontrolle. Wenn nötig oder nach Bedarf werde ich noch weitere Technologien einbeziehen.

Das Projekt entspricht einer 4-Tier Architektur, also Präsentation-, Business-, Data-Interface- und Data-Layer.
Nur die Chat-Applikation, Group_chat.php, entspricht einer 3-Tier Architektur.


# Die Online-Gruppenchat-Anwendung mit PHP

 ## Voraussetzungen:
 Grundlegende Kenntnisse in den Softwarearchitekturen, sowie den einhergehenden Programmierparadigmen.
 Technische Kenntnisse:
 HTML CSS JavaScript (Grundlagen) PHP (Datenbankanbindung) SQL-Abfragen
 Zu installierende Software:
 XAMPP-Server: Dies ist eine kostenlose Software, die den Webserver Apache, ein Datenbankverwaltungssystem für MySQL (oder MariaDB) enthält.
 Es kann kostenlos von der offiziellen Website heruntergeladen werden.

 phpMyAdmin: Es ist eine kostenlose Open-Source-Software zur Verwaltung von MySQL und MariaDB.
 Sie können es von der offiziellen Website herunterladen. Die heruntergeladene ZIP-Datei muss an folgendem Ort eingefügt werden. C:\xampp\htdocs

 Texteditor: Jeder Texteditor wie Notepad++ oder normales Notepad reicht aus, um dies zu implementieren.

 Browser: Jedes aktivierte JavaScript reicht aus, um den Code auszuführen.

 ## Die Gruppenchat-Anwendung: Dies ist eine einfache Gruppenchat-Anwendung, um die Idee der Anwendung zu demonstrieren, die Sie im WhatsApp Messenger mit dem localhost-Server sehen.
 Mehrere Benutzer können hierherkommen und ihre Ansichten teilen. Die MySQL-Datenbank speichert die Chats und ruft sie effektiv ab.
 Um diese Anwendung erfolgreich zu implementieren, müssen wir CSS und JavaScript zum Stylen der Benutzeroberfläche, HTML-Teil zum Rendern,
 PHP-Code zum Speichern und Abrufen aus der Datenbank erstellen. Diese Anwendung enthält zwei Felder, nämlich den Benutzernamen und die Textnachricht. Die Nachrichten des Benutzers,
 der zuerst schreibt, werden auf der rechten Seite des Chatrooms ausgerichtet und die Nachrichten der anderen auf der linken Seite. Schauen wir uns die Umsetzung an.

 CSS: Platzieren Sie dies unter dem style-Tag oder in einer externen Stylesheet-Datei und verlinken Sie es. Diese CSS-Datei enthält die Stile für den Chatroom,
 die Textnachrichten und die Chat-Bubbles.

 ## Schritte zum Ausführen des Codes:

 Speichern Sie die PHP-Datei Group_chat.php in einem neuen Ordner in C:\xampp\htdocs. Zum Beispiel habe ich die Datei in den Ordner mit dem Namen „myfiles“ im Ordner htdocs gelegt.
 Erstellen Sie vor dem Ausführen der Anwendung eine Datenbank, indem Sie die oben angegebenen Schritte ausführen. Benennen Sie die Datenbank als chat_app. Benennen Sie die Tabelle als Chats.
 Überprüfen Sie in der XAMPP-Systemsteuerung, ob Apache und MySQL ausgeführt werden.
 Öffnen Sie den Browser und geben Sie localhost/myfiles ein. Der Index dieses Verzeichnisses wird geöffnet. Klicken Sie auf die Group_chat.php.
 Beginnen Sie mit dem Senden von Nachrichten und sehen Sie sich das Ergebnis an.
