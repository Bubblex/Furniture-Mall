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
     * 获取所有用户
     *
     * @return void
     */
    public function all() {
        return $this->user->with('role')->get();
    }

    /**
     * 通过用户名获取用户信息
     *
     * @param [type] $account
     * @return void
     */
    public function getUserByUsername($username) {
        return $this->user->where('username', $username)->first();
    }

    /**
     * 通过用户名获取普通用户
     *
     * @param [type] $username
     * @return void
     */
    public function getGeneralUserByUsername($username) {
        return $this->user
            ->where('username', $username)
            ->where('role_id', 1)
            ->first();
    }

    /**
     * 通过 id 获取数据
     *
     * @param [type] $id
     * @return void
     */
    public function byId($id) {
        return $this->user->find($id);
    }

    /**
     * 添加一个普通用户
     *
     * @param array $addUser
     * @return void
     */
    public function addGeneralUser($addUser) {
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

    /**
     * 更新用户表
     *
     * @param [type] $id
     * @param [type] $update
     * @return void
     */
    public function update($id, $update) {
        $this->user->where('id', $id)->update($update);
    }
}
