<?php

namespace App\Database\Procedures\Accounting;
use App\Database\Connection;
use App\Utils\ToResponse;

class AccountingDaily
{
    use ToResponse;
    private Connection $connection;

    /**
     * La función __construct() es una función constructora que crea una nueva instancia de la clase Connection y la asigna
     * a la propiedad de conexión.
     */
    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    /**
     * Ejecuta un procedimiento almacenado y devuelve el resultado.
     *
     * @return self La respuesta está siendo devuelta.
     */
    function get(): self
    {
        $approve = $this->connection
            ->parameters([
                '@FechaInicial' => '01-01-2016 00:00:00',
                '@FechaFinal' => '01-01-2018 00:00:00',
                '@CodEmp' => '001',
                '@Asiento' => '0000000148',
                '@Tipo' => "ContaDiarioDetalle"
            ])
            ->exec('dbo.usp_Contabilidad_Diario')
            ->fetch();

        $this->response($approve);

        return $this;
    }
}