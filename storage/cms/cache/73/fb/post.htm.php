<?php 
class Cms5de6b0e92a473496122319_589afadd2f4270a03c15d9ad1d585ce9Class extends Cms\Classes\PageCode
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
