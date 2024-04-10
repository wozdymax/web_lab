<?php

class Connection
{
    private const HOST = 'localhost';
    private const USERNAME = 'root';
    private const PASSWORD = '';
    private const DATABASE = 'blog';

    public function createDBConnection(): mysqli
    {
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public function closeDBConnection(mysqli $conn): void
    {
        $conn->close();
    }
}