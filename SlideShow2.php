<?php

class SlideShow {

  private $timeline;
  private $contents;
  private $contents_wrap;
  private $wrap_tmp;

  function __construct() {
    $this->timeline      = 0;
    $this->contents      = array();
    $this->contents_wrap = array();
  }

  ////////////////////////////////////////////////////////////////
  /**
   * @param $px タイムラインの位置(px)
   */
  public function setTimeline($px) {
    $this->timeline = $px;
  }

  public function getTimeline() {
    return $this->timeline;
  }

  ////////////////////////////////////////////////////////////////
  /**
   * 別のインスタンスのタイムラインと同期する
   *
   * @param $ss 本クラスのインスタンス
   */
  public function sync($ss) {
    $this->timeline = $ss->getTimeline();
  }

  ////////////////////////////////////////////////////////////////
  /**
   * 現在のタイムラインにマージンを追加
   *
   * @param $px マージンサイズ(px)
   */
  public function margin($px) {
    $this->timeline += $px;
  }

  ////////////////////////////////////////////////////////////////
  public function setSlide($content, $opt) {

    $str = "";
    if (array_key_exists('start', $opt)) {
      $str .= 'data-0="' . $opt['start'] . '" ';
    }

    $i = 0;
    foreach ($opt['attribute'] as $j => $o) {
      $this->timeline += $j - $i;
      $i = $j;
      $str .= 'data-' . $this->timeline . '="';
      $str .= $o;
      $str .= '" ';
    }
    $str = '<div class="' . $opt['class'] . '" ' . $str . '>' . $content . '</div>';

    if ($this->wrap_tmp) {
      $this->contents_wrap[] = $str;
    }else {
      $this->contents[] = $str;
    }
  }

  ////////////////////////////////////////////////////////////////
  public function startWrap($opt) {

    $timeline = $this->timeline;
    $str = "";
    if (array_key_exists('start', $opt)) {
      $str .= 'data-0="' . $opt['start'] . '" ';
    }

    $i = 0;
    foreach ($opt['attribute'] as $j => $o) {
      $timeline += $j - $i;
      $i = $j;
      $str .= 'data-' . $timeline . '="';
      $str .= $o;
      $str .= '" ';
    }
    $str = '<div class="' . $opt['class'] . '" ' . $str . ' ';
    $this->wrap_tmp = $str;
  }

  ////////////////////////////////////////////////////////////////
  public function endWrap($opt) {
    if ($this->wrap_tmp === '') return;

    $str = "";

    $i = 0;
    foreach ($opt['attribute'] as $j => $o) {
      $this->timeline += $j - $i;
      $i = $j;
      $str .= 'data-' . $this->timeline . '="';
      $str .= $o;
      $str .= '" ';
    }
    $str = $this->wrap_tmp . $str . '>';
    foreach ($this->contents_wrap as $content) {
      $str .= $content;
    }
    $str .= '</div>';
    $this->contents[] = $str;

    $this->contents_wrap = array();
    $this->wrap_tmp      = '';
  }

  ////////////////////////////////////////////////////////////////
  public function show() {
    foreach ($this->contents as $content) {
      echo $content;
    }
  }

}