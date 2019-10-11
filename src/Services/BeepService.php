<?php

namespace BeeperApi\Services;


class BeepService
{
    public function isBeepLikedByUser($beep, $user = null) : bool
    {
        if (!$user) {
            return false;
        }

        return in_array($user['id'], $beep['likes']);
    }
}