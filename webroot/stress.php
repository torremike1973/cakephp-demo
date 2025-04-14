<?php
$iterations = 100000;

echo "Running $iterations CPU-intensive operations...\n";

for ($i = 0; $i < $iterations; $i++) {
    sqrt(rand());
}

echo "Done.\n";
http_response_code(200);

