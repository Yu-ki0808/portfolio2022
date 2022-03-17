<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class EmailVerification extends Model
{
    use HasFactory;

    const SEND_MAIL = 0;   // 仮会員登録のメール送信
    const MAIL_VERIFY = 1; //メールアドレス認証
    const REGISTER = 2;    // 本会員登録完了
    protected $fillable = [
        'email',
        'token',
        'status',
        'expiration_datetime',
    ];
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    public static function build($email, $hours = 1)
    {
        $emailVerification = new self([
            'email' => $email,
            'token' => str::random(250),
            'status' => self::SEND_MAIL,
            'expiration_datetime' => Carbon::now()->addHours($hours),
        ]);
        return $emailVerification;
    }
    public static function findByToken($token)
    {
        return self::where('token', '=', $token)->first();
    }
    public function mailVerify()
    {
        $this->status = self::MAIL_VERIFY;
    }
    public function isRegister()
    {
        return $this->status === self::REGISTER;
    }
    public function register()
    {
        $this->status = self::REGISTER;
    }
}
