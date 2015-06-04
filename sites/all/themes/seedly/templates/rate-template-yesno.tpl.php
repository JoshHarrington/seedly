<a class="thumb-vote thumbUp" href="<?php print $links[0]['href']; ?>">
    <svg>
        <use xlink:href="#_thumb-up"></use>
    </svg>
    
    <?php if($links[0]['votes'] > 0) : ?>  
        <span>&#91;<?php print $links[0]['votes']; ?>&#93;</span>
    <?php endif; ?>
</a>
<a class="thumb-vote thumbDown" href="<?php print $links[1]['href']; ?>">
    <svg>
        <use xlink:href="#_thumb-down"></use>
    </svg>
    <?php if($links[1]['votes'] > 0) : ?>  
        <span>&#91;<?php print $links[1]['votes']; ?>&#93;</span>
    <?php endif; ?>
</a>

<?php
    if ($info) {
      print '<div class="rate-info">' . $info . '</div>';
    }
?>