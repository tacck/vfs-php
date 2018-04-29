<?php

namespace App\Command;

/**
 * [Command] ファイル追加処理を行なうクラス
 *
 * 指定されたファイルを、仮想ファイルシステムへ追加する。
 *
 * @package App\Command
 */
class AddCommand implements CommandInterface
{

    public function exec(): bool
    {
        // TODO: Implement exec() method.
        return true;
    }

    public function checkArgs(array $args): bool
    {
        // 引数は1つだけ受け付ける
        if (count($args) !== 1) {
            throw new \InvalidArgumentException('File count is wrong.');
        }
        // ファイルとして存在する引数を受け付ける
        if (!file_exists($args[0])) {
            throw new \RuntimeException('File not found:' . $args[0]);
        }
        // 通常ファイルとして存在する引数を受け付ける
        if (!is_file($args[0])) {
            throw new \RuntimeException('Argument is not regular file:' . $args[0]);
        }

        return true;
    }
}