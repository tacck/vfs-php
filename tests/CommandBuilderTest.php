<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Command\CommandBuilder;

class CommandBuilderTest extends TestCase
{

    public function test_引数に応じたコマンドとなることの確認_加算() {
        $command = (new CommandBuilder())
                    ->setCommand('add')
                    ->build();

        $this->assertEquals('App\Command\AddCommand', get_class($command));
    }
}