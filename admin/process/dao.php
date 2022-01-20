<?php
// error_reporting(0);

$root_dir = "/home/u201-ha2zv0prnbpt/www/liastaging.com/public_html/sks/admin/";

error_reporting(E_ALL & ~E_NOTICE);

function wh_log($log_msg) {
	$log_filename ="logs";
	if (!file_exists($log_filename)) {
		// create directory/folder uploads.
		// mkdir($log_filename, 0777, true);
	}
	$log_file_data = $log_filename.'/con_error.log';
	file_put_contents($log_file_data, $log_msg . "\n", FILE_APPEND);
}

function checkLogin($username,$password) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$obj = 0;
	$query = "call check_login('$username','$password')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	
	if ($row = mysqli_fetch_array($result)) {
		$obj = $row['id'];
	}
	
	mysqli_close($conn);
	return($obj);
}
// echo checkLogin('admin','admin');

function listUsers() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_users()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"uname" => $row['uname'],
"uemail" => $row['uemail'],
"urole" => $row['urole'],
"created_by" => $row['created_by'],
"ustatus" => $row['ustatus']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}
// echo json_encode(listUsers());
function getUserDetailsById($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();
$query = "call get_user_details_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"uname" => $row['uname'],
"email" => $row['uemail'],
"role" => $row['urole'],
"createdBy" => $row['created_by']); 
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}
// echo json_encode(getUserDetailsById(1));

function changeUserStatus($id,$status) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_user_status('$id','$status')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function insertUsers($uname,$uemail,$upassword,$user_level,$created_by,$created_on) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call insert_users('$uname','$uemail','$upassword','$user_level','$created_by','$created_on');";
// echo $sql;
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}
// echo insertUsers('as','as','sas','1','1','01-06-2020');

function updateUsers($id,$uName,$uEmail,$user_level,$updated_on) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call update_user('$id','$uName','$uEmail','$user_level','$updated_on')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listPermission() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_permissions()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"permission" => $row['permission']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function updateRolesAndPermission($id,$role,$permission) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call update_role_and_permission('$id','$role','$permission');";
// echo $sql;
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listUserRoles() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_user_roles()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"role" => $row['role'],
"role_permissions" => $row['role_permissions'],
"created_by" => $row['created_by'],
"created_on" => $row['created_on']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function getRoleDetailsByRoleId($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();
$query = "call get_role_details_based_on_role_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"role" => $row['role'],
"role_permissions" => $row['role_permissions'],
"created_by" => $row['created_by'],
"created_on" => $row['created_on']); 
$outputarray = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function insertArticles($document_name,$created_by,$created_on) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call insert_articles('$document_name','$created_by','$created_on')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listArticles() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_articles()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"document_name" => $row['document_name'],
"created_by" => $row['created_by'],
"status" => $row['status']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listArticlesById($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();
$query = "call list_articles_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"document_name" => $row['document_name'],
"created_by" => $row['created_by'],
"status" => $row['status']); 
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function updateArticles($id,$document_name,$updated_on) {
global $root_dir; include $root_dir.'helpers/config.php';
$sql = "call update_articles('$id','$document_name','$updated_on')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function changeArticleStatus($id,$status) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_article_status('$id','$status')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listDrivers() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_drivers()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"uname" => $row['uname'],
"user_img" => $row['user_img'],
"dob" => $row['dob'],
"contact_no" => $row['contact_no'],
"city" => $row['city'],
"status" => $row['status'],
"online_status" => $row['online_status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function changeDriverStatus($id,$status) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_driver_status('$id','$status')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listFleetOwner() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_fleet_owner()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"full_name" => $row['full_name'],
"dob" => $row['dob'],
"contact_no" => $row['contact_no'],
"relationship" => $row['relationship'],
"aadhaar_no" => $row['aadhaar_no'],
"aadhaar_img" => $row['aadhaar_img'],
"pancard_no" => $row['pancard_no'],
"pancard_img" => $row['pancard_img'],
"no_of_vehicle_owned" => $row['no_of_vehicle_owned'],
"status" => $row['status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listFleeOwner() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_flee_owner()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"full_name" => $row['full_name'],
"dob" => $row['dob'],
"contact_no" => $row['contact_no'],
"relationship" => $row['relationship'],
"aadhaar_no" => $row['aadhaar_no'],
"aadhaar_img" => $row['aadhaar_img'],
"pancard_no" => $row['pancard_no'],
"pancard_img" => $row['pancard_img'],
"no_of_vehicle_owned" => $row['no_of_vehicle_owned'],
"status" => $row['status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listFleetOwnerbyId($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_fleet_owner_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"full_name" => $row['full_name'],
"dob" => $row['dob'],
"contact_no" => $row['contact_no'],
"relationship" => $row['relationship'],
"aadhaar_no" => $row['aadhaar_no'],
"aadhaar_img" => $row['aadhaar_img'],
"pancard_no" => $row['pancard_no'],
"pancard_img" => $row['pancard_img'],
"no_of_vehicle_owned" => $row['no_of_vehicle_owned'],
"status" => $row['status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listfleetVehicleDetail() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_fleet_vehicle_det()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"user_id" => $row['user_id'],
"vehicle_type" => $row['vehicle_type'],
"vehicle_make" => $row['vehicle_make'],
"reg_no" => $row['reg_no'],
"permit_type" => $row['permit_type'],
"reg_certificate_img" => $row['reg_certificate_img'],
"insurance_exp_date" => $row['insurance_exp_date'],
"insurance_img" => $row['insurance_img'],
"fc_exp_date" => $row['fc_exp_date'],
"fc_img" => $row['fc_img'],
"vstatus" => $row['vstatus'],
"vehicle_status" => $row['vehicle_status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function changeFleetOwnerStatus($id,$status) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_fleet_owner_status('$id','$status')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function listVehicleDetail($id='') {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();


if($id<>""){
	$query = "call list_vehicle_detail('$id')";
}else{
	$query = "call list_vehicle_details()";
}
 


$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"user_id" => $row['user_id'],
"vehicle_type" => $row['vehicle_type'],
"vehicle_make" => $row['vehicle_make'],
"reg_no" => $row['reg_no'],
"permit_type" => $row['permit_type'],
"reg_certificate_img" => $row['reg_certificate_img'],
"insurance_exp_date" => $row['insurance_exp_date'],
"insurance_img" => $row['insurance_img'],
"fc_exp_date" => $row['fc_exp_date'],
"fc_img" => $row['fc_img'],
"vstatus" => $row['vstatus'],
"vehicle_status" => $row['vehicle_status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function insertVtype($typename) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call insert_vehicletype('$typename')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}


function listVtype() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_vtype()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"vehicle_type" => $row['vehicle_type'],
"vstatus" => $row['vstatus'] 
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listVtypeById($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();
$query = "call list_vtype_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"vehicle_type" => $row['vehicle_type']); 
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function updateVtype($id,$vtype) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call update_vtype('$id','$vtype')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

 function insertVmake($makename) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call insert_vehiclemake('$makename')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}


function listVmake() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_vmake()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"vehicles_make" => $row['vehicles_make'],
"vstatus" => $row['vstatus'] 
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listVmakeById($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();
$query = "call list_vmake_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"vehicle_make" => $row['vehicles_make']); 
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function updateVmake($id,$vmake) {
global $root_dir; include $root_dir.'helpers/config.php';


$sql = "call update_vmake('$id','$vmake')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}


function listPermitTypes() {
global $root_dir; include $root_dir.'helpers/config.php';
$outputarray = array();

$query = "call list_permit_type()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"state_name" => $row['state_name']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function insertVehicleDetails($user_id,$vehicle_type,$vehicle_make,$reg_no,$permit_type,$reg_certificate_img,$insurance_exp_date,$insurance_img,$fc_exp_date,$fc_img,$vstatus) {
    global $root_dir; include $root_dir.'helpers/config.php';
    $sql = "call insert_vehicle_detail('$user_id','$vehicle_type','$vehicle_make','$reg_no','$permit_type','$reg_certificate_img','$insurance_exp_date','$insurance_img','$fc_exp_date','$fc_img','$vstatus')";

      // echo  $sql ;
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    mysqli_close($conn);
    return($result);
}


function updateVehicleDetails($id,$vehicleType,$vehicleMake,$regNo,$permitType,$regCertificateImg,$insurexpDate,$insurImg,$fc_exp_date,$fcImg,$vstatus) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call    update_tech_vehicle_detail('$id','$vehicleType','$vehicleMake','$regNo','$permitType','$regCertificateImg','$insurexpDate','$insurImg','$fc_exp_date','$fcImg','$vstatus')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}



function getDefaultowner() {
global $root_dir; include $root_dir.'helpers/config.php';
 $ownerid = "" ;

$query = "select id from fleet_owner where edit_access = 'Y'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$ownerid = $row['id'] ;
 
}

mysqli_close($conn);
return($ownerid);
}

function getVehicleDetailById($id) {
global $root_dir; include $root_dir.'helpers/config.php';
$outputarray = array();

$query = "call get_vehicles_detail_byid('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
    "user_id" => $row['user_id'],

"vehicle_type" => $row['vehicle_type'],
"vehicle_make" => $row['vehicle_make'],
"reg_no" => $row['reg_no'],
"permit_type" => $row['permit_type'],
"reg_certificate_img" => $row['reg_certificate_img'],
"insurance_exp_date" => $row['insurance_exp_date'],
"insurance_img" => $row['insurance_img'],
"fc_exp_date" => $row['fc_exp_date'],
"fc_img" => $row['fc_img'],
"vstatus" => $row['vstatus'],
"vehicle_status" => $row['vehicle_status']);
$outputarray[] = $obj;
}

 mysqli_close($conn);
return($outputarray);
}

function insertMovement($job_order_no, $intend_date,$movement_date,$billingparty,$consignee,$created_by,$created_on) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call insert_movement('$intend_date', '$movement_date', '$billingparty', '$consignee', 'A', '$created_by', '$created_on', '$job_order_no');";
	// echo $sql;
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return($result);
}

function listMovements() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_movements()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"intend_date" => $row['intend_date'],
"movement_date" => $row['movement_date'],
"billing_party" => $row['billing_party'],
"consignee" => $row['consignee'],
"status" => $row['status']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listMovementById($id) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$outputarray = array();
	$query = "call list_movement_by_id('$id')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	// id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
	while ($row = mysqli_fetch_array($result)) {
		$obj = array(
			"id" => $row['id'],
			"job_order_no" => $row['job_order_no'],
			"intend_date" => $row['intend_date'],
			"movement_date" => $row['movement_date'],
			"billing_party" => $row['billing_party'],
			"consignee" => $row['consignee'],
			"status" => $row['status']
		);
		$outputarray[] = $obj;
	}
	mysqli_close($conn);
	return($outputarray);
}

function updateMovement($id, $job_order_no, $intend_date, $movement_date, $billingparty, $consignee) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call update_movement('$id', '$intend_date', '$movement_date', '$billingparty', '$consignee', '$job_order_no')";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return($result);
}

function changeMovementStatus($id,$status) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call change_movement_status('$id','$status')";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return($result);
}

function insertNewtrip($movement_id, $job_no, $material,$trip_from,$from_city,$trip_to,$to_city,$container_no,$transporter_type,$transport_name,$vehicle_no,$vehicle_type,$driver_name,$gc_no,$be_no_date,$gate_in_date,$gate_out_date,$ex_haltdays,$plot_in_date,$plot_out_date,$ed_haltdays,$pod_details,$pod_submit_date,$pod_submit_person,$hire_memo_no,$hire_amt,$cash_adv,$diesel_amt,$total_adv,$halting_others,$balance_to_pay,$paymenttype,$paymentstatus,$d_advance,$driver_salary,$cleaner_bata,$expenses,$d_balance,$total_trip_value,$dpaymenttype,$dpaymentstatus) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call insert_newtrip('$movement_id','$material','$trip_from','$from_city','$trip_to','$to_city','$container_no','$transporter_type','$transport_name','$vehicle_no','$vehicle_type','$driver_name','$gc_no','$be_no_date','$gate_in_date','$gate_out_date','$ex_haltdays','$plot_in_date','$plot_out_date','$ed_haltdays','$pod_details','$pod_submit_date','$pod_submit_person','$hire_memo_no','$hire_amt','$cash_adv','$diesel_amt','$total_adv','$halting_others','$balance_to_pay','$paymenttype','$paymentstatus','$d_advance','$driver_salary','$cleaner_bata','$expenses','$d_balance','$total_trip_value','$dpaymenttype','$dpaymentstatus', '$job_no');";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	mysqli_close($conn);
	return($result );
}

function listTrips($mid) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$outputarray = array();
	$query = "call list_trips('$mid')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while ($row = mysqli_fetch_array($result)) {
		$obj = array(
			"id" => $row['id'],
			"movement_id" => $row['movement_id'],
			"material" => $row['material'], 
			"trip_from" => $row['trip_from'],
			"from_city" => $row['from_city'],
			"trip_to" => $row['trip_to'],
			"to_city" => $row['to_city'],
			"container_no" => $row['container_no'],
			"transporter_type" => $row['transporter_type'],
			"driver_name" => $row['driver_name'],
			"transport_name" => $row['full_name'],
			"vehicle_no" => $row['reg_no'],
			"gc_no" => $row['gc_no'],
			"be_no_date" => $row['be_no_date'],
			"gate_in_date" => $row['gate_in_date'],
			"gate_out_date" => $row['gate_out_date'],
			"ex_haltdays" => $row['ex_haltdays'],
			"plot_in_date" => $row['plot_in_date'],
			"plot_out_date" => $row['plot_out_date'],
			"ed_haltdays" => $row['ed_haltdays'],
			"pod_details" => $row['pod_details'],
			"pod_submit_person" => $row['pod_submit_person'],
			"pod_submit_date" => $row['pod_submit_date'],
			"hire_memo_no" => $row['hire_memo_no'] ,
			"intend_date" => $row['intend_date'],
			"movement_date" => $row['movement_date'],
			"billing_party" => $row['billing_party'],
			"consignee" => $row['consignee'],
			"status" => $row['status'],
			"d_status" => $row['d_status'],
			"t_status" => $row['t_status']
		);
		$outputarray[] = $obj;
	}
	mysqli_close($conn);
	return($outputarray);
}

function insertHiredet($movement_id,$trip_id,$driver_name,$transporter_name,$vehicle_no,$trip_no,$transporter_invoice_no,$hire_amt,$cash_adv,$bunk_invoice_no,$bunk_name,$ltrs,$diesel_amt,$total_adv,$halting_others,$balance_to_pay,$paymenttype,$paymentstatus,$d_advance,$driver_salary,$cleaner_bata,$expenses,$d_balance,$total_trip_value,$dpaymenttype,$dpaymentstatus) {
	global $root_dir; include $root_dir.'helpers/config.php';
	$sql = "call insert_hiredet('$movement_id','$trip_id','$driver_name','$transporter_name','$vehicle_no','$trip_no','$transporter_invoice_no','$hire_amt','$cash_adv','$bunk_invoice_no','$bunk_name','$ltrs','$diesel_amt','$total_adv','$halting_others','$balance_to_pay','$paymenttype','$paymentstatus','$d_advance','$driver_salary','$cleaner_bata','$expenses','$d_balance','$total_trip_value','$dpaymenttype','$dpaymentstatus');";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return($result);
}

function updateHiredet($id,$movement_id,$trip_id,$driver_name,$transporter_name,$vehicle_no,$trip_no,$transporter_invoice_no,$hire_amt,$cash_adv,$bunk_invoice_no,$bunk_name,$ltrs,$diesel_amt,$total_adv,$halting_others,$balance_to_pay,$paymenttype,$paymentstatus,$d_advance,$driver_salary,$cleaner_bata,$expenses,$d_balance,$total_trip_value,$dpaymenttype,$dpaymentstatus) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call update_hiredet('$id','$movement_id','$trip_id','$driver_name','$transporter_name','$vehicle_no','$trip_no','$transporter_invoice_no','$hire_amt','$cash_adv','$bunk_invoice_no','$bunk_name','$ltrs','$diesel_amt','$total_adv','$halting_others','$balance_to_pay','$paymenttype','$paymentstatus','$d_advance','$driver_salary','$cleaner_bata','$expenses','$d_balance','$total_trip_value','$dpaymenttype','$dpaymentstatus');";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return($result);
}

// function checkexistance($table,$field,$value) {
// global $root_dir; include $root_dir.'helpers/config.php';

// $outputarray = array();
// $query = "call check_existance('$table','$field','$value')";
// $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
// // id, uname, uemail, upassword, urole, created_by, ustatus, created_on, updated_on
// while ($row = mysqli_fetch_array($result)) {
// $obj = array("value" => $row['value'],
 
// );
// $outputarray[] = $obj;
// }
// mysqli_close($conn);
// return($outputarray);
// }

function changeVtypeStatus($id,$vstatus) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_vtype_status('$id','$vstatus')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function changeVmakeStatus($id,$vstatus) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_vmake_status('$id','$vstatus')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function getVehiclesByFleetownerId($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call get_vehicles_by_fleetowner_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"full_name" => $row['full_name'],
"dob" => $row['dob'],
"contact_no" => $row['contact_no'],
"relationship" => $row['relationship'],
"aadhaar_no" => $row['aadhaar_no'],
"aadhaar_img" => $row['aadhaar_img'],
"pancard_no" => $row['pancard_no'],
"pancard_img" => $row['pancard_img'],
"no_of_vehicle_owned" => $row['no_of_vehicle_owned'],
"status" => $row['status']);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}



function listAllTrips() {
include "helpers/config.php";

$outputarray = array();

$query = "call list_all_trips()";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"movement_id" => $row['movement_id'],
"material" => $row['material'], 
"trip_from" => $row['trip_from'],
"from_city" => $row['from_city'],
"trip_to" => $row['trip_to'],
"to_city" => $row['to_city'],
"container_no" => $row['container_no'],
"transport_name" => $row['full_name'],
"vehicle_no" => $row['reg_no'],
"gc_no" => $row['gc_no'],
"be_no_date" => $row['be_no_date'],
"gate_in_date" => $row['gate_in_date'],
"gate_out_date" => $row['gate_out_date'],
"ex_haltdays" => $row['ex_haltdays'],
"plot_in_date" => $row['plot_in_date'],
"plot_out_date" => $row['plot_out_date'],
"ed_haltdays" => $row['ed_haltdays'],
"pod_details" => $row['pod_details'],
"pod_submit_person" => $row['pod_submit_person'],
"pod_submit_date" => $row['pod_submit_date'],
"hire_memo_no" => $row['hire_memo_no'] ,
"intend_date" => $row['intend_date'],
"movement_date" => $row['movement_date'],
"billing_party" => $row['billing_party'],
"consignee" => $row['consignee'],
"d_status" => $row['d_status'],
"t_status" => $row['t_status'],
"status" => $row['status']
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function listAllTripsById($id) {
	global $root_dir; include $root_dir.'helpers/config.php';
	$outputarray = array();
	
	$query = "call list_all_trips_by_id('$id')";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	while ($row = mysqli_fetch_array($result)) {
		$obj = array(
			"id" => $row['id'],
			"movement_id" => $row['movement_id'],
			"job_no" => $row['job_no'],
			"material" => $row['material'], 
			"trip_from" => $row['trip_from'],
			"from_city" => $row['from_city'],
			"trip_to" => $row['trip_to'],
			"to_city" => $row['to_city'],
			"container_no" => $row['container_no'],
			"transporter_type" => $row['transporter_type'],
			"vehicle_type" => $row['vehicle_type'],
			"transport_name" => $row['transport_name'],
			"vehicle_no" => $row['vehicle_no'],
			"driver_name" => $row['driver_name'],
			"gc_no" => $row['gc_no'],
			"be_no_date" => $row['be_no_date'],
			"gate_in_date" => $row['gate_in_date'],
			"gate_out_date" => $row['gate_out_date'],
			"ex_halt_days" => $row['ex_halt_days'],
			"plot_in_date" => $row['plot_in_date'],
			"plot_out_date" => $row['plot_out_date'],
			"ed_haltdays" => $row['ed_haltdays'],
			"pod_details" => $row['pod_details'],
			"pod_submit_person" => $row['pod_submit_person'],
			"pod_submit_date" => $row['pod_submit_date'],
			"hire_memo_no" => $row['hire_memo_no'] ,
			"intend_date" => $row['intend_date'],
			"movement_date" => $row['movement_date'],
			"billing_party" => $row['billing_party'],
			"consignee" => $row['consignee'],
			"loaded_vehicle_image" => $row['loaded_vehicle_image'],
			"unloaded_vehicle_image" => $row['unloaded_vehicle_image'],
		);
		$outputarray[] = $obj;
	}
	mysqli_close($conn);
	return($outputarray);
}


function updateNewtrip($id, $job_no, $material,$trip_from,$from_city,$trip_to,$to_city,$container_no,$transport_name,$vehicle_no,$vehicle_type,$gc_no,$be_no_date,$gate_in_date,$gate_out_date,$ex_haltdays,$plot_in_date,$plot_out_date,$ed_haltdays,$pod_details,$pod_submit_date,$pod_submit_person,$hire_memo_no,$hire_amt,$cash_adv,$diesel_amt,$total_adv,$halting_others,$balance_to_pay,$paymenttype,$paymentstatus,$d_advance,$driver_salary,$cleaner_bata,$expenses,$d_balance,$total_trip_value,$dpaymenttype,$dpaymentstatus, $halting_charges, $halting_charges_remark, $other_charges, $other_charges_remarks) {
	global $root_dir; include $root_dir.'helpers/config.php';
	
	$sql = "call update_newtrip('$id','$material','$trip_from','$from_city','$trip_to','$to_city','$container_no','$transport_name','$vehicle_no','$vehicle_type','$gc_no','$be_no_date','$gate_in_date','$gate_out_date','$ex_haltdays','$plot_in_date','$plot_out_date','$ed_haltdays','$pod_details','$pod_submit_date','$pod_submit_person','$hire_memo_no','$hire_amt','$cash_adv','$diesel_amt','$total_adv','$halting_others','$balance_to_pay','$paymenttype','$paymentstatus','$d_advance','$driver_salary','$cleaner_bata','$expenses','$d_balance','$total_trip_value','$dpaymenttype','$dpaymentstatus', '$halting_charges', '$halting_charges_remark', '$other_charges', '$other_charges_remarks', '$job_no');";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	mysqli_close($conn);
	return true;
}

function listHiredetById($id) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call list_hire_det_by_id('$id')";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array("id" => $row['id'],
"movement_id" => $row['movement_id'],
"trip_id" => $row['trip_id'], 
"driver_name" => $row['driver_name'],
"transporter_name" => $row['transporter_name'],
"vehicle_no" => $row['vehicle_no'],
"trip_no" => $row['trip_no'],
"transporter_invoice_no" => $row['transporter_invoice_no'],
"hire_amt" => $row['hire_amount'],
"cash_adv" => $row['cash_advance'],
"bunk_invoice_no" => $row['bunk_invoice_no'],
"bunk_name" => $row['bunk_name'],
"ltrs" => $row['ltrs'],
"diesel_amt" => $row['diesel_amount'],
"total_adv" => $row['total_advance'],
"halting_others" => $row['halting_others'],
"balance_to_pay" => $row['balance_to_pay'],

'paymenttype'=>$row["hire_ptype"],
'paymentstatus'=>$row["hire_pstatus"],

'd_advance'=>$row["driver_advance"],
'driver_salary'=>$row["driver_salary"],
'cleaner_bata'=>$row["cleaner_bata"],
'expenses'=>$row["expenses"],
'driver_balance'=>$row["driver_balance"],
'total_trip_value'=>$row["trip_salary"],

'dpaymenttype'=>$row["driver_ptype"],
'dpaymentstatus'=>$row["driver_pstatus"]
 
);
$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}

function getDailyPrice() {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "select diesel_price,petrol_price from constant_values";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
$obj = array(
"diesel_price" => $row['diesel_price'],
"petrol_price" => $row['petrol_price']
);


$outputarray[] = $obj;
}
mysqli_close($conn);
return($outputarray);
}


function updateDailyPrice($diesel,$petrol) {
global $root_dir; include $root_dir.'helpers/config.php';

$outputarray = array();

$query = "call update_dailyprice('$diesel','$petrol')";
 
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);

}

function assignedVehicle() {
global $root_dir; include $root_dir.'helpers/config.php';
$outputarray = array();
 
$query = "select vehicle_name from drivers";

$vehicles = array();
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
 array_push($vehicles, $row['vehicle_name']);
}
 

$outputarray = array('vehicles'=>$vehicles);
mysqli_close($conn);
return($outputarray);
}

function getOngoingtripdet() {
global $root_dir; include $root_dir.'helpers/config.php';
$outputarray = array();
 
$query = "select a.vehicle_no vehicle from trip_details a  where status IN('pending','accepted') group by a.vehicle_no ";

$vehicles = array();
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
 array_push($vehicles, $row['vehicle']);
}

$query1 = "select a.driver_name driver from trip_details a join hire_details b on a.id = b.trip_id where status IN('pending','accepted') group by  a.driver_name ";
$driver = array();
$result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
while ($row1 = mysqli_fetch_array($result1)) {

    array_push($driver, $row1['driver']);
 }

$outputarray = array('vehicles'=>$vehicles,'drivers'=>$driver);
mysqli_close($conn);
return($outputarray);
}

function changeTripStatus($id,$status) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_trip_status('$id','$status')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}

function changePass($id,$newpassword) {
global $root_dir; include $root_dir.'helpers/config.php';

$sql = "call change_password('$id','$newpassword')";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
mysqli_close($conn);
return($result);
}