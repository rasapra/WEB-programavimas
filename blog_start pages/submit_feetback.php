<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    // Čia galite pridėti kodą, kad išsaugotumėte duomenis į duomenų bazę arba siųstumėte el. laišką

    echo "Ačiū, $name! Jūsų atsiliepimas buvo gautas.";
}
?>