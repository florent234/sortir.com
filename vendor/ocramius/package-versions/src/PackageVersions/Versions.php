<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'doctrine/annotations' => '1.10.1@5eb79f3dbdffed6544e1fc287572c0f462bd29bb',
  'doctrine/cache' => '1.10.0@382e7f4db9a12dc6c19431743a2b096041bcdd62',
  'doctrine/collections' => '1.6.4@6b1e4b2b66f6d6e49983cebfe23a21b7ccc5b0d7',
  'doctrine/common' => '2.12.0@2053eafdf60c2172ee1373d1b9289ba1db7f1fc6',
  'doctrine/dbal' => 'v2.10.1@c2b8e6e82732a64ecde1cddf9e1e06cb8556e3d8',
  'doctrine/doctrine-bundle' => '2.0.7@6926771140ee87a823c3b2c72602de9dda4490d3',
  'doctrine/doctrine-migrations-bundle' => '2.1.2@856437e8de96a70233e1f0cc2352fc8dd15a899d',
  'doctrine/event-manager' => '1.1.0@629572819973f13486371cb611386eb17851e85c',
  'doctrine/inflector' => '1.3.1@ec3a55242203ffa6a4b27c58176da97ff0a7aec1',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'doctrine/migrations' => '2.2.1@a3987131febeb0e9acb3c47ab0df0af004588934',
  'doctrine/orm' => 'v2.7.2@dafe298ce5d0b995ebe1746670704c0a35868a6a',
  'doctrine/persistence' => '1.3.7@0af483f91bada1c9ded6c2cfd26ab7d5ab2094e0',
  'doctrine/reflection' => '1.2.1@55e71912dfcd824b2fdd16f2d9afe15684cfce79',
  'egulias/email-validator' => '2.1.17@ade6887fd9bd74177769645ab5c474824f8a418a',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'league/csv' => '9.6.0@7351a74625601914409b42b32cabb91a93773b7b',
  'monolog/monolog' => '2.0.2@c861fcba2ca29404dc9e617eedd9eff4616986b8',
  'nikic/php-parser' => 'v4.4.0@bd43ec7152eaaab3bd8c6d0aa95ceeb1df8ee120',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.3@4d154742e31c35137d5374c998e8f86b54db2e2f',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'sensio/framework-extra-bundle' => 'v5.5.4@d0585d4825a87a5030ca8cd34adb4a17e1066c17',
  'swiftmailer/swiftmailer' => 'v6.2.3@149cfdf118b169f7840bbe3ef0d4bc795d1780c9',
  'symfony/apache-pack' => 'v1.0.1@3aa5818d73ad2551281fc58a75afd9ca82622e6c',
  'symfony/asset' => 'v5.0.7@8872144d5d9f28eec62857400bb437693ef4d082',
  'symfony/cache' => 'v5.0.7@7c229da093cb0c630e5d16b99fd253e20f979ac2',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.7@3e633c31a34738f7f4ed7a225c43fc45ca74c986',
  'symfony/console' => 'v5.0.7@5fa1caadc8cdaa17bcfb25219f3b53fe294a9935',
  'symfony/debug-bundle' => 'v5.0.7@3e11ad42d31b4d996c9715a69e988f6a52a70c9d',
  'symfony/debug-pack' => 'v1.0.8@7310a66f9f81c9f292ff9089f0b0062386cb83fb',
  'symfony/dependency-injection' => 'v5.0.7@4e48dc44680d8efa357410c78093a04753196981',
  'symfony/doctrine-bridge' => 'v5.0.7@12f943c5b0d5bdc79f5d0099ecdd1b201071b04f',
  'symfony/dotenv' => 'v5.0.7@28658ee990ea643c8111bac242d6ee5f3a15ef72',
  'symfony/error-handler' => 'v5.0.7@949ffc17c3ac3a9f8e6232220e2da33913c04ea4',
  'symfony/event-dispatcher' => 'v5.0.7@24f40d95385774ed5c71dbf014edd047e2f2f3dc',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.7@ca3b87dd09fff9b771731637f5379965fbfab420',
  'symfony/finder' => 'v5.0.7@600a52c29afc0d1caa74acbec8d3095ca7e9910d',
  'symfony/flex' => 'v1.6.2@e4f5a2653ca503782a31486198bd1dd1c9a47f83',
  'symfony/form' => 'v5.0.7@2b8e26176c4b88ac44d822bb78dad3403d37ff83',
  'symfony/framework-bundle' => 'v5.0.7@b1807be65ff05c21d47094e77b6c5a4246284c33',
  'symfony/http-foundation' => 'v5.0.7@26fb006a2c7b6cdd23d52157b05f8414ffa417b6',
  'symfony/http-kernel' => 'v5.0.7@ad574c55d451127cab1c45b4ac51bf283e340cf0',
  'symfony/inflector' => 'v5.0.7@70c25c66427e2bb6ba0827d668366d60b0a90cbf',
  'symfony/intl' => 'v5.0.7@a02d65b026413150223c010db3000028bf9770eb',
  'symfony/maker-bundle' => 'v1.15.0@31396f2e61803f0e2debbb43ba5aa21acbc6e15a',
  'symfony/mime' => 'v5.0.7@481b7d6da88922fb1e0d86a943987722b08f3955',
  'symfony/monolog-bridge' => 'v5.0.7@fd67744bd7b1bd18350a102769b0575052a1fb9e',
  'symfony/monolog-bundle' => 'v3.5.0@dd80460fcfe1fa2050a7103ad818e9d0686ce6fd',
  'symfony/options-resolver' => 'v5.0.7@09dccfffd24b311df7f184aa80ee7b61ad61ed8d',
  'symfony/orm-pack' => 'v1.0.8@c9bcc08102061f406dc908192c0f33524a675666',
  'symfony/polyfill-intl-icu' => 'v1.15.0@9c281272735eb66476e0fa7381e03fb0d4b60197',
  'symfony/polyfill-intl-idn' => 'v1.15.0@47bd6aa45beb1cd7c6a16b7d1810133b728bdfcf',
  'symfony/polyfill-mbstring' => 'v1.15.0@81ffd3a9c6d707be22e3012b827de1c9775fc5ac',
  'symfony/polyfill-php73' => 'v1.15.0@0f27e9f464ea3da33cbe7ca3bdf4eb66def9d0f7',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/property-access' => 'v5.0.7@6b14bd5e184fc3bbbd35e378692c61af765515b8',
  'symfony/requirements-checker' => 'v1.1.5@991978163f5a653a17e7b7592157c096c2afd2f7',
  'symfony/routing' => 'v5.0.7@d98a95d0a684caba47a47c1c50c602a669dc973b',
  'symfony/security-bundle' => 'v5.0.7@1f42f8213cfbffce09c0a1834f34a4b1d444c4c1',
  'symfony/security-core' => 'v5.0.7@90a6f8982ca80dcb1a384e0d9b1ac8de073a4e34',
  'symfony/security-csrf' => 'v5.0.7@c3ceba9a0a85326af509f418d178a993c31d6d4d',
  'symfony/security-guard' => 'v5.0.7@ebdb461f5ca98027c21899049fa4b01a58256b67',
  'symfony/security-http' => 'v5.0.7@af7315dafa9e402969f1cc433a8f719a4b9bcd98',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.7@a1d86d30d4522423afc998f32404efa34fcf5a73',
  'symfony/swiftmailer-bundle' => 'v3.4.0@553d2474288349faed873da8ab7c1551a00d26ae',
  'symfony/translation-contracts' => 'v2.0.1@8cc682ac458d75557203b2f2f14b0b92e1c744ed',
  'symfony/twig-bridge' => 'v5.0.7@3a1ef6e7d25b040c9925e3507a7a9cd92d36d71b',
  'symfony/twig-bundle' => 'v5.0.7@6167dbac6f32961b7d19112a7531602f511bf500',
  'symfony/twig-pack' => 'v1.0.0@8b278ea4b61fba7c051f172aacae6d87ef4be0e0',
  'symfony/validator' => 'v5.0.7@fc459a3d66bda9c0f8231a4d44dddd6daf23db92',
  'symfony/var-dumper' => 'v5.0.7@f74a126acd701392eef2492a17228d42552c86b5',
  'symfony/var-exporter' => 'v5.0.7@ffd29a70370e466343e33154b5df197a07a13afa',
  'symfony/web-profiler-bundle' => 'v5.0.7@635bf7fe86b67b0d3903a3013709fe028ac43b59',
  'symfony/webpack-encore-bundle' => 'v1.7.3@5c0f659eceae87271cce54bbdfb05ed8ec9007bd',
  'symfony/yaml' => 'v5.0.7@ad5e9c83ade5bbb3a96a3f30588a0622708caefd',
  'twbs/bootstrap' => 'v4.2.1@9e4e94747bd698f4f61d48ed54c9c6d4d199bd32',
  'twig/extra-bundle' => 'v3.0.3@6eaf1637abe6b68518e7e0949ebb84e55770d5c6',
  'twig/twig' => 'v3.0.3@3b88ccd180a6b61ebb517aea3b1a8906762a1dc2',
  'zendframework/zend-code' => '3.4.1@268040548f92c2bfcba164421c1add2ba43abaaa',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'paragonie/random_compat' => '2.*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-ctype' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-iconv' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-php72' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-php71' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-php70' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  'symfony/polyfill-php56' => '*@b568eba889a716349718838e2e919081ddc0abf7',
  '__root__' => 'dev-master@b568eba889a716349718838e2e919081ddc0abf7',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
