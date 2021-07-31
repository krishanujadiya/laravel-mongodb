<?php

namespace App\Http\Controllers\Auth\Events\User;

use App\User;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserRestored.
 */
class UserRestored
{
    use SerializesModels;

    /**
     * @var
     */
    public $user;

    /**
     * @param $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
}
