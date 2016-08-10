<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model_9.4.php';

class User extends Model
{
    /** Insert a new entry into the database */
    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security
        var_dump(self::)
        $query = self::$dbc->prepare('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)');

        // @TODO: You will need to iterate through all the attributes to build the prepared query

        $query->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $query->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $query->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);

        $query->execute();

        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        $id = self::$dbc->lastInsertId();
        $this->attributes['id'] = $id;
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security
        $update = self::$dbc->prepare('UPDATE users(name, email, password) VALUES(:name, :email, :password) WHERE id = :id');
        $update->bindValue(':name', $this->attributes['name'], PDO::PARAM_STR);
        $update->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $update->bindValue(':password', $this->attributes['password'], PDO::PARAM_STR);
        $update->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);

        $update->execute();

        // @TODO: You will need to iterate through all the attributes to build the prepared query
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $findSelect = self::$dbc->prepare('SELECT * FROM users WHERE id = :id');

        // @TODO: Store the result in a variable named $result
        $findSelect->execute();
        $result = $findSelect->fetch(PDO::FETCH_ASSOC);
        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records
        $allUsers = self::$dbc->prepare('SELECT * FROM users');
        $allUsers->execute();
        $result = $allUsers->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if($result) {
            $instance = new static($result);
        }
        return $instance;

    }
    public static function delete()
    {
        //self::dbConnect();
        $deleteUsers = self::$dbc->prepare('DELETE * FROM users WHERE id = :id');
        $deleteUsers->bindValue(':id', $this->attributes['id'], PDO::PARAM_INT);
        $deleteUsers->execute();
    }
}
