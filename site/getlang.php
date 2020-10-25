<?php

extract($_SERVER);
extract($_REQUEST);


function GetClientLang()
{
    global $_SERVER;
    global $_REQUEST;


    if (!empty($_REQUEST["l"]))
    {
    	if ($_REQUEST["l"]=="en")
      	  return "en";
    	else if ($_REQUEST["l"]=="ru")
        	return "ru";
    }

    $lang = !empty($_SERVER["HTTP_ACCEPT_LANGUAGE"]) ? $_SERVER["HTTP_ACCEPT_LANGUAGE"] : "";

    return stristr($lang,"ru") ? "ru" : "en";
}
?>
