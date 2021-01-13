<?php
/**
 * @package EvolutionScript
 * @author: EvolutionScript S.A.C.
 * @Copyright (c) 2010 - 2020, EvolutionScript.com
 * @link http://www.evolutionscript.com
 */

namespace Config;


use CodeIgniter\Config\BaseConfig;

class Helpdesk extends BaseConfig
{
    #Database host
    const HELPDESK_DB_HOST = 'localhost';

    #Database username
    const HELPDESK_DB_USER = 'root';

    #Database password
    const HELPDESK_DB_PASSWORD = 'root';

    #Database name
    const HELPDESK_DB_NAME = 'helpdeskz3';

    #Database table prefix
    const HELPDESK_DB_PREFIX = 'hdz_';

    #Database port, do not change it if you are not sure
    const HELPDESK_DB_PORT = 3306;

    #URL of your helpdesk
    const HELPDESK_URL = 'http://helpdeskz.web/';

    #Upload path for images used in HTML editor and logo
    const HELPDESK_EDITOR_PATH = FCPATH.'upload';

    #Default helpdesk language
    const HELPDESK_LANG = 'en';

    #Helpdesk available languages
    const HELPDESK_LANG_LIST = ['en'];

    #URI name to access to staff panel. Ex: staff / then you can access in http://helpdesk.com/staff
    const HELPDESK_STAFF_URI = 'staff';
}