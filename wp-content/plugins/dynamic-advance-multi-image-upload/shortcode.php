<?php
/*
 * plugin shortcode generation
 * */
function form_creation1($dmiu_att){
	global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
 $dmiu_att=shortcode_atts( 
    array(
      'dmiu_id' => ''), $dmiu_att);

	global $wpdb;
		$dmiu_att['dmiu_id']=intval($dmiu_att['dmiu_id'])+1000;
		$cc=intval($dmiu_att['dmiu_id']);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");?>
		<div class="dmiubody"><?php
		foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		foreach($dmiutes as $fi)
		{
			$ki=explode('|',$fi); ?>
            <div class="d-image-float">
                <img class="dmiu_img" src="<?php echo esc_url($ki[0]); ?>" >
                <div class="dmiu_titl"><?php echo esc_attr($ki[1]); ?></div>
                <div class="dmiu_desc"><?php echo esc_attr($ki[2]);?></div>
            </div>
		<?php
        }
		?>
		</div>
		<?php
        }
add_shortcode('dmiu', 'form_creation1');
/*............function blosk................*/
global $ttl_page;
global $dmiu_var;
 $GLOBALS['dmiu_var']=0;
 global $dmiu_per_page;
 $GLOBALS['dmiu_per_page']=0;
 
 global $dmiu_pagination_id;

 
 function damiu_set_per_page($eid)
 {
 	 $GLOBALS['dmiu_var']=$GLOBALS['dmiu_per_page']=$eid;
	
 }
 
 function damiu_pagi()
{
	if(isset($_REQUEST['damiu_page_id']))
	
	{
		$GLOBALS['dmiu_pagination_id']=$_REQUEST['damiu_page_id'];
		unset($_REQUEST['damiu_page_id']);
	}
	else {
		 $GLOBALS['dmiu_pagination_id']=1;
	}
	
}
 
function damiu_query()
{
	global $post;
	$id=$post->ID;
	 
 global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
global $wpdb;
		$id=intval($id)+1000;
		$cc=intval($id);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");
		
			foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		foreach($dmiutes as $fi)
		{ $GLOBALS['dmiu_var']++;
			}
	$GLOBALS['ttl_page']=$GLOBALS['dmiu_var'];
	
}
global $damiu_individual;
$GLOBALS['damiu_individual']=0;
function damiu_query_by_id($abc)
{
	
	$GLOBALS['damiu_individual']=$id=$abc;
	 
 global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
global $wpdb;
		$id=intval($id)+1000;
		$cc=intval($id);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");
		
			foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		foreach($dmiutes as $fi)
		{ $GLOBALS['dmiu_var']++;
			}
	$GLOBALS['ttl_page']=$GLOBALS['dmiu_var'];
}

function have_damiu(){
	
	return($GLOBALS['dmiu_var']);
}
function the_damiu()
{ 
	$GLOBALS['dmiu_var']--;
}
function damiu_image()
{
	
	
	if(isset($_POST['post_id']))
{
	$id=intval($_POST['post_id']);
}
else {
	global $post;
	$id=$post->ID;
}
	
	if($GLOBALS['damiu_individual']>0)
	{
		$id=$GLOBALS['damiu_individual'];
	}
	
	
	 
 global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
global $wpdb;
		$id=intval($id)+1000;
		$cc=intval($id);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");
		
			foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		
		if($GLOBALS['dmiu_per_page']>0)
		{
		$ig=$GLOBALS['dmiu_var']+(($GLOBALS['dmiu_pagination_id']-1)*$GLOBALS['dmiu_per_page']);
			
		}
else {
	$ig=$GLOBALS['dmiu_var'];
}
		
			$ki=explode('|',$dmiutes[$ig]); ?>
          
              <?php if(isset($ki[0])) {
              	

					 return print esc_url($ki[0]); 

			  
			  
			  }?>
                
		<?php
       
}

function damiu_title()
{
	
	if(isset($_POST['post_id']))
{
	$id=intval($_POST['post_id']);
}
else {
	global $post;
	$id=$post->ID;
}
	
	if($GLOBALS['damiu_individual']>0)
	{
		$id=$GLOBALS['damiu_individual'];
	}
	 
 global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
global $wpdb;
		$id=intval($id)+1000;
		$cc=intval($id);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");
		
			foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		
	if($GLOBALS['dmiu_per_page']>0)
		{
		$ig=$GLOBALS['dmiu_var']+(($GLOBALS['dmiu_pagination_id']-1)*$GLOBALS['dmiu_per_page']);
			
		}
else {
	$ig=$GLOBALS['dmiu_var'];
}
		
			$ki=explode('|',$dmiutes[$ig]); ?>
          
              <?php if(isset($ki[1])) {  return  $ki[1]; } ?>
                
		<?php
       
}

function damiu_text()
{
	
	if(isset($_POST['post_id']))
{
	$id=intval($_POST['post_id']);
	
}
else {
	global $post;
	$id=$post->ID;
}
	if($GLOBALS['damiu_individual']>0)
	{
		$id=$GLOBALS['damiu_individual'];
	}
	 
 global $wpdb;
$table_name = $wpdb->prefix . 'postmeta';
global $wpdb;
		$id=intval($id)+1000;
		$cc=intval($id);
		$res=$wpdb->get_results("select * from `$table_name` where `meta_key`='plug_me' and `post_id`='$cc'");
		
			foreach($res as $akk)
		$fg= $akk->meta_value;
		$dmiutes=explode('~',$fg);
		
	if($GLOBALS['dmiu_per_page']>0)
		{
		$ig=$GLOBALS['dmiu_var']+(($GLOBALS['dmiu_pagination_id']-1)*$GLOBALS['dmiu_per_page']);
			
		}
else {
	$ig=$GLOBALS['dmiu_var'];
}
		
			$ki=explode('|',$dmiutes[$ig]); ?>
          
              <?php if(isset($ki[2])) {  return  $ki[2]; }?>
                
		<?php
       
}

function damiu_pagination($bc)
{
	
	damiu_set_per_page($bc); damiu_pagi();
}

function dmiu_page_num()
{
	
	$dmiu_yu=ceil( $GLOBALS['ttl_page']/ $GLOBALS['dmiu_per_page']);
	$dmi_i=1;
	while($dmi_i<=$dmiu_yu)
	{
		?>
			<a class="dmiu_pg_id" href="<?php get_permalink();?>?damiu_page_id=<?php echo $dmi_i; ?>" ><?php echo $dmi_i; ?></a>
		<?php
		$dmi_i++;
	}
	
}

?>