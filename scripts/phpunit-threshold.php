<?php

declare(strict_types=1);

// make sure we have all three arguments
if ($argc != 3) {
    echo "Usage: " . $argv[0] . " <path/to/index.xml> <threshold>";
    exit(-1);
}

$file = $argv[1];
$threshold = (double) $argv[2];

$coverage = simplexml_load_file($file);
$ratio = (double) ($coverage->project->metrics["coveredstatements"] / $coverage->project->metrics["statements"] * 100);

echo sprintf('Line coverage: %s%%', $ratio);
echo sprintf('Threshold: %s%%', $threshold);

if ($ratio < $threshold) {
    echo "FAILED!";
    exit(-1);
}

echo "SUCCESS!";
