<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $note = $_POST["note"];
    $folder = $_POST["folder"];

    if (!empty($note)) {
        $file = fopen("notes.txt", "a");
        fwrite($file, "$note - $folder" . PHP_EOL);
        fclose($file);
    }
}

if (file_exists("notes.txt")) {
    $notes = file("notes.txt");
    foreach ($notes as $note) {
        list($note_text, $folder) = explode(" - ", $note);
        echo "<li>Nota: $note_text<br>Pasta: $folder</li>";
    }
}
if (file_exists("notes.txt")) {
    $notes = file("notes.txt");
    foreach ($notes as $note) {
        $values = explode(" - ", $note);
        if (count($values) === 2) {
            list($note_text, $folder) = $values;
            echo "<li>Nota: $note_text<br>Pasta: $folder</li>";
        }
    }
}

?>
