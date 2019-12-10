## Cel zadania
Stworzenie prostego klienta do [API NBP](http://api.nbp.pl/)

## Kroki
### Stwórz klasę Klienta API
* Możesz skorzystać z bibliotek gotowych do komunikacji z serwerami zewnętrznymi (`guzzle`, `symfony/http-client`), 
metod `curl` lub nawet `file_get_contents`
* Pełna dowolność, bierz pod uwagę że będę patrzyć pod kątem tego jak wygląda klasa, jaki poziom abstrakcji w niej przyjąłeś, jakość kodu i sposób rozwiązania problemów
* Powinna implementować klasę `App/Interfaces/ClientInterface`

### Stwórz klasę 'Managera' do API
* Powinna implementować klasę `App/Interfaces/ManagerInterface`

### W pliku index.php
1. wyświetl tabelę z kursami walut `EUR` w miesiącu `2019-11`; kolumny: `dzień`, `kurs zakupu`, `kurs sprzedaży`
2. wyświetl średni kurs za ostatni dzień miesiąca `2019-08`
3. Stwórz prosty formularz z wyborem dnia i waluty, metoda GET, po przesłaniu formularza niech obok wyświetli się kurs 
lub informacja o braku kursu w danym dniu
