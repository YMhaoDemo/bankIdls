<?php
/**
 * SessionApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bank Account APIs
 *
 * simulate the functionality of a basic bank account
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Swagger\Server\Model\Session;

/**
 * SessionApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Swagger\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface SessionApiInterface
{

    /**
     * Operation sessionDelete
     *
     * delete session(Close accout)
     *
     * @param  string $sessionId  session id (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     *
     */
    public function sessionDelete($sessionId, &$responseCode, array &$responseHeaders);

    /**
     * Operation sessionGet
     *
     * get session(Open account)
     *
     * @param  string $accountId  account id (required)
     * @param  string $password  password (required)
     * @param  float $timestamp  timestamp (required)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return Swagger\Server\Model\Session[]
     *
     */
    public function sessionGet($accountId, $password, $timestamp, &$responseCode, array &$responseHeaders);
}
