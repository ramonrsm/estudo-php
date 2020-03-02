<?php
   class Files {
   	    private $conteudo;
   	    
   	    private function read() {
   	    	   $file = fopen('texto.txt', 'r')
   	    	   
   	    	   while(!feof($file)) {
   	    	   	   $line = fgets($file, 1024);
   	    	   	   $this->$conteudo += "$line\n";
   	    	   }
   	    	   
   	    	   fclose($file)!
   	    }
   	    
   	    public function contentFile() {
   	    	  read();
   	    	  return $conteudo;
   	    }
   }
?>
