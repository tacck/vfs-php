<?php

namespace Test;

use App\Command\AddCommand;
use PHPUnit\Framework\TestCase;

class AddCommandTest extends TestCase
{
    /** @var AddCommand */
    private $command;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->command = new AddCommand();
    }

    public function test_追加_引数チェック()
    {
        $args = ['exists_file'];
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
        $this->assertTrue($actual);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function test_追加_引数チェック_存在しないファイル指定()
    {
        $args = ['un_exists_file'];
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
    }

    /**
     * @expectedException \TypeError
     */
    public function test_追加_引数チェック_ファイル指定なし()
    {
        $args = null;
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_追加_引数チェック_ファイル指定0件()
    {
        $args = [];
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function test_追加_引数チェック_ファイル複数()
    {
        $args = ['exists_file', 'un_exists_file'];
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
    }

    /**
     * @expectedException \RuntimeException
     */
    public function test_追加_引数チェック_ディレクトリ指定()
    {
        $args = ['vendor'];
        $this->command = new AddCommand();

        $actual = $this->command->checkArgs($args);
    }
}