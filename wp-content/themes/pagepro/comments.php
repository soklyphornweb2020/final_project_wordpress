<h2>comments</h2>
<?php 
$args = array(
    'walker' =>null,
    'max_depth'=>'',
    'style'=>'ul',
    'callback'=>null,
    'endcallback'=>null,
    'type'=>'all',
    'page'=>'',
    'per_page'=>'',
    'avatar_size'=>'60',
    'reverse_top_level'=>null,
    'reverse_children'=>'',
    'format'=> current_theme_supports('html5','comment-list'),
    'short_ping'=> false,
    'echo'=>false,
);
?>
<?php echo wp_list_comments( $args,$comments);?>
<?php $form_args= array(
    'label_submit' =>'Sent comment',
    'title_reply'=>'Write a reply',
    'comment_notes_after' =>'',
    'comment_field'=> '<p class="comment-form-comment"><label for="comment">'._x('Comment','noun').'</label><br /><textarea id="comment" name="comment" cols="60" rows="15" aria-required="true"></textarea></p>',
);
comment_form($form_args);
?>