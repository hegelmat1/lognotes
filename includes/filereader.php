<?php

$proc=new XsltProcessor;  
//pass xsl path here
$proc->importStylesheet(DOMDocument::load("includes/filereader.xsl"));  
//pass file path to the function that display the HTML lognote.
//echo $proc->transformToXML(DOMDocument::load("includes/myfirstfls.fls")); 


//Thsi function returns the Folder 
function navigateFolder($path){
          static $scanned = array();
		  try{
                //check if folder exists
                if(file_exists($path)){
				 //echo "The folder exists";
				 $dir = scandir($path,1);
                foreach ($dir as $obj) {
                    if(strlen($obj) > 2){
                      if(is_dir($path.$obj)){
                         //directory
                         $scanned = indir($path.$obj.'/');
					     echo $obj.count($scanned);
						
						
                      } else {
                         //file
					     //obj is the courtroom 
					     //cname = date/courtoom
					     //id will be passed through the GET methody
					     $id = $path."/".$obj."/";
					     echo "<br>";
					     echo "<a href='showlognotes.php?ID=".getFLS($id)."'?>". $obj."</a>";
						 //echo getFLS($id);
						 
                      }
                    }
                }
				}
				else{
					echo "No lognotes could be found <br>";
				}
				//scan the directory
                
		    }catch(Exception $e){
				     // echo 'Message:'.$e->getMessage();
			}
}  

//This function returns the fls file.
function getFLS($path){
	      static $scanned = array();
		  try{
                //check if folder exists
                if(file_exists($path)){
				 //echo "The file exists <br>";
				 $dir = scandir($path,1);
                foreach ($dir as $obj) {
                    if(strlen($obj) > 2){
                      if(is_dir($path.$obj)){
                      //directory
                      $scanned = is_dir($path.$obj.'/');
                    } else {
                      //file
					  //return files/yyyyddmm/file.fls
					  return $path.$obj;
                      }
                    }
                }
				}
				else{
					echo "Sorry, Lognotes file could not be found. <br>";
				}
				//scan the directory
                
		    }catch(Exception $e){
				     // echo 'Message:'.$e->getMessage();
			}
	
}

?>