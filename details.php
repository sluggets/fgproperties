<?php include 'header.php'; ?>
  <div id="clear-footer">
  <div class="container-fluid">
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

  $listing_len = count($listing_array);

  for ($i = 0; $i < $listing_len; $i++)
  {
?>
    <div id="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              <?php echo $listing_array[$i]->address; ?>
              <span id="apt">APT <?php echo $listing_array[$i]->aptNumber; ?></span>
            </h2>
          </div>
          <div class="panel-body">
          </div>
        </div>
      </div>
    </div>
<?php
  }
?>
  </div>
  </div>

<?php include 'footer.php' ?>
