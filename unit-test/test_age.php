<?php
// File: test_name.php
require_once "Validator.php";

// Test Case 1: Nama valid (nama lengkap Anda)
try {
    $result = validateName(name: "Ridho");
    echo "PASS: Nama 'Ridho' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Ridho' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 2: Nama tidak valid (mengandung angka)
try {
    $result = validateName("Ridho123");
    echo "PASS: Nama 'Ridho123' diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama 'Ridho123' tidak diterima. Error: " . $e->getMessage() . "<br>";
}

// Test Case 3: Nama kosong
try {
    $result = validateName("");
    echo "PASS: Nama kosong diterima<br>";
} catch (Exception $e) {
    echo "FAIL: Nama kosong tidak diterima. Error: " . $e->getMessage() . "<br>";
}