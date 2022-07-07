<?php

namespace Procedures\Buys;
use App\Utils\ToResponse;
use App\Database\Connection;

class NotApprove
{
    use ToResponse;

    private Connection $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    function get(): self
    {
        $notApprove = $this->connection
            ->parameters([
                '@FechaInicial' => '2021-08-19 00:00:00',
                '@FechaFinal' => '2021-11-06 00:00:00',
                '@CodCompra' => '010833',
                '@Tipo' => 'CompraNoAprobxProvArt'
            ])
            ->exec('dbo.usp_Compras_NoAprobadas')
            ->fetch();

        $this->response($notApprove);
        return $this;
    }
}