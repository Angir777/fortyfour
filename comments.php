<?php wp_list_comments(); ?>

<?php if( comments_open() ) : ?>

<?php 
    comment_form(array(
        'comment_notes_after' => '',
    )); 
?>

<?php else : ?>
    <p></p>
<?php  endif; ?>