<?php
    declare(strict_types=1);
    namespace Test\Web;

    use PHPUnit\Framework\TestCase;

final class PetWebTest extends TestCase
{
    public function testDeveRetornarListaDePetsEmFormatoJson()
    {
        $url = file_get_contents("http://localhost:8888/api/petshoposasco/pets");
        $json = json_decode($url);

        self::assertStringNotContainsString("200 ok",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(5,$json);

        self::assertSame('cabra do capiroto',$json[1]->name);
    }

    public function testDeveRetornarBuscaDePetsPoIdEmFormatoJson()
    {
        $url = file_get_contents("http://localhost:8888/api/petshoposasco/pets/1");
        $json = json_decode($url);

        self::assertStringNotContainsString("200 ok",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(1,$json);

        self::assertSame('do ruim',$json[0]->name);
    }

    public function testDeveRetornarEFiltrarPetsPorParametrosEmFormatoJson()
    {
         $url = file_get_contents("http://localhost:8888/api/petshoposasco/pets/raca/pintcher");
        $json = json_decode($url);

        self::assertStringNotContainsString("200 ok",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(2,$json);

        self::assertSame('do ruim',$json[0]->name);
        self::assertSame('cabra do capiroto',$json[1]->name);
    }
    
}