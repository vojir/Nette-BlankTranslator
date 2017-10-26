<?php

namespace Vojir\BlankTranslator;


/**
 * Interface ITranslator
 * @package Vojir\BlankTranslator
 * @author Stanislav Vojíř
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
interface ITranslator extends \Nette\Localization\ITranslator{

  /**
   * Method returning the actual language
   * @return string
   */
  public function getLang();

  /**
   * Method for selection of the actual language
   * @param string $language
   */
  public function setLang($language);

}