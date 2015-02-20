<?php
namespace SocialiteProviders\Spotify;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SpotifyExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('spotify', __NAMESPACE__.'\Provider');
    }
}
