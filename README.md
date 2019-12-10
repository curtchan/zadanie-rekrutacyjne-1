## Cel zadania
Stworzenie prostego klienta do [API NBP](http://api.nbp.pl/)

## Przed rozpoczęciem
Stwórz sobie projekt lokalnie, najlepiej przy pomocy `Git bash` (Windows):
* pobierz projekt `git clone https://github.com/curtchan/zadanie-rekrutacyjne-1.git`
* przejdź do projektu `cd zadanie-rekrutacyjne-1`
* zainstaluj projekt `composer install`

## Kroki
### Stwórz klasę Klienta API
* Możesz skorzystać z bibliotek gotowych do komunikacji z serwerami zewnętrznymi (`guzzle`, `symfony/http-client`), 
metod `curl` lub nawet `file_get_contents`
* Pełna dowolność, bierz pod uwagę że będę patrzyć pod kątem tego jak wygląda klasa, jaki poziom abstrakcji w niej przyjąłeś, jakość kodu i sposób rozwiązania problemów
* Stworzona klasa powinna implemetnować `App/Interfaces/ClientInterface`

### Stwórz klasę 'Managera' do API
* Stworzona klasa powinna implemetnować `App/Interfaces/ManagerInterface`

### W pliku index.php
1. wyświetl tabelę z kursami walut `EUR` w miesiącu `2019-11`; kolumny: `dzień`, `kurs zakupu`, `kurs sprzedaży`
2. wyświetl średni kurs za ostatni dzień miesiąca `2019-08`
3. Stwórz prosty formularz z wyborem dnia i waluty, metoda GET, po przesłaniu formularza niech obok wyświetli się kurs 
lub informacja o braku kursu w danym dniu
