<?php
declare(strict_types=1);

namespace App\Services;

use Auth;
use App\Models\User;

final class UserService
{

    public function getByType(string $type, $value, array $field = ['*']) : array
    {
        switch ($type) {
            case 'id':
                return $this->getById($value, $field);
            case 'email':
                return $this->getByEmail($value, $field);
            case 'facebook':
                return $this->getByFacebookId($value, $field);
            case 'twitter':
                return $this->getByTwitterId($value, $field);
            case 'instagram':
                return $this->getByInstagramId($value, $field);
            case 'tumblr_id':
                return $this->getByTumblrId($value, $field);
        }
    }

    public function ifExistsByType(string $type, $value) : bool
    {
        switch ($type) {
            case 'id':
                return $this->ifExistsById($value);

            case 'email':
                return $this->ifExistsByEmail($value);

            case 'name':
                return $this->ifExistsByName($value);
        }
    }


    private function ifExistsById(int $id) : bool
    {
        return (bool)User::where("id", "=", $id)->count();
    }

    private function ifExistsByEmail(string $email) : bool
    {
        return (bool)User::where("email", "=", $email)->count();
    }

    private function ifExistsByName(string $name) : bool
    {
        return (bool)User::where("name", "=", $name)->count();
    }


    private function getById(int $id, array $field = ['*']) : array
    {
        return User::select($field)->where("id", "=", $id)->first()->toArray();
    }

    private function getByEmail(string $email, array $field = ['*']) : array
    {
        return User::select($field)->where("email", "=", $email)->first();
    }

    private function getByFacebookId(int $facebook_id, array $field = ['*']) : array
    {
        return User::select($field)->where("facebook_id", "=", $facebook_id)->first();
    }

    private function getByTwitterId(int $twitter_id, array $field = ['*']) : array
    {
        return User::select($field)->where("twitter_id", "=", $twitter_id)->first();
    }

    private function getByInstagramId(int $instagram_id, array $field = ['*']) : array
    {
        return User::select($field)->where("twitter_id", "=", $instagram_id)->first();
    }

    private function getByTumblrId(int $tumblr_id, array $field = ['*']) : array
    {
        return User::select($field)->where("twitter_id", "=", $tumblr_id)->first();
    }
}
