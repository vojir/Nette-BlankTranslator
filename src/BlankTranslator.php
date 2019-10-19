<?php

namespace Vojir\BlankTranslator;

/**
 * Class BlankTranslator - dummy translator class (for future implementation of localizations)
 * @package Vojir\BlankTranslator
 * @author Stanislav Vojíř
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BlankTranslator implements ITranslator{

  private $lang = 'en';

  /**
   * Translates the given string.
   * @param  string   $message
   * @param array $parameters
   * @return string
   */
  function translate($message, ...$parameters):string {
    return $message;
  }

  /**
   * Method returning the actual language
   * @return string
   */
  public function getLang():string {
    return $this->lang;
  }

  /**
   * Method for selection of the actual language
   * @param string $language
   */
  public function setLang(string $language){
    $this->lang=$language;
  }
}