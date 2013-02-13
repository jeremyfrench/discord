<?php
/**
 * TODO: DOCS
 * variables 
 *     'nid' = node id for generating links
       'title' = topic title
       'category' => taxonomy term applied to this (could this be array?)
       'participants' = array of discord_post_participant items
       'posts' = number of posts in the system
       'activity' => last activity timestamp
       'view_count' => number of views for this item.
 */
?>
<div><?php /*TODO: rdfa */ ?>
<?php print l($title,'node/' . $nid);?>
</div>