<?php

$title && print $title;

print '<ul class="list">';

foreach ($rows as $id => $row) {
    print '<li>' . $row . '</li>';
}

print '</ul>';
