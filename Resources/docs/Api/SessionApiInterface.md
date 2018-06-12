# Swagger\Server\Api\SessionApiInterface

All URIs are relative to *http://yuminghao.top:8090/simulateBank*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sessionDelete**](SessionApiInterface.md#sessionDelete) | **DELETE** /session | delete session(Close accout)
[**sessionGet**](SessionApiInterface.md#sessionGet) | **GET** /session | get session(Open account)


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.session:
        class: Acme\MyBundle\Api\SessionApi
        tags:
            - { name: "swagger_server.api", api: "session" }
    # ...
```

## **sessionDelete**
> sessionDelete($sessionId)

delete session(Close accout)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SessionApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\SessionApiInterface;

class SessionApi implements SessionApiInterface
{

    // ...

    /**
     * Implementation of SessionApiInterface#sessionDelete
     */
    public function sessionDelete($sessionId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sessionId** | **string**| session id |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **sessionGet**
> Swagger\Server\Model\Session sessionGet($accountId, $password, $timestamp)

get session(Open account)

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SessionApiInterface.php

namespace Acme\MyBundle\Api;

use Swagger\Server\Api\SessionApiInterface;

class SessionApi implements SessionApiInterface
{

    // ...

    /**
     * Implementation of SessionApiInterface#sessionGet
     */
    public function sessionGet($accountId, $password, $timestamp)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountId** | **string**| account id |
 **password** | **string**| password |
 **timestamp** | **float**| timestamp |

### Return type

[**Swagger\Server\Model\Session**](../Model/Session.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

