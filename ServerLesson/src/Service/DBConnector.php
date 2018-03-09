<?php
namespace Service;

class DBConnector
{

    private static $config;

    private static $connection;

    /**
     * Set config
     *
     * store the given configuration. this configuration must contain
     * a 'host', 'driver', 'dbname','dbuser','dbpass', 'keys
     *
     * @param
     *            array$config the configuration to store
     *            
     * @return void'
     */
    public static function setConfig(array $config)
    {
        self::$config = $config; // stocké dans $config
    }

    /**
     *
     * Creatre a connection
     *
     * create a live connection with the database and store it
     * internally
     *
     * @return
     */
    Private static function createConnection()
    {
        $dbConnection = sprintf(
            '%s:host=%s;dbname=%s', 
            self::$config['host'],
            self::$config['driver'], 
            self::$config['dbname']);
        
            self::$connection = new \PDO(
                $dbConnection,
                self::$config['dbuser'],
                self::$config['dbpass']
            );
    }

    /**
     * Get connection
     *
     * return the current existing connection, and create ut first
     * if not exist
     *
     * @return \pdo
     */
    
    public static function getConnection()
    {
        if (! self::$connection) {
            self::createConnection();
        }
        
        return self::$connection;
    }
}