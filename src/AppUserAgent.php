<?php

namespace Alirezax5\AppUserAgent;
class AppUserAgent
{
    private string $userAgent;
    public string $appName;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
        $this->detectApp();
    }

    private function detectApp(): void
    {
        $apps = ['HiddifyNext', 'v2rayN', 'Streisand', 'Shadowrocket', 'V2Box', 'v2rayNG', 'Fair', 'NekoBox', 'NekoRay', 'clash-verge', 'sing-box'];

        foreach ($apps as $app) {
            if (strpos($this->userAgent, $app) !== false) {
                $this->appName = $app;
                return;
            }
        }

        $this->appName = 'Unknown';
    }

    public function isHiddifyNext(): bool
    {
        return $this->appName === 'HiddifyNext';
    }

    public function isV2rayN(): bool
    {
        return $this->appName === 'v2rayN';
    }

    public function isStreisand(): bool
    {
        return $this->appName === 'Streisand';
    }

    public function isShadowrocket(): bool
    {
        return $this->appName === 'Shadowrocket';
    }

    public function isV2Box(): bool
    {
        return $this->appName === 'V2Box';
    }

    public function isv2rayNG(): bool
    {
        return $this->appName === 'v2rayNG';
    }

    public function isFair(): bool
    {
        return $this->appName === 'Fair';
    }
    public function isClashVerGe(): bool
    {
        return $this->appName === 'clash-verge';
    }
    public function isNekoBox(): bool
    {
        return $this->appName === 'NekoBox';
    }
    public function isNekoRay(): bool
    {
        return $this->appName === 'NekoRay';
    }
    public function isSingBox(): bool
    {
        return $this->appName === 'sing-box';
    }
}
