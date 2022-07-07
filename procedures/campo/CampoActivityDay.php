<?php
include_once 'Connection.php';
include_once 'utils/ToResponse.php';
class CampoActivityDay
{
    use ToResponse;
    private Connection $connection;

    function __construct()
    {
        $this->connection = Connection::getInstance();
    }
    function get(): self
    {
        $type = [
            "CampoActividadDia",
            "CampoActividadDiaTotal",
            "CampoActividadDiaSubAct"
        ];
        $i = 0;
        do{
            $approve = $this->connection
                ->parameters([
                    '@FechaInicial' => '2015-01-07 00:00:00',
                    '@FechaFinal' => '2016-06-30 00:00:00',
                    '@CodCiclo' => '001',
                    '@CodAct' => '002',
                    '@Tipo' => $type[$i]
                ])
                ->exec('dbo.usp_Campo_Actividad_Dia')
                ->fetch();
            $this->response($approve);
            echo $this->toJson();
            $i++;
        }while($i < count($type));
        return $this;
    }
}