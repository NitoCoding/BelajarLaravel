<?php
namespace App\Helpers;
class RoleUser {
    public const ADMIN = 1;
    public const CUSTOMER = 2;
    public const KASIR = 3;
    public const GUEST = 4;
    public static function getLabel($role) {
        return match($role) {
            RoleUser::ADMIN => 'Admin',
            RoleUser::CUSTOMER => 'Customer',
            RoleUser::KASIR => 'Kasir',
            RoleUser::GUEST => 'Guest',
        };
    }
}
