<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Admin
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Admin query()
 */
	class Admin extends \Eloquent {}
}

namespace App{
/**
 * App\Postcode
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postcode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postcode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Postcode query()
 */
	class Postcode extends \Eloquent {}
}

namespace App{
/**
 * App\Temporarytutorinfo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Temporarytutorinfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Temporarytutorinfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Temporarytutorinfo query()
 */
	class Temporarytutorinfo extends \Eloquent {}
}

namespace App{
/**
 * App\TutorCourse
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorCourse newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorCourse newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorCourse query()
 */
	class TutorCourse extends \Eloquent {}
}

namespace App{
/**
 * App\TutorExperience
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorExperience newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorExperience newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorExperience query()
 */
	class TutorExperience extends \Eloquent {}
}

namespace App{
/**
 * App\TutorInfo
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorInfo query()
 */
	class TutorInfo extends \Eloquent {}
}

namespace App{
/**
 * App\TutorReview
 *
 * @property int $id
 * @property int $user_id
 * @property string $r_name
 * @property string $r_email
 * @property int $r_rating
 * @property string $r_comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereRComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereREmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereRName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereRRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorReview whereUserId($value)
 */
	class TutorReview extends \Eloquent {}
}

namespace App{
/**
 * App\Tutorsearch
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutorsearch newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutorsearch newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tutorsearch query()
 */
	class Tutorsearch extends \Eloquent {}
}

namespace App{
/**
 * App\TutorTime
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TutorTime query()
 */
	class TutorTime extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\TutorReview[] $reviews
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

