<?php

namespace Epignosis\eFrontPro\Sdk\API\Handler;

use Epignosis\eFrontPro\Sdk\API\Abstraction\AbstractAPI;

/**
 * Class JobList
 *
 * @author  EPIGNOSIS
 * @package Epignosis\eFrontPro\Sdk
 * @since   1.0.0
 * @version 2.1.0
 */
class JobList extends AbstractAPI
{
  /**
   * Returns the complete list of job.
   *
   * @since 1.0.0
   *
   * @throws \Exception
   *
   * @return array (Associative)
   */
  public function GetAll()
  {
    return $this->_requestHandler->Get (
      $this->_GetAPICallURL('/Jobs'), $this->_apiKey
    );
  }
}
