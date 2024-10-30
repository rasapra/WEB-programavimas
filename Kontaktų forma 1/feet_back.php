<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Galite pridėti kodą, kad išsaugotumėte duomenis į duomenų bazę arba siųstumėte el. laišką.

    // Jei norite, galite naudoti `echo` parodyti žinutę atgal vartotojui, tačiau dažniausiai žinutės siunčiamos per JavaScript.
    echo "Ačiū, $name! Tavo atsiliepimas buvo gautas.";
}
?>