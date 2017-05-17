<?php

namespace App\Repositories;

use App\Models\UserAddress;

class UserAddressRepository
{
    protected $userAddress;

    public function __construct(UserAddress $userAddress) {
        $this->userAddress = $userAddress;
    }
}
