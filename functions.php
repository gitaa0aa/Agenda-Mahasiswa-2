<?php
session_start();

if (!isset($_SESSION['agendas'])) {
    $_SESSION['agendas'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agenda'])) {
    $_SESSION['agendas'][] = $_POST['agenda'];
}

function getAgendas() {
    return $_SESSION['agendas'];
}