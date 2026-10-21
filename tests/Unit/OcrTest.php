<?php

declare(strict_types=1);

namespace CloudCastle\Ocr\Tests\Unit;

use CloudCastle\Ocr\Exception\OcrException;
use CloudCastle\Ocr\Ocr;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Ocr.
 */
#[CoversClass(Ocr::class)]
final class OcrTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Ocr();

        self::assertSame('cloud-castle/ocr', $package->name());
    }

    /**
     * Проверяет, что abort() бросает OcrException.
     */
    public function testAbortThrowsOcrException(): void
    {
        $package = new Ocr();

        $this->expectException(OcrException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}
