<?php
/*Neste arquivo serão colocados apenas as constantes de modelos de host se será local ou externa(local)
*é definida em 2 parametros.
*@param ENVIRONMENT é fixo. 
*
*É o segundo parâmetro que muda:
*@param DEVELOPMENT é usado apenas para desenvolvimento LOCAL(localhost)
*@param PRODUCTION é para envio para o servidor externo(FTP).
*/
define("ENVIRONMENT", "development");
//define("ENVIRONMENT", "production");