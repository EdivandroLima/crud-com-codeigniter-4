<?php

function pr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function pr_exit($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    exit;
}
