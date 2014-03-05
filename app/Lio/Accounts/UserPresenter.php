<?php namespace Lio\Accounts;

use HTML;
use McCool\LaravelAutoPresenter\BasePresenter;

class UserPresenter extends BasePresenter
{
    public function roleList()
    {
        $roles = $this->getRoles();

        if ( ! $roles->count()) {
            return "none";
        }

        $roleArray = [];

        foreach ($roles as $role) {
            $roleArray[] = $role->name;
        }

        return implode(', ', $roleArray);
    }

    public function profileUrl()
    {
        return action('UsersController@getProfile', [$this->resource->name]);
    }

    public function thumbnail()
    {
        if (substr($this->image, 0, 10) == 'https://gr') {
            return HTML::image($this->image_url . "&size=50", $this->resource->name);
        } else {
            return HTML::image($this->image_url . "?size=50", $this->resource->name);
        }

    }

    public function imageMedium()
    {
        if (substr($this->image, 0, 10) == 'https://gr') {
            return HTML::image($this->image_url . "&size=300", $this->resource->name);
        } else {
            return HTML::image($this->image_url . "?size=300", $this->resource->name);
        }
    }
}