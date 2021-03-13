<?php
   function findloc(int $val)
   {
       if($val==0)
       return 'SELECT * FROM places';
       elseif($val==1)
       return 'SELECT * FROM places WHERE location="south" ';
       elseif($val==2)
       return 'SELECT * FROM places WHERE location="east"';
       elseif($val==3)
       return 'SELECT * FROM places WHERE location="west"';
       elseif($val==4)
       return 'SELECT * FROM places WHERE location="north"';
       else
       return 'SELECT * FROM places WHERE location="central"';
   }