CHANGELOG for 6.3.x
===================

This changelog references the relevant changes (bug and security fixes) done
in 6.3 minor versions.

To get the diff for a specific change, go to https://github.com/symfony/symfony/commit/XXX where XXX is the change hash
To get the diff between two versions, go to https://github.com/symfony/symfony/compare/v6.3.0...v6.3.1

* 6.3.3 (2023-07-31)

 * bug #51178 [Finder] Revert "Fix children condition in ExcludeDirectoryFilterIterator" (derrabus)

* 6.3.2 (2023-07-30)

 * bug #51138 [Scheduler] Postpone schedule creation (HypeMC)
 * bug #50933 [Serializer] Fix deserializing nested arrays of objects with mixed keys (HypeMC)
 * bug #51071 [VarExporter] Fix calling scope detection inside magic accessors (vtsykun)
 * bug #51078 [FrameworkBundle][Workflow] Throw exception is workflow.xxx.transitions is not an array (lyrixx)
 * bug #51102 [Webhook] Allow slash in webhook type (alamirault)
 * bug #51114 [Serializer] Fix denormalizing abstract part headers in MimeMessageNormalizer (fancyweb)
 * bug #51055 [Scheduler] Fix NPE in `debug:scheduler` command (maxbeckers)
 * bug #51042 [Mailer] [Mailgun] Disable tls for mailgun as it should use STARTTLS (joelwurtz)
 * bug #51056 [SecurityBundle] Add `firewalls.logout.csrf_token_manager` to XSD (HeahDude)
 * bug #51065 [AssetMapper] Fixing import parsing from jsdelivr (weaverryan)
 * bug #50788 [Validator] Fix regression with class metadatada on parent classes (rmikalkenas)
 * bug #51030 [Intl] Fixed directory traversal in emoji compression tool (rlandgrebe)
 * bug #51017 [VarExporter] Fix exporting classes with __serialize() but not __unserialize() (fancyweb)
 * bug #51031 Fix deprecations on PHP 8.3 (nicolas-grekas)
 * bug #51000 [WebProfilerBundle] Fix error in case of 'Content-Type' set null in dev environment with no debug (alexbuyanow)
 * bug #50985 [DependencyInjection] Fix fetching lazy non-shared services multiple times (HypeMC)
 * bug #50994 [ErrorHandler][Runtime] Don't mess with ini_set('assert.warning') (nicolas-grekas)
 * bug #50988 [DependencyInjection] Run the `ResolveFactoryClassPass` when `lint:container` builds the container from a dump (MatTheCat)
 * bug #50968 [PropertyAccess] Fix access to undefined "file" key when checking stack frames (nicolas-grekas)
 * bug #50552 [Security] Allow custom scheme to be used as redirection URIs (Spomky)
 * bug #50945 [DebugBundle][FrameworkBundle] Fix using the framework without the Console component (HypeMC)
 * bug #50913 [HttpKernel][WebProfilerBundle] Fix search feature (Cyril HERRERA)
 * bug #50963 [Messenger] do not listen to signals if the pcntl extension is missing (xabbuh)
 * bug #50937 [Form] fetch all known ChoiceType values at once (xabbuh)
 * bug #50944 [FrameworkBundle] Add missing monolog channel tag to the `messenger:failed:retry` command (HypeMC)
 * bug #49070 [RateLimiter] fix incorrect retryAfter of FixedWindow (RobertMe)
 * bug #50960 [VarDumper] Fix dumping `ArrayObject` with `DumpDataCollector` (lyrixx, HypeMC)
 * bug #50943 [Intl] Taking into account bibliographic + overlong (oleg-andreyev)
 * bug #50954 [PhpUnitBridge] Kill the last concurrent process when it stales for more than 60s (nicolas-grekas)
 * bug #50893 [Notifier] Fix Esendex messages serialization (raphael-geffroy)
 * bug #50475 [FrameworkBundle] Prevent `cache:clear` to lose files on subsequent runs (Okhoshi)
 * bug #47252 [PhpUnitBridge] Use triggering class to generate baseline for deprecation messages from DebugClassLoader (leongersen)
 * bug #50582 [Security/Http] Fix false-string handling in `RememberMeAuthenticator` (ossinkine)
 * bug #50595 [DependencyInjection] Don't ignore attributes on the actual decorator (HypeMC)
 * bug #50804 [Serializer] Fix Normalizer not utilizing converted name for index variadic param (DidierLmn)
 * bug #50813 [DoctrineBridge] Load refreshed user proxy (MatTheCat)
 * bug #50905 [DepdencyInjection] Fix costly logic when checking errored definitions (nicolas-grekas)
 * bug #50884 [Finder] Fix initial directory is opened twice (mvorisek)
 * bug #50818 [Scheduler] Fix `PeriodicalTrigger` from argument for stateful run dates (StanJansen)
 * bug #50881 [Messenger] Fix passing options set via tags to handler descriptors (nicolas-grekas)
 * feature #50838 [DoctrineBridge] Remove outdated comment (HeahDude)
 * bug #50837 [DependencyInjection] Fix autocasting null env values to empty string (fancyweb)
 * bug #50819 [SecurityBundle] Do not translate `Bearer` header’s `error_description` (MatTheCat)
 * bug #50793 [DependencyInjection] Fix resource tracking for lazy services (nicolas-grekas)
 * bug #50810 [String] Fix Inflector for 'status' (evertharmeling)
 * bug #50776 [Serializer] Fix type error not be accessed before initialization (shyim)

* 6.3.1 (2023-06-26)

 * bug #50763 [DependencyInjection] Skip errored definitions deep-referenced as runtime exceptions (nicolas-grekas)
 * bug #50637 [FrameworkBundle] Fixed parsing new JSON output of debug:config not possible (Toflar)
 * bug #50728 [HttpClient] Explicitly exclude CURLOPT_POSTREDIR (nicolas-grekas)
 * bug #50710 [FrameworkBundle] Fix setting decorated services during tests (nicolas-grekas)
 * bug #50749 [AssetMapper] Allow DirectoryResource for cache (weaverryan)
 * bug #50760 [HttpFoundation] Require PHPUnit 9.6 by default (nicolas-grekas)
 * bug #50747 [HttpKernel] Nullable and default value arguments in RequestPayloadValueResolver (mdeboer)
 * bug #48961 [WebProfilerBundle] right blocks: fix display (jmsche)
 * bug #50730 [HttpFoundation] Make Request::getPayload() return an empty InputBag if request body is empty (nicolas-grekas)
 * bug #50654 [Validator] Add the `message` option to the `PasswordStrength` constraint (alexandre-daubois)
 * bug #50671 [HttpClient] Fix encoding some characters in query strings (Daniel Kozák)
 * bug #50673 [HttpKernel] make `RequestPayloadValueResolver::resolve()` throw on variadic argument (javaDeveloperKid)
 * bug #50655 Revert "Respect isRetryable decision of the retry strategy for re-delivery" (bendavies)
 * bug #50665 [FrameworkBundle] Ignore missing directories in about command (ro0NL)
 * bug #50644 [VarDumper] Dumping DateTime throws error if getTimezone is false (bogdanmoza)
 * bug #50712 [FrameworkBundle] Fix secrets:list not displaying local vars (nicolas-grekas)
 * bug #50656 Only update autoload_runtime.php when it changed (Seldaek)
 * bug #50698 [HttpClient] Fix int conversion for `GenericRetryStrategy` with floated multiplier  (francisbesset)
 * bug #50686 [Messenger] Don't mark `RedispatchMessage` as internal (valtzu)
 * bug #50530 [DependencyInjection] Fix support for `false` boolean env vars (Okhoshi)
 * bug #50577 [HttpClient] Remove final keyword on `AsyncResponse` (lyrixx)
 * bug #50611 [Clock] Fix MockClock::modify() on PHP 8.3 (nicolas-grekas)
 * bug #50548 [FrameworkBundle] Show non-bundle extensions in `debug:config` & `config:dump` list view & completion (HypeMC)
 * bug #50585 [Cache] Fix RedisTrait::createConnection for cluster (darkanakin41)
 * bug #50599 [MonologBridge] widen return type for Monolog 3 compatibility (xabbuh)
 * bug #50546 [FrameworkBundle] Fix `debug:config` & `config:dump` in debug mode (HypeMC)
 * bug #50560 [DependencyInjection] Support PHP 8.2 `true` and `null` type (ruudk)
 * bug #50563 [FrameworkBundle] remove unusable cache pools (xabbuh)
 * bug #50567 [PhpUnitBridge] Ignore deprecations about the annotation mapping driver when it's not possible to move to the attribute driver yet (nicolas-grekas)
 * bug #50562 [Lock] Fix sprintf (fancyweb)
 * bug #50540 [Validator] GH-50526: Reverting ExecutionContextInterface void return types in favor of docblock annotations. (upchuk)
 * bug #50524 Fix Doctrine deprecations (nicolas-grekas)
 * bug #50539 [Validator] Remove internal from methods on non-internal interfaces (wouterj)
 * bug #50532 [Messenger] Prevent `StopWorkerOnSignalsListener::$signals` to be assigned to null in case `SIGTERM` constant doesn't exist (alexandre-daubois)
 * bug #50534 [PhpUnitBridge] Fix support for the NO_COLOR env var (nicolas-grekas)
 * bug #50525 [PhpUnitBridge] Fix classifying doctrine/deprecations as direct/indirect (nicolas-grekas)
 * bug #50521 [Serializer] Fix ignoring objects that only implement DenormalizableInterface (spideyfusion)
 * bug #50517 [DependencyInjection] Fix casting scalar env vars from null (fancyweb)
 * bug #50515 [Mailer] [MailPace] Fix undefined array key in errors response (Florian Heller)
 * bug #50514 [PhpUnitBridge] Disable deduplication of Doctrine deprecations (nicolas-grekas)
 * bug #50508 [Messenger] Add deprecation message for the `messenger.listener.stop_worker_on_sigterm_signal_listener` service (alexandre-daubois)
 * bug #50507 [Cache] Fix DBAL deprecations (MatTheCat)
 * bug #50501 [Serializer] Fix discriminator map not working with `AbstractNormalizer::OBJECT_TO_POPULATE` (HypeMC)
 * bug #50503 [SecurityBundle] Fix error message when using OIDC and web-token/jwt-core is not installed (nicolas-grekas)
 * bug #50498 [FrameworkBundle] ease migration to symfony 6.3 (lyrixx)
 * bug #50480 [Serializer] Fix discriminator map not working with `AbstractNormalizer::OBJECT_TO_POPULATE` (HypeMC)
 * bug #50493 [VarDumper] Use documentElement instead of body for JS flag (ohader)

* 6.3.0 (2023-05-30)

 * bug #50432 [Security] Validate `aud` and `iss` claims on OidcTokenHandler (vincentchalamon)
 * bug #50477 [Security] Add clock dependency to OidcTokenHandler (nicolas-grekas)
 * bug #50437 [Filesystem] Follow symlinks when dumping files (ausi)
 * bug #50478 [DependencyInjection] Escape `` from parameter-like default values (MatTheCat)
 * bug #50476 [FrameworkBundle] remove support for preloading ESM using headers (dunglas)
 * bug #50453 [SecurityBundle] add missing xsd definition for OIDC (aegypius)
 * bug #50468 [FrameworkBundle][PhpUnitBridge] Configure doctrine/deprecations as expected (nicolas-grekas)
 * bug #50473 [Notifier] Fix ContactEveryoneOptions (nicolas-grekas)
 * bug #50470 [SecurityBundle] Fix configuring OIDC user info token handler client (vincentchalamon)
 * bug #50456 [AssetMapper] Fix unable to use asset mapper with CSP (vtsykun)
 * bug #50458 [HttpKernel] Fix default value ignored with pinned resolvers (HypeMC)
 * bug #50452 Hide definitions bearing the `container.excluded` tag (Myks92)

* 6.3.0-RC2 (2023-05-27)

 * feature #50445 [AssetMapper] Add "=alias" syntax to importmap:require (weaverryan)
 * bug #50442 [SecurityBundle] Update security-1.0.xsd to include missing access-token definition (aegypius)
 * bug #50440 [DependencyInjection] Revert "Use weak references in the container" (nicolas-grekas)
 * bug #50429 [Console] block input stream if needed (joelwurtz)
 * bug #50397 [HttpKernel][VarDumper] Fix dumping with labels (nicolas-grekas)
 * bug #50408 [AssetMapper] Change default importmap "provider" to JsDelivr+esm (weaverryan, nicolas-grekas)
 * bug #50394 [AssetMapper] Avoid loading potentially ALL assets in dev server (weaverryan)
 * bug #50400 [AssetMapper] Sometimes asset contents are built from non-asset files (weaverryan)
 * bug #50406 [VarDumper] Fix `dd()` showing line with `null` (HypeMC)
 * bug #50393 [AssetMapper] Fixing incorrect exception & adding allowing more realistic error mode (weaverryan)

* 6.3.0-RC1 (2023-05-22)

 * bug #49817 [Scheduler] Improve triggers performance when possible (fabpot)
 * bug #50376 [WebProfilerBundle] Fix cursor on link that has no href (PhilETaylor)
 * bug #50349 [Notifier] Document Notifier options in README files (alamirault)
 * bug #50312 [Security] Skip clearing CSRF Token on stateless logout (chalasr)
 * bug #50315 [Translation] Fix handling of null messages in `ArrayLoader` (rob006)
 * bug #50338 [Console] Remove ``exec`` and replace it by ``shell_exec`` (maxbeckers)
 * bug #50356 [AssetMapper] Fix bug where dependencies were preloaded even if the parent was not (weaverryan)
 * bug #50347 [DebugBundle][VarDumper] Fix dump labels compatibility (fancyweb)
 * feature #50363 [AssetMapper] Adding "path" option to importmap:require (weaverryan)
 * feature #48852 [Validator] Allow to use translation_domain false for validators and to use custom translation domain by constraints (VincentLanglet)
 * feature #49293 [DoctrineBridge] Allow to ignore specific nullable fields in UniqueEntity (VincentLanglet)
 * bug #50193 [Serializer] Fix `SerializedPath` not working with constructor arguments (HypeMC)
 * bug #50280 [PropertyAccess] Fix nullsafe operator on array index (HypeMC)
 * bug #50362 [FrameworkBundle] Fix Workflow without a marking store definition uses marking store definition of previously defined workflow (krciga22)
 * bug #50309 [HttpFoundation] UrlHelper is now aware of RequestContext changes (giosh94mhz)
 * bug #50309 [HttpFoundation] UrlHelper is now aware of RequestContext changes (giosh94mhz)
 * bug #50355 Bug fix for paths that start with the same string (weaverryan)
 * bug #50352 [Notifier][TurboSMS] Fix get sender name (ZhukV)
 * bug #50351 [DependencyInjection] Add `excludeSelf` option to dumpers (HypeMC)
 * bug #50354 [Process] Stop the process correctly even if underlying input stream is not closed (joelwurtz)
 * bug #50325 [WebProfilerBundle] Tweak the HTML code of the Twig entry view (javiereguiluz)
 * bug #50331 [HttpFoundation] Fix problem with empty generator in StreamedJsonResponse (alexander-schranz)
 * bug #50340 [HttpKernel] Make `QueryParameterValueResolver` provide a value if possible when a parameter is not found (MatTheCat)
 * bug #50332 [PropertyInfo] Fix `PhpStanExtractor` when constructor has no docblock (HypeMC)
 * bug #50343 [VarDumper] Fix HTML of invisible characters (fancyweb)
 * bug #50253 [FrameworkBundle] Generate caches consistently on successive run of `cache:clear` command (Okhoshi)
 * bug #49063 [Messenger] Respect `isRetryable` decision of the retry strategy for re-delivery (FlyingDR)

* 6.3.0-BETA3 (2023-05-13)

 * feature #50286 [AssetMapper] Add cached asset factory (weaverryan)
 * bug #50307 [AssetMapper] Improving XSD to use attributes whenever possible (weaverryan)
 * bug #50305 [OptionsResolver] Fixed changelog (yceruto)
 * feature #50291 [AssetMapper] Adding "excluded_patterns" option (weaverryan)
 * bug #50294 [AssetMapper] Normalizing logicalPath to a getter like all other properties (weaverryan)
 * feature #48496 [Notifier] Add Smsmode bridge (gnito-org)
 * feature #48494 [Notifier] Add ClickSend notifier bridge (gnito-org)
 * feature #48572 [Notifier] Add SMS options to AllMySms notifier (gnito-org)
 * feature #48592 [Notifier] Add SMS options to OrangeSms notifier (gnito-org)
 * feature #48579 [Notifier] Add SMS options to GatewayApi notifier (gnito-org)
 * feature #48586 [Notifier] Add SMS options to MessageMedia notifier (gnito-org)
 * feature #48585 [Notifier] Add SMS options to MessageBird notifier (gnito-org)
 * feature #48584 [Notifier] Add SMS options to ContactEveryone notifier (gnito-org)
 * feature #48577 [Notifier] Add SMS options to FortySixElks notifier (gnito-org)
 * feature #48575 [Notifier] Add SMS options to Esendex notifier (gnito-org)
 * feature #48573 [Notifier] Add SMS options to Clickatell notifier (gnito-org)
 * bug #50288 [ErrorHandler] Sync `createTabs` from WebProfilerBundle (MatTheCat)
 * bug #50251 [Serializer] Handle datetime deserialization in U format (tugmaks)
 * bug #50266 [HttpFoundation] Fix file streaming after connection aborted (rlshukhov)
 * feature #50274 [HttpClient] Add option `crypto_method` to set the minimum TLS version and make it default to v1.2 (nicolas-grekas)
 * bug #50262 [DependencyInjection] Fix dumping non-shared factories with TaggedIteratorArgument (marphi)
 * bug #50287 [Messenger] Store dates in UTC when using Doctrine (nicolas-grekas)
 * bug #50277 [Messenger] Add `IS_REPEATABLE` flag to `AsMessageHandler` attribute (adrianguenter)
 * bug #50301 [FrameworkBundle] Ignore vars from dotenv files in secrets:list (nicolas-grekas)
 * feature #50264 [AssetMapper] Flexible public paths + relative path imports + possibility of "building" assets (weaverryan)
 * feature #49838 [Scheduler] add `RecurringMessage::getId()` and prevent duplicates (kbond)
 * bug #50269 Fix param type annotation (l-vo)
 * feature #50270 [Scheduler] add `JitterTrigger` (kbond)
 * bug #50230 [FrameworkBundle][Webhook] Throw when required services are missing when using the Webhook component (Jean-Beru)
 * bug #50260 [DependencyInjection] Fix dumping/loading errored definitions in XML/Yaml (nicolas-grekas)
 * bug #50263 [AssetMapper] Adding autoconfiguration tag for asset compilers (weaverryan)
 * bug #50256 [HttpClient] Fix setting duplicate-name headers when redirecting with AmpHttpClient (nicolas-grekas)

* 6.3.0-BETA2 (2023-05-07)

 * bug #50249 [WebProfilerBundle] Explicit tab controls’ color as they can be buttons (MatTheCat)
 * bug #50248 [TwigBundle] fixed wrong `symfony/twig-bridge` dependency version (SVillette)
 * bug #50231 [AssetMapper] Fixing 2 bugs related to the compile command and importmaps (weaverryan)
 * feature #49553 [Serializer] Add flag to require all properties to be listed in the input (Christian Kolb)
 * feature #50232 [AssetMapper] Better public without digest (weaverryan)
 * bug #50214 [WebProfilerBundle] Remove legacy filters remnants (MatTheCat)
 * bug #50235 [HttpClient] Fix getting through proxies via CONNECT (nicolas-grekas)
 * bug #50241 [HttpKernel] Prevent initialising lazy services during services reset (tucksaun)
 * bug #50244 [HttpKernel] Fix restoring surrogate content from cache (nicolas-grekas)
 * bug #50246 [DependencyInjection] Do not check errored definitions’ type (MatTheCat)
 * bug #49557 [PropertyInfo] Fix phpDocExtractor nullable array value type (fabpot)
 * bug #50213 [ErrorHandler] Prevent conflicts with WebProfilerBundle’s JavaScript (MatTheCat)
 * feature #49608 [OptionsResolver] add `ignoreUndefined()` method to allow skip not interesting options (Constantine Shtompel)
 * bug #50216 [DependencyInjection] Allow `AutowireCallable` without method (derrabus)
 * bug #50192 [Serializer] backed enum throw notNormalizableValueException outside construct method (alli83)
 * bug #50238 [HttpKernel] Don't use eval() to render ESI/SSI (nicolas-grekas)
 * bug #50224 [DoctrineBridge] skip subscriber if listener already defined (alli83)
 * bug #50218 Profiler respect stateless attribute (alamirault)
 * bug #50242 [ErrorHandler] Fix the design of the exception page tabs (javiereguiluz)
 * feature #50219 [AssetMapper] Adding debug:assetmap command + normalize paths (weaverryan)
 * bug #49760 [Serializer] Add missing withSaveOptions method to XmlEncoderContextBuilder (mtarld)
 * bug #50226 [HttpClient] Ensure HttplugClient ignores invalid HTTP headers (nicolas-grekas)
 * bug #50125 [HttpKernel] Fix handling of `MapRequest*` attributes (nicolas-grekas)
 * bug #50215 [AssetMapper] Fixing wrong values being output in command (weaverryan)
 * bug #50203 [Messenger] Fix registering message handlers (nicolas-grekas)
 * bug #50204 [ErrorHandler] Skip Httplug deprecations for HttplugClient (nicolas-grekas)
 * bug #50206 [AssetMapper] Fix import map package parsing with an @ namespace (weaverryan)

* 6.3.0-BETA1 (2023-05-01)

 * feature #49729 [Scheduler] Add a simple Scheduler class for when the component is used standalone (fabpot)
 * feature #49725 [Messenger] Add support for the DelayStamp in InMemoryTransport (fabpot)
 * feature #47112 [Messenger] Add a scheduler component (upyx, fabpot)
 * feature #49691 [FrameworkBundle] Add scoped httplug clients and deprecate httplugs use like psr18 client (simonberger)
 * feature #48542 [Webhook][RemoteEvent] Add the components (fabpot)
 * feature #49620 [ErrorHander] Display exception properties in the HTML error page (lyrixx)
 * feature #48128 [HttpFoundation] Add support for the 103 status code (Early Hints) and other 1XX statuses (dunglas)
 * feature #48990 [DependencyInjection] deprecate the ``@required`` annotation (alexislefebvre)
 * feature #49306 [Security] Add logout configuration for Clear-Site-Data header (maxbeckers)
 * feature #49596 [Validator] Add the `exclude` option to the `Cascade` constraint (alexandre-daubois)
 * feature #49291 [Serializer] Add methods `getSupportedTypes` to allow better performance (tucksaun, nicolas-grekas)
 * feature #49642 [DependencyInjection] Deprecate `#[MapDecorated]` in favor of `#[AutowireDecorated]` (nicolas-grekas)
 * feature #49539 [Messenger] make StopWorkerOnSignalsListener listen by default on SIGTERM and SIGINT (lyrixx)
 * feature #49628 [DependencyInjection] Add support for autowiring services as closures using attributes (nicolas-grekas)
 * feature #48992 [HttpKernel] Introduce pinnable value resolvers with `#[ValueResolver]` and `#[AsPinnedValueResolver]` (MatTheCat)
 * feature #49121 [DomCrawler] Give choice of used parser (victor-prdh)
 * feature #49610 [DoctrineBridge] deprecate doctrine schema subscribers in favor of listeners (alli83)
 * feature #48821 [Serializer] add a context to allow invalid values in BackedEnumNormalizer (nikophil)
 * feature #49529 [Console] Add support for managing exit code while handling signals (lyrixx)
 * feature #49015 [Security] Added condition to always return the real Authenticator from security events (florentdestremau)
 * feature #48899 [Security] Add remember me option for JSON logins (baumerdev, nicolas-grekas)
 * feature #49302 [HttpClient] Add `UriTemplateHttpClient` (fancyweb)
 * feature #49013 [Serializer] Replace the MissingConstructorArgumentsException class with MissingConstructorArgumentException (HypeMC)
 * feature #49454 [Notifier] Add Pushover bridge (mocodo)
 * feature #49461 [Mailer] Add MailerSend bridge (doobas)
 * feature #49492 [DependencyInjection] Add support for Exclude attribute (lyrixx)
 * feature #49139 [FrameworkBundle][HttpKernel] Display warmers duration on debug verbosity for `cache:clear` command (alexandre-daubois)
 * feature #49417 [Validator] Add the option filenameMaxLength to the File constraint (Kevin Auvinet)
 * feature #49487 [FrameworkBundle] Allow disabling dumping of container to XML to improve performance (ruudk)
 * feature #49275 [FrameworkBundle][HttpKernel] Configure `ErrorHandler` on boot (HypeMC)
 * feature #49464 [Validator] Implement countUnit option for Length constraint (spackmat)
 * feature #49300 [Validator] Add a `NoSuspiciousCharacters` constraint to validate a string is not suspicious (MatTheCat)
 * feature #49318 [HttpKernel] Add `skip_response_headers` to the `HttpCache` options (Toflar)
 * feature #49428 [Messenger] Allow to define batch size when using `BatchHandlerTrait` with `getBatchSize()` (alexandre-daubois)
 * feature #49429 [Mailer] Add option to enable Sandbox via dsn option sandbox=true (mdawart)
 * feature #49433 [DependencyInjection] allow extending `Autowire` attribute (kbond)
 * feature #49412 [DependencyInjection] Allow trimming service parameters value in XML configuration files (alexandre-daubois)
 * feature #49442 [TwigBundle] Add alias deprecation for `Twig_Environment` (94noni)
 * feature #49331 [PropertyAccess] Allow escaping in PropertyPath (alanpoulain)
 * feature #49411 [DependencyInjection] Add AsAlias attribute (alanpoulain)
 * feature #49343 [HtmlSanitizer] Remove experimental status (tgalopin)
 * feature #49261 Smsapi - Make "from" optional (szal1k)
 * feature #49327 [Notifier] Introduce FromNotificationInterface for MessageInterface implementations (fabpot)
 * feature #49270 [Messenger] Allow passing a string instead of an array in `TransportNamesStamp` (alexandre-daubois)
 * feature #49193 [Security] Return 403 instead of 500 when no firewall is defined (nicolas-grekas)
 * feature #49098 [Config] Allow enum values in EnumNode (fancyweb)
 * feature #49164 [Yaml] Feature #48920  Allow milliseconds and microseconds in dates (dustinwilson)
 * feature #48981 [Console] Add ReStructuredText descriptor (danepowell)
 * feature #48748 [VarDumper] Display invisible characters (alamirault)
 * feature #48250 [Cache] Compatible with aliyun redis instance (tourze)
 * feature #47066 [DependencyInjection] Allow attribute autoconfiguration on static methods (alex-dev)
 * feature #49021 [SecurityBundle] Make firewalls event dispatcher traceable on debug mode (MatTheCat)
 * feature #48930 [Cache] Add Redis Relay support (ostrolucky)
 * feature #49102 [FrameworkBundle][Workflow] Register alias for argument for workflow services with workflow name only (lyrixx)
 * feature #49064 [ExpressionLanguage] Deprecate loose comparisons when using the "in" operator (nicolas-grekas)
 * feature #48999 [Lock] create migration for lock table when DoctrineDbalStore is used (alli83)
 * feature #49011 [WebProfilerBundle] Close profiler settings on escape (norkunas)
 * feature #48997 [WebProfilerBundle] Mailer panel tweaks (javiereguiluz)
 * feature #49012 [WebProfilerBundle] Display date/time elements in the user local timezone (javiereguiluz)
 * feature #48957 [Config] Do not array_unique EnumNode values (fancyweb)
 * feature #48976 [ErrorHandler] try to read SYMFONY_PATCH_TYPE_DECLARATIONS from superglobal arrays too (xabbuh)
 * feature #48938 [FrameworkBundle] Allow setting private services with the test container (nicolas-grekas)
 * feature #48959 [Messenger] Allow password in redis dsn when using sockets (PhilETaylor)
 * feature #48940 [DomCrawler] Add argument `$normalizeWhitespace` to `Crawler::innerText()` and make it return the first non-empty text (otsch)
 * feature #48762 [WebProfilerBundle] Improve accessibility of tabs and some links (javiereguiluz)
 * feature #48945 [WebProfilerBundle] Use a dynamic SVG favicon in the profiler (javiereguiluz)
 * feature #48901 Allow Usage of ContentId in html (m42e)
 * feature #48669 [ExpressionLanguage] Add `enum` expression function (alexandre-daubois)
 * feature #48678 [FrameworkBundle] Rename service `notifier.logger_notification_listener` to `notifier.notification_logger_listener` (ker0x)
 * feature #48516 [PhpUnitBridge] Add `enum_exists` mock (alexandre-daubois)
 * feature #48855 [Notifier] Add new Symfony Notifier for PagerDuty (stloyd)
 * feature #48876 [HttpKernel] Rename HttpStatus attribute to WithHttpStatus (fabpot)
 * feature #48797 [FrameworkBundle] Add `extra` attribute for HttpClient Configuration (voodooism)
 * feature #48747 [HttpKernel] Allow using `#[WithLogLevel]` for setting custom log level for exceptions (angelov)
 * feature #48820 [HttpFoundation] ParameterBag::getEnum() (nikophil)
 * feature #48685 [DependencyInjection] Exclude referencing service (self) in `TaggedIteratorArgument` (chalasr)
 * feature #48409 [Mailer] add reject to `MessageEvent` to stop sending mail (Thomas Hanke, fabpot)
 * feature #47709 [HttpFoundation] Add `StreamedJsonResponse` for efficient JSON streaming (alexander-schranz)
 * feature #48810 Drop v1 contracts packages everywhere (derrabus)
 * feature #48802 [DependencyInjection] Cut compilation time (nicolas-grekas)
 * feature #48707 [DependencyInjection] Target Attribute must fail if the target does not exist (rodmen)
 * feature #48387 [SecurityBundle] Rename `firewalls.logout.csrf_token_generator` to `firewalls.logout.csrf_token_manager` (MatTheCat)
 * feature #48671 [Validator] Add `getConstraint()` method to `ConstraintViolationInterface` (syl20b)
 * feature #48665 [FrameworkBundle] Deprecate `framework:exceptions` XML tag (MatTheCat)
 * feature #48686 [DependencyInjection] Deprecate integer keys in "service_locator" config (upyx)
 * feature #48616 [Notifier] GoogleChat CardsV1 is deprecated we must use cardsV2 instead (daifma)
 * feature #48396 [Intl] Add a special locale to strip emojis easily with `EmojiTransliterator` (fancyweb)
 * feature #48098 [HttpKernel]  Resolve DateTime value using the Clock (GromNaN)
 * feature #48642 [Clock] Add `Clock` class and `now()` function (nicolas-grekas)
 * feature #48531 [FrameworkBundle][Messenger] Add support for namespace wildcard in Messenger routing (brzuchal)
 * feature #48121 [Messenger] Do not return fallback senders when other senders were already found (wouterj)
 * feature #48582 [Security] Make login redirection logic available to programmatic login (hellomedia)
 * feature #48352 [HttpKernel] Allow using `#[HttpStatus]` for setting status code and headers for HTTP exceptions (angelov)
 * feature #48710 [DependencyInjection] Add support for nesting autowiring-related attributes into `#[Autowire(...)]` (nicolas-grekas)
 * feature #48127 [Yaml] Add flag to dump numeric key as string (alamirault)
 * feature #48696 [WebProfilerBundle] Add a title and img role to svg of the web debug toolbar (Monet Emilien)
 * feature #48594 [SecurityBundle] Improve support for authenticators that don't need a user provider (wouterj)
 * feature #48457 [FrameworkBundle] Improve UX ConfigDebugCommand has not yaml component (alamirault)
 * feature #48044 [SecurityBundle] Set request stateless when firewall is stateless (alamirault)
 * feature #48200 [Security] Allow custom user identifier for X509 authenticator (Spomky)
 * feature #47352 [HttpKernel] FileProfilerStorage remove expired profiles mechanism (alamirault)
 * feature #48614 [Messenger] Move Transport/InMemoryTransport to Transport/InMemory/InMemoryTransport (lyrixx)
 * feature #48059 [HttpFoundation] Create migration for session table when pdo handler is used (alli83)
 * feature #47349 [Notifier] Allow to update Slack messages (maxim-dovydenok-busuu)
 * feature #48432 [VarDumper] Add support of named arguments to `dd()` and `dump()` to display a label (alexandre-daubois)
 * feature #48275 [FrameworkBundle] Allow to avoid `limit` definition in a RateLimiter configuration when using the `no_limit` policy (alexandre-daubois)
 * feature #39353 [FrameworkBundle][Notifier] Allow to configure or disable the message bus to use (jschaedl, fabpot)
 * feature #48565 [Notifier] [FakeChat] Allow missing optional dependency (Benjamin Schoch)
 * feature #48503 [Notifier] Add options to `SmsMessage` (gnito-org)
 * feature #48164 [Serializer] Add encoder option for saving options (ihmels)
 * feature #48206 [Console] Add placeholder formatters per ProgressBar instance (GromNaN)
 * feature #48232 [Validator] Add `{{pattern}}` to `Regex` constraint violations (alamirault)
 * feature #48299 [Console] #47809 remove exit() call in last SignalHandler (akuzia)
 * feature #48424 [DomCrawler][FrameworkBundle] Add `assertSelectorCount` (curlycarla2004)
 * feature #48546 [Notifier] [FakeSms] Allow missing optional dependency (Benjamin Schoch)
 * feature #48484 [ProxyManagerBridge] Deprecate the package (nicolas-grekas)
 * feature #48101 [Notifier] Add Mastodon Notifier (qdequippe)
 * feature #48362 [Clock] Add ClockAwareTrait to help write time-sensitive classes (nicolas-grekas)
 * feature #48478 [VarDumper] Add caster for WeakMap (nicolas-grekas)
 * feature #47680 [DependencyInjection][HttpKernel] Introduce build parameters (HeahDude)
 * feature #48374 [Notifier] [Telegram] Add support to answer callback queries (alexsoft)
 * feature #48466 [Notifier] Add Line bridge (kurozumi)
 * feature #48381 [Validator] Add `Uuid::TIME_BASED_VERSIONS` to match that a UUID being validated embeds a timestamp (alexandre-daubois)
 * feature #48379 [HttpKernel] Set a default file link format when none is provided to FileLinkFormatter (alexandre-daubois)
 * feature #48389 [Notifier] Add Bandwidth bridge (gnito-org)
 * feature #48394 [Notifier] Add Plivo bridge (gnito-org)
 * feature #48397 [Notifier] Add RingCentral bridge (gnito-org)
 * feature #48398 [Notifier] Add Termii bridge (gnito-org)
 * feature #48399 [Notifier] Add iSendPro bridge (leblanc-simon)
 * feature #48084 [Notifier] Add Twitter notifier (nicolas-grekas)
 * feature #48053 [Messenger] Improve DX (Nommyde)
 * feature #48043 [SecurityBundle] Deprecate enabling bundle and not configuring it (alamirault)
 * feature #48147 [DependencyInjection] Add `env` and `param` parameters for Autowire attribute (alexndlm)

