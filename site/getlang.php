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

    if ($lang=="")
    {
        $lang = !empty($_SERVER["HTTP_ACCEPT_CHARSET"]) ? $_SERVER["HTTP_ACCEPT_CHARSET"] : "";

        if (strpos($lang,"windows-1251")!==FALSE) // тут надо именно !==
            $lang="ru";
        else if (strpos($lang,"iso-8859-5")!==FALSE)
            $lang="ru";
        else if (strpos($lang,"ibm866")!==FALSE)
            $lang="ru";
        else if (strpos($lang,"koi8-r")!==FALSE)
            $lang="ru";
        else if (strpos($lang,"mac")!==FALSE)
            $lang="ru";
        else
            $lang="en";
    }
    else
    {
        if (strpos($lang,"ru")!==FALSE)
            $lang="ru";
        else
            $lang="en";
    }

    return $lang;
}
?>
