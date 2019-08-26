<?php
namespace NFePHP\BPe\Exception;

/**
 * @category   NFePHP
 * @package    NFePHP\CTe\Exception
 * @copyright  Copyright (c) 2008-2017
 * @license    http://www.gnu.org/licenses/lesser.html LGPL v3
 * @author     Roberto L. Machado <linux.rlm at gmail dot com>
 * @link       http://github.com/nfephp-org/sped-common for the canonical source repository
 */

class DocumentsException extends \InvalidArgumentException implements ExceptionInterface
{
    public static $list = [
        0 => "Este documento [{{msg}}] n�o recebe protocolos. Confira a ordem dos par�metros.",
        1 => "O arquivo indicado como BPe n�o est� protocolado ou n�o � um BPe!!",
        2 => "O arquivo indicado como B2B n�o cont�m a tagB2B indicada!!",
        3 => "O documento de resposta n�o cont�m o NODE {{msg}}.",
        4 => "O documento de resposta relata um erro {{msg}}.",
        5 => "Os documentos se referem a diferentes objetos. {{msg}}.",
        6 => "O argumento passado n�o � um XML v�lido.",
        7 => "Este xml n�o pertence ao projeto SPED-NFe.",
        8 => "A configura��o (config.json) n�o � v�lido {{msg}}.",
        9 => "Falta o CSC no config.json.",
        10 => "Falta o CSCId no config.json.",
        11 => "Falta a URL do servi�o NfeConsultaQR.",
        12 => "O TXT n�o representa uma NFe",
        13 => "O numero de notas indicado na primeira linha do TXT � diferente do numero total de notas do txt.",
        14 => "Falha na valida��o do TXT:\n {{msg}}.",
        15 => "Um TXT de NFe deve ser passado como par�metro, e nada foi passado.",
        16 => "O txt tem um campo n�o definido {{msg}}"
    ];

    public static function wrongDocument($code, $msg = '')
    {
        $msg = self::replaceMsg(self::$list[$code], $msg);
        return new static($msg);
    }

    private static function replaceMsg($input, $msg)
    {
        return str_replace('{{msg}}', $msg, $input);
    }
}
