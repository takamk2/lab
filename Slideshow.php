<?php

class Slideshow {

  private $timeline = null;
  private $contents = null;
  private $contents2 = null;
  //private $tmp      = '';

  function __construct() {
    $this->timeline = 0;
    $this->contents = array();
    $this->contents2 = array();
  }

  public function setTimeline($px) {
    $this->timeline = $px;
  }

  public function getTimeline() {
    return $this->timeline;
  }

  public function sync($obj) {
    $this->timeline = $obj->getTimeline();
  }

  public function margin($px) {
    $this->timeline += $px;
  }

/*
data-0="" data-100="" data-500="" data-1000=""
*/
  public function set($content, $opt) {

    ksort($opt);
    $i = 0;
    $str = '';
    if (array_key_exists('start', $opt)) {
      $str .= 'data-0="' . $opt['start'] . '" ';
    }
    foreach ($opt['attribute'] as $j => $o) {
      $this->timeline += $j - $i;
      $i = $j;
      $str .= 'data-' . $this->timeline . '="';
      $str .= $o;
      $str .= '" ';
    }
    $str = '<div class="' . $opt['class'] . '" ' . $str . '>' . $content . '</div>';

    $this->contents[] = $str;
    /*
    if ($this->tmp) {
      $this->contents2[] = $str;
    }else {
      $this->contents[] = $str;
    }
    */
  }

  public function startBg($opt) {

    ksort($opt);
    $i = 0;
    $str = '';
    if ($opt['start'] !== '') {
      $this->tmp .= 'data-0="' . $opt['start'] . '" ';
    }
    foreach ($opt['attribute'] as $j => $o) {
      $this->timeline += $j - $i;
      $i = $j;
      $str .= 'data-' . $this->timeline . '="';
      $str .= $o;
      $str .= '" ';
    }
    //$this->tmp = '<div class="' . $opt['class'] . '" ' . $str;
    //$str = '<div class="' . $opt['class'] . '" ' . $str . '>' . $content;
    // -4000
    $str = '<div class="easing_wrapper" data-0="display:none;" data-15700="display:block;" data-19700="background:rgba(20, 20, 20, 0);color[swing]:rgb(0,0,0);" data-20700="background:rgba(20,20,20,1);color:rgb(255,255,255);" data-34000="top:0%;" data-36500="top:-150%;">';

    $this->contents[] = $str;
  }

  public function endBg($o) {
    /*
    $this->tmp .= 'data-' . $this->timeline . '="';
    $this->tmp .= $o;
    $this->tmp .= '">';
    var_dump($this->tmp);
    $this->contents[] = $this->tmp;
    $this->tmp = '';
    array_merge($this->contents, $this->contents2);
    */
    $this->contents[] = '</div>';
  }

  public function show() {
    $str = "";
    foreach ($this->contents as $content) {
      echo $content;
    }
  }
}