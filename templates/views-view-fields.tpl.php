<?php

foreach ($fields as $id => $field) {
    if (isset($field->separator)) {
        print $field->separator;
    }

    print $field->content;
}
