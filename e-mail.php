<?php
function valid_email($emil)
    {
        $result = trim($emil);
        if (filter_var($result, FILTER_VALIDATE_EMAIL))
        {
            return "true";
        }
            else
            {
                echo "false";
            }
}            
echo valid_email("gustav@paxva.se")."\n";
echo valid_email("gustav#paxva.se")."\n";
?>