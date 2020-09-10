<?php
    function menu() {
        register_nav_menus(array(
            'primary' => __('Primary Menu'),
            'footer' => __('Footer Menu'),
        ));
    }
    
    add_action('after_setup_theme','menu');
    
    function featurimg() {
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme','featurimg');

    function short_content(){
        return 40;
    }
    add_action('excerpt_length','short_content');
    
    function idparent(){
    global $post;
    $id = $post->ID;
    if($post->post_parent){
        $ancestor = get_post_ancestors($id); 
        return $ancestor[0];/* incase there are many level, just show first level*/
    }
    return $id;

}
function amountchild(){
    global $post;
    $pages = get_pages('child_of='.$post->ID);
    return count($pages);
}

 function init_widget($id){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id'=>'sidebar',
        'before_widget'=>'',
        'after_widget'=>'',
        'before_title'=>'<h3 style="color:red; background-color:; margin-top: 30px;">',
        'after_title'=>'</h3>',
    ));
       register_sidebar(array(
        'name'=>'Showcase',
        'id'=>'showcase',
        'before_widget'=>'<div class="showcase">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:red; background-color:; margin-top: 30px;">',
        'after_title'=>'</h4>',
    ));
     register_sidebar(array(
        'name'=>'Box 1',
        'id'=>'box1',
        'before_widget'=>'<div class="box1">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:red; background-color:; margin-top: 30px;">',
        'after_title'=>'</h4>',
    ));
     register_sidebar(array(
        'name'=>'Box 2',
        'id'=>'box2',
        'before_widget'=>'<div class="box2">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:red; background-color:; margin-top: 30px;">',
        'after_title'=>'</h4>',
    ));
     register_sidebar(array(
        'name'=>'Box 3',
        'id'=>'box3',
        'before_widget'=>'<div class="box3">',
        'after_widget'=>'</div>',
        'before_title'=>'<h4 style="color:red; background-color:; margin-top: 30px;">',
        'after_title'=>'</h4>',
    ));
}
add_action('widgets_init', 'init_widget');
?>