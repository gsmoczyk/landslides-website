<?php
  // Author: Lisa Wald
  // Contact: Dennis Staley,
  // Last modified: 07/27/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = '2016 San Gabriel Complex Fire - Angeles National Forest, CA';
      $NAVIGATION = true;
      $HEAD = '
          <link rel="stylesheet" href="/lib/leaflet-v0.7.7/leaflet.css"/>        <link rel="stylesheet" href="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.css"/>
          <link rel="stylesheet" href="index.css"/>
      ';
      $FOOT = '
        <script src="/lib/leaflet-v0.7.7/leaflet.js"></script>
        <script src="/lib/hazdev-leaflet-v0.1.2/hazdev-leaflet.js"></script>
        <script src="/lib/hazdev-webutils-v0.1.8/hazdev-webutils.js"></script>
        <script src="index.js"></script>
    ';
      include 'template.inc.php';
    }
?>

<div class="row">
  <div class="column one-of-two">
    <div class="alert">
  		<dl>
  			<dt>Date of origin:</dt>
  			<dd>June 20, 2016</dd>

  			<dt>Location:</dt>
  			<dd>34.20,-117.88</dd>

  			<dt>Total Area Burned:</dt>
  			<dd>21 km&#178;</dd>
  		</dl>
    </div>
	</div>
  <div class="column one-of-two">
  	<h2>Downloads</h2>
  	<p>
      Below are the shapefiles and geodatabase information that was used in the creation of the maps on this page.
    </p>
  	<ul>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2016/20160620sangabriel/PostFireDebrisFlowEstimates.zip">Geodatabase (.gdb)</a> (2.2MB Zip)</li>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2016/20160620sangabriel/Shapefiles.zip">Shapefile (.shp)</a> (1.2MB Zip)</li>
      <li><a href="ftp://ftpext.cr.usgs.gov/pub/cr/co/golden/hazards/web/postfire/PostFireDFEstimates_READMEmod2016.pdf">README (PDF)</a></li>
  	</ul>
  </div>
</div>

	<h2>Preliminary Hazard Assessment</h2>
	<div id="map"></div>
	<img alt="legend" id="layer_legend"
		src="/hazards/postfire_debrisflow/data/Probability_Legend_Basins.png"/>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/hazards/postfire_debrisflow/belowmaptext24.include";
?>
