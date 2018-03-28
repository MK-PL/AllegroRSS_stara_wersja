# UWAGA

Ta wersja obecnie nie działa, ponieważ Allegro teraz ładuje aukcje na stronie w JavaScript. Mój skrypt został napisany w PHP i polegał na odczytywaniu informacji z drzewa DOM pliku HTML - jako że te informacje o aukcjach są teraz niedostępne w PHP, skrypt ich nie odczyta. Projekt zostawiam do wglądu jako archiwum. Zapraszam na stronę nowszej wersji skryptu napisanej w Node.js (JavaScript) - https://github.com/MK-PL/AllegroRSS

# Allegro RSS
Allegro RSS jest generatorem kanału RSS, który w porównaniu do standardowego generatora Allegro.pl, pozwala również na spersonalizowanie wszystkich parametrów wyszukiwania.

Jak zainstalować?
-
Skopiuj pliki na serwer obsługujący PHP w wersji >= 5.3 i otwórz w przeglądarce adres http://ADRES_SERWERA/index.html

Jak stworzyć kanał RSS?
-
1. Wejdź w wybraną przez Ciebie kategorię na stronie allegro.pl i ustaw parametry wyszukiwania.
![alt tag](https://raw.githubusercontent.com/MK-PL/AllegroRSS/master/img/img1.png)
2. Przekopiuj link z pola adresu WWW przeglądarki, w którym będą umieszczone parametry wyszukiwania.
![alt tag](https://raw.githubusercontent.com/MK-PL/AllegroRSS/master/img/img2.png)
3. Wprowadź adres do wskazanego pola na stronie internetowej skryptu i naciśnij przycisk "Generuj".
![alt tag](https://raw.githubusercontent.com/MK-PL/AllegroRSS/master/img/img3.png)
4. Zostanie wygenerowany kanał RSS z aukcjami o podanych parametrach wyszukiwaniach, jak w podanym adresie do serwisie Allegro.
![alt tag](https://raw.githubusercontent.com/MK-PL/AllegroRSS/master/img/img4.png)

Co zostało użyte do zrobienia Allegro RSS?
-
- HTML/CSS/PHP
- FeedWriter (https://github.com/mibe/FeedWriter)
- PHP Simple HTML DOM Parser (http://simplehtmldom.sourceforge.net)

Autor
-
Maciej Kawa

kontakt [at] maciejkawa.lubin.pl
