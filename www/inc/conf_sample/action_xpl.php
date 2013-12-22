<?php
/*

PLEASE READ the /phpMyDomo/doc/howto/actions.md for more informations

## Description  ----------------------------------------------------------------------------------
This action send an xPL message on the Network


## Requirements  ----------------------------------------------------------------------------------
This Action requires to have at least on xPL Hub on the network to receives, and re-direct xPL Messages
http://xplproject.org.uk


## Fields  ---------------------------------------------------------------------------------------
- 'type'		=> (mandatory) 'xp'
- 'xtype' 		=> (required) xPL message *Type*: xpl-cmnd | xpl-stat | xpl-trig
- 'xsource' 	=> (required,) xPL message *Instance_id* part of xpl source field (max 16 chars):  Change this to differentiate sources.
- 'xtarget' 	=> (required) xPL message *Target*.
- 'xschema' 	=> (required) xPL message *Schema*.
- 'xbody' 		=> (required) xPL message *Body*.
- 'custom'		=> (optionnal) replaces "{custom}" in the  body field

for xPL messages format, please refer to:
http://xplproject.org.uk/wiki/index.php?title=XPL_Specification_Document


## Some URLS examples ----------------------------------------------------------------------------
/action?type=xpl&preset=ring_door  

*/

// ##############################################################################
// Global Configuration  #######################################################
// ##############################################################################

//$action['globals']['url']	="";
$action['globals']['xtype']		='xpl-trig';
$action['globals']['xsource']	='phpmydomo';
$action['globals']['xtarget']	='*';
$action['globals']['xschema']	='alarm.basic';
$action['globals']['xbody']		="";


// ##############################################################################
// Presets  #####################################################################
// ##############################################################################

// Make your own preset like this:
//$action['presets']['PRESET_NAME']['FIELD']="your value here";

//examples ---------------------
$action['presets']['ring_door']['xsource']	='door1';
$action['presets']['ring_door']['xtarget']	='xpl-server.main';
$action['presets']['ring_door']['xschema']	='x10.basic';
$action['presets']['ring_door']['xbody']	="sensor=PIR
status=ON
tripcnt=3
";

?>