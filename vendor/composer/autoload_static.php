<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc1b2cfc0bbe25e6630f295faf145d12
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
        '0d59ee240a4cd96ddbb4ff164fccea4d' => __DIR__ . '/..' . '/symfony/polyfill-php73/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php73\\' => 23,
            'Symfony\\Contracts\\Service\\' => 26,
            'Symfony\\Contracts\\HttpClient\\' => 29,
            'Symfony\\Component\\HttpClient\\' => 29,
            'SensioLabs\\Consul\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'A' => 
        array (
            'App\\Tests\\' => 10,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php73\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php73',
        ),
        'Symfony\\Contracts\\Service\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/service-contracts',
        ),
        'Symfony\\Contracts\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client-contracts',
        ),
        'Symfony\\Component\\HttpClient\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-client',
        ),
        'SensioLabs\\Consul\\' => 
        array (
            0 => __DIR__ . '/..' . '/sensiolabs/consul-php-sdk/Consul',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'App\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/library',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'JakubOnderka\\PhpParallelLint\\Application' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Application.php',
        'JakubOnderka\\PhpParallelLint\\ArrayIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\Blame' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\CheckstyleOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ConsoleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Contracts\\SyntaxErrorCallback' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Contracts/SyntaxErrorCallback.php',
        'JakubOnderka\\PhpParallelLint\\Error' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\ErrorFormatter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ErrorFormatter.php',
        'JakubOnderka\\PhpParallelLint\\Exception' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\FileWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\GitLabOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\IWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\InvalidArgumentException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\JsonOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Manager' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\MultipleWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\NotExistsClassException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NotExistsPathException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NotImplementCallbackException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\NullWriter' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\Output' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\ParallelLint' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/ParallelLint.php',
        'JakubOnderka\\PhpParallelLint\\Process\\GitBlameProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/GitBlameProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\LintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/LintProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpExecutable' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpExecutable.php',
        'JakubOnderka\\PhpParallelLint\\Process\\PhpProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/PhpProcess.php',
        'JakubOnderka\\PhpParallelLint\\Process\\Process' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/Process.php',
        'JakubOnderka\\PhpParallelLint\\Process\\SkipLintProcess' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Process/SkipLintProcess.php',
        'JakubOnderka\\PhpParallelLint\\RecursiveDirectoryFilterIterator' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Manager.php',
        'JakubOnderka\\PhpParallelLint\\Result' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Result.php',
        'JakubOnderka\\PhpParallelLint\\RunTimeException' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/exceptions.php',
        'JakubOnderka\\PhpParallelLint\\Settings' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Settings.php',
        'JakubOnderka\\PhpParallelLint\\SyntaxError' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Error.php',
        'JakubOnderka\\PhpParallelLint\\TextOutput' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JakubOnderka\\PhpParallelLint\\TextOutputColored' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/Output.php',
        'JsonException' => __DIR__ . '/..' . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
        'JsonSerializable' => __DIR__ . '/..' . '/php-parallel-lint/php-parallel-lint/src/polyfill.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc1b2cfc0bbe25e6630f295faf145d12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc1b2cfc0bbe25e6630f295faf145d12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc1b2cfc0bbe25e6630f295faf145d12::$classMap;

        }, null, ClassLoader::class);
    }
}
