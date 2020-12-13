<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        $input['phone'] = normalizePhoneNumber($input['phone']);

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['nullable', 'string', 'max:255'],
            'photo' => ['nullable', 'image', 'max:1024'],
            'phone' => ['nullable', 'digits_between:10,11', 'max:255', Rule::unique('users')->ignore($user->id)],
            'address' => ['string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'lastname' => $input['lastname'],
                'phone' => normalizePhoneNumber($input['phone']),
                'address' => $input['address'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $input['phone'] = normalizePhoneNumber($input['phone']);

        $user->forceFill([
            'name' => $input['name'],
            'lastname' => $input['lastname'],
            'email' => $input['email'],
            'phone' => normalizePhoneNumber($input['phone']),
            'address' => $input['address'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
