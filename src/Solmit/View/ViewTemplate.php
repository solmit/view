<?php namespace Solmit\View;

use View;

class ViewTemplate {
  
  protected $_view;

  public function __construct()
  {
      
  }

  public function make($view = NULL, $data = [])
  {
      return View::make($this->_view .'/'. $view, $data);
  }
  
  public function init($data)
  {
        return $this->_view = $data;
  }

}