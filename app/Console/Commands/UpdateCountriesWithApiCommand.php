<?php

namespace App\Console\Commands;

use App\Apis\CountryListApi;
use App\Services\CountryService;
use Illuminate\Console\Command;

class UpdateCountriesWithApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'countries:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command Update countries via the API';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        (new CountryService())
            ->updateAllCountriesCallingApi();
    }
}
