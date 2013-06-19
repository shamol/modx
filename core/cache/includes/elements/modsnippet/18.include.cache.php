<?php
function elements_modsnippet_18($scriptProperties= array()) {
global $modx;
if (is_array($scriptProperties)) {
extract($scriptProperties, EXTR_SKIP);
}
echo "<pre>";
print_r($_POST);

if(isset($_POST['submit']))
{
    $post = $modx->newObject('Posts');
    $post->set('author', '1');
    $post->set('title', $_POST['title']);
    $post->set('content', $_POST['content']);
    $post->set('postDate', '2013-06-19');
}
}
