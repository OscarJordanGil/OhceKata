<?php

declare(strict_types=1);

namespace OscarJordanGil\OhceKata\Test;

use OscarJordanGil\OhceKata\OhceKata;
use PHPUnit\Framework\TestCase;

final class OhceKataTest extends TestCase
{
    /**
     * @test
     */
    public function shouldAddTwoArguments()
    {
        $Ohce = new OhceKata();
        $word = "Stop!";

        $result = $Ohce->execute($word);

        $this->assertEquals("Adios", $result);
    }

    /**
     * @test
     */
    public function normalWordReturnsTurnOver()
    {
        $Ohce = new OhceKata();
        $word = "Juan";

        $result = $Ohce->execute($word);

        $this->assertEquals("nuaJ", $result);
    }


}
