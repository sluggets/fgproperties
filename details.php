<?php
  //echo 'Hello ' . $_POST["property"];
  $property = $_POST["property"];

  class Listing
  {
    var $address; 
    var $beds;
    var $baths;
    var $extra;
    var $aptNumber;
    var $photoPath;
    var $description;
    var $ords;
    function add_item($add, $bed, $bath, $ex, $apt, $path, $ord)
    {
      $this->address = $add;
      $this->beds = $bed;
      $this->baths = $bath;
      $this->extra = $ex;
      $this->aptNumber = $apt;
      $this->photoPath = $path;
    }
  }

  include $property . '-descriptions.php';

  var_dump($listing_array[0]->address);

?>

<?php include 'header.php' ?>
<p><?php echo $description?></p>
<p><?php if ($extra) echo $extra ?></p>



<?php include 'footer.php' ?>
