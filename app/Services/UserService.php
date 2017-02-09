<?php
declare(strict_types = 1);

namespace App\Services;

use Auth;
use App\Models\User;

final class UserService
{

    /**
     * get user parameters by type
     * you can select get parameters what you want
     * default is all parameters
     *
     * @param string $type
     * @param $value
     * @param array $field
     * @return array
     */
    public function getByType(string $type, $value, array $field = ['*']): array
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
        return [];
    }

    /**
     * @param string $type id or email or name
     * @param $value
     * @return bool
     */
    public function ifExistsByType(string $type, $value): bool
    {
        switch ($type) {
            case 'id':
                return $this->ifExistsById($value);

            case 'email':
                return $this->ifExistsByEmail($value);

            case 'name':
                return $this->ifExistsByName($value);
        }
        return false;
    }

    private function ifExistsById(int $id): bool
    {
        return User::where("id", "=", $id)->exists();
    }

    private function ifExistsByEmail(string $email): bool
    {
        return User::where("email", "=", $email)->exists();
    }

    private function ifExistsByName(string $name): bool
    {
        return User::where("name", "=", $name)->exists();
    }

    private function getById(int $id, array $field = ['*']): array
    {
        return User::select($field)->where("id", "=", $id)->first()->toArray();
    }

    private function getByEmail(string $email, array $field = ['*']): array
    {
        return User::select($field)->where("email", "=", $email)->first()->toArray();
    }

    private function getByFacebookId(int $facebook_id, array $field = ['*']): array
    {
        return User::select($field)->where("facebook_id", "=", $facebook_id)->first()->toArray();
    }

    private function getByTwitterId(int $twitter_id, array $field = ['*']): array
    {
        return User::select($field)->where("twitter_id", "=", $twitter_id)->first()->toArray();
    }

    private function getByInstagramId(int $instagram_id, array $field = ['*']): array
    {
        return User::select($field)->where("instagram_id", "=", $instagram_id)->first()->toArray();
    }

    private function getByTumblrId(int $tumblr_id, array $field = ['*']): array
    {
        return User::select($field)->where("tumblr_id", "=", $tumblr_id)->first()->toArray();
    }
}
