# Protectie-SQLi
Cea mai simpla si rapida metoda de protectie impotriva ‘SQL Injection’

Recent am avut o problema cu „SQL Injection” si am decis sa prezint modalitatea de rezolvare pe care am ales sa o utilizez eu.

Fiind un script destul de vechi, si cu multe fisiere si foarte multe linii de cod, a trebuit sa gasesc o modalitate mai simpla de rezolvare pentru a evita modificarea fiecarei linii ce contine o secventa de cod sql.

Avand in vedere ca singurele cai de injectare SQL erau variabilele $_POST si $_GET am decis sa folosesc cea mai simpla metoda, prin simpla adaugare a acestui cod PHP(N.R. protectie.php) la inceputul tuturor fisierelor cu secvente de cod sql.
