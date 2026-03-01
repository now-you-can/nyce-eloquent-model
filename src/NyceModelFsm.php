<?php

namespace Nyce\DbModels;

use Illuminate\Contracts\Support\MessageProvider;
use Watson\Validating\ValidatingInterface as iWatsonValidation;

/**
 *  NyceModelFsm{}
 *     Extends the base CbmModel{} class, but adds in the Finite State Machine
 *     trait which was also created (with a little bit of opensource community
 *     help) by Nyce Software
 *
 *  @author Osian ap Garth / Nyce Software
 */
class NyceModelFsm extends NyceModel implements MessageProvider, iWatsonValidation {

    /***
     * Here we add in the trait so that other classes can extend from this one
     */
    use tNyceModelFsm;

    /***
     * Constructor to help us with the FsmGraph
     */
    public function __construct (array $attributes = []) {

        parent::__construct ($attributes);

        if ( !isset ($this->_mFsmGraph['property_path']) ) {
            $this->_mFsmGraph['property_path'] = 'fsmstate';
        }

        if ( !isset ($this->_mFsmGraph['states']) ) {
            $this->_mFsmGraph['states'] = explode (',', substr($this->rules['fsmstate'],3));
        }

    }

}
