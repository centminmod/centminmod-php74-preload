<?php

declare(strict_types=1);

$preload_patterns = [
    "bench.php",
    "micro_bench.php",
    "detailed_benchmark.php",
];

foreach ($preload_patterns as $pattern) {
    $files = glob($pattern);

    foreach ($files as $file) {
        opcache_compile_file($file);
    }
}