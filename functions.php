<?php
function wt_get_depth($id = '', $depth = '', $i = 0)
{
	global $wpdb;
	global $post;

	if($depth == '')
	{
		if(is_page())
		{
			if($id == '')
			{
				$id = $post->ID;
			}
			$depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$id."'");
			return wt_get_depth($id, $depth, $i);
		}
	}
	elseif($depth == "0")
	{
		return $i;
	}
	else
	{
		$depth = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = '".$depth."'");
		$i++;
		return wt_get_depth($id, $depth, $i);
	}
}

function wt_is_child($id = '')
{
	if(_get_depth($id)>0)
	{
		return true;
	}
}

function is_child($parent) {
  global $post;
  return $post->post_parent == $parent;
}
?>