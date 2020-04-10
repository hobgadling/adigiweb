<?php
function printBoard($board) {
    foreach($board as $row){
        foreach($row as $cell){
            echo '<div class="cell weight' . $cell . '">' . $cell . '</div>';
        }
        echo "<div class='clear'></div>";
    }
}

$pid = file_get_contents('/tmp/adigi.proc.txt');
posix_kill($pid,10); //SIGUSR1
if(posix_get_last_error() == 0){
    $board = unserialize(file_get_contents('/tmp/' . $pid . '.txt'));
    printBoard($board);
} else {
    die(posix_strerror(posix_get_last_error()) . '');
}
