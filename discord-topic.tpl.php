<?php
/**
 * TODO: DOCS
 * variables 
 *     'nid' = node id for generating links
       'title' = topic title
       'category' => taxonomy term applied to this (could this be array?)
       'participants' = array of discord_post_participant items
       'posts' = number of posts in the topic
       'activity' => last activity timestamp
       'view_count' => number of views for this item.
 */
?>
<tr <?php /*TODO: rdfa, infinate scroll attributes */ ?>>
<?php /* TODO: add statuses like sticky hot unread */ ?>
<td> <?php print l($title,'node/' . $nid);?></td>
<td> <?php print l($category->name,'taxonomy/term/' . $category->tid)?></td>
<td> <!-- participants --> &nbsp;</td>
<td> <!-- likes --> &nbsp;</td>
<td> <?php print $posts ?></td>
<td> <?php print format_interval(time()-$activity,2)?></td>
<td> <?php print $view_count ?></td>
</tr>