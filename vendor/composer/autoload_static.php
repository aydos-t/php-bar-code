<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3832ba83e3b9f29138f7c1fb3bdde8b3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Picqer\\Barcode\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Picqer\\Barcode\\' => 
        array (
            0 => __DIR__ . '/..' . '/picqer/php-barcode-generator/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Picqer\\Barcode\\Barcode' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Barcode.php',
        'Picqer\\Barcode\\BarcodeBar' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeBar.php',
        'Picqer\\Barcode\\BarcodeGenerator' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGenerator.php',
        'Picqer\\Barcode\\BarcodeGeneratorDynamicHTML' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGeneratorDynamicHTML.php',
        'Picqer\\Barcode\\BarcodeGeneratorHTML' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGeneratorHTML.php',
        'Picqer\\Barcode\\BarcodeGeneratorJPG' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGeneratorJPG.php',
        'Picqer\\Barcode\\BarcodeGeneratorPNG' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGeneratorPNG.php',
        'Picqer\\Barcode\\BarcodeGeneratorSVG' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/BarcodeGeneratorSVG.php',
        'Picqer\\Barcode\\Exceptions\\BarcodeException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/BarcodeException.php',
        'Picqer\\Barcode\\Exceptions\\InvalidCharacterException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/InvalidCharacterException.php',
        'Picqer\\Barcode\\Exceptions\\InvalidCheckDigitException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/InvalidCheckDigitException.php',
        'Picqer\\Barcode\\Exceptions\\InvalidFormatException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/InvalidFormatException.php',
        'Picqer\\Barcode\\Exceptions\\InvalidLengthException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/InvalidLengthException.php',
        'Picqer\\Barcode\\Exceptions\\UnknownTypeException' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Exceptions/UnknownTypeException.php',
        'Picqer\\Barcode\\Helpers\\BinarySequenceConverter' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Helpers/BinarySequenceConverter.php',
        'Picqer\\Barcode\\Types\\TypeCodabar' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCodabar.php',
        'Picqer\\Barcode\\Types\\TypeCode11' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode11.php',
        'Picqer\\Barcode\\Types\\TypeCode128' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode128.php',
        'Picqer\\Barcode\\Types\\TypeCode128A' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode128A.php',
        'Picqer\\Barcode\\Types\\TypeCode128B' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode128B.php',
        'Picqer\\Barcode\\Types\\TypeCode128C' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode128C.php',
        'Picqer\\Barcode\\Types\\TypeCode32' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode32.php',
        'Picqer\\Barcode\\Types\\TypeCode39' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode39.php',
        'Picqer\\Barcode\\Types\\TypeCode39Checksum' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode39Checksum.php',
        'Picqer\\Barcode\\Types\\TypeCode39Extended' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode39Extended.php',
        'Picqer\\Barcode\\Types\\TypeCode39ExtendedChecksum' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode39ExtendedChecksum.php',
        'Picqer\\Barcode\\Types\\TypeCode93' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeCode93.php',
        'Picqer\\Barcode\\Types\\TypeEan13' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeEan13.php',
        'Picqer\\Barcode\\Types\\TypeEan8' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeEan8.php',
        'Picqer\\Barcode\\Types\\TypeEanUpcBase' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeEanUpcBase.php',
        'Picqer\\Barcode\\Types\\TypeITF14' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeITF14.php',
        'Picqer\\Barcode\\Types\\TypeIntelligentMailBarcode' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeIntelligentMailBarcode.php',
        'Picqer\\Barcode\\Types\\TypeInterface' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeInterface.php',
        'Picqer\\Barcode\\Types\\TypeInterleaved25' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeInterleaved25.php',
        'Picqer\\Barcode\\Types\\TypeInterleaved25Checksum' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeInterleaved25Checksum.php',
        'Picqer\\Barcode\\Types\\TypeKix' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeKix.php',
        'Picqer\\Barcode\\Types\\TypeMsi' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeMsi.php',
        'Picqer\\Barcode\\Types\\TypeMsiChecksum' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeMsiChecksum.php',
        'Picqer\\Barcode\\Types\\TypePharmacode' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypePharmacode.php',
        'Picqer\\Barcode\\Types\\TypePharmacodeTwoCode' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypePharmacodeTwoCode.php',
        'Picqer\\Barcode\\Types\\TypePlanet' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypePlanet.php',
        'Picqer\\Barcode\\Types\\TypePostnet' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypePostnet.php',
        'Picqer\\Barcode\\Types\\TypeRms4cc' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeRms4cc.php',
        'Picqer\\Barcode\\Types\\TypeStandard2of5' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeStandard2of5.php',
        'Picqer\\Barcode\\Types\\TypeStandard2of5Checksum' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeStandard2of5Checksum.php',
        'Picqer\\Barcode\\Types\\TypeTelepen' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeTelepen.php',
        'Picqer\\Barcode\\Types\\TypeUpcA' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeUpcA.php',
        'Picqer\\Barcode\\Types\\TypeUpcE' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeUpcE.php',
        'Picqer\\Barcode\\Types\\TypeUpcExtension2' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeUpcExtension2.php',
        'Picqer\\Barcode\\Types\\TypeUpcExtension5' => __DIR__ . '/..' . '/picqer/php-barcode-generator/src/Types/TypeUpcExtension5.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3832ba83e3b9f29138f7c1fb3bdde8b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3832ba83e3b9f29138f7c1fb3bdde8b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3832ba83e3b9f29138f7c1fb3bdde8b3::$classMap;

        }, null, ClassLoader::class);
    }
}