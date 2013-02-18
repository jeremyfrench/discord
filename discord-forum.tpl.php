<?php
/**
 * TODO: docs
 * 
 * TODO: table sorting.
 */
?>
<h1 <?php print $title_attributes ?>><?php print $title?></h1>
<table>
<thead>
<tr>
 <th>Subject</th>
 <th>Category</th>
 <th>Participants</th>
 <th>Likes</th>
 <th>Posts</th>
 <th>Activity</th>
 <th>Views</th>
</tr>
</thead>
<tbody>
 <?php print render($topics)?>
</tbody>
</table>