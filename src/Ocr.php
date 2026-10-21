<?php

declare(strict_types=1);

namespace CloudCastle\Ocr;

use CloudCastle\Ocr\Contract\OcrInterface;
use CloudCastle\Ocr\Exception\OcrException;

/**
 * Точка входа пакета Ocr.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Ocr implements OcrInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/ocr';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws OcrException
     */
    public function abort(string $message): never
    {
        throw new OcrException($message);
    }
}
