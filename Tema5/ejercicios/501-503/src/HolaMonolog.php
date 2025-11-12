<?php 

namespace Dwes\Monologos;

use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;



class HolaMonolog {
    private Logger $miLog;
    private int $hora;

    public function __construct($horaInit) {
        $this->hora = $horaInit;

        $this->miLog = new Logger("HolaMonolog");
        
        $rutaLogs = __DIR__ . '/../logs/milog.log';

        $rfh = new RotatingFileHandler($rutaLogs, 0, Logger::WARNING);

        $this->miLog->pushHandler($rfh);

        if ($this->hora > 8 && $this->hora < 13) {
            $this->miLog->warning("¡Buenos días con alegría!");
        };

    }

    public function saludar() {
        echo "Saludando!!! <br>";
        $this->miLog->info("¡Hello máquina!");
    }

    public function despedir() {
        echo "Despidiendo!!! <br>";
        $this->miLog->warning("¡Sayonara baby!");
    }
}


