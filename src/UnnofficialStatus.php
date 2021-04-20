<?php
declare(strict_types=1);

namespace erickcomp\Http;

/**
 * Provides codes and reason phrases for the official (and some unnoficial)
 * HTTP status as class constants
 */

class UnnofficialStatus extends Status
{
    public const HTTP_103_CHECKPOINT_CODE   = 103;
    public const HTTP_103_CHECKPOINT_PHRASE = 'Checkpoint';

    //Apache Web Server
    public const HTTP_218_THIS_IS_FINE_CODE   = 218;
    public const HTTP_218_THIS_IS_FINE_PHRASE = 'This is fine';

    //Laravel Framework
    public const HTTP_419_PAGE_EXPIRED_CODE   = 419;
    public const HTTP_419_PAGE_EXPIRED_PHRASE = 'Page Expired';

    //Twitter
    public const HTTP_420_ENHANCE_YOUR_CALM_CODE   = 420;
    public const HTTP_420_ENHANCE_YOUR_CALM_PHRASE = 'Enhance Your Calm';

    //Shopify
    public const HTTP_430_REQUEST_HEADER_FIELDS_TOO_LARGE_CODE   = 430;
    public const HTTP_430_REQUEST_HEADER_FIELDS_TOO_LARGE_PHRASE = 'Request Header Fields Too Large';

    //Microsoft
    public const HTTP_450_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS_CODE   = 450;
    public const HTTP_450_BLOCKED_BY_WINDOWS_PARENTAL_CONTROLS_PHRASE = 'Blocked by Windows Parental Controls';

    //Esri
    public const HTTP_498_INVALID_TOKEN_CODE   = 498;
    public const HTTP_498_INVALID_TOKEN_PHRASE = 'Invalid Token';

    //nginx
    public const HTTP_499_CLIENT_CLOSED_REQUEST_CODE   = 499;
    public const HTTP_499_CLIENT_CLOSED_REQUEST_PHRASE = 'Client Closed Request';

    //Apache Web Server/cPanel
    public const HTTP_509_BANDWIDTH_LIMIT_EXCEEDED_CODE   = 509;
    public const HTTP_509_BANDWIDTH_LIMIT_EXCEEDED_PHRASE = 'Bandwidth Limit Exceeded';

    //Cloudflare
    public const HTTP_526_INVALID_SSL_CERTIFICATE_CODE   = 526;
    public const HTTP_526_INVALID_SSL_CERTIFICATE_PHRASE = 'Invalid SSL Certificate';

    //Qualys in the SSLLabs
    public const HTTP_529_SITE_IS_OVERLOADED_CODE   = 529;
    public const HTTP_529_SITE_IS_OVERLOADED_PHRASE = 'Site is overloaded';

    //Pantheon web platform
    public const HTTP_530_SITE_IS_FROZEN_CODE   = 530;
    public const HTTP_530_SITE_IS_FROZEN_PHRASE = 'Site is frozen';

    //Informal convention
    public const HTTP_598_NETWORK_READ_TIMEOUT_ERROR_CODE   = 598;
    public const HTTP_598_NETWORK_READ_TIMEOUT_ERROR_PHRASE = 'Network read timeout error';

    //IIS
    public const HTTP_440_LOGIN_TIME_OUT_CODE   = 440;
    public const HTTP_440_LOGIN_TIME_OUT_PHRASE = 'Login Time-out';

    //IIS
    public const HTTP_449_RETRY_WITH_CODE   = 449;
    public const HTTP_449_RETRY_WITH_PHRASE = 'Retry With';

    //IIS
    public const HTTP_451_REDIRECT_CODE   = 451;
    public const HTTP_451_REDIRECT_PHRASE = 'Redirect';

    //nginx
    public const HTTP_444_NO_RESPONSE_CODE   = 444;
    public const HTTP_444_NO_RESPONSE_PHRASE = 'No Response';

    //nginx
    public const HTTP_494_REQUEST_HEADER_TOO_LARGE_CODE   = 494;
    public const HTTP_494_REQUEST_HEADER_TOO_LARGE_PHRASE = 'Request header too large';

    //nginx
    public const HTTP_495_SSL_CERTIFICATE_ERROR_CODE   = 495;
    public const HTTP_495_SSL_CERTIFICATE_ERROR_PHRASE = 'SSL Certificate Error';

    //nginx
    public const HTTP_496_SSL_CERTIFICATE_REQUIRED_CODE   = 496;
    public const HTTP_496_SSL_CERTIFICATE_REQUIRED_PHRASE = 'SSL Certificate Required';

    //nginx
    public const HTTP_497_HTTP_REQUEST_SENT_TO_HTTPS_PORT_CODE   = 497;
    public const HTTP_497_HTTP_REQUEST_SENT_TO_HTTPS_PORT_PHRASE = 'HTTP Request Sent to HTTPS Port';

    //Cloudflare
    public const HTTP_520_WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR_CODE   = 520;
    public const HTTP_520_WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR_PHRASE = 'Web Server Returned an Unknown Error';

    //Cloudflare
    public const HTTP_521_WEB_SERVER_IS_DOWN_CODE   = 521;
    public const HTTP_521_WEB_SERVER_IS_DOWN_PHRASE = 'Web Server Is Down';

    //Cloudflare
    public const HTTP_522_CONNECTION_TIMED_OUT_CODE   = 522;
    public const HTTP_522_CONNECTION_TIMED_OUT_PHRASE = 'Connection Timed Out';

    //Cloudflare
    public const HTTP_523_ORIGIN_IS_UNREACHABLE_CODE   = 523;
    public const HTTP_523_ORIGIN_IS_UNREACHABLE_PHRASE = 'Origin Is Unreachable';

    //Cloudflare
    public const HTTP_524_A_TIMEOUT_OCCURRED_CODE   = 524;
    public const HTTP_524_A_TIMEOUT_OCCURRED_PHRASE = 'A Timeout Occurred';

    //Cloudflare
    public const HTTP_525_SSL_HANDSHAKE_FAILED_CODE   = 525;
    public const HTTP_525_SSL_HANDSHAKE_FAILED_PHRASE = 'SSL Handshake Failed';

    //Cloudflare
    public const HTTP_527_RAILGUN_ERROR_CODE   = 527;
    public const HTTP_527_RAILGUN_ERROR_PHRASE = 'Railgun Error';
}
