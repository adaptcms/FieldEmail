<?php

namespace Adaptcms\FieldEmail\Field;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use Adaptcms\Fields\FieldType;
use Adaptcms\Base\Models\PackageField;

class FieldEmail extends FieldType
{
  /**
  * Rules applied when record is being stored with a post type.
  *
  * @var array
  */
  public $storeRules = [
    'email'
  ];

  /**
  * Rules applied when record is being updated with a post type.
  *
  * @var array
  */
  public $updateRules = [
    'email'
  ];
}
