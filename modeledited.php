<?php
require('dbconstants.php');
//php code to fetch url of current page

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//echo $url; // Outputs: Full URL

class controlclass{

var $url;

//PHP Codes to Grab Page Title For Twitter And Other Social Media Sharing

	function curPageURL() {
			$pageURL = 'http';
			if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
			$pageURL .= "://";
			if ($_SERVER["SERVER_PORT"] != "80") {
			$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
			$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
			return $pageURL;
	}

//echo "<title>Grab a web page's title</title>"

	private $con;

	public function __construct(){
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	$this->url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$this->openconnection(); // this is done so that openconnection will run automatically
		}
	
	public function openconnection(){
		GLOBAL $DBSERVER,$DBUSER,$DBPASSWORD,$DBNAME;
		$this->con = mysqli_connect($DBSERVER,$DBUSER,$DBPASSWORD,$DBNAME);
		if(mysqli_connect_errno()){
			die('DATEBASE CONNECTION FAILED'); // no point showing the other webpages when database connection is failed.
		}else{
			//echo "Database Connection Successful,<BR>";
		}
	}

	public function fetch_data($targetfield,$fromtable,$sourcefield,$keyword, $order = ""){
	$data = "";
	$sql = "SELECT $targetfield FROM $fromtable WHERE $sourcefield = '$keyword' $order LIMIT 1";
	if(!$result = $this->con->query($sql))
	{
	die('Encounteredsss error fetching data '.$this->con->error);
	}
	while($row = $result->fetch_assoc()){
	$data = ucwords($row[$targetfield]);	
	}
	return $data;
	}

	public function sanitize($word,$type=0){
	$order = array('&lt;br /&gt;\r\n','&lt;br /&gt;');
	$word = str_replace($order,"<br>",$word);
	if($word=="") return;
	if(is_array($word)) die("Error! Wrong Datatype Recieved, Please Try Again");
	if($type==0){
	$word = strtolower($word);
	$wrdarr = explode("-",$word);
	$wordlist=array_map(function($wrdarr){ return ucwords($wrdarr);}, $wrdarr);
	$word = implode("-",$wordlist);
	return trim(stripslashes($word));
	}
	else return trim(stripslashes($word));
	}
		
	public function count_sql($wheretocount){
		$result="";
		if($wheretocount != ""){
		$sql = "SELECT COUNT(*) " . $wheretocount;
		$result = $this->con->query($sql);
		$row = $result->fetch_array();
		return array_shift($row);
		}	
	}
	
		public function commentcount(){
		$num =$_GET['view'];
		$sql = "SELECT count(*) AS commentno FROM comment WHERE post_id = '$num' ";
		$result =$this->con->query($sql);
		 //$in = "INSERT INTO photos('commentno') VALUES ($comntno) WHERE post_id = '$num'  "
		$i = 0;

		while($row =$result->fetch_assoc()){
		$commentno[]= $comntno = (int)$row['commentno'];
		$i++;
		}
		echo"
			<h4 class='comments-heading'> $comntno comments:</h4>	
		";

	}
	

	public function showgallery_categories(){
		$sql = "SELECT * FROM photos group by cat_id ORDER BY id DESC ";

		if(!$result = $this->con->query($sql)) //result is a database object
		{
		return "Encountered Error, Please Retry, ".$this->con->error;
		}

		$i=0;
		$id = array();
		while($row = $result->fetch_assoc()){ 
		$id[]		= (int)$row['id'];
		$catid[]	= $cid = (int)$row['cat_id'];
		$catphotocounts[] 	= $this->count_sql("FROM photos WHERE cat_id='$cid'");
		$photos[] 	= $catphotocounts[$i]==1?"Photo":"Photos";
		$galleryname[]		= $this->fetch_data("categories","photo_categories","id","$cid");		
		$filename[]		= $this->sanitize($row['picture_name'],0);		
		$i++;
		}

		$path = "assets/img/photos/";
	
		for($i=0;$i<count($id);$i++){
		echo "
		       

			<!-- Begin album list item -->
			 <div class='grid-sizer isotope-item black-and-white'>
			<div class='album-list-item'>
				<a class='ali-link' href='photos.php?cat=$catid[$i]'>
					<div class='ali-img-wrap'>
						<img class='ali-img' src='$path/{$filename[$i]}' title=''>
					</div>
					<div class='ali-caption'>
						<h2 class='ali-title' style = 'color:rgb(134,0,0)' >$galleryname[$i]</h2>
						<div class='ali-meta' style = 'color:rgb(134,0,0)' > $catphotocounts[$i]  $photos[$i]</div>
					</div>
				</a>
				<a href='#0' class='album-share' title='Share this album' data-toggle='modal' data-target='#modal-30944673'>
					<i class='fas fa-share-alt'></i>
				</a>
			</div>
			</div>
			<!-- End album list item -->

		
		
		<!-- End isotope item -->
		";
		}
										
		
	}

	
	public function show_photos_by_cat($catin){
		$url = $this->url;
		$catin=(int)$catin; //cast so that you cant write anything code through the url except integers
	$default = "cat=$catin";
	//============paginator =============
	$thesql=$total=$numofPages=$startAt=$pageNo=$prev=$next="";	
	$perPage=12;
	$thesql = "FROM photos WHERE cat_id='$catin' ";
	$this->paginator($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next);
	//!============paginator =============

	$sql = "SELECT * FROM photos WHERE cat_id='$catin' ORDER BY id DESC LIMIT $perPage OFFSET $startAt ";
		if(!$result = $this->con->query($sql))
		{
		return "Encountered Error, Please Retry, ".$this->con->error;
		}

		$i=0;
		$id = array();
		while($row = $result->fetch_assoc()){
			$query2 = $this->con->prepare("SELECT COUNT(*) AS allcom FROM comment WHERE post_id = ?");
			$query2->bind_param("i", $row["id"]);
			$query2->execute();
			$query2_result = $query2->get_result();
			$num = $query2_result->fetch_assoc()["allcom"]; 
			$id[]		= (int)$row['id'];
			$catid[]	= $cid = (int)$row['cat_id'];
			$catphotocounts[] 	= $this->count_sql("FROM photos WHERE cat_id='$cid'");
			$photos[] 	= $catphotocounts[$i]==1?"Photo":"Photos";
			$galleryname[]		= $this->fetch_data("categories","photo_categories","id","$cid");		
			$filename[]		= $this->sanitize($row['picture_name'],0);
			$comment[] = $num;
			$author[] = $row['Author'];	
			$client[] = $row['client'];
			$likes[] = $row['likes'];
			$option[] = $row["filter_option"];
			$i++;
		}

		$stmt = $this->con->prepare("SELECT DISTINCT filter_option FROM photos");
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		$newA = array();
		while($row = $stmt_result->fetch_assoc()){
			$newA[] = $row["filter_option"];
		}

		$path = "assets/img/photos/";
	echo "
	<div class='row'>
						<div class='col-md-12'>
							<div class='content-wrap'>
								<div class='isotope gutter-3 col-4'>
									<div class='gallery-top-content'>
										<div class='row margin-bottom-40'>
											<div class='col-sm-8 col-md-7'>
												<div class='isotope-filter'>
													<div class='navbar-header visible-xs'>
														<button type='button' class='navbar-toggle collapsed filter-toggle-btn' data-toggle='collapse' data-target='#isotope-filter-collapse' >
															<span class='text-center'>Filter <i class='fas fa-chevron-down'></i></span>
														</button>
													</div>
													<h2 class='filter-heading' style='color:rgb(134,0,0)'>Filters</h2>
													<div class='isotope-filter-links collapse navbar-collapse no-padding' id='isotope-filter-collapse'>
														<a class='active' href='#' data-filter='*' style = 'color:rgb(134,0,0)'>all</a>";
														for($i = 0; $i < count($newA); $i++){ ?>
															<a href='#' data-filter='.<?php echo $newA[$i]; ?>' style='color:rgb(134,0,0)'><?php echo $newA[$i];?></a>
														<?php } echo "
													</div>
												</div>

											</div> <!-- /.col -->

											<div class='col-sm-4 col-md-5'>
												<ul class='album-attributes margin-top-35'>
												
											
													<li>
													
														<div id='modal-98545043' class='modal fade' tabindex='-1' role='dialog'>
															<div class='modal-dialog modal-center'>
																<div class='modal-content'>
																	<div class='modal-header'>
																		<button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
																		<h4 class='modal-title'>Share to:</h4>
																	</div>
																	<div class='modal-body text-center'>
																		
																		<div class='modal-share'>
																			<ul>
																				<li><a href='http://www.facebook.com/sharer.php?u=$url' class='btn btn-social-min btn-facebook btn-rounded-full'><i class='fab fa-facebook-f'></i></a></li>
																				<li><a href='https://twitter.com/share?url=$url&amp;text=Snap%20house&amp;hashtags=snaphouse' class='btn btn-social-min btn-twitter btn-rounded-full'><i class='fab fa-twitter'></i></a></li>
																				<li><a href='https://plus.google.com/share?url=$url' class='btn btn-social-min btn-google btn-rounded-full'><i class='fab fa-google-plus-g'></i></a></li>
																				<li><a href=\"javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());\" class=\"btn btn-social-min btn-pinterest btn-rounded-full\"><i class='fab fa-pinterest-p'></i></a></li>
																				<li><a href='#0' class='btn btn-social-min btn-instagram btn-rounded-full'><i class='fab fa-instagram'></i></a></li>
																			</ul>
																			<input class='grab-link' type='text' readonly='' value='https://your-site.com/your-album-link' onclick='this.select()'>
																		</div>
																		
																		<!-- End modal share -->
																	</div>
																</div><!-- /.modal-content -->
															</div><!-- /.modal-dialog -->
														</div>
													</li>
												
												</ul>
											</div> <!-- /.col -->
										</div> <!-- /.row -->

									</div>
									<div id='gallery' class='isotope-items-wrap lightgallery hover-center hover-boxed'>

										<div class='grid-sizer'></div>

	";
		
		for($i=0;$i<count($id);$i++){
		echo "
			<div class='isotope-item ".$option[$i]."'>
				<div class='album-single-item'>
					<img class='asi-img' src='$path/{$filename[$i]}' alt='image'>
					<!-- Begin item cover -->
					<div class='asi-cover'>
						<a class='asi-link lg-trigger' href='$path/{$filename[$i]}' data-exthumbnail='$path/{$filename[$i]}' data-sub-html='<h4>$client[$i]</h4><p>$comment[$i]</p>'>
							<div class='asi-info'>
								<h2 class='asi-title'>$author[$i]</h2>
								<h5 class='asi-sub-title'>#$galleryname[$i]</h5>
							</div>
						</a>

						<!-- Begin add to favorites button -->
						<div class='favorite-btn'>
							<div class='fav-inner'>
								<div class='icon' id='try'>
								<input type='hidden' style = 'color:rgb(134,0,0)' id='photoid' value='".$id[$i]."' readonly>
									<span id='its' class='icon-heart-empty' style = 'color:rgb(134,0,0)'></span>
									<div class='fav-count' style = 'color:rgb(134,0,0)'>".$likes[$i]."</div>
								</div>
							</div>
						</div>
						<!-- End add to favorites button -->

					</div>
					<!-- End item cover -->
				</div>
				<a href='comments.php?view=".$id[$i]."'><div style='text-align:right;color:rgb(134,0,0)'><i style='color:rgb(134,0,0)' class='fas fa-comment'></i> ".$comment[$i]." comment</div></a>
				<!-- End album single item -->

			</div>
		";
		}
		
		echo "
					</div>
				</div>
				</div>
			</div>
		</div>
		";
	
				$this->show_pagination($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next,$default);

		}

	function get_rows($id = ''){
// function to get row number of pictures in db
	if($id!=''){
		//fetch single row
		//$query = mysql_real_query("SELECT * FROM liketable WHERE id = $id");
		$quer = "SELECT * FROM liketable WHERE id = $id";
		$query = $this->con->query($quer);

		$data = fetch_assoc($query);
	} else{
		//fetch all rows
		$quer = "SELECT * FROM liketable";
		$query = $this->con->query($quer);

		//$query = mysql_real_query("SELECT * FROM liketable");
		
		while($row = $query->fetch_assoc()){
			$data[]=$row;
		}
	}
	return $data;
}

	function insert($data = array()){
		// function to insert like clikes into db
$data_array_num = count($data);
$columns = "";
$values = "";
$i = 0;
foreach ($data as $key => $val) {
	$i++;
	$sep = ($i ==$data_array_num)?"":",";
	$columns .=$key.$sep;
	$values .=$val.$sep;
}
//$insert = mysql_query("INSERT INTO liketable ($columns) VALUES ($values)");
$inser = "INSERT INTO liketable ($columns) VALUES ($values)";
$insert = $this->$con->query($inser);

return $insert?TRUE:FALSE;


}

	function update($data = array(),$conditions = array()){
		// function to update like click into the db
	$data_array_num = count($data);
	$cols_vals = "";
	$condition_str = "";
	$i=0;
	foreach($data as $key=>$val){
		$i++;
		$sep = ($i ==$data_array_num)?'':',';
		$cols_vals .=$key."='".$val."'".$sep;
	}

		foreach($conditions as $key=>$val){
		$i++;
		$sep = ($i ==$data_array_num)?"":"AND";
		$condition_str .=$key."='".$val."'";
	}
	$update = mysql_query("UPDATE liketable SET $cols_vals WHERE $condition_str");
	return $update?TRUE:FALSE;

	}
	
	public function paginator($thesql,&$total,&$numofPages,&$perPage,&$startAt,&$pageNo,&$prev,&$next,&$sortby='id',&$sortmode=1){
	$total 	= (int)$this->count_sql($thesql);
	$total = ($total<=0)?1:$total;
	$perPage = (isset($_GET['q']) && $perPage == NULL)?(int)$_GET['q']:$perPage;
	$perPage = ($perPage<1)?2:$perPage; // use default 3 perPage
	$perPage = isset($_GET['all'])?$total:$perPage;
	$pageNo = isset($_GET['p'])?(int)$_GET['p']:1;
	$prev = $pageNo-1;
	$next = $pageNo+1;
	$numofPages = ceil($total/$perPage);
	$startAt = $perPage*($pageNo-1);
	
	if($pageNo < 1){
	$startAt = 0; $pageNo = 1;
	}elseif($pageNo > $numofPages){
	$pageNo = $startAt = $numofPages;
	}
	
	$sortby = isset($_GET['sb'])?$this->sanitize($_GET['sb'],1):"id";
	$sortmode = isset($_GET['sm'])?(int)$_GET['sm']:1;
	if(!isset($_GET['p'])){
	$sortmode = ($sortmode==1)?0:1;
	}

	}

	public function show_pagination($thesql,$total,$numofPages,$perPage,$startAt,$pageNo,$prev,$next,$default="",$sortby='id',$sortmode=1){
		$default = $default==""?"":"&amp;$default";
	echo "  <div class='text-center'>
		<ul class='pagination pagination-lg'>";
		echo "
		<li><a href='?p=1&q=$perPage&all=1&sb=$sortby&sm=$sortmode$default' style ='color:rgb(134,0,0)'>Show All</a></li>
		";
		if($pageNo > 1){
		echo "
		<li>
		  <a href='?p=$prev&q=$perPage&sb=$sortby&sm=$sortmode$default' aria-label='Previous'>
			<span aria-hidden='true' style = 'color:rgb(134,0,0)'>&laquo; Prev</span>
		  </a>
		</li>
		<li><a href='?p=1&q=$perPage&sb=$sortby&sm=$sortmode$default' style = 'color:rgb(134,0,0)'>First</a></li>
		";	
		}
		$i = ($pageNo-5>0)?$pageNo-5:1;

		for(;$i<$numofPages;$i++){
		if($i < ($pageNo+10) && $i < ($pageNo+5)){
		if($i==$pageNo){
		echo "<li class='active'><a href='javascript:;'>$i</a></li>";
		}else{
		echo "<li><a href='?p=$i&q=$perPage&sb=$sortby&sm=$sortmode$default' style = 'color:rgb(134,0,0)'>$i</a></li>";
		}
		}
		if($i > ($pageNo+10) && $i < ($pageNo+20)){
		echo "";
		}
		else{echo "";}
		}
		if($pageNo ==  $numofPages){
		echo "<li class='active'><a href='?p=$i&sb=$sortby&sm=$sortmode$default' style = 'color:rgb(134,0,0)'>$i</a></li>";
		}
		elseif($pageNo <  $numofPages){
		echo "<li ><a href='?p=$numofPages&q=$perPage&sb=$sortby&sm=$sortmode$default' style = 'color:rgb(134,0,0)'>$numofPages</a></li>
		<li><a href='?p=$numofPages&q=$perPage&sb=$sortby&sm=$sortmode$default' style = 'color:rgb(134,0,0)'>Last</a></li>
		<li>
		<a href='?p=$next&q=$perPage&sb=$sortby&sm=$sortmode$default' aria-label='Next'>
        <span aria-hidden='true' style = 'color:rgb(134,0,0)' >Next &raquo;</span>
      </a>
    </li>	
		";
		}
	echo " </ul></div>";
	}/*End of showPagination Function*/
	
	public function log_curr_visitor($type=0){
		$visitorip = $this->sanitize($_SERVER['REMOTE_ADDR']);
		if($visitorip == "::1")return;
		$count = 0;
		if (session_status() == PHP_SESSION_NONE) {session_start();}
		if(!isset($_SESSION['hasVisited'])){
		$_SESSION['hasVisited'] = 1;
		$count = $this->fetch_data("description","vitals","varname","SITE_HITS");
		if($count > 0){
		$count++;
		$this->update_this_record("vitals","description",$count,"varname","SITE_HITS",1);
		$this->log_this_action("NewVisitor", "New Visitor From The IP Address $visitorip");		

		}

		}

		$dispuser = isset($_SESSION['photizer'])?$this->sanitize($_SESSION['photizer'],1):"";
		if($type==0) return $dispuser;
		$dispuser = $dispuser!=""?$this->fetch_data("display","users","email",$dispuser):"";
		$dispnameArr = $dispuser!=""?explode(" ",$dispuser):array("");
		$dispuser = $dispnameArr[0]!=""?$dispnameArr[0]:"";
		return $dispuser;		
	}
	
	
	public function log_this_action($wh,$dw,$why=""){
	$wh=$this->sanitize($wh);$dw=$this->sanitize($dw,1);$why=$this->sanitize($why);
	if($stmt = $this->connection->prepare("INSERT INTO log_register(who,didwhat,why) values(?,?,?)")){$stmt->bind_param('sss', $wh, $dw, $why);
	$stmt->execute();$stmt->close(); return 1;
	}else{return 0;}
	}

	function updateLikes($id, $action){
		if($action == 1){
			$stmt = $this->con->prepare("UPDATE photos SET likes = likes + 1 WHERE id = ?");
			$stmt->bind_param("i", $id);
		}else{
			$stmt = $this->con->prepare("UPDATE photos SET likes = likes - 1 WHERE id = ?");
			$stmt->bind_param("i", $id);
		}
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function allCategories(){
		$stmt = $this->con->prepare("SELECT * FROM photo_categories");
		$stmt->execute();
		$arr = array();
		$stmt_result = $stmt->get_result();
		while($row = $stmt_result->fetch_assoc()){
			$obj = new stdClass();
			$obj->name = $row["categories"];
			$obj->id = $row["id"];
			$arr[] = $obj;
		}
		return $arr;
	}

	function getPhotoDetails($id){
		$stmt = $this->con->prepare("SELECT * FROM photos WHERE id = ?");
		$stmt->bind_param("i", $id);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		$arr = array();
		$comments = array();
		$row = $stmt_result->fetch_assoc();
		//$arr[] = $row["comment"];
		$arr[] = $row["likes"];
		$arr[] = $row["Author"];
		$arr[] = $row["client"];
		$arr[] = $row["picture_name"];
		$arr[] = $row["filter_option"];
		$arr[] = $row["date_entered"];
		$arr[] = $row["description"];
		$stmt2 = $this->con->prepare("SELECT * FROM comment WHERE post_id = ?");
		$stmt2->bind_param("i", $id);
		$stmt2->execute();
		$stmt2_result = $stmt2->get_result();
		if($stmt2_result->num_rows > 0){
			while($row = $stmt2_result->fetch_assoc()){
				$obj = new stdClass();
				$obj->name = $row["name"];
				$obj->comment = $row["comment"];
				$obj->email = $row["email"];
				$comments[] = $obj;
			}
		}
		$dates = Date("Y-m-d");
		$arr[] = $comments;
		return $arr;
		
		

	}
	
	public function update_this_record($targettable,$targetfield,$value,$searchfield,$keyword,$limit=1){
		$data = "";
		$sql = ($limit==1)?"UPDATE $targettable SET $targetfield = '$value' WHERE $searchfield = '$keyword' LIMIT 1":"UPDATE $targettable SET $targetfield = '$value' WHERE $searchfield = '$keyword'";
		$sql=($limit==3)?"UPDATE $targettable SET $targetfield = '$value' WHERE regno != '100100' AND res_inactive=0":$sql;
		if(!$this->result = $this->connection->query($sql))
		{
		return $this->just_notify('Encountered error while Making Changes '.$this->connection->error,2);
		}else{
		return $this->connection->affected_rows;
		}
	}
	
		public function just_notify($msg,$mode=1){
		if($mode==1){
		$msg = "    
		<div class='alert alert-success fade in out'>
		<a href='#' class='close' data-dismiss='alert'>&times;</a>
        $msg
		</div>";
			}
		else{
		$msg = "<div class='alert alert-danger fade in out'>
		<a href='#' class='close' data-dismiss='alert'>&times;</a>
        $msg 
		</div>";

		}
		return $msg;
	}	
	
		public function entercomment(){
			
$name = htmlspecialchars($_POST['name']);
//$namee=str_split($name,50);
$email = htmlspecialchars($_POST['email']);
//$emaill=str_split($email,50);
$message = htmlspecialchars($_POST['message']);
//$messagee=str_split($message,1000);
$commenttime = htmlspecialchars($_POST['comenttime']);
//$commenttimee=str_split($commenttime,50);
$view = (int)$_GET['view'];
if($stmt = $this->con->prepare("INSERT INTO comment(name,email,comment,post_id,commenttime) VALUES(?,?,?,?,?) ")){
	$stmt->bind_param("sssis",$name,$email,$message,$view,$commenttime);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	$ent = $stmt_result->fetch_assoc();
	$incomnt =array();
	$incomnt[]= $ent['name'];
	$incomnt[] = $ent['$comment'];
	$incomnt[] = $ent['$commenttime'];



}
else{
	return "Repost Your Comment Please".$this->con->error;
}

	


	}

}

// echo $dates = Date("d M Y");

$classobj = new controlclass;



?>