<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\CantidadProducto;

class GenerarValoresCantidadProducto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'actualizar:valores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creamos 5 registro nuevos en cantidad producto';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        CantidadProducto::factory(5)->create();
        $this->info("Valores generados existosamente");
    }
}
