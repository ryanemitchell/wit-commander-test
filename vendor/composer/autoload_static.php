<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d619d6487f0a55e8e480a841001b104
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '241d2b5b9c1e680c0770b006b0271156' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p9.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'ScssPhp\\ScssPhp\\' => 16,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'F' => 
        array (
            'FFraenz\\PrivateComposerInstaller\\' => 33,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'ScssPhp\\ScssPhp\\' => 
        array (
            0 => __DIR__ . '/..' . '/scssphp/scssphp/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'FFraenz\\PrivateComposerInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/ffraenz/private-composer-installer/src/PrivateComposerInstaller',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Lines.php',
        'Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'Dotenv\\Loader\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Parser.php',
        'Dotenv\\Loader\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Value.php',
        'Dotenv\\Regex\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Regex.php',
        'Dotenv\\Repository\\AbstractRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AbstractRepository.php',
        'Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'Dotenv\\Repository\\Adapter\\AvailabilityInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AvailabilityInterface.php',
        'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'Dotenv\\Result\\Error' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Error.php',
        'Dotenv\\Result\\Result' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Result.php',
        'Dotenv\\Result\\Success' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Result/Success.php',
        'Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'FFraenz\\PrivateComposerInstaller\\Env' => __DIR__ . '/..' . '/ffraenz/private-composer-installer/src/PrivateComposerInstaller/Env.php',
        'FFraenz\\PrivateComposerInstaller\\Exception\\MissingEnvException' => __DIR__ . '/..' . '/ffraenz/private-composer-installer/src/PrivateComposerInstaller/Exception/MissingEnvException.php',
        'FFraenz\\PrivateComposerInstaller\\Plugin' => __DIR__ . '/..' . '/ffraenz/private-composer-installer/src/PrivateComposerInstaller/Plugin.php',
        'FFraenz\\PrivateComposerInstaller\\RemoteFilesystem' => __DIR__ . '/..' . '/ffraenz/private-composer-installer/src/PrivateComposerInstaller/RemoteFilesystem.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'ScssPhp\\ScssPhp\\Base\\Range' => __DIR__ . '/..' . '/scssphp/scssphp/src/Base/Range.php',
        'ScssPhp\\ScssPhp\\Block' => __DIR__ . '/..' . '/scssphp/scssphp/src/Block.php',
        'ScssPhp\\ScssPhp\\Cache' => __DIR__ . '/..' . '/scssphp/scssphp/src/Cache.php',
        'ScssPhp\\ScssPhp\\Colors' => __DIR__ . '/..' . '/scssphp/scssphp/src/Colors.php',
        'ScssPhp\\ScssPhp\\Compiler' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler.php',
        'ScssPhp\\ScssPhp\\Compiler\\Environment' => __DIR__ . '/..' . '/scssphp/scssphp/src/Compiler/Environment.php',
        'ScssPhp\\ScssPhp\\Exception\\CompilerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/CompilerException.php',
        'ScssPhp\\ScssPhp\\Exception\\ParserException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ParserException.php',
        'ScssPhp\\ScssPhp\\Exception\\RangeException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/RangeException.php',
        'ScssPhp\\ScssPhp\\Exception\\ServerException' => __DIR__ . '/..' . '/scssphp/scssphp/src/Exception/ServerException.php',
        'ScssPhp\\ScssPhp\\Formatter' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compact' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compact.php',
        'ScssPhp\\ScssPhp\\Formatter\\Compressed' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Compressed.php',
        'ScssPhp\\ScssPhp\\Formatter\\Crunched' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Crunched.php',
        'ScssPhp\\ScssPhp\\Formatter\\Debug' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Debug.php',
        'ScssPhp\\ScssPhp\\Formatter\\Expanded' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Expanded.php',
        'ScssPhp\\ScssPhp\\Formatter\\Nested' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/Nested.php',
        'ScssPhp\\ScssPhp\\Formatter\\OutputBlock' => __DIR__ . '/..' . '/scssphp/scssphp/src/Formatter/OutputBlock.php',
        'ScssPhp\\ScssPhp\\Node' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node.php',
        'ScssPhp\\ScssPhp\\Node\\Number' => __DIR__ . '/..' . '/scssphp/scssphp/src/Node/Number.php',
        'ScssPhp\\ScssPhp\\Parser' => __DIR__ . '/..' . '/scssphp/scssphp/src/Parser.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64.php',
        'ScssPhp\\ScssPhp\\SourceMap\\Base64VLQ' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/Base64VLQ.php',
        'ScssPhp\\ScssPhp\\SourceMap\\SourceMapGenerator' => __DIR__ . '/..' . '/scssphp/scssphp/src/SourceMap/SourceMapGenerator.php',
        'ScssPhp\\ScssPhp\\Type' => __DIR__ . '/..' . '/scssphp/scssphp/src/Type.php',
        'ScssPhp\\ScssPhp\\Util' => __DIR__ . '/..' . '/scssphp/scssphp/src/Util.php',
        'ScssPhp\\ScssPhp\\Version' => __DIR__ . '/..' . '/scssphp/scssphp/src/Version.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d619d6487f0a55e8e480a841001b104::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d619d6487f0a55e8e480a841001b104::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d619d6487f0a55e8e480a841001b104::$classMap;

        }, null, ClassLoader::class);
    }
}
