<?php

namespace SnapBusinessSDK\Util;

class CapiConstants
{
    public const SDK_LANGUAGE = 'php';
    public const SDK_VERSION = '1.0.0';
    public const API_VERSION = 'v2';
    public const PROD_URL = "https://tr.snapchat.com/" . self::API_VERSION;
    public const STAGING_URL = 'https://tr-shadow.snapchat.com/' . self::API_VERSION;
    public const USER_AGENT = 'BusinessSDK/' . self::SDK_LANGUAGE . '/' . self::SDK_VERSION;
    public const USER_AGENT_WITH_PAD = self::USER_AGENT . " (LaunchPAD)";
    public const SDK_VER_HEADER = 'X-CAPI-BusinessSDK';
    public const INTEGRATION_SDK = 'business-sdk';
    public const MAX_BATCH = 2000;
}