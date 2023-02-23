<?php
use App\Models\User;

function current_user()
{
    return auth()->user();
}
