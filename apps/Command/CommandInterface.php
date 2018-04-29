<?php

namespace App\Command;

/**
 * [Interface] 各実処理コマンドクラス用インタフェース
 *
 * 実処理コマンドクラスで実装すべきメソッドを定義するインタフェース。
 *
 * @package App\Command
 */
interface CommandInterface
{
    public function exec(): bool;

    public function checkArgs(array $args): bool;
}