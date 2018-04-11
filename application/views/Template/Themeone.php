 	<link rel="stylesheet" href="<?php #echo base_url('theme');?>/assets/prograss/lib/nprogress.css" />
	<script src="<?php #echo base_url('theme');?>/assets/prograss/src/jquery-latest.min.js"></script>
	<script src="<?php #echo base_url('theme');?>/assets/prograss/lib/nprogress.js"></script>
	<script src="<?php #echo base_url('theme');?>/assets/prograss/src/animations/jquery.big-counter.js"></script>
	<script src="<?php #echo base_url('theme');?>/assets/prograss/src/jquery.html5Loader.js"></script>
	<div id="html5Loader"></div>
	<div id="wrapper" style="opacity:0;filter:alpha(opacity=0)"></div>
	<script type="text/javascript">
	NProgress.start();
	$.html5Loader({
			//filesToLoad:'<?php #echo base_url('theme');?>/assets/prograss/src/files.json',
			onUpdate: function(perc){
				NProgress.set(perc/100);
			},
			stopExecution:true,
			onComplete: function () {
				NProgress.done(true);
				setTimeout(function(){
					$("#wrapper").animate({
						opacity:1
					},'slow');
				},500);
				console.log("loaded!");
			},
			onElementLoaded: function ( obj, elm ){
				if(!~$.inArray(obj.type,["TEXT","SCRIPT","CSS"])) {
					$("#wrapper").append(elm);
				}
			}
	});
	</script>
<?php
$this->load->view('template/header-clip');	
#start: PAGE CONTENT  
################################## Body Content ################################
if(isset($content_view) && !isset($content_data)){$this->load->view($content_view); 
	}if(isset($content_view) && isset($content_data)){
		foreach($content_data as $key =>$value){$data[$key] = $value;}
		$this->load->view($content_view,$data);
	}
################################## Body Content ################################
#end:PAGE CONTENT 
$this->load->view('template/footer-clip');
?>
