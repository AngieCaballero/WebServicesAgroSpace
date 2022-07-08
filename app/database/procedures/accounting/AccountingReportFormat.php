<?php

namespace App\Database\Procedures\Accounting;
use App\Database\Connection;
use App\Utils\ToResponse;

class AccountingReportFormat
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
                '@FechaInicial' => '01-01-2017',
                '@FechaFinal' => '01-01-2018',
                '@CodRpt' => 1,
                '@Moneda' => 'COR',
                '@Tipo' => 'Saldo'
            ])
            ->exec('dbo.usp_Contabilidad_FormatoReporte')
            ->fetch();

        $this->response($approve);

        return $this;
    }
}