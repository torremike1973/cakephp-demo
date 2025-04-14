<?php
$seconds = isset($_GET['seconds']) ? (int)$_GET['seconds'] : 60;

echo "Stressing CPU for $seconds seconds...\n";

// Funzione che fa calcoli infiniti
$end = time() + $seconds;

while (time() < $end) {
    for ($i = 0; $i < 1000000; $i++) {
        // Esegui operazioni pesanti per la CPU
        sqrt(rand());
    }
    usleep(10000); // Piccola pausa per non bloccare il server completamente
}

echo "CPU stress test completed.\n";
