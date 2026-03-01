<?php

namespace Nyce\DbModels;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Support\MessageProvider;
use Watson\Validating\ValidatingInterface as iWatsonValidation;

/**
 *  NyceUserModel{}
 *  @author Osian ap Garth / Nyce Software
 *
 *  Copied from Laravel's own Illuminate\Foundation\Auth\User user class, only
 *  we need to extend it with our own trait
 */
class NyceUserModel extends Model implements
    AuthenticatableContract, AuthorizableContract, CanResetPasswordContract,
    MessageProvider, iWatsonValidation
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail,
        tNyceModel;
}
