<?php
// make sure we have all three arguments 
if ($argc != 3) {
    echo "Usage: " . $argv[0] . " <coverage.xml> <threshold>";
    exit(-1);
}

$file = $argv[1];
$threshold = (double) $argv[2];

$coverage = simplexml_load_file($file);
$ratio = (double) ($coverage->project->metrics["coveredstatements"] / $coverage->project->metrics["statements"] * 100);

echo "Line coverage: $ratio%", PHP_EOL;
echo "Threshold: $threshold%", PHP_EOL;

if ($ratio < $threshold) {
    echo "FAILED!", PHP_EOL;
    exit(-1);
}
echo "SUCCESS!", PHP_EOL;