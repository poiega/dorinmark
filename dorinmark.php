<?php 
function parse($input)
{
// 나도 몰라 nawegamark라
preg_replace('\'\'\'^[a-zA-Z0-9]*$\'\'\'','<b>$1</b>',$input);
preg_replace('\'\'^[a-zA-Z0-9]*$\'\'','<i>$1</i>',$input);
preg_replace('--^[a-zA-Z0-9]*$--','<del>$1</del>',$input);
preg_replace('>^[a-zA-Z0-9]*$','<blockquote><p>$1</p></blockquote>',$input);
// 문단
preg_replace('=^[a-zA-Z0-9]*$=','</p><h1>$1</h1><p>',$input);
preg_replace('==^[a-zA-Z0-9]*$==','</p><h2>$1</h2><p>',$input);
preg_replace('===^[a-zA-Z0-9]*$===','</p><h3>$1</h3><p>',$input);
preg_replace('====^[a-zA-Z0-9]*$====','</p><h4>$1</h4><p>',$input);
preg_replace('=====^[a-zA-Z0-9]*$=====','</p><h5>$1</h5><p>',$input);
preg_replace('======^[a-zA-Z0-9]*$======','</p><h6>$1</h6><p>',$input);
// wiki style 문법
preg_replace('{{{#!wiki style="^[.*]*$" ^[a-zA-Z0-9]*$}}}','<span style=\"$1">$2</span>',$input);
// 하이퍼링크
preg_replace('[[$dorinmark_Hyperlink]]', '<div class="dorinmark_hyperlink1" data-v-dorinmark_hyperlink1=""><a class="dorinmark_hyperlink1" href="/w/$dorinmark_Hyperlink" title="$dorinmark_Hyperlink" data-v-dorinmark-hylink1="">$dorinmark_Hyperlink</a></div>', $input)
preg_replace('[[$dorinmark_Hyperlink#s-$dorinmark_s]]', '<div class="dorinmark_hyperlink21" data-v-dorinmark_hyperlink21=""><a class="dorinmark_hyperlink21" href="/w/$dorinmark_Hyperlink" title="$dorinmark_Hyperlink" data-v-dorinmark-hylink21="">$dorinmark_Hyperlink</a></div>', $input)
preg_replace('[[$dorinmark_Hyperlink|$dorinmark_iop]]', '<div class="dorinmark_hyperlink2" data-v-dorinmark_hyperlink2=""><a class="dorinmark_hyperlink2" href="/w/$dorinmark_Hyperlink" title="$dorinmark_Hyperlink" data-v-dorinmark-hylink2="">$dorinmark_Hyperlink</a></div>', $input)
}
