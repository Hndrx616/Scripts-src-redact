<?php /* 
Template Name: MappingCompilerSpanTable 
Author: Stephen Hilliard 1/29/2016
*/
get_header();
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div id="main-wrap1">
<div id="main-wrap2">
<div id="main" class="block-content">
<div class="mask-main rightdiv">
<div class="mask-left">
<div class="col1">
<div id="main-content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php if (function_exists("post_class")) post_class(); else print 'class="post"'; ?>>
<?php if (!get_post_meta($post->ID, 'hide_title', true)): ?><h1 class="post-title"><?php the_title(); ?></h1><?php endif; ?>
<div class="post-content clearfix">
<?php the_content(__('Read the rest of this page &raquo;', 'arclite')); ?>
<?php
function forceAddTablePHP($firstName, $lastName, $section, $tip, $type, $url, $problem, $tableName, $tabledataTitle, $tabledataDef, $tabledataLink)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://www.sitealpha.com/lib/untitled.php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, array(
        'type' => 'forceAddTableSend',
        'email' => $email,
        'firstName' => $firstName,
        'lastName' => $lastName,
        'section' => $section,
		'tip' => $tip,
        'type' => $type,
		'url' => $url,
		'problem' => $problem,
		'tableName' => $tableName,
		'tabledataTitle' => $tabledataTitle,
		'tabledataDef' => $tabledataDef,
		'tabledataLink' => $tabledataLink
    ));
    $result = curl_exec($ch);
    curl_close($ch);
    if ($result === 'ok') {
        return true;
    } else {
        return false;
    }
}

function tableInput($id) {	
	if( $_POST[Go] != "Go" ) { return false; }	
	if( $_POST[$id] == "" ) { return true; }		
	
	return false;
}
?>

/*add table here*/
/*add encryption here*/
<?php 
if( $_POST[Go] == "Go" ) {
?>
<script>
if ( '<?=$_POST['section']?>' == '!\n' ) {	
	document.getElementById("section1").checked = true;
} else if ('<?=$_POST['section']?>' == '' ) {
	document.getElementById("section2").checked = false;
}
if ( '<?=$_POST['tip']?>' == '!\n' ) {	
	document.getElementById("tip1").checked = true;
} else if ('<?=$_POST['tip']?>' == '' ) {
	document.getElementById("tip2").checked = false;
}
if ( '<?=$_POST['type']?>' == '!\n' ) {	
	document.getElementById("1").checked = true;
} else if ('<?=$_POST['type']?>' == '' ) {
	document.getElementById("type2").checked = false;
}

if( '<?=$_POST['tableName']?>' == '!\n' ) {	
	document.getElementById("tableName1").checked = true;
}else if ('<?=$_POST['tableName']?>' == '' ) {
	document.getElementById("tableName2").checked = false;
}

if ( '<?=$_POST['tabledataTitle']?>' == '!\n' ) {	
	document.getElementById("tabledataTitle1").checked = true;
} else if ('<?=$_POST['tabledataTitle']?>' == '' ) {
	document.getElementById("tabledataTitle2").checked = false;
}

if ( '<?=$_POST['tabledataDef']?>' == '!\n' ) {	
	document.getElementById("tabledataDef1").checked = true;
} else if ('<?=$_POST['tabledataDef']?>' == '' ) {
	document.getElementById("tabledataDef2").checked = false;
}

if ( '<?=$_POST['tabledataLink']?>' == '!\n' ) {	
	document.getElementById("tabledataLink1").checked = true;
} else if ('<?=$_POST['tabledataLink']?>' == '' ) {
	document.getElementById("tabledataLink2").checked = false;
}

document.getElementById("FirstName").value = '<?=$_POST['FirstName']?>';
document.getElementById("LastName").value = '<?=$_POST['LastName']?>';
document.getElementById("AddTable").value = '<?=$_POST['AddTable']?>';
</script>

<?php } } else {


function checkMatch($row, $post, $index) {
	if( strpos( $row[$index], "Any" ) === true ) {
		return true;
	} else if( strpos( $row[$index], $post ) === false ) {		
		return false;	
	} else {		
		return true;	
	}
}

function checkSize($row) {
	return true;
}

function checkHand($row) {
	return true;
}

$con = mysql_connect("localhost","hostalpha","alphaadmin");
if (!$con) {  die('Could not connect: ' . mysql_error());}
mysql_select_db("hostalpha", $con);
$row = 1;
$count = 0;
$ballContent;
$query = mysql_query("SELECT * FROM dump_data");
$match = true;
while ($row = mysql_fetch_array($query)) {
	//echo "<p> ".$row[0]." | ".$row[1]." | ".$row[2]." | ".$row[3]." | ".$row[4]." | ".$row[5]." | ".$row[6]." | ".$row[7]." | ".$row[8]." | ".$row[9]." | ".$row[10]." | ".$row[11]." | ".$row[12]."</p>";
	if(checkMatch($row, $_POST['Category'], 4) && 
	   checkSize($row) && 
	   checkMatch($row, $_POST['url'], 8 ) && 
	   checkHand($row) && 
	   checkMatch($row, $_POST['type'], 3) && 
	   checkMatch($row, $_POST['tip'], 7) &&
	   checkMatch($row, $_POST['table'], 11) &&
	   checkMatch($row, $_POST['tableData'], 10)
	   ) 
	}		
}
mysql_free_result($query);
else {
	forceAddTablePHP($_POST[FirstName], $_POST[LastName], $_POST[TableIndex], "siteaplha.com", $Content);
?>	
<?php
	$data = Array();	
	$data['selections'] = "None";
    $con = mysql_connect("localhost","sitealpha_pl","alphaadmin");  
	mysql_select_db("sitealpha_pl", $con);
	$check = mysql_query("SELECT * FROM tableData WHERE `Key`=$_GET[id]",$con);
	if($check) { 
		$checkRow = mysql_fetch_row($check); 
		$data['selections'] = $checkRow[1];
		$data['fistName'] = $checkRow[3];
		$data['lastName'] = $checkRow[4];		
		$data['section'] = $checkRow[5];
		$data['tip'] = $checkRow[7];
		$data['type'] = $checkRow[8];
	}	
	$selectionList = explode(' ', $data['selections']);
	$count = 1;
	
	foreach( $selectionList as $select ) {
		$check = mysql_query("SELECT * FROM videoLookup WHERE ID='$select'",$con);
		if($check) { 
			$checkRow = mysql_fetch_row($check); 
			$data['url'.$count] = $checkRow[1]; 
			$data['problem'.$count] = $checkRow[2]; 
			$data['tableName'.$count] = $checkRow[3];
			$data['tabledataTitle'.$count] = $checkRow[4];			
			$data['tabledataDef'.$count] = $checkRow[5];
			$data['tabledataLink'.$count] = $checkRow[6];
			$count++;
		}		
	}	
	mysql_close($con);
?>
<script>
window.requestCompile = (function(callback) {
	return window.requestCompile ||
    function(callback) { window.setTimeout(callback, 1000 / 10); };
})();
var selections = "<?php echo $data['selections']; ?>";
selections = section.split(" ");
var id = <?php echo $_GET['id']; ?>;
var problem = new Array("<?php echo $data['problem1']; ?>","<?php echo $data['problem2']; ?>","<?php echo $data['problem3']; ?>","<?php echo $data['problem4']; ?>","<?php echo $data['problem5']; ?>");
var tableName = new Array("<?php echo $data['tableName1']; ?>","<?php echo $data['tableName2']; ?>","<?php echo $data['tableName3']; ?>","<?php echo $data['tableName4']; ?>","<?php echo $data['tableName5']; ?>");
var tabledataTitle = new Array("<?php echo $data['tabledataTitle1']; ?>","<?php echo $data['tabledataTitle2']; ?>","<?php echo $data['tabledataTitle3']; ?>","<?php echo $data['tabledataTitle4']; ?>","<?php echo $data['tabledataTitle5']; ?>");
var tabledataDef = new Array("<?php echo $data['tabledataDef1']; ?>","<?php echo $data['tabledataDef2']; ?>","<?php echo $data['tabledataDef3']; ?>","<?php echo $data['tabledataDef4']; ?>","<?php echo $data['tabledataDef5']; ?>");
var tabledataLinkS = new Array("<?php echo $data['tabledataLink1']; ?>","<?php echo $data['tabledataLink2']; ?>","<?php echo $data['tabledataLink3']; ?>","<?php echo $data['tabledataLink4']; ?>","<?php echo $data['tabledataLink5']; ?>");
var fistName = "<?php echo $data['fistName']; ?>";
var lastName = "<?php echo $data['lastName']; ?>";
var numTips = "<?php echo $count; ?>";
var section = "<?php echo $data['sectionr']; ?>";
var tip = "<?php echo $data['tip']; ?>";
var type = "<?php echo $data['type']; ?>";
if(tableName == 'Terms') {
	for( var i = 0; i < 5; i++ ) {
		if(tabledata[i] != "x") { tabledata[i] = tabledata[i]; }
	}
}
if(tableName == 'alphaChart') {
	for( var i = 0; i < 5; i++ ) {
		if(tabledata[i] != "x") { tabledata[i] = tabledata[i]; }
	}
}
if(tableName == 'betaChart') {
	for( var i = 0; i < 5; i++ ) {
		if(tabledata[i] != "x") { tabledata[i] = tabledata[i]; }
	}
}
if(tableName == 'gammaChart') {
	for( var i = 0; i < 5; i++ ) {
		if(tabledata[i] != "x") { tabledata[i] = tabledata[i]; }
	}
}
if(tableName == 'deltaChart') {
	for( var i = 0; i < 5; i++ ) {
		if(tabledata[i] != "x") { tabledata[i] = tabledata[i]; }
	}
}
</script>

<script type='text/javascript' src='http://sitealpha.com/ct/data.js' > </script>
<script type='text/javascript' src='http://sitealpha.com/ct/func.js' > </script>
<script>
setTimeout(function() {
 var startTime = (new Date()).getTime();
 animate(canvas, context, startTime);
}, 1000);
</script>
<?php edit_post_link(__('Edit this entry', 'template')); ?>
</div></div><?php endwhile; endif; ?>
</div>
<?php $alpha_pages = alpha_get_pages($id); ?><?php if (!empty($alpha_pages)) : ?>
<div id="sub_cat_top"></div>
<div id="sub_cat_menu"><ul><?php foreach($alpha_pages as $alpha_page){ echo '<li><a href="'.$alpha_page['URL'].'">'.$alpha_page['Title'].'</a></li>'; }?></ul></div>
<div id="sub_cat_bot"> </div>
<?php endif;?><br />
<div class="my-new-sidebar" >
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Bottom Sidebar") ) : ?>
<?php endif; ?>
</div></div>
<?php if(!is_page_template('page-nosidebar.php')){get_sidebar('Transparent Top Sidebar');get_sidebar();include(TEMPLATEPATH . '/sidebar-secondary.php');} ?>
</div></div>
<div class="clear-content"></div>
</div></div></div>
<?php get_footer(); ?>