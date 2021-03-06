<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\\Weixin\\WeixinExtendSocialite@handle',
        'SocialiteProviders\\QQ\\QqExtendSocialite@handle',
        'SocialiteProviders\\WeixinWeb\\WeixinWebExtendSocialite@handle',
        'SocialiteProviders\\WeChatServiceAccount\\WeChatServiceAccountExtendSocialite@handle',
        'SocialiteProviders\\WeChatWeb\\WeChatWebExtendSocialite@handle',
        'SocialiteProviders\\GitHub\\GitHubExtendSocialite@handle',
        'SocialiteProviders\\Weibo\\WeiboExtendSocialite@handle',

        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
