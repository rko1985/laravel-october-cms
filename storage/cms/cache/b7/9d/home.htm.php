<?php 
class Cms5de5750a15af8353407881_73ef69406d672ec91d55dd0c577ac7aaClass extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
