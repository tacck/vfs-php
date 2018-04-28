<?php
namespace Test;

use App\Command\CommandTypes;
use PHPUnit\Framework\TestCase;
use App\Command\CommandBuilder;

class CommandBuilderTest extends TestCase
{

    public function test_引数に応じたコマンドとなることの確認_追加() {
        $commandType = new CommandTypes('add');
        $command = (new CommandBuilder())
                    ->setCommand($commandType)
                    ->build();

        $this->assertEquals('App\Command\AddCommand', get_class($command));
    }

    public function test_引数に応じたコマンドとなることの確認_削除() {
        $commandType = new CommandTypes('remove');
        $command = (new CommandBuilder())
            ->setCommand($commandType)
            ->build();

        $this->assertEquals('App\Command\RemoveCommand', get_class($command));
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_引数に応じたコマンドとなることの確認_存在しないコマンド() {
        $commandType = new CommandTypes('unknown_command');
    }
}