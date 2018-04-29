<?php

namespace App\Command;

/**
 * [ValueObject] 実行可能なコマンドの定義を行なうクラス
 *
 * 実行可能なコマンドの定義し、対応するクラス名を取得できるようにする。
 *
 * @package App\Command
 */
class CommandTypes
{
    /** @var array */
    private const TYPES = [
        'add' => 'App\Command\AddCommand',
        'remove' => 'App\Command\RemoveCommand',
    ];

    /** @var string */
    private $type;

    /**
     * CommandTypes constructor.
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        if (!array_key_exists($type, self::TYPES)) {
            throw new \InvalidArgumentException('Illegal Type Name:' . $type);
        }
        $this->type = self::TYPES[$type];
    }

    /**
     * コンストラクタで指定したコマンドに対応するクラス名を文字列で返却
     *
     * @return string
     */
    public function __toString(): string
    {
        return $this->type;
    }
}