<?php

namespace App\Command;

/**
 * [Builder] 実際に処理を行なうコマンドの生成クラス
 *
 * setCommand()の引数に応じて、処理を行なうオブジェクトを生成する。
 *
 * @package App\Command
 */
class CommandBuilder
{
    /** @var string */
    private $commandName;

    /**
     * コマンドの種類指定
     *
     * @param string $commandName
     * @return CommandBuilder
     */
    public function setCommand(string $commandName): CommandBuilder
    {
        $this->commandName = $commandName;
        return $this;
    }

    /**
     * 処理実行するオブジェクト生成
     *
     * @return CommandInterface
     */
    public function build(): CommandInterface
    {
        /** @var CommandInterface $command */
        $command = null;

        if ($this->commandName === 'add') {
            $command = new AddCommand();
        }
        return $command;
    }
}