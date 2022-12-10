<?php

namespace App\Models;

use CodeIgniter\Model;

class Musers extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $useSoftDeletes = true;
    protected $returnType = 'object';

    protected $allowedFields = [
        'fullname', 'email', 'username', 'user_image', 'password_hash', 'reset_hash', 'reset_at', 'reset_expires', 'activate_hash',
        'status', 'status_message', 'active', 'force_pass_reset', 'permissions', 'deleted_at',
    ];

    public function getCounterUsers()
    {
        return $this->select('users.id')
            ->where('active', 1)
            ->countAllResults();
    }

    public function getRoleUser()
    {
        return $this->select('users.id as userid, fullname, name, user_image')
            ->join('auth_groups_users', 'auth_groups_users.user_id = users.id')
            ->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id')
            ->where('users.id', user_id())
            ->first();
    }

    public function getUsersWithRoles($id = false)
    {
        if ($id === false) {
            return $this->select('users.id as userid, username, email, fullname, user_image, nidn, id_sinta, prodi_dosen, gs.group_id, ag.name, ag.id as id_group')
                ->join('auth_groups_users gs', 'users.id = gs.user_id')
                ->join('auth_groups ag', 'ag.id = gs.group_id')
                ->where('active', 1)
                ->orderBy('users.fullname', 'ASC')
                ->findAll();
        } else {
            return $this->where(['id' => $id])->first();
        }
    }

    public function getUsersWhereRole($role = false)
    {
        return $this->select('users.id as userid, username, email, fullname, user_image, nidn, id_sinta, prodi_dosen, gs.group_id, ag.name, ag.id as id_group')
            ->join('auth_groups_users gs', 'users.id = gs.user_id')
            ->join('auth_groups ag', 'ag.id = gs.group_id')
            ->where('ag.name', $role)
            ->where('active', 1)
            ->orderBy('users.fullname', 'ASC')
            ->findAll();
    }

    public function getUserWhereId($id = false)
    {
        return $this->select('users.id as userid, fullname')
            ->where('users.id', $id)
            ->first();
    }

    public function getUsersWithRoleWhereId()
    {
        return $this->select('users.id as userid, username, email, fullname, user_image, nidn, id_sinta, prodi_dosen, gs.group_id, ag.name, ag.id as id_group')
            ->join('auth_groups_users gs', 'users.id = gs.user_id')
            ->join('auth_groups ag', 'ag.id = gs.group_id')
            ->where('users.id', user_id())
            ->findAll();
    }

    public function getUsersWhereRoles()
    {
        return $this->select('users.id as userid, username, email, fullname, user_image, nidn, id_sinta, prodi_dosen, gs.group_id, ag.name, ag.id as id_group')
            ->join('auth_groups_users gs', 'users.id = gs.user_id')
            ->join('auth_groups ag', 'ag.id = gs.group_id')
            ->where('gs.group_id', 3)
            ->orderBy('users.fullname', 'ASC')
            ->findAll();
    }
}