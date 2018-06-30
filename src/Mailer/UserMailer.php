<?php
/*メール送信*/
namespace App\Mailer;

use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{
    public function registration($user)
    {
        $this
            ->to($user->email)
            ->setSubject('ご登録ありがとうございます。')
            ->set('user', $user);
    }
}
?>