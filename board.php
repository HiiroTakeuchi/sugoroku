
<?php
class Board{
    public $square = "";


  function open(){

    $f = fopen("board.csv", "r");
    
    while($line = fgetcsv($f)){
  
      
    
   $this->square =$line;
        
     
    }
  
    fclose($f);
    
    return $this->square;
  }

}
?>