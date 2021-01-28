<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class append_class
    {
        function append($bean, $event, $arguments)
        {
					$append = '(this is appended)';

        	if(!strstr($bean->last_name, $append))
					{
					$bean->last_name .= $append;
					}

				}
    }

?>
