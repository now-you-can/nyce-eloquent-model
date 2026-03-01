<?php

namespace Nyce\DbModels;

use Illuminate\Contracts\Support\MessageProvider;
use Illuminate\Database\Eloquent\Model    as EloquentModel;
use Watson\Validating\ValidatingInterface as iWatsonValidation;

/**
 *  NyceModel{}
 *
 *  @author Osian ap Garth / Nyce Software
 */
class NyceModel extends EloquentModel implements MessageProvider, iWatsonValidation {

    use tNyceModel;

}
