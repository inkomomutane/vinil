<?php

namespace App\Data;

use App\Enum\MaritalStatus;
use App\Enum\Sex;
use App\Models\User;
use Spatie\LaravelData\Data;

/**
 * @typescript
 */
class ProfileDto extends Data
{
    public function __construct(
        public ?string $id,
        public ?string $name,
        public ?string $email,
        public ?string $email_verified_at,
    ) {}

    public static function fromModel(User $user): self
    {

        return new self(
            id: (string) $user->id,
            name: $user->name,
            email: $user->email,
            email_verified_at: $user->email_verified_at?->toDateTimeString(),
        );
    }
}
