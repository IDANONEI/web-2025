<?php
function isValidUserId($userIdFilter, $usersById) {
    return $userIdFilter !== null && isset($usersById[$userIdFilter]);
}
