<?php

$str = 'Site news – Announcements, updates, articles and press releases';

echo strlen($str) <= 5 ? $str : substr($str, 0, 5) . ' ...';