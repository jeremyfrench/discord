Discord
=======

> Imitation is the sincerest form of flattery


An attempt at a drupal clone of [discourse](http://try.discourse.org/)


Note the github version of this is a rough cut with commits when suits me, which could be broken or have debug code. 

The head on drupal.org should always be functional (when something is functional). 

Should be a plug in replacement for core forums much as advanced forums is. Starting with some of the views. Then looking at some UI issues as well as neat things linke linking theads (relation I'm looking at you)

*Much to do here.* 

Rough Roadmap
-------------

 * 0.1 pages for forums list, forums page and topic page
 * 0.2 node and comment authoring
 * 0.3 node linking
 * ...

 Other Tasks
 -----------
 
 * Add db structure for 'most active' and update on comment save. Also create job that will recalc or import
 * Infinate scroll
 * Soft dependancies
 * integrate with module for likes (voting api or flag?)