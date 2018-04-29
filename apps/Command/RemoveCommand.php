<?php

namespace App\Command;

/**
 * [Command] ファイル削除処理を行なうクラス
 *
 * 指定されたファイルを、仮想ファイルシステムから削除する。
 *
 * @package App\Command
 */
class RemoveCommand implements CommandInterface
{

    public function exec(): bool
    {
        // TODO: Implement exec() method.
        return true;
    }

    public function checkArgs(array $args): bool
    {
        // TODO: Implement checkArgs() method.
        return true;
    }
}