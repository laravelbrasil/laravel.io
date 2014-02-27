<?php

use Lio\Accounts\User;
use Lio\Accounts\UserRepository;
use Lio\Accounts\RoleRepository;
//use BaseController;
//use Input;

class AdminUsersController extends BaseController
{
    private $users;
    private $roles;

    public function __construct(UserRepository $users, RoleRepository $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    public function getIndex()
    {
        $users = $this->users->getAllPaginated(30);
        $this->view('admin.users.index', compact('users'));
    }

    public function getEdit($userId)
    {
        $user  = $this->users->requireById($userId);
        $roles = $this->roles->getAll();

        $this->view('admin.users.edit', compact('user', 'roles'));
    }

    public function postEdit($userId)
    {
        $user = $this->users->requireById($userId);

        $user->fill(Input::all());
        if ( ! Input::has('is_banned')) {
            $user->is_banned = 0;
        }

        if ( ! $user->isValid()) {
            return $this->redirectBack(['errors' => $user->getErrors()]);
        }

        $this->users->save($user);
        $user->roles = Input::get('roles');

        return $this->redirectAction('Admin\UsersController@getIndex', ['success' => 'The user has been saved.']);
    }
}
