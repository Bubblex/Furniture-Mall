<?php

namespace App\Repositories;

use App\Models\UserAddress;

class UserAddressRepository
{
    protected $userAddress;

    public function __construct(UserAddress $userAddress) {
        $this->userAddress = $userAddress;
    }

    /**
     * 添加一条地址
     *
     * @param [number] $id
     * @param [string] $address
     * @return void
     */
    public function add($id, $address) {
        $userAddress = new UserAddress;
        $userAddress->user_id = $id;
        $userAddress->address = $address;
        $userAddress->save();
        return $userAddress;
    }
}
