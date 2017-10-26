<?php

namespace Vojir\BlankTranslator\DI;

/**
 * Class BlankTranslatorExtension
 * @package Vojir\BlankTranslator\DI
 * @author Stanislav Vojíř
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */
class BlankTranslatorExtension extends \Nette\DI\CompilerExtension{

  public function loadConfiguration(){
    $container = $this->getContainerBuilder();
    $container->addDefinition($this->prefix('translator'))
      ->setType('Vojir\\BlankTranslator\\BlankTranslator');
  }

}
