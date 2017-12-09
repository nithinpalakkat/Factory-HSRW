<?php

// lang.phpfunction get_lang($file)

{

    // The default lang

    $user_lang = 'english';

// Lets see if the user clicked on a language

    if (isset($_GET['lang']) && !empty($_GET['lang']))

    {

        $user_lang = $_GET['lang'];

    }

// Include a language file

    include 'lang_' . basename($user_lang) . '.php';

// Get the data from the HTML

    $html = file_get_contents($file);

// Create an empty array for the language variables

    $vars = array();

// Scroll through each variable

    foreach($lang as $key => $value)

    {

        // Turn 'THIS' to '{THIS}'

        $vars['{' . $key . '}'] = $value;

    }

// Finally convert the strings

    $html = strtr($html, $vars);

// Return the data

    return $html;

}

?>