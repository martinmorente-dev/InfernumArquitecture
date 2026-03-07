<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class GameFilter extends ApiFilter
{
    protected $safeParams = [
        'price' => ['gt', 'lt']
    ];
    protected $columnMap = [];
    protected $operatorMap = [
        'gt' => '>',
        'lt' => '<'
    ];

    
}