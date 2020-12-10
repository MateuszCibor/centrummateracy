<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit267571b8f837a32eb30cb6819dea423b
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'P' => 
        array (
            'PrestaShop\\Module\\Mbo\\' => 22,
            'PrestaShop\\CircuitBreaker\\' => 26,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'PrestaShop\\Module\\Mbo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PrestaShop\\CircuitBreaker\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/circuit-breaker/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'GuzzleHttp\\BatchResults' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BatchResults.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Collection' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Collection.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Event\\AbstractEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractEvent.php',
        'GuzzleHttp\\Event\\AbstractRequestEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRequestEvent.php',
        'GuzzleHttp\\Event\\AbstractRetryableEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRetryableEvent.php',
        'GuzzleHttp\\Event\\AbstractTransferEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractTransferEvent.php',
        'GuzzleHttp\\Event\\BeforeEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/BeforeEvent.php',
        'GuzzleHttp\\Event\\CompleteEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/CompleteEvent.php',
        'GuzzleHttp\\Event\\Emitter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/Emitter.php',
        'GuzzleHttp\\Event\\EmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EmitterInterface.php',
        'GuzzleHttp\\Event\\EndEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EndEvent.php',
        'GuzzleHttp\\Event\\ErrorEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ErrorEvent.php',
        'GuzzleHttp\\Event\\EventInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EventInterface.php',
        'GuzzleHttp\\Event\\HasEmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterInterface.php',
        'GuzzleHttp\\Event\\HasEmitterTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterTrait.php',
        'GuzzleHttp\\Event\\ListenerAttacherTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ListenerAttacherTrait.php',
        'GuzzleHttp\\Event\\ProgressEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ProgressEvent.php',
        'GuzzleHttp\\Event\\RequestEvents' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/RequestEvents.php',
        'GuzzleHttp\\Event\\SubscriberInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/SubscriberInterface.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\CouldNotRewindStreamException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/CouldNotRewindStreamException.php',
        'GuzzleHttp\\Exception\\ParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ParseException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\StateException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/StateException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\Exception\\XmlParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/XmlParseException.php',
        'GuzzleHttp\\HasDataTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HasDataTrait.php',
        'GuzzleHttp\\Message\\AbstractMessage' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AbstractMessage.php',
        'GuzzleHttp\\Message\\AppliesHeadersInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AppliesHeadersInterface.php',
        'GuzzleHttp\\Message\\FutureResponse' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/FutureResponse.php',
        'GuzzleHttp\\Message\\MessageFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactory.php',
        'GuzzleHttp\\Message\\MessageFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactoryInterface.php',
        'GuzzleHttp\\Message\\MessageInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageInterface.php',
        'GuzzleHttp\\Message\\MessageParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageParser.php',
        'GuzzleHttp\\Message\\Request' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Request.php',
        'GuzzleHttp\\Message\\RequestInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/RequestInterface.php',
        'GuzzleHttp\\Message\\Response' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Response.php',
        'GuzzleHttp\\Message\\ResponseInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/ResponseInterface.php',
        'GuzzleHttp\\Mimetypes' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Mimetypes.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\Post\\MultipartBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/MultipartBody.php',
        'GuzzleHttp\\Post\\PostBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBody.php',
        'GuzzleHttp\\Post\\PostBodyInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBodyInterface.php',
        'GuzzleHttp\\Post\\PostFile' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFile.php',
        'GuzzleHttp\\Post\\PostFileInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFileInterface.php',
        'GuzzleHttp\\Query' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Query.php',
        'GuzzleHttp\\QueryParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/QueryParser.php',
        'GuzzleHttp\\RequestFsm' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestFsm.php',
        'GuzzleHttp\\RingBridge' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RingBridge.php',
        'GuzzleHttp\\Ring\\Client\\ClientUtils' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/ClientUtils.php',
        'GuzzleHttp\\Ring\\Client\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlFactory.php',
        'GuzzleHttp\\Ring\\Client\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlHandler.php',
        'GuzzleHttp\\Ring\\Client\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlMultiHandler.php',
        'GuzzleHttp\\Ring\\Client\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/Middleware.php',
        'GuzzleHttp\\Ring\\Client\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/MockHandler.php',
        'GuzzleHttp\\Ring\\Client\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/StreamHandler.php',
        'GuzzleHttp\\Ring\\Core' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Core.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledException.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledFutureAccessException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledFutureAccessException.php',
        'GuzzleHttp\\Ring\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/ConnectException.php',
        'GuzzleHttp\\Ring\\Exception\\RingException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/RingException.php',
        'GuzzleHttp\\Ring\\Future\\BaseFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/BaseFutureTrait.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureArray.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureValue.php',
        'GuzzleHttp\\Ring\\Future\\FutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArray.php',
        'GuzzleHttp\\Ring\\Future\\FutureArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArrayInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureValue.php',
        'GuzzleHttp\\Ring\\Future\\MagicFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/MagicFutureTrait.php',
        'GuzzleHttp\\Stream\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AppendStream.php',
        'GuzzleHttp\\Stream\\AsyncReadStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AsyncReadStream.php',
        'GuzzleHttp\\Stream\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/BufferStream.php',
        'GuzzleHttp\\Stream\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/CachingStream.php',
        'GuzzleHttp\\Stream\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/DroppingStream.php',
        'GuzzleHttp\\Stream\\Exception\\CannotAttachException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/CannotAttachException.php',
        'GuzzleHttp\\Stream\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/SeekException.php',
        'GuzzleHttp\\Stream\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/FnStream.php',
        'GuzzleHttp\\Stream\\GuzzleStreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/streams/src/GuzzleStreamWrapper.php',
        'GuzzleHttp\\Stream\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/InflateStream.php',
        'GuzzleHttp\\Stream\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LazyOpenStream.php',
        'GuzzleHttp\\Stream\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LimitStream.php',
        'GuzzleHttp\\Stream\\MetadataStreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/MetadataStreamInterface.php',
        'GuzzleHttp\\Stream\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NoSeekStream.php',
        'GuzzleHttp\\Stream\\NullStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NullStream.php',
        'GuzzleHttp\\Stream\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/PumpStream.php',
        'GuzzleHttp\\Stream\\Stream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Stream.php',
        'GuzzleHttp\\Stream\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Stream\\StreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamInterface.php',
        'GuzzleHttp\\Stream\\Utils' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Utils.php',
        'GuzzleHttp\\Subscriber\\Cookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Cookie.php',
        'GuzzleHttp\\Subscriber\\History' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/History.php',
        'GuzzleHttp\\Subscriber\\HttpError' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/HttpError.php',
        'GuzzleHttp\\Subscriber\\Mock' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Mock.php',
        'GuzzleHttp\\Subscriber\\Prepare' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Prepare.php',
        'GuzzleHttp\\Subscriber\\Redirect' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Redirect.php',
        'GuzzleHttp\\ToArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ToArrayInterface.php',
        'GuzzleHttp\\Transaction' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Transaction.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Url' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Url.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'PrestaShop\\CircuitBreaker\\AdvancedCircuitBreaker' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/AdvancedCircuitBreaker.php',
        'PrestaShop\\CircuitBreaker\\AdvancedCircuitBreakerFactory' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/AdvancedCircuitBreakerFactory.php',
        'PrestaShop\\CircuitBreaker\\Client\\GuzzleClient' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Client/GuzzleClient.php',
        'PrestaShop\\CircuitBreaker\\Contract\\CircuitBreakerInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/CircuitBreakerInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\ClientInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/ClientInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\FactoryInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/FactoryInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\FactorySettingsInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/FactorySettingsInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\PlaceInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/PlaceInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\StorageInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/StorageInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\SystemInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/SystemInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\TransactionInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/TransactionInterface.php',
        'PrestaShop\\CircuitBreaker\\Contract\\TransitionDispatcherInterface' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Contract/TransitionDispatcherInterface.php',
        'PrestaShop\\CircuitBreaker\\Event\\TransitionEvent' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Event/TransitionEvent.php',
        'PrestaShop\\CircuitBreaker\\Exception\\CircuitBreakerException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/CircuitBreakerException.php',
        'PrestaShop\\CircuitBreaker\\Exception\\InvalidPlaceException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/InvalidPlaceException.php',
        'PrestaShop\\CircuitBreaker\\Exception\\InvalidTransactionException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/InvalidTransactionException.php',
        'PrestaShop\\CircuitBreaker\\Exception\\TransactionNotFoundException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/TransactionNotFoundException.php',
        'PrestaShop\\CircuitBreaker\\Exception\\UnavailableServiceException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/UnavailableServiceException.php',
        'PrestaShop\\CircuitBreaker\\Exception\\UnsupportedMethodException' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Exception/UnsupportedMethodException.php',
        'PrestaShop\\CircuitBreaker\\FactorySettings' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/FactorySettings.php',
        'PrestaShop\\CircuitBreaker\\PartialCircuitBreaker' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/PartialCircuitBreaker.php',
        'PrestaShop\\CircuitBreaker\\Place\\AbstractPlace' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Place/AbstractPlace.php',
        'PrestaShop\\CircuitBreaker\\Place\\ClosedPlace' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Place/ClosedPlace.php',
        'PrestaShop\\CircuitBreaker\\Place\\HalfOpenPlace' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Place/HalfOpenPlace.php',
        'PrestaShop\\CircuitBreaker\\Place\\OpenPlace' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Place/OpenPlace.php',
        'PrestaShop\\CircuitBreaker\\SimpleCircuitBreaker' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/SimpleCircuitBreaker.php',
        'PrestaShop\\CircuitBreaker\\SimpleCircuitBreakerFactory' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/SimpleCircuitBreakerFactory.php',
        'PrestaShop\\CircuitBreaker\\State' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/State.php',
        'PrestaShop\\CircuitBreaker\\Storage\\DoctrineCache' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Storage/DoctrineCache.php',
        'PrestaShop\\CircuitBreaker\\Storage\\SimpleArray' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Storage/SimpleArray.php',
        'PrestaShop\\CircuitBreaker\\Storage\\SymfonyCache' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Storage/SymfonyCache.php',
        'PrestaShop\\CircuitBreaker\\SymfonyCircuitBreaker' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/SymfonyCircuitBreaker.php',
        'PrestaShop\\CircuitBreaker\\System\\MainSystem' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/System/MainSystem.php',
        'PrestaShop\\CircuitBreaker\\Transaction\\SimpleTransaction' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Transaction/SimpleTransaction.php',
        'PrestaShop\\CircuitBreaker\\Transition' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Transition.php',
        'PrestaShop\\CircuitBreaker\\Transition\\EventDispatcher' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Transition/EventDispatcher.php',
        'PrestaShop\\CircuitBreaker\\Transition\\NullDispatcher' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Transition/NullDispatcher.php',
        'PrestaShop\\CircuitBreaker\\Util\\Assert' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Util/Assert.php',
        'PrestaShop\\CircuitBreaker\\Util\\ErrorFormatter' => __DIR__ . '/..' . '/prestashop/circuit-breaker/src/Util/ErrorFormatter.php',
        'PrestaShop\\Module\\Mbo\\AddonsSelectionLinkProvider' => __DIR__ . '/../..' . '/src/AddonsSelectionLinkProvider.php',
        'PrestaShop\\Module\\Mbo\\Controller\\Admin\\ModuleCatalogController' => __DIR__ . '/../..' . '/src/Controller/Admin/ModuleCatalogController.php',
        'PrestaShop\\Module\\Mbo\\Controller\\Admin\\ModuleRecommendedController' => __DIR__ . '/../..' . '/src/Controller/Admin/ModuleRecommendedController.php',
        'PrestaShop\\Module\\Mbo\\Controller\\Admin\\ModuleSelectionController' => __DIR__ . '/../..' . '/src/Controller/Admin/ModuleSelectionController.php',
        'PrestaShop\\Module\\Mbo\\Controller\\Admin\\ThemeCatalogController' => __DIR__ . '/../..' . '/src/Controller/Admin/ThemeCatalogController.php',
        'PrestaShop\\Module\\Mbo\\ExternalContentProvider\\ExternalContentProvider' => __DIR__ . '/../..' . '/src/ExternalContentProvider/ExternalContentProvider.php',
        'PrestaShop\\Module\\Mbo\\ExternalContentProvider\\ExternalContentProviderInterface' => __DIR__ . '/../..' . '/src/ExternalContentProvider/ExternalContentProviderInterface.php',
        'PrestaShop\\Module\\Mbo\\ModuleCollectionDataProvider' => __DIR__ . '/../..' . '/src/ModuleCollectionDataProvider.php',
        'PrestaShop\\Module\\Mbo\\RecommendedLink\\RecommendedLink' => __DIR__ . '/../..' . '/src/RecommendedLink/RecommendedLink.php',
        'PrestaShop\\Module\\Mbo\\RecommendedLink\\RecommendedLinkInterface' => __DIR__ . '/../..' . '/src/RecommendedLink/RecommendedLinkInterface.php',
        'PrestaShop\\Module\\Mbo\\RecommendedLink\\RecommendedLinkProvider' => __DIR__ . '/../..' . '/src/RecommendedLink/RecommendedLinkProvider.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModule' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModule.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModuleCollection' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModuleCollection.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModuleCollectionInterface' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModuleCollectionInterface.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModuleInterface' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModuleInterface.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModulePresenter' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModulePresenter.php',
        'PrestaShop\\Module\\Mbo\\RecommendedModule\\RecommendedModulePresenterInterface' => __DIR__ . '/../..' . '/src/RecommendedModule/RecommendedModulePresenterInterface.php',
        'PrestaShop\\Module\\Mbo\\Tab\\Tab' => __DIR__ . '/../..' . '/src/Tab/Tab.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollection' => __DIR__ . '/../..' . '/src/Tab/TabCollection.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionDecoderXml' => __DIR__ . '/../..' . '/src/Tab/TabCollectionDecoderXml.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionFactory' => __DIR__ . '/../..' . '/src/Tab/TabCollectionFactory.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionFactoryInterface' => __DIR__ . '/../..' . '/src/Tab/TabCollectionFactoryInterface.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionInterface' => __DIR__ . '/../..' . '/src/Tab/TabCollectionInterface.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionProvider' => __DIR__ . '/../..' . '/src/Tab/TabCollectionProvider.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabCollectionProviderInterface' => __DIR__ . '/../..' . '/src/Tab/TabCollectionProviderInterface.php',
        'PrestaShop\\Module\\Mbo\\Tab\\TabInterface' => __DIR__ . '/../..' . '/src/Tab/TabInterface.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'ps_mbo' => __DIR__ . '/../..' . '/ps_mbo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit267571b8f837a32eb30cb6819dea423b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit267571b8f837a32eb30cb6819dea423b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit267571b8f837a32eb30cb6819dea423b::$classMap;

        }, null, ClassLoader::class);
    }
}
