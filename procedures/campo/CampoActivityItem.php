<?php
include_once 'Connection.php';
include_once 'utils/ToResponse.php';
class CampoActivityItem
{
    private Connection $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    function get(): self
    {
        $type = [
            "CampoActividadRubro",
            "CampoActividadRubroTotal",
            "CampoActividadRubroTop5",
            "CampoActividadRubroArticulo"
        ];
        $i = 0;
        do{
            $approve = $this->connection
                ->parameters([
                    '@FechaInicial' => '2021-01-01 00:00:00',
                    '@FechaFinal' => '2022-07-07 00:00:00',
                    '@CodCiclo' => '018',
                    '@CodAct' => '018',
                    '@CodRubro' => '001',
                    '@Tipo' => $type[$i]
                ])
                ->exec('dbo.usp_Campo_Actividad_Rubro')
                ->fetch();
            $json = json_encode($approve, JSON_UNESCAPED_UNICODE);
            if ($json)
                echo $json;
            else
                echo json_last_error_msg();
            $i++;
        }while($i < count($type));
        return $this;
    }
}