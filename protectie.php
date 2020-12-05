foreach ($_POST as $cheie => $valoare) {
 $valoare = str_replace('"', "&#x22;", $valoare);
 $valoare = str_replace("'", "&#x27;", $valoare);
 $_POST[$cheie] = $valoare;
}
foreach ($_GET as $cheie => $valoare) {
 $valoare = str_replace('"', "&#x22;", $valoare);
 $valoare = str_replace("'", "&#x27;", $valoare);
 $_GET[$cheie] = $valoare;
}
