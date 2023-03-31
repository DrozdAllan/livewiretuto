<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Ebook
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $title
 * @property string $description
 * @property float $amount
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebook whereUpdatedAt($value)
 */
	class Ebook extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Ebookss
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property float $amount
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ebookss whereTitle($value)
 */
	class Ebookss extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

