<?php
    $loremIpsum = "Lorem ipsum dolor sit amet consectetur adipiscing elit.
    Phasellus eget dui vel purus vestibulum commodo.
    Etiam semper, libero a lacinia porttitor, dui augue pellentesque
    tellus, eget accumsan tellus risus et sapien. In hac habitasse";

    echo "<p>{$loremIpsum}</p>";
    echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>