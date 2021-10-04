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

Steps to run the code:

Save the file above as Group_chat.php inside a new folder in C:\xampp\htdocs. For example, I have placed the file inside the folder named “myfiles” inside the htdocs folder.
Before running the application create a database by following the steps given above. Name the database as chat_app. Name the table as chats.
Check the XAMPP control panel to ensure whether the Apache and MySQL are in running state.
Open the browser and type localhost/myfiles. The index of that directory will open. Click on the Group_chat.php.
Start sending messages and see the result