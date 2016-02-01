<?php namespace Solmit\View;

use View;

class ViewTemplate {
  protected $_template;
  protected $_regex;

  public function __construct()
  {
      
  }

  public function make($view = NULL, $data = [])
  {
      if(empty($this->_regex)) {
        return View::make($this->_template.'.'.$view, $data);
      } else {

          $newView = str_replace($this->_regex, $this->_regex . $this->_template . ".", $view);

          return View::make($newView, $data);
      }

      
  }
  
  public function init($template, $regex = '')
  { 
      $this->_regex = $regex;

      return $this->_template = $template;
  }

}