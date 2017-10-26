<?php

namespace Vojir\BlankTranslator;

use Nette\Localization\ITranslator;

/**
 * Interface IMultilanguageTranslator
 * @package Vojir\BlankTranslator
 * @author Stanislav Vojíř
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
interface IMultilanguageTranslator extends ITranslator{

  /**
   * Method returning the actual language
   * @return string
   */
  public function getLang();

}