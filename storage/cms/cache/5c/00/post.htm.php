<?php 
class Cms5de6e42b60617562530387_2b1e81d27bf8f20988f8482eb077bf97Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
