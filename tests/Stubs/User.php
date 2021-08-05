<?php

namespace WebDEV\QuickBooks\Stubs;

use WebDEV\QuickBooks\HasQuickBooksToken;

/**
 * Class User
 *
 * Stub for a Laravel User model
 *
 * @package WebDEV\QuickBooks\Stubs
 */
class User
{
    use HasQuickBooksToken;

    public function hasOne($relationship)
    {
        return $relationship;
    }
}
