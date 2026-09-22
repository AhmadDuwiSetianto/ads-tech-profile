<?php

// Tampilkan semua error fatal PHP ke layar browser
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Vercel Serverless Function entry point for Laravel
require __DIR__ . '/../public/index.php';