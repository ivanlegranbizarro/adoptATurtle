<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NoEmojis implements ValidationRule
{
  /**
   * Run the validation rule.
   *
   * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
   */
  public function validate(string $attribute, mixed $value, Closure $fail): void
  {
    if (preg_match('/\p{Emoji}/u', $value)) {
      $fail('The :attribute cannot contain emojis. Not even the fucking Batman emoji!');
    }
  }
}
