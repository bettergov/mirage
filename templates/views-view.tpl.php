<?php

// Shorthand for if, then print.
// I write PHP like a JS hacker.
// Pager at the top, and bottom.

isset($admin_links) && print $admin_links;
$header && print $header;
$exposed && print $exposed;
$attachment_before && print $attachment_before;
$pager && print $pager;
$rows ? print $rows : $empty && print $empty;
$pager && print $pager;
$attachment_after && print $attachment_after;
$more && print $more;
$footer && print $footer;
$feed_icon && print $feed_icon;
