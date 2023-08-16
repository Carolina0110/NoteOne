<?php
if (file_exists("notes.txt")) {
    $notes = file("notes.txt");
    foreach ($notes as $note) {
        list($note_text, $folder) = explode(" - ", $note);
        echo "<li>Nota: $note_text<br>Pasta: $folder</li>";
    }
}
?>
