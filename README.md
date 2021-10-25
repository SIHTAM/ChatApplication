# ChatApplication

Online-Gruppenchat-Anwendung mit PHP

Voraussetzungen: Technische Kenntnisse:

HTML CSS Javascript (Grundlagen) PHP (Datenbankanbindung) SQL-Abfragen 

Zu installierende Software:

XAMPP-Server: Dies ist eine kostenlose Software, die den Webserver Apache, ein Datenbankverwaltungssystem für MySQL (oder MariaDB) enthält. 
Es kann kostenlos von der offiziellen Website heruntergeladen werden. 

phpmyadmin: Es ist eine kostenlose Open-Source-Software zur Verwaltung von MySQL und MariaDB. 
Sie können es von der offiziellen Website herunterladen. Die heruntergeladene ZIP-Datei muss an folgendem Ort eingefügt werden. C:\xampp\htdocs</strong

Das Entpacken der Datei an einem anderen Ort funktioniert nicht gut. Einfach den Inhalt entpacken, da reicht es. 

Texteditor: Jeder Texteditor wie Notepad++ oder normales Notepad reicht aus, um dies zu implementieren. 
Browser: Jedes aktivierte JavaScript reicht aus, um den Code auszuführen. 

Die Gruppenchat-Anwendung: Dies ist eine einfache Gruppenchat-Anwendung, um die Idee der Anwendung zu demonstrieren, die Sie im WhatsApp Messenger mit dem localhost-Server sehen. 
Mehrere Benutzer können hierher kommen und ihre Ansichten teilen. Die MySQL-Datenbank speichert die Chats und ruft sie effektiv ab. 
Um diese Anwendung erfolgreich zu implementieren, müssen wir CSS und JavaScript zum Stylen der Benutzeroberfläche, HTML-Teil zum Rendern, 
PHP-Code zum Speichern und Abrufen aus der Datenbank erstellen. Diese Anwendung enthält zwei Felder, nämlich den Benutzernamen und die Textnachricht. Die Nachrichten des Benutzers, 
der zuerst schreibt, werden auf der rechten Seite des Chatrooms ausgerichtet und die Nachrichten der anderen auf der linken Seite. Schauen wir uns die Umsetzung an.

CSS: Platzieren Sie dies unter dem style-Tag oder in einer externen Stylesheet-Datei und verlinken Sie es. Diese CSS-Datei enthält die Stile für den Chatroom, 
die Textnachrichten und die Chat-Bubbles.

Schritte zum Ausführen des Codes:

Speichern Sie die PHP Datei Group_chat.php in einem neuen Ordner in C:\xampp\htdocs. Zum Beispiel habe ich die Datei in den Ordner mit dem Namen „myfiles“ im Ordner htdocs gelegt.
Erstellen Sie vor dem Ausführen der Anwendung eine Datenbank, indem Sie die oben angegebenen Schritte ausführen. Benennen Sie die Datenbank als chat_app. Benennen Sie die Tabelle als Chats.
Überprüfen Sie in der XAMPP-Systemsteuerung, ob Apache und MySQL ausgeführt werden.
Öffnen Sie den Browser und geben Sie localhost/myfiles ein. Der Index dieses Verzeichnisses wird geöffnet. Klicken Sie auf die Group_chat.php.
Beginnen Sie mit dem Senden von Nachrichten und sehen Sie sich das Ergebnis an.