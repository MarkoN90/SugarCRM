<?php
    array_push($job_strings, 'log_to_file');

    function log_to_file()
    {

      $file_name = 'sugarcrm.log';
      if(file_exists($file_name))
        {
          $fp = fopen($file_name, 'a');
          fwrite($fp, "I'm a ScheduledTask \n");
          fclose($fp);
          return true;
        }

    }
