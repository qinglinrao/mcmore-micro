<?php
class LinkHelper
{
    public static function tag($tag)
    {
        return HTML::link(URL::route('news.tag', $tag->id), $tag->name, ['title'=>$tag->name]);
    }

    public static function news_detail($new, $return_link = false)
    {
        if($new->category_code == 'faq')
            $link = URL::route('faq.detail', ['id'=>$new->id]);
        elseif($new->category_code == 'fangan')
            $link = URL::route('fangan.detail', ['id'=>$new->id]);
        else
            $link = URL::route('news.detail', ['id'=>$new->id]);

        if($return_link)
            return $link;
        else
            return HTML::link($link, $new->name, ['title'=>$new->name, 'target'=>'_blank']);
    }
}