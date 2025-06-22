<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
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
        'cover_image',
        'image',
        'type',
        'status',
        'job_title',
        'location',

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
        ];
    }
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn($value) =>  ["user", "admin", "service"][$value],
        );
    }
    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    public function services()
    {
        return $this->hasMany(Services::class);  // services table mein user_id hona chahiye
    }
    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function expertises()
    {
        return $this->hasMany(Expertises::class);
    }
    public function serviceProvider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }
    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'reviewee_id');
    }
}
