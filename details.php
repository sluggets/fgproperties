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
    $address = $listing_array[$i]->address;
    $beds = $listing_array[$i]->beds;
    $baths = $listing_array[$i]->baths;
    $extra = $listing_array[$i]->extra;
    $aptNum = $listing_array[$i]->aptNumber;
    $path = $listing_array[$i]->photoPath;
?>
    <div id="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h2 class="panel-title">
              <?php echo $address; ?>
              <span id="apt"><?php if ($aptNum){echo 'APT ' . $aptNum;} ?></span>
            </h2>
          </div>
          <div class="panel-heading">
            <h4>
              <span class="stats">
                Beds: <?php echo $beds; ?>
              </span>
              <span class="stats">
                Baths: <?php echo $baths; ?>
              </span>
              <span class="stats">
                <?php if($extra){ echo 'Additional: ' . $extra;} ?>
              </span>
            </h4>
          </div>
          <div class="panel-body">
          </div>
          <div class="panel-footer">
            <h4>Map goes here</h4>
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
