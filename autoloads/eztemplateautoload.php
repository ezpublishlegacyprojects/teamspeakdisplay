<?php

// Operator autoloading

$eZTemplateOperatorArray = array();

$eZTemplateOperatorArray[] =
  array( 'script' => 'extension/teamspeakdisplay/autoloads/teamspeakdisplay.php',
         'class' => 'teamspeakDisplayClass',
         'operator_names' => array( 'TeamspeakUTF8Output', 'displayTeamspeakEx' ) );

?>