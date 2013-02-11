<?php
/*--------------------------------------------------------------------------
 Project Name 	: HotelPlan
 Page Name 		: dbClass.php
 Page Action 	: Declaring and defining database functions
 Date Created 	: 8 Jan 2013
 Date Modified 	:
 ----------------------------------------------------------------------------*/

/* Class */
class db
{
    var $db_connect_id;
    var $query_result;
    var $row = array();
    var $int_num_queries = 0;
    //Functions in the db class
    //Constructor
    //Creates a connection with the database server and selects the database
    function db($str_db_server, $str_db_user, $str_db_password, $str_db_name, $bool_persistency=false)
    {
        $this->server = $str_db_server;
        $this->user = $str_db_user;
        $this->password = $str_db_password;
        $this->dbname = $str_db_name;
        $this->persistency = $bool_persistency;

        if($this->persistency)
        {
            $this->db_connect_id = @mysql_pconnect($this->server, $this->user, $this->password);
        }
        else
        {
            $this->db_connect_id = @mysql_connect($this->server, $this->user, $this->password);
        }
        if($this->db_connect_id)
        {
            if($this->dbname != "")
            {
                $dbselect = @mysql_select_db($this->dbname);
                if(!$dbselect)
                {
                    @mysql_close($this->db_connect_id);
                    $this->db_connect_id = $dbselect;
                }
            }
            return $this->db_connect_id;
        }
        else
        {
            return false;
        }
    }
    //Close the database connection
    function db_close()
    {
        if($this->db_connect_id)
        {
            if($this->query_result)
            {
                @mysql_free_result($this->query_result);
            }
            $result = @mysql_close($this->db_connect_id);
            return $result;
        }
        else
        {
            return false;
        }
    }
    //Base query method
    function sql_query($query = "", $transaction = FALSE)
    {
        // Remove any pre-existing queries
        unset($this->query_result);
        if($query != "")
        {
            $this->int_num_queries++;
            $this->query_result = @mysql_query($query, $this->db_connect_id);
        }
        if($this->query_result)
        {
            unset($this->row[$this->query_result]);
            return $this->query_result;
        }
        else
        {
            return ($transaction==END_TRANSACTION) ? true : false;
        }
    }

    // Other query methods
    function sql_numrows($query_id = 0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }
        if($query_id)
        {
            $result = @mysql_num_rows($query_id);
            return $result;
        }
        else
        {
            return false;
        }
    }
    function sql_fetchrow($query_id = 0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }
        if($query_id)
        {
            $this->row[$query_id] = @mysql_fetch_array($query_id);
            return $this->row[$query_id];
        }
        else
        {
            return false;
        }
    }
    function sql_fetchassoc($query_id = 0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }
        if($query_id)
        {
            $this->row[$query_id] = @mysql_fetch_assoc($query_id);
            return $this->row[$query_id];
        }
        else
        {
            return false;
        }
    }
    function sql_rowseek($rownum, $query_id = 0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }
        if($query_id)
        {
            $result = @mysql_data_seek($query_id, $rownum);
            return $result;
        }
        else
        {
            return false;
        }
    }
    function sql_freeresult($query_id = 0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }
        if ( $query_id )
        {
            unset($this->row[$query_id]);
            @mysql_free_result($this->query_result);
            return true;
        }
        else
        {
            return false;
        }
    }
    function sql_nextid()
    {
        if($this->db_connect_id)
        {
            $result = @mysql_insert_id($this->db_connect_id);
            return $result;
        }
        else
        {
            return false;
        }
    }
    function sql_result($query_id = 0,$rownum,$fieldname=0)
    {
        if(!$query_id)
        {
            $query_id = $this->query_result;
        }

        if($query_id)
        {
            $result = @mysql_result($query_id, $rownum,$fieldname);
            return $result;
        }
        else
        {
            return false;
        }
         
    }

    //End of class
}
?>