<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Migrations extends BaseConfig
{
    /**
     * Enable/Disable migrations.
     */
    public bool $enabled = true;

    /**
     * The type of migration numbering.
     * Options: 'sequential' or 'timestamp'
     */
    public string $type = 'timestamp';

    /**
     * The table used to keep track of migrations.
     */
    public string $table = 'migrations';

    /**
     * Filename timestamp format.
     */
    public string $timestampFormat = 'Y-m-d-His';
}

