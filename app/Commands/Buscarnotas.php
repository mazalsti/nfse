<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class Buscarnotas extends BaseCommand
{
    /**
     * The Command's Group
     *
     * @var string
     */
    protected $group = 'CodeIgniter';

    /**
     * The Command's Name
     *
     * @var string
     */
    protected $name = 'nfse:robo';

    /**
     * The Command's Description
     *
     * @var string
     */
    protected $description = 'Robo para buscar as notas nfse para o rodrigo';

    /**
     * The Command's Usage
     *
     * @var string
     */
    protected $usage = 'nfse:robo [arguments] [options]';

    /**
     * The Command's Arguments
     *
     * @var array
     */
    protected $arguments = [];

    /**
     * The Command's Options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Actually execute a command.
     *
     * @param array $params
     */
    public function run(array $params)
    {
        CLI::write("Iniciando");
    }
}
