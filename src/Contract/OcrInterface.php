<?php

declare(strict_types=1);

namespace CloudCastle\Ocr\Contract;

/**
 * Контракт публичного API пакета Ocr.
 */
interface OcrInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}
