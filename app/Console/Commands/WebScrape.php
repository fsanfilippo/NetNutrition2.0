<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class WebScrape extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'scrape:netnutrition';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Scrape the net nutrition web site';

  /**
   * Create a new command instance.
   * public function __construct()
   * {
   * parent::__construct();
   * }
   *
   * /**
   * Execute the console command.
   *
   * @return mixed
   */
  public function handle()
  {
    return 1;
  }
}