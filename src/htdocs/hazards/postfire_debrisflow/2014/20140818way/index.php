<?php
  // Author: Lisa Wald
  // Contact: Dennis Staley,
  // Last modified: 07/25/2016, Lisa Wald
    if (!isset($TEMPLATE)) {
      $TITLE = '2014 Way Fire - Kern County, California';
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
    		<dd>August 18, 2014</dd>

    		<dt>Location:</dt>
    		<dd>35.726, -118.479</dd>

    		<dt>Total Area Burned:</dt>
    		<dd>16.4 km&#178;</dd>
    	</dl>
    </div>
	</div>
  <div class="column one-of-two">
  	<h2>Downloads</h2>
  	<p>Below are the shapefiles and geodatabase information that was used in the creation of the maps on this page. </p>
  	<ul>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2014/20140818way/PostFireDebrisFlowEstimates.gdb.zip">Geodatabase (.gdb)</a> (1.0MB Zip)</li>
  		<li><a href="ftp://hazards.cr.usgs.gov/web/postfire/2014/20140818way/Shapefiles.zip">Shapefile (.shp)</a> (873kB Zip)</li>
      <li><a href="ftp://ftpext.cr.usgs.gov/pub/cr/co/golden/hazards/web/postfire/PostFireDFEstimates_READMEmod2010.pdf">README (PDF)</a></li>
    </ul>
  </div>

</div>

	<h2>Preliminary Hazard Assessment</h2>
	<div id="map"></div>
	<img alt="legend" id="layer_legend"
		src="/hazards/postfire_debrisflow/data/Probability_Legend_Basins.png" />

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/hazards/postfire_debrisflow/belowmaptext2010.include";
?>
