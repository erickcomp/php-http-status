<?php
declare(strict_types=1);

namespace erickcomp\Http;

/**
 * Provides codes and reason phrases for the official HTTP status as class constants
 */
class Status
{
	public const HTTP_100_CONTINUE_CODE   = 100;
	public const HTTP_100_CONTINUE_PHRASE = 'Continue';

	public const HTTP_101_SWITCHING_PROTOCOLS_CODE   = 101;
	public const HTTP_101_SWITCHING_PROTOCOLS_PHRASE = 'Switching Protocols';

	//WebDAV; RFC 2518
	public const HTTP_102_PROCESSING_CODE   = 102;
	public const HTTP_102_PROCESSING_PHRASE = 'Processing';

	//RFC 8297
	public const HTTP_103_EARLY_HINTS_CODE   = 103;
	public const HTTP_103_EARLY_HINTS_PHRASE = 'Early Hints';

	public const HTTP_200_OK_CODE   = 200;
	public const HTTP_200_OK_PHRASE = 'OK';

	public const HTTP_201_CREATED_CODE   = 201;
	public const HTTP_201_CREATED_PHRASE = 'Created';

	public const HTTP_202_ACCEPTED_CODE   = 202;
	public const HTTP_202_ACCEPTED_PHRASE = 'Accepted';

	//since HTTP/1.1
	public const HTTP_203_NON_AUTHORITATIVE_INFORMATION_CODE   = 203;
	public const HTTP_203_NON_AUTHORITATIVE_INFORMATION_PHRASE = 'Non-Authoritative Information';

	public const HTTP_204_NO_CONTENT_CODE   = 204;
	public const HTTP_204_NO_CONTENT_PHRASE = 'No Content';

	public const HTTP_205_RESET_CONTENT_CODE   = 205;
	public const HTTP_205_RESET_CONTENT_PHRASE = 'Reset Content';

	//RFC 7233
	public const HTTP_206_PARTIAL_CONTENT_CODE   = 206;
	public const HTTP_206_PARTIAL_CONTENT_PHRASE = 'Partial Content';

	//WebDAV; RFC 4918
	public const HTTP_207_MULTI_STATUS_CODE   = 207;
	public const HTTP_207_MULTI_STATUS_PHRASE = 'Multi-Status';

	//WebDAV; RFC 5842
	public const HTTP_208_ALREADY_REPORTED_CODE   = 208;
	public const HTTP_208_ALREADY_REPORTED_PHRASE = 'Already Reported';

	//RFC 3229
	public const HTTP_226_IM_USED_CODE   = 226;
	public const HTTP_226_IM_USED_PHRASE = 'IM Used';

	public const HTTP_300_MULTIPLE_CHOICES_CODE   = 300;
	public const HTTP_300_MULTIPLE_CHOICES_PHRASE = 'Multiple Choices';

	public const HTTP_301_MOVED_PERMANENTLY_CODE   = 301;
	public const HTTP_301_MOVED_PERMANENTLY_PHRASE = 'Moved Permanently';

	//Previously "Moved temporarily"
	public const HTTP_302_FOUND_CODE   = 302;
	public const HTTP_302_FOUND_PHRASE = 'Found';

	//since HTTP/1.1
	public const HTTP_303_SEE_OTHER_CODE   = 303;
	public const HTTP_303_SEE_OTHER_PHRASE = 'See Other';

	//RFC 7232
	public const HTTP_304_NOT_MODIFIED_CODE   = 304;
	public const HTTP_304_NOT_MODIFIED_PHRASE = 'Not Modified';

	//since HTTP/1.1
	public const HTTP_305_USE_PROXY_CODE   = 305;
	public const HTTP_305_USE_PROXY_PHRASE = 'Use Proxy';

	public const HTTP_306_SWITCH_PROXY_CODE   = 306;
	public const HTTP_306_SWITCH_PROXY_PHRASE = 'Switch Proxy';

	//since HTTP/1.1
	public const HTTP_307_TEMPORARY_REDIRECT_CODE   = 307;
	public const HTTP_307_TEMPORARY_REDIRECT_PHRASE = 'Temporary Redirect';

	//RFC 7538
	public const HTTP_308_PERMANENT_REDIRECT_CODE   = 308;
	public const HTTP_308_PERMANENT_REDIRECT_PHRASE = 'Permanent Redirect';

	public const HTTP_400_BAD_REQUEST_CODE   = 400;
	public const HTTP_400_BAD_REQUEST_PHRASE = 'Bad Request';

	//RFC 7235
	public const HTTP_401_UNAUTHORIZED_CODE   = 401;
	public const HTTP_401_UNAUTHORIZED_PHRASE = 'Unauthorized';

	public const HTTP_402_PAYMENT_REQUIRED_CODE   = 402;
	public const HTTP_402_PAYMENT_REQUIRED_PHRASE = 'Payment Required';

	public const HTTP_403_FORBIDDEN_CODE   = 403;
	public const HTTP_403_FORBIDDEN_PHRASE = 'Forbidden';

	public const HTTP_404_NOT_FOUND_CODE   = 404;
	public const HTTP_404_NOT_FOUND_PHRASE = 'Not Found';

	public const HTTP_405_METHOD_NOT_ALLOWED_CODE   = 405;
	public const HTTP_405_METHOD_NOT_ALLOWED_PHRASE = 'Method Not Allowed';

	public const HTTP_406_NOT_ACCEPTABLE_CODE   = 406;
	public const HTTP_406_NOT_ACCEPTABLE_PHRASE = 'Not Acceptable';

	//RFC 7235
	public const HTTP_407_PROXY_AUTHENTICATION_REQUIRED_CODE   = 407;
	public const HTTP_407_PROXY_AUTHENTICATION_REQUIRED_PHRASE = 'Proxy Authentication Required';

	public const HTTP_408_REQUEST_TIMEOUT_CODE   = 408;
	public const HTTP_408_REQUEST_TIMEOUT_PHRASE = 'Request Timeout';

	public const HTTP_409_CONFLICT_CODE   = 409;
	public const HTTP_409_CONFLICT_PHRASE = 'Conflict';

	public const HTTP_410_GONE_CODE   = 410;
	public const HTTP_410_GONE_PHRASE = 'Gone';

	public const HTTP_411_LENGTH_REQUIRED_CODE   = 411;
	public const HTTP_411_LENGTH_REQUIRED_PHRASE = 'Length Required';

	//RFC 7232
	public const HTTP_412_PRECONDITION_FAILED_CODE   = 412;
	public const HTTP_412_PRECONDITION_FAILED_PHRASE = 'Precondition Failed';

	//RFC 7231
	public const HTTP_413_PAYLOAD_TOO_LARGE_CODE   = 413;
	public const HTTP_413_PAYLOAD_TOO_LARGE_PHRASE = 'Payload Too Large';

	//RFC 7231
	public const HTTP_414_URI_TOO_LONG_CODE   = 414;
	public const HTTP_414_URI_TOO_LONG_PHRASE = 'URI Too Long';

	//RFC 7231
	public const HTTP_415_UNSUPPORTED_MEDIA_TYPE_CODE   = 415;
	public const HTTP_415_UNSUPPORTED_MEDIA_TYPE_PHRASE = 'Unsupported Media Type';

	//RFC 7233
	public const HTTP_416_RANGE_NOT_SATISFIABLE_CODE   = 416;
	public const HTTP_416_RANGE_NOT_SATISFIABLE_PHRASE = 'Range Not Satisfiable';

	public const HTTP_417_EXPECTATION_FAILED_CODE   = 417;
	public const HTTP_417_EXPECTATION_FAILED_PHRASE = 'Expectation Failed';

	//RFC 2324, RFC 7168
	public const HTTP_418_IM_A_TEAPOT_CODE   = 418;
	public const HTTP_418_IM_A_TEAPOT_PHRASE = 'I\'m a teapot';

	//RFC 7540
	public const HTTP_421_MISDIRECTED_REQUEST_CODE   = 421;
	public const HTTP_421_MISDIRECTED_REQUEST_PHRASE = 'Misdirected Request';

	//WebDAV; RFC 4918
	public const HTTP_422_UNPROCESSABLE_ENTITY_CODE   = 422;
	public const HTTP_422_UNPROCESSABLE_ENTITY_PHRASE = 'Unprocessable Entity';

	//WebDAV; RFC 4918
	public const HTTP_423_LOCKED_CODE   = 423;
	public const HTTP_423_LOCKED_PHRASE = 'Locked';

	//WebDAV; RFC 4918
	public const HTTP_424_FAILED_DEPENDENCY_CODE   = 424;
	public const HTTP_424_FAILED_DEPENDENCY_PHRASE = 'Failed Dependency';

	//RFC 8470
	public const HTTP_425_TOO_EARLY_CODE   = 425;
	public const HTTP_425_TOO_EARLY_PHRASE = 'Too Early';

	public const HTTP_426_UPGRADE_REQUIRED_CODE   = 426;
	public const HTTP_426_UPGRADE_REQUIRED_PHRASE = 'Upgrade Required';

	//RFC 6585
	public const HTTP_428_PRECONDITION_REQUIRED_CODE   = 428;
	public const HTTP_428_PRECONDITION_REQUIRED_PHRASE = 'Precondition Required';

	//RFC 6585
	public const HTTP_429_TOO_MANY_REQUESTS_CODE   = 429;
	public const HTTP_429_TOO_MANY_REQUESTS_PHRASE = 'Too Many Requests';

	//RFC 6585
	public const HTTP_431_REQUEST_HEADER_FIELDS_TOO_LARGE_CODE   = 431;
	public const HTTP_431_REQUEST_HEADER_FIELDS_TOO_LARGE_PHRASE = 'Request Header Fields Too Large';

	//RFC 7725
	public const HTTP_451_UNAVAILABLE_FOR_LEGAL_REASONS_CODE   = 451;
	public const HTTP_451_UNAVAILABLE_FOR_LEGAL_REASONS_PHRASE = 'Unavailable For Legal Reasons';

	public const HTTP_500_INTERNAL_SERVER_ERROR_CODE   = 500;
	public const HTTP_500_INTERNAL_SERVER_ERROR_PHRASE = 'Internal Server Error';

	public const HTTP_501_NOT_IMPLEMENTED_CODE   = 501;
	public const HTTP_501_NOT_IMPLEMENTED_PHRASE = 'Not Implemented';

	public const HTTP_502_BAD_GATEWAY_CODE   = 502;
	public const HTTP_502_BAD_GATEWAY_PHRASE = 'Bad Gateway';

	public const HTTP_503_SERVICE_UNAVAILABLE_CODE   = 503;
	public const HTTP_503_SERVICE_UNAVAILABLE_PHRASE = 'Service Unavailable';

	public const HTTP_504_GATEWAY_TIMEOUT_CODE   = 504;
	public const HTTP_504_GATEWAY_TIMEOUT_PHRASE = 'Gateway Timeout';

	public const HTTP_505_HTTP_VERSION_NOT_SUPPORTED_CODE   = 505;
	public const HTTP_505_HTTP_VERSION_NOT_SUPPORTED_PHRASE = 'HTTP Version Not Supported';

	//RFC 2295
	public const HTTP_506_VARIANT_ALSO_NEGOTIATES_CODE   = 506;
	public const HTTP_506_VARIANT_ALSO_NEGOTIATES_PHRASE = 'Variant Also Negotiates';

	//WebDAV; RFC 4918
	public const HTTP_507_INSUFFICIENT_STORAGE_CODE   = 507;
	public const HTTP_507_INSUFFICIENT_STORAGE_PHRASE = 'Insufficient Storage';

	//WebDAV; RFC 5842
	public const HTTP_508_LOOP_DETECTED_CODE   = 508;
	public const HTTP_508_LOOP_DETECTED_PHRASE = 'Loop Detected';

	//RFC 2774
	public const HTTP_510_NOT_EXTENDED_CODE   = 510;
	public const HTTP_510_NOT_EXTENDED_PHRASE = 'Not Extended';

	//RFC 6585
	public const HTTP_511_NETWORK_AUTHENTICATION_REQUIRED_CODE   = 511;
	public const HTTP_511_NETWORK_AUTHENTICATION_REQUIRED_PHRASE = 'Network Authentication Required';
}
