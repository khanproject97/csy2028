<?php

/*

use html wala code
function html($tag,$content,$class){
  if($class != ''){
  return '<'.$tag.'class="' .$class.'">'.$content.'</'.$tag.'><br>';
}


else{
  return '<'.$tag.'>'.$content.'</'.$tag.'>';
}

}
echo html('h1','first Heading','heading1');
echo html('p','First Paragraph goes here','para');
$list=html('li','List item1','').html('li','List item2','');
html('ul',$list,'');
*/

function display($n){

echo '<p>hello world</p>';$n--;
if($n>=1)
  return display($n);

}
display(200);


?>
