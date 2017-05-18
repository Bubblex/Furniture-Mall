<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user) {
        $this->user = $user;
    }

    /**
     * 通过用户名获取用户信息
     *
     * @param [type] $account
     * @return void
     */
    public function byUsername($username) {
        return $this->user->where('username', $username)->first();
    }

    /**
     * 添加一个用户
     *
     * @param array $addUser
     * @return void
     */
    public function add($addUser) {
        $user = new User;
        $user->username = $addUser['username'];
        $user->password = md5($addUser['password']);
        $user->email = $addUser['email'];
        $user->telephone = $addUser['telephone'];
        $result = $user->save();

        if (!$result) {
            return $result;
        }

        return $user;
    }
}
