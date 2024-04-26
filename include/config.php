<?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'portfolio';

    // veritabanı bağlantısı yaptım
    $conn = mysqli_connect($servername,$username,$password,$dbname);

    // users tablosu için
    $sql = "SELECT * FROM users WHERE id = 1";
    $users_result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($users_result);

    // details tablosu için
    $sql = "SELECT * FROM details WHERE id = 1";
    $details_result = mysqli_query($conn,$sql);
    $data_details = mysqli_fetch_assoc($details_result);

    // skills tablosu için
    $sql = "SELECT * FROM skills";
    $skills_result = mysqli_query($conn, $sql);
    $data_skills = mysqli_fetch_assoc($skills_result);

    // Interests tablosu icin
    $sql = "SELECT * FROM interests";
    $interests_result = mysqli_query($conn, $sql);
    $data_interests = mysqli_fetch_assoc($interests_result);

    // services tablosu icin
    $sql = "SELECT * FROM services";
    $services_result = mysqli_query($conn, $sql);
    $services_data = mysqli_fetch_assoc($services_result);

    // contact tablosu icin
    $sql = "SELECT * FROM contact";
    $contact_result = mysqli_query($conn, $sql);
    $contact_data = mysqli_fetch_assoc($contact_result);
?>