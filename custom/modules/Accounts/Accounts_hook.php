<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class append_class
    {
        function append($bean, $event, $arguments)
        {
            $contacts = $bean->get_contacts();

            if(count($contacts) > 0)
            {
              foreach ($contacts as $contact)
              {
                $append = '(this is related)';
                if(!strstr($contact->last_name, $append))
                  {
                    $query_append = $contact->last_name . $append;

                    $query = "UPDATE contacts SET last_name = '{$query_append}' WHERE id = '{$contact->id}'";
                    $contact->db->query($query, true);
                }
              }
           }
 				}
    }

?>
