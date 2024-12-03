<?php

namespace App\Services;

class PasswordService {
    public static function generateRandomPassword($length = 12) {
        return bin2hex(random_bytes($length / 2));
    }
}