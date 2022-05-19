<?php
    declare(strict_types=1);
    namespace Test\Web;

    use PHPUnit\Framework\TestCase;

class UserWebTest extends TestCase
{
    public function testDeveRetornarListaDeUsuariosEmFormatoJson()
    {
        $url = file_get_contents("http://localhost:8888/api/petshoposasco/user");
        $json = json_decode($url);

        self::assertStringContainsString("200 OK",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(3,$json);
        
        self::assertSame('weliton',$json[0]->name);
        self::assertSame('karla',$json[1]->name);
        self::assertSame('danilo',$json[2]->name);
    }

    public function testDeveRetornarBuscaDeUsuariosPoId()
    {
        $url = file_get_contents("http://localhost:8888/api/petshoposasco/user/1");
        $json = json_decode($url);

        self::assertStringContainsString("200 OK",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(1,$json);

        self::assertSame('weliton',$json[0]->name);

    }

    public function testDeveRetornarEFiltrarUsuariosPorParametros()
    {
         $url = file_get_contents("http://localhost:8888/api/petshoposasco/user/age/35");
        $json = json_decode($url);

        self::assertStringContainsString("200 OK",$http_response_header[0]);
        self::assertIsArray($json);
        self::assertCount(2,$json);

        self::assertSame('weliton',$json[0]->name);
        self::assertSame(35,$json[0]->age);
        self::assertSame(1986,$json[0]->year);
        
        self::assertSame('danilo',$json[1]->name);
        self::assertSame(35,$json[1]->age);
        self::assertSame(1987,$json[1]->year);
    }

}