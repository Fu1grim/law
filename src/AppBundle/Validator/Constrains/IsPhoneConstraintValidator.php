<?php
// src/AppBundle/Validator/Constraints/IsPhoneConstraintValidator.php
namespace AppBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint,

/**
 * @Annotation
 */
 class IsPhoneConstraint extends Constraint
 {
     public $message = "feedback.errors.phone"
 }
