<?php
if (crb_comments_restrict_access()) {
	crb_comments_render_list('crb_render_comment');
	crb_comments_render_form(array(
		'title_reply'=>__('Leave a Reply'),
	));
}
