<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
        'first_name',
        'last_name',
        'address1',
        'address2',
        'city',
        'state',
        'country',
        'zip_code',
        'mobile_number',
        'profile_photo_path',
        'professional_summary',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_admin' => 'boolean',
        ];
    }

    public function isAdmin(): bool
    {
        return $this->is_admin;
    }

    public function socialEngagements(): HasMany
    {
        return $this->hasMany(SocialEngagement::class)->orderBy('sort_order')->orderBy('created_at');
    }

    public function activeSocialEngagements(): HasMany
    {
        return $this->socialEngagements()->where('is_active', true);
    }

    public function getProfilePhotoUrlAttribute(): string
    {
        return $this->profile_photo_path
            ? asset("storage/{$this->profile_photo_path}")
            : asset('startbootstrap/assets/img/profile.jpg');
    }
}
