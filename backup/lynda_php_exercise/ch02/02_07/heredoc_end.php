<?php

$title = "The Hitchhiker's Guide to the Galaxy";
$author = 'Douglas Adams';
$android = 'Marvin';
$brain_size = 'the size of a planet';

$heredoc = <<< EOT
In "$title" by $author, $android the "paranoid android" complains that he's asked to do menial tasks, even though he's got "a brain $brain_size."
EOT;

echo $heredoc;