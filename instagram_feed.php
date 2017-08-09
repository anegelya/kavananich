<?php
    $url = "https://www.instagram.com/kavananich/?__a=1";
    $json = file_get_contents($url);
    
    $res = json_decode($json);
    $nodes  = $res->user->media->nodes;

print_r($content);
    
    foreach($nodes as &$node) {
        $thumbnail_src = $node->thumbnail_src;
        
        $caption = $node->caption;
        $code = $node->code;
        $likes = $node->likes->count;
        echo '<a href="https://www.instagram.com/p/' . $code . '/" title="' . $caption . '"><figure><img src="' . $thumbnail_src . '"><figcaption><img src="Images/Icons/instagram.svg"></figcaption></figure><img class="ico" src="Images/Icons/valentines-heart.svg"><p>' . $likes . '</p></a>';
    }
?>