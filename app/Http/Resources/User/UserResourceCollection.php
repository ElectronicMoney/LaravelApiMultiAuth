<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResourceCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'header' => [
                'apiKey' => $this->api_token
            ],
            'body' => [
                'id' => $this->id,
                'userRoleId' => $this->user_role_id,
                'name' => $this->name,
                'email' => $this->email,
                'emailVerifiedAt' => $this->email_verified_at,
                'created' => $this->created_at,
                'updated' => $this->updated_at,
            ],
            'href' => [
                'link' => route('admin.users.show', $this->id),
            ],
        ];
    }
}
