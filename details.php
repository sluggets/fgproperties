<?php // details.php
      // displays details of properties selected on index.php
  include 'header.php'; 
?>
  <div id="clear-footer">
  <div class="container-fluid">
<?php
  // receives property selection from index
  $property = $_POST["property"];

  // defines class for unit objects
  class Listing
  {
    var $address; 
    var $beds;
    var $baths;

    // any extra misc. info point about unit
    var $extra;

    var $aptNumber;

    // path to photos used for photo gallery
    var $photoPath;

    var $description;

    // geographical coordinates of unit
    var $ords;

    // method to add all the data to new object
    function add_item($add, $bed, $bath, $ex, $apt, $path, $ord)
    {
      $this->address = $add;
      $this->beds = $bed;
      $this->baths = $bath;
      $this->extra = $ex;
      $this->aptNumber = $apt;
      $this->photoPath = $path;
      $this->ords = $ord;
    }
  }

  // includes appropriate file for property selection
  // made on index.php
  include $property . '-descriptions.php';

  
  $listing_len = count($listing_array);
  $lat = $listing_array[0]->ords[0];
  $lon = $listing_array[0]->ords[1];
?>
    <script type="text/javascript">
      var lat = "<?php echo $lat ?>";
      var lon = "<?php echo $lon ?>";
    </script>
    <div id="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <div id="mapid">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  // loop through and builds detail box for each unit
  for ($i = 0; $i < $listing_len; $i++)
  {
    $address = $listing_array[$i]->address;
    $beds = $listing_array[$i]->beds;
    $baths = $listing_array[$i]->baths;
    $extra = $listing_array[$i]->extra;
    $aptNum = $listing_array[$i]->aptNumber;
    $path = $listing_array[$i]->photoPath;
    $description = $listing_array[$i]->description;
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
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path . 'fl01.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path . 'th01.jpg' ?>>
                </a>
              </div>
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path . 'fl02.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path . 'th02.jpg' ?>>
                </a>
              </div>
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path . 'fl03.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path. 'th03.jpg' ?>>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path. 'fl04.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path. 'th04.jpg' ?>>
                </a>
              </div>
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path. 'fl05.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path. 'th05.jpg' ?>>
                </a>
              </div>
              <div class="col-xs-12 col-md-4">
                <a href= <?php echo $path. 'fl06.jpg' ?> class="thumbnail" data-lightbox="slide">
                  <img src= <?php echo $path. 'th06.jpg' ?>>
                </a>
              </div>
            </div>
            <p class="description"> <?php echo $description; ?> </p>
          </div>
        </div>
      </div>
    </div>
<?php
  }
?>

<?php include 'footer.php' ?>
