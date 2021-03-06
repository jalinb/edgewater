<?php

$this->execPieceByName('ff_InitLib');

// Get Form Info
if(isset($_POST['validation'])){
	ff_setValue('validation', $_POST['validation']);
}
if(isset($_POST['model'])){
	ff_setValue('model', $_POST['model']);
}
if(isset($_POST['order_id'])){
	ff_setValue('order_id', $_POST['order_id']);
}

// Get Customer Contact Info
if(isset($_POST['first_name'])){
	ff_setValue('first_name', $_POST['first_name']);
}
if(isset($_POST['last_name'])){
	ff_setValue('last_name', $_POST['last_name']);
}
if(isset($_POST['email'])){
	ff_setValue('email', $_POST['email']);
}
if(isset($_POST['phone'])){
	ff_setValue('phone', $_POST['phone']);
}
if(isset($_POST['address'])){
	ff_setValue('address', $_POST['address']);
}
if(isset($_POST['apartment'])){
	ff_setValue('apartment', $_POST['apartment']);
}
if(isset($_POST['city'])){
	ff_setValue('city', $_POST['city']);
}
if(isset($_POST['state'])){
	ff_setValue('state', $_POST['state']);
}
if(isset($_POST['post_code'])){
	ff_setValue('post_code', $_POST['post_code']);
}
if(isset($_POST['country'])){
	ff_setValue('country', $_POST['country']);
}

// Get Customer Extras
if(isset($_POST['email_pdf'])){
	ff_setValue('email_pdf', $_POST['email_pdf']);
}
if(isset($_POST['email_dealer'])){
	ff_setValue('email_dealer', $_POST['email_dealer']);
}
if(isset($_POST['mail_catalog'])){
	ff_setValue('catalog', $_POST['mail_catalog']);
}
if(isset($_POST['area'])){
	ff_setValue('area', $_POST['area']);
}
if(isset($_POST['referred_by'])){
	ff_setValue('referred_by', $_POST['referred_by']);
}
if(isset($_POST['comments'])){
	ff_setValue('comments', $_POST['comments']);
}

// Get Boat Options
if(isset($_POST['Color'])){
	ff_setValue('color', $_POST['Color']);
}
if(isset($_POST['Cushion_Color'])){
	ff_setValue('cushion_color', $_POST['Cushion_Color']);
}
if(isset($_POST['Engine'])){
	ff_setValue('engine', $_POST['Engine']);
}
if(isset($_POST['Rubrail'])){
	ff_setValue('rubrail', $_POST['Rubrail']);
}
if(isset($_POST['Steering_System'])){
	ff_setValue('steering_system', $_POST['Steering_System']);
}
if(isset($_POST['Seating'])){
	ff_setValue('seating', $_POST['Seating']);
}
if(isset($_POST['Bow_Rail'])){
	ff_setValue('bow_rail', $_POST['Bow_Rail']);
}
if(isset($_POST['Toe_Rail'])){
	ff_setValue('toe_rail', $_POST['Toe_Rail']);
}
if(isset($_POST['Top'])){
	ff_setValue('top', $_POST['Top']);
}
if(isset($_POST['Hardtop_Lights'])){
	ff_setValue('hardtop_lights', $_POST['Hardtop_Lights']);
}
if(isset($_POST['Outrigger'])){
	ff_setValue('outrigger', $_POST['Outrigger']);
}
if(isset($_POST['Enclosure'])){
	ff_setValue('enclosure', $_POST['Enclosure']);
}
if(isset($_POST['Painted_Engine'])){
	ff_setValue('painted_engine', $_POST['Painted_Engine']);
}

//Get Boat Extras
if(isset($_POST['garmin_0'])){
	ff_setValue('garmin_0', $_POST['garmin_0']);
}
if(isset($_POST['garmin_1'])){
	ff_setValue('garmin_1', $_POST['garmin_1']);
}
if(isset($_POST['garmin_2'])){
	ff_setValue('garmin_2', $_POST['garmin_2']);
}
if(isset($_POST['garmin_3'])){
	ff_setValue('garmin_3', $_POST['garmin_3']);
}
if(isset($_POST['garmin_4'])){
	ff_setValue('garmin_4', $_POST['garmin_4']);
}
if(isset($_POST['garmin_5'])){
	ff_setValue('garmin_5', $_POST['garmin_5']);
}
if(isset($_POST['garmin_6'])){
	ff_setValue('garmin_6', $_POST['garmin_6']);
}
if(isset($_POST['garmin_7'])){
	ff_setValue('garmin_7', $_POST['garmin_7']);
}
if(isset($_POST['garmin_8'])){
	ff_setValue('garmin_8', $_POST['garmin_8']);
}
if(isset($_POST['garmin_9'])){
	ff_setValue('garmin_9', $_POST['garmin_9']);
}
if(isset($_POST['garmin_10'])){
	ff_setValue('garmin_10', $_POST['garmin_10']);
}
if(isset($_POST['garmin_11'])){
	ff_setValue('garmin_11', $_POST['garmin_11']);
}
if(isset($_POST['garmin_12'])){
	ff_setValue('garmin_12', $_POST['garmin_12']);
}
if(isset($_POST['garmin_13'])){
	ff_setValue('garmin_13', $_POST['garmin_13']);
}
if(isset($_POST['garmin_14'])){
	ff_setValue('garmin_14', $_POST['garmin_14']);
}
if(isset($_POST['garmin_15'])){
	ff_setValue('garmin_15', $_POST['garmin_15']);
}
if(isset($_POST['garmin_16'])){
	ff_setValue('garmin_16', $_POST['garmin_16']);
}
if(isset($_POST['garmin_17'])){
	ff_setValue('garmin_17', $_POST['garmin_17']);
}
if(isset($_POST['transducer_0'])){
	ff_setValue('transducers_0', $_POST['transducer_0']);
}
if(isset($_POST['transducer_1'])){
	ff_setValue('transducers_1', $_POST['transducer_1']);
}
if(isset($_POST['transducer_2'])){
	ff_setValue('transducers_2', $_POST['transducer_2']);
}
if(isset($_POST['getoptions_0'])){
	ff_setValue('getoptions_0', $_POST['getoptions_0']);
}
if(isset($_POST['getoptions_1'])){
	ff_setValue('getoptions_1', $_POST['getoptions_1']);
}
if(isset($_POST['getoptions_2'])){
	ff_setValue('getoptions_2', $_POST['getoptions_2']);
}
if(isset($_POST['getoptions_3'])){
	ff_setValue('getoptions_3', $_POST['getoptions_3']);
}
if(isset($_POST['getoptions_4'])){
	ff_setValue('getoptions_4', $_POST['getoptions_4']);
}
if(isset($_POST['getoptions_5'])){
	ff_setValue('getoptions_5', $_POST['getoptions_5']);
}
if(isset($_POST['getoptions_6'])){
	ff_setValue('getoptions_6', $_POST['getoptions_6']);
}
if(isset($_POST['getoptions_7'])){
	ff_setValue('getoptions_7', $_POST['getoptions_7']);
}
if(isset($_POST['getoptions_8'])){
	ff_setValue('getoptions_8', $_POST['getoptions_8']);
}
if(isset($_POST['getoptions_9'])){
	ff_setValue('getoptions_9', $_POST['getoptions_9']);
}
if(isset($_POST['getoptions_10'])){
	ff_setValue('getoptions_10', $_POST['getoptions_10']);
}

// Skip JS auto submit if first name is empty and forward to home page.
if(empty($_POST['first_name'])) {
    header("Location: http://www.ewboats.com");
    exit;
}

?>