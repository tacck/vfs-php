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
    /** @var CommandTypes */
    private $commandType;

    /** @var array */
    private $args;

    /**
     * コマンドの種類指定
     *
     * @param CommandTypes $commandType
     * @return CommandBuilder
     */
    public function setCommand(CommandTypes $commandType): CommandBuilder
    {
        $this->commandType = $commandType;
        return $this;
    }

    public function setArguments(array $args): CommandBuilder
    {
        $this->args = $args;
        return $this;
    }

    /**
     * 処理実行するオブジェクト生成
     *
     * @return CommandInterface
     */
    public function build(): CommandInterface
    {
        // CommandTypesにより動的にコマンドのクラスを指定する
        $commandName = '' . $this->commandType;

        /** @var CommandInterface $command */
        $command = new $commandName;
        $command->checkArgs($this->args);

        return $command;
    }
}