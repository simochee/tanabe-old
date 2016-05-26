<?php

$start = datetime();
echo "s:$start";

for($i=0; $i<10000; $i++);

$end = datetime();
echo "e:$end";

echo "*** Time : " . ($end-$start) . "\n";