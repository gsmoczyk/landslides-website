<?php
      //  Author:  Tiffany Kalin
      //  Contact:  Jonathan Godt,
      //  Last  modified: 04/07/2016
      if  (!isset($TEMPLATE))  {
      $TITLE  =  'Rainfall Relative to Threshold';
      $NAVIGATION  = true;
      include  'template.inc.php';
      }
?>

<h2>Cumulative Precipitation Threshold</h2>
<p>
<img src="/realtime/plots/cmtrsea.png" alt="Cumulative Precipitation Thresholds for Landslides" /><br />
Graph shows cumulative precipitation threshold for landslides (red line) and most recent update of 3-day and prior 15-day cumulative precipitation at selected National Weather Service Gages (symbols).  Landslides are likely to occur on days when precipitation totals exceed the threshold (plot above or to the right of the red line). Landslides are unlikely to occur when precipitation totals plot below the red line, in the lower left corner of graph.  Please direct questions or comments regarding this information to Rex Baum (<span class="emailaddress">baum [at] usgs [dot] gov</span>).
</p>

<h2>Rainfall Intensity/Duration Threshold</h2>
<p>
<img src="/realtime/plots/idtrsea.png" alt="Rainfall Intensity/Duration Threshold" /><br />
Graph shows rainfall intensity-duration threshold for landslides in the Seattle area (red line) and most recent update of rainfall intensity and duration at selected National Weather Service Rain Gages (Symbols).  Landslides are very likely to occur when rainfall intensity plots above the red line.  Please direct questions or comments regarding this information to Rex Baum (<span class="emailaddress">baum [at] usgs [dot] gov</span>).
</p>

<h2>Antecedent Wetness Index (AWI)</h2>
<p>
<img src="/realtime/plots/awi.png" alt="Rainfall Intensity/Duration Threshold" /><br />
Graph shows the Antecedent Wetness Index (AWI) for landslides in the Seattle area for the last four days at selected National Weather Service Rain Gages (colored lines). The AWI uses a water-balance approach to estimate whether soil is likely to be wet enough for landslides to occur as a result of additional, intense rainfall.  Landslides are very likely to occur when the index plots above the black line and intense rainfall occurs (see graph for the rainfall intensity-duration threshold, above). Please direct questions or comments regarding this information to Rex Baum (<span class="emailaddress">baum [at] usgs [dot] gov</span>) or Jonathan Godt (<span class="emailaddress">jgodt [at] usgs [dot] gov</span>).
</p>
            
