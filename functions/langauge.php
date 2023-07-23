<?php
// language.php
$defaultLanguage = 'english'; // Set a default language
$selectedLanguage = $defaultLanguage;

if (isset($_SESSION['language'])) {
    $selectedLanguage = $_SESSION['language'];
} elseif (isset($_COOKIE['language'])) {
    $selectedLanguage = $_COOKIE['language'];
}

// Load the language file
$languageFile = 'translations/' . $selectedLanguage . '.php';
$translations = include($languageFile);

// Function to translate a given key, and return english as fallback
function translate($key) {

    // global $translations;
    // return isset($translations[$key]) ? $translations[$key] : $key;

    global $translations;
    $englishTranslations = include('translations/english.php');


    if (isset($translations[$key])) {
        return $translations[$key];
    } elseif (isset($englishTranslations[$key])) {
        return $englishTranslations[$key];
    } else {
        return $key;
    }
}
?>