<?php

		include 'Back_End/simple_html_dom.php';
		include 'Back_End/config.php';
		
         $ch = curl_init();
         curl_setopt($ch,CURLOPT_URL,"https://www.cricketcountry.com/moments-in-history");
         curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
         curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
         $response = curl_exec($ch);
         $html = new simple_html_dom();
         $html->load($response);
		 
		  $list = $html->find('aside[class="bday col-sm-12 col-md-6"]')[0]->plaintext;
		  $list2 = $html->find('aside[class="death col-sm-12 col-md-6"]')[0]->plaintext;
		  $list3 = $html->find('aside[class="mom-lest-l col-sm-12 col-md-6 col-lg-2"]');
		  $list4 = $html->find('div[class="mom-hover cur"]');
		  $bday = str_replace('&nbsp;', '',$list);
		  $d_anni = str_replace('&nbsp;', '',$list2);
		  $bday2 = str_replace('Birthdays', '',$bday);
		  $d_anni2 = str_replace('Death Anniversaries', '',$d_anni);
		  
		  
		  
		  for($i=0;$i<sizeof($list3);$i++)
		  {
			   
			  $ev = $list3[$i]->plaintext.$html->find('h2')[$i]->plaintext;
			  
			  $sql = "INSERT INTO history(Events,Birthday,D_anni)VALUES('$ev','$bday2','$d_anni2')";
			  $result = $db->query($sql);
			  
		  }
		  
		
			
		
        
			   
              
		   
		
		  
          
          
		  
		  
          
		     
		   
  
        
	  
         
        
		 
		
         
        

       
	   
	  
				   
			    
	   
			
	     
			
			
	




















?>