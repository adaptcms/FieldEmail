<?php

namespace Adaptcms\FieldEmail;

use Adaptcms\Base\Models\Package;

class FieldEmail
{
  /**
  * On Install
  *
  * @return void
  */
  public function onInstall()
  {
    Package::syncPackageFolder(get_class());
  }
}
