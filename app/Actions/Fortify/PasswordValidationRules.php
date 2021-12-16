<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        return ['required', 'string', new Password, 'confirmed'];
<<<<<<< HEAD
    }
=======
        (new Password)->length(10)

        // Au moins une majuscule
        (new Password)->requireUppercase()

        // Au moins un chiffre
        (new Password)->requireNumeric()

        // Au moins un caractère spécial
        (new Password)->requireSpecialCharacter();
    }

>>>>>>> rod90
}
