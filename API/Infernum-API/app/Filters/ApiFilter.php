<?php

namespace App\Filters;
use Illuminate\Http\Request;

class ApiFilter
{
    protected $safeParams = [];  // Parametros por los cuáles vamos a filtrar nuestro modelo
    protected $columnMap = [];   // Vamos a mapear como queremos que se mapeen nuestras columnas
    protected $operatorMap = []; // Mapear los operadores por ejemp eq => =

    public function transform(Request $request)
    {
        $eloQuery = [];
        foreach ($this->safeParams as $parm => $operators)
        {
            $query = $request->query($parm);
            if (!isset($query))
                continue ;
            $column = $this->columnMap[$parm] ?? $parm;
            foreach ($operators as $operator)
            {
                if (isset($query[$operator]))
                    $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
            }
        }
        return $eloQuery;
    }
}