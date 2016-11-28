<?php
   /**
    * A class with common and advance functionality to make custom development faster ;)
    *
    * @package AP_Common
    * @author S.M.A Sayem Prodhan Ananta
    * @version 0.1
    **/
   class AP_Common
   {
         
         function time_ago($time="")
         {
               /*
               * $time must be in 2016-11-28T18:12:29+01:00 or 2016-11-28 or a standard date/time format
               */
               $in=strtotime($time);
               $now=time();
               if($in>=$now)
               {
                     die('The supplied time is greater than current time.');
               }
               $out=$now-$in;
               $_out=$out/3600;
               if(($_out/24)>=365)
               {
                     $retval = round(($_out/24)/365);
                     $retval .= ($_out/24)/365>1?" years":" year";
                     $retval .= " ago.";
                     return $retval;
               }
               else if($_out>=24)
               {
                     $retval = round($_out/24);
                     $retval .= $_out/24>1?" days":" day";
                     $retval .= " ago.";
                     return $retval;
               }
               else if($out>3600)
               {
                     $retval = round($out/3600);
                     $retval .= $out/3600>1?" hours":" hour";
                     $retval .= " ago.";
                     return $retval;
               }
               else if($out>60)
               {
                     $retval = round($out/60);
                     if(preg_match('/-/i',$retval))
                     {
                           return str_replace('-','',$retval);
                     }
                     $retval .= $out/24>1?" minutes":" minute";
                     $retval .= " ago.";
                     return $retval;
               }
               else if($out<60)
               {
                     $retval = "Just now.";
                     return $retval;
               }
         }//end time_ago()
   } // END class AP_Common
   
 
   
?>
