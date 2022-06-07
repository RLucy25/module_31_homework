<meta charset="UTF-8">
<?php
 $str = '<meta name="keywords" content="автосервис шушары, автосервис Пушкин, автозапчасть адрес телефон,
  автозапчасти шушары, магазин автозапчастей +в пушкине, автосервис отзывы">
 <meta name="description" content="Автосервис Автошуши в Шушарах автозапчасти Пушкин СТО"> ';
 
function strip_html_tags($tags,$str){ 
        $html=array();
        foreach ($tags as $tag) {
            $html[]="/(<(?:\/".$tag."|".$tag.")[^>]*>)/i";
        }
        $data=preg_replace($html, '', $str); 
        return $data;
    } 
    echo strip_html_tags(array('meta.description', 'meta.keywords'),$str);
      
?>