<?php
$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$catalog = '';
$address = '';
$apartment = '';
$city = '';
$state = '';
$post_code = '';
$country = '';
$date = '';
$area = '';
$referred_by = '';
$comments = '';
$color = '';
$casting_platform = '';
$cushion_color = '';
$engine = '';
$rubrail = '';
$steering_system = '';
$steering_wheel = '';
$seating = '';
$port_seat = '';
$trolling_motor = '';
$bow_cushion = '';
$cockpit_cover = '';
$top = '';
$ski_pylon = '';
$trailer = '';
$painted_engine = '';
$windlass = '';
$garmin_0 = '';
$garmin_1 = '';
$garmin_2 = '';
$garmin_3 = '';
$garmin_4 = '';
$garmin_5 = '';
$garmin_6 = '';
$garmin_7 = '';
$garmin_8 = '';
$garmin_9 = '';
$garmin_9 = '';
$garmin_10 = '';
$garmin_11 = '';
$garmin_12 = '';
$transducers_0 = '';
$transducers_1 = '';
$transducers_2 = '';
$getoptions_0 = '';
$getoptions_1 = '';
$getoptions_2 = '';
$getoptions_3 = '';
$getoptions_4 = '';
$getoptions_5 = '';
$getoptions_6 = '';
$getoptions_7 = '';

if (count($xmldata)){ 
   foreach ($xmldata as $data) {
      $value = nl2br(htmlentities(substr(is_array($data[_FF_DATA_VALUE]) ? implode('|',$data[_FF_DATA_VALUE]) : $data[_FF_DATA_VALUE],0,10000), ENT_QUOTES, 'UTF-8'));
	  /* IF VALUE IS EMPTY CHANGE TO STANDARD */
	  //if (!$value || $value == "") { $value = "Standard"; }
      switch($data[_FF_DATA_NAME]){
        case 'first_name':
          $first_name = $value;
          break;
		case 'last_name':
          $last_name = $value;
          break;
		case 'email':
          $email = $value;
          break;
		case 'phone':
          $phone = $value;
          break;
		case 'catalog':
          $catalog = $value;
          break;
		case 'address':
          $address = $value;
          break;
		case 'apartment':
          $apartment = $value;
          break;
		case 'city':
          $city = $value;
          break;
		case 'state':
          $state = $value;
          break;
    case 'post_code':
          $post_code = $value;
          break;
		case 'country':
          $country = $value;
          break;
    case 'date':
          $date = $value;
          break;
    case 'area':
          $area = $value;
          break;
    case 'referred_by':
          $referred_by = $value;
          break;
    case 'comments':
          $comments = $value;
          break;
		case 'color':
          $color = $value;
          break;
    case 'casting_platform':
          $casting_platform = $value;
          break;
    case 'cushion_color':
          $cushion_color = $value;
          break;
    case 'engine':
          $engine = $value;
          break;
    case 'seating':
          $seating = $value;
          break;
    case 'rubrail':
          $rubrail = $value;
          break;
    case 'steering_system':
          $steering_system = $value;
          break;
    case 'steering_wheel':
          $steering_wheel = $value;
          break;
    case 'port_seat':
          $port_seat = $value;
          break;
    case 'trolling_motor':
          $trolling_motor = $value;
          break;
    case 'bow_cushion':
          $bow_cushion = $value;
          break;
    case 'cockpit_cover':
          $cockpit_cover = $value;
          break;
    case 'top':
          $top = $value;
          break;
    case 'ski_pylon':
          $ski_pylon = $value;
          break;
    case 'trailer':
          $trailer = $value;
          break;
    case 'painted_engine':
          $painted_engine = $value;
          break;
    case 'windlass':
          $windlass = $value;
          break;
    case 'garmin_0':
          $garmin_0 = $value;
          break;
    case 'garmin_0':
          $garmin_0 = $value;
          break;
    case 'garmin_1':
          $garmin_1 = $value;
          break;
    case 'garmin_2':
          $garmin_2 = $value;
          break;
    case 'garmin_3':
          $garmin_3 = $value;
          break;
    case 'garmin_4':
          $garmin_4 = $value;
          break;
    case 'garmin_5':
          $garmin_5 = $value;
          break;
    case 'garmin_6':
          $garmin_6 = $value;
          break;
    case 'garmin_7':
          $garmin_7 = $value;
          break;
    case 'garmin_8':
          $garmin_8 = $value;
          break;
    case 'garmin_9':
          $garmin_9 = $value;
          break;
    case 'garmin_10':
          $garmin_10 = $value;
          break;
    case 'garmin_11':
          $garmin_11 = $value;
          break;
    case 'garmin_12':
          $garmin_12 = $value;
          break;
    case 'transducers_0':
          $transducers_0 = $value;
          break;
    case 'transducers_1':
          $transducers_1 = $value;
          break;
    case 'transducers_2':
          $transducers_2 = $value;
          break;
    case 'getoptions_0':
          $getoptions_0 = $value;
          break;
    case 'getoptions_1':
          $getoptions_1 = $value;
          break;
    case 'getoptions_2':
          $getoptions_2 = $value;
          break;
    case 'getoptions_3':
          $getoptions_3 = $value;
          break;
    case 'getoptions_4':
          $getoptions_4 = $value;
          break;
    case 'getoptions_5':
          $getoptions_5 = $value;
          break;
    case 'getoptions_6':
          $getoptions_6 = $value;
          break;
    case 'getoptions_7':
          $getoptions_7 = $value;
          break;
      }
    }
}


/* REPLACE BOAT IMAGE DEPENDING ON COLOR */
if (stripos($color, "cabernet") !== false) { 
 $img_file = "220is-cabernet.jpg"; 
} elseif (stripos($color, "fighting") !== false) { 
 $img_file = "220is-fighting-lady-yellow.jpg"; 
} elseif (stripos($color, "ice") !== false) { 
 $img_file = "220is-ice-blue.jpg"; 
} elseif (stripos($color, "midnight") !== false) { 
 $img_file = "220is-midnight-blue.jpg";
} elseif (stripos($color, "olive") !== false) { 
 $img_file = "220is-olive-green.jpg";
} elseif (stripos($color, "pewter") !== false) { 
 $img_file = "220is-pewter.jpg";
} elseif (stripos($color, "seafoam") !== false) { 
 $img_file = "220is-sea-foam-green.jpg";
} elseif (stripos($color, "barth") !== false) { 
 $img_file = "220is-st-barths-blue.jpg";
} elseif (stripos($color, "stars") !== false) { 
 $img_file = "220is-stars-stripes-blue.jpg";
} elseif (stripos($color, "irish") !== false) { 
 $img_file = "220is-irish-cream.jpg";
} else { 
 $img_file = "220is-standard-white.jpg"; 
}


/* CONVERT NAME TO UPPERCASE */
$first_name = strtoupper($first_name);
$last_name = strtoupper($last_name);
 


?>




<!-- HTML STARTS HERE! -->
<table cellspacing="4" align="center">
<tr>
  <td><img src="templates/edgewaterboats/images/pdf-logo.jpg" height="79px" width="250px"/></td>
</tr>
<tr>
<!-- "img_file" REPLACES BOAT IMAGE DEPENDING ON "color" title -->
  <td><img src="images/220is/pdf/<?php echo $img_file; ?>" width="450px" height="266px"/></td>
</tr>
<tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="14">MY EDGEWATER 220IS Inshore V-Hull<br />
  BUILT FOR: <?php echo $first_name; ?> <?php echo $last_name; ?> ON <?php echo $date; ?></font></strong></td>
</tr>
<tr>
  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="12"><?php echo $address; ?> <?php echo $apartment; ?> <?php echo $city; ?>, <?php echo $state; ?> <?php echo $post_code; ?> <?php echo $country; ?><br />
  PHONE: <?php echo $phone; ?> EMAIL: <?php echo $email; ?></font></td>
</tr>
</table>

<font size="8"><br /></font>

<table>
<tr>
 <td width="40%">
  <table width="98%" bgcolor="#004E8E" cellpadding="33px"><!-- PADDING SHOULD BE 20 -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="20">EWBOATS.COM    <!-- (TXT SIZE SHOULD BE 36) $<?php echo $amount; ?> --></font></strong></td>
  </tr>
  </table>
 </td>
<td width="60%" bgcolor="#dcdddf">
<font size="4"><br /></font>
	<table width="97%" align="center" cellpadding="14px">
	<tr>
  <td width="44%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">LENGTH: <strong>22' | 6.7m</strong><br />
  BEAM: <strong>8'6" | 2.6m</strong><br />
  DRAFT: <strong>13" | 33cm</strong><br />
  MAX POWER: <strong>250hp | 190kw</strong></font></td>
  <td width="56%" align="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">WEIGHT: <strong>2500lbs | 1134kg</strong><br />
  FUEL CAPACITY: <strong>60gal | 227L</strong><br />
  COCKPIT AREA: <strong>67sq.ft. | 6.22m2</strong><br />
  TRANSFORM HEIGHT: <strong>S-21.5"</strong></font></td>
    </tr>
   </table>
 </td> 
</tr>
</table>
<!-- PRICE SUBJECT TO CHANGE AND BASE PRICE
<font size="2"><br /></font>
<table>
<tr>
<td width="70%" alight="left"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="8">PRICE AS BUILT: Subject to Change Depending on Dealer Fees, Freight, Options, Etc.</font></td>
<td width="30%" align="right"><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="9">$<?php echo $pdf_base_price; ?></strong></font></td>
</tr>
</table>

<font size="3"><br /></font> -->

<font size="7"><br /></font> <!-- REMOVE ONCE PRICING IS ADDED -->

<table>
<tr>
<td width="48%" valign="top">
   <table cellpadding="5px">
	<tr>
	<!-- OPTIONS SELECTED BY USER -->
    <td bgcolor="#004E8E"><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="14">&nbsp;My Options</font></strong></td>
	</tr>
	</table>
	
	<table>
	<tr>
	<!-- COLORS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">COLORS</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      HULL SIDE: <?php echo $color; ?>
    </font></td>
	</tr>
	<tr>
	<!-- ENGINES -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ENGINES</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($engine)) {echo $engine . '<br />';} ?>
      <?php echo $painted_engine; ?>
    </font></td>
	</tr>
  <tr>
  <!-- STEERING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">STEERING</font></strong></td>
  </tr>
  <tr>
    <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($steering_system)) {echo $steering_system . '<br />';} ?>
      <?php echo $steering_wheel; ?>
    </font></td>
  </tr>
  <tr>
	<!-- TOPS AND COVERS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">TOPS AND COVERS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($top)) {echo $top . '<br />';} ?>
      <?php if (!empty($cockpit_cover)) {echo $cockpit_cover . '<br />';} ?>
    </font></td>
	</tr>
	<tr>
	<!-- RUBRAIL -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">RUBRAIL</font></strong></td>
	</tr>
	<tr>
	  <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php echo $rubrail; ?>
    </font></td>
	</tr>
	<tr>
  <!-- SEATING -->
    <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING</font></strong></td>
  </tr>
  <tr>
     <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($seating)) {echo $seating . '<br />';} ?>
      <?php if (!empty($port_seat)) {echo $port_seat . '<br />';} ?>
      <?php if (!empty($bow_cushion)) {echo $bow_cushion . '<br />';} ?>
      <?php echo $cushion_color; ?>
    </font></td>
  </tr>
  <tr>
	<!-- ELECTRONICS -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRONICS</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($garmin_0)) {echo $garmin_0 . '<br />';} ?>
      <?php if (!empty($garmin_1)) {echo $garmin_1 . '<br />';} ?>
      <?php if (!empty($garmin_2)) {echo $garmin_2 . '<br />';} ?>
      <?php if (!empty($garmin_3)) {echo $garmin_3 . '<br />';} ?>
      <?php if (!empty($garmin_4)) {echo $garmin_4 . '<br />';} ?>
      <?php if (!empty($garmin_5)) {echo $garmin_5 . '<br />';} ?>
      <?php if (!empty($garmin_6)) {echo $garmin_6 . '<br />';} ?>
      <?php if (!empty($garmin_7)) {echo $garmin_7 . '<br />';} ?>
      <?php if (!empty($garmin_8)) {echo $garmin_8 . '<br />';} ?>
      <?php if (!empty($garmin_9)) {echo $garmin_9 . '<br />';} ?>
      <?php if (!empty($garmin_10)) {echo $garmin_10 . '<br />';} ?>
      <?php if (!empty($garmin_11)) {echo $garmin_11 . '<br />';} ?>
      <?php if (!empty($garmin_12)) {echo $garmin_12 . '<br />';} ?>
      <?php if (!empty($transducers_0)) {echo $transducers_0 . '<br />';} ?>
      <?php if (!empty($transducers_1)) {echo $transducers_1 . '<br />';} ?>
      <?php echo $transducers_2; ?>
    </font></td>
	</tr>
	<tr>
	<!-- ACCESSORIES -->
	  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ACCESSORIES</font></strong></td>
	</tr>
	<tr>
	   <td><font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">
      <?php if (!empty($getoptions_0)) {echo $getoptions_0 . '<br />';} ?>
      <?php if (!empty($getoptions_1)) {echo $getoptions_1 . '<br />';} ?>
      <?php if (!empty($getoptions_2)) {echo $getoptions_2 . '<br />';} ?>
      <?php if (!empty($getoptions_3)) {echo $getoptions_3 . '<br />';} ?>
      <?php if (!empty($getoptions_4)) {echo $getoptions_4 . '<br />';} ?>
      <?php if (!empty($getoptions_5)) {echo $getoptions_5 . '<br />';} ?>
      <?php if (!empty($getoptions_6)) {echo $getoptions_6 . '<br />';} ?>
      <?php if (!empty($getoptions_7)) {echo $getoptions_7 . '<br />';} ?>
      <?php if (!empty($casting_platform)) {echo $casting_platform . '<br />';} ?>
      <?php if (!empty($windlass)) {echo $windlass . '<br />';} ?>
      <?php echo $trolling_motor; ?>
    </font></td>
	</tr>
    </table>  
</td>

<td width="2%"></td>

<td width="2%" valign="top" align="center">
<table width="1px" bgcolor="#dcdddf">
<tr><td><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></td></tr>
</table>
</td>

<td width="48%" valign="top">
   <table cellpadding="5px">
  <tr>
  <!-- STANDARD FEATURES -->
    <td bgcolor="#004E8E"><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="14">&nbsp;Standard Features</font></strong></td>
  </tr>
  </table>
  
  <table>
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSTRUCTION</font></strong><br />
  
  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Single Piece Infusion (SPI) Structural System<br />
Limited Lifetime Structural Hull Warranty<br />
NMMA, ABYC & CE Certified<br />
Self Bailing Non-Skid Decks<br />
NO WOOD All Composite Construction<br />
Closed-Cell Foam Flotation<br />
Variable Deadrise Hull<br />
High Density Composite Transom</font></td>
  </tr>

  <!-- HARDWARE -->  
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">HARDWARE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Stainless Steel Bow and Stern Eyes (3)<br />
Stainless Steel Gunwale Mounted Rod Holders (2)<br />
Flush Pull-up Stainless Steel Cleats (4)<br />
Electric Engine Jack Plate (10" setback) w/Position Indicator & Ladder<br />
Fire Extinguishers (2)</font></td>
  </tr>

  <!-- CONSOLE & TOPS -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">CONSOLE AND TOP</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">3/8" Clear Acrylic Windshield<br />
Removable Console Door w/ Storage Pockets<br />
Console Switch Panel w/ Waterproof Switches,Circuit breakers & 12V Outlet<br />
Ritchie Compass<br />
Raw Water Washdown Outlet<br />
12 Gallon Console Baitwell<br />
Tackle Box, 3 Tray, Center Console<br />
Stainless Steel Drink Holders on Console (2)</font></td>
  </tr>
  
  <!-- ELECTRICAL SYSTEM -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">ELECTRICAL SYSTEM</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">LED Cockpit/Livewell Lighting<br />
LED Navigation Lights<br />
1250 GPH Auto/Manual Bilge Pump<br />
Waterproof Electrical Connectors & Tin Plated Copper Wiring<br />
Battery Switch Panel w/ Main Selector & Trolling Motor Switches<br />
Lenco® Electric Trim Tabs w/ Indicators</font></td>
  </tr>

  <!-- SEATING / STORAGE -->
  <tr>
  <td><strong><font face="Verdana, Arial, Helvetica, sans-serif" color="#004E8E" size="14">SEATING / STORAGE</font></strong><br />

  <font face="Verdana, Arial, Helvetica, sans-serif" color="#000000" size="10">Heavy-Duty Marine Grade UV Resistant Vinyl Upholstery<br />
Forward Console Seat w/ Backrest<br />
Bow Storage Locker<br />
Aft Casting Deck w/ Non-Skid Surface<br />
Port Forward Rod Box<br />
Starboard Aft Storage Locker<br />
Bow Anchor Locker w/ Overboard Drain<br />
35 Gallon Aft Center Baitwell<br />
Port Aft Fishbox</font></td>
    </tr>

  </table>
  </td>
</tr>
</table>