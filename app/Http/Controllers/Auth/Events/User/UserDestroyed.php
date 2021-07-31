<?php

namespace App\Http\Controllers\Auth\Events\User;

use App\User;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserDestroyed.
 */
class UserDestroyed
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
