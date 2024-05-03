<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CalculateSalaryCommand extends Command
{
    protected $signature = 'app:calculate-salary-command';
    protected $description = 'Command description';
    public function handle()
    {
        $monthSalary = $this->ask('ingrese su salario');
        $grossSalary = $monthSalary * 12;
        $healthDisccount = $grossSalary * 0.04;
        $pensionDisccount = $grossSalary * 0.04;
        $netSalary = $grossSalary - $healthDisccount - $pensionDisccount;
        $this->info('Salario bruto: $' . $grossSalary);
        $this->info("Descuento de salud:  $ $healthDisccount");
        $this->info('Descuento de Pension: $' . $pensionDisccount);
        $this->info('Salario netro: $'. $netSalary);
    }
}
