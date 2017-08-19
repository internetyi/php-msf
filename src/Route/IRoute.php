<?php
/**
 * IRoute接口
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\MSF\Route;

interface IRoute
{
    function handleHttpRequest($request);

    function getControllerName();

    function getControllerClassName();

    function getMethodName();

    function getParams();

    function getPath();

    function getIsRpc();

    function getVerb();

    function setControllerName($name);

    function setMethodName($name);

    function setParams($params);

    function getEnableCache();

    function setRouteCache($path, $callable);

    function getRouteCache($path);
}
