<?php

class Users extends TRecord
{
    const TABLENAME  = 'Users';
    const PRIMARYKEY = 'id';
    const IDPOLICY   =  'serial'; // {max, serial}
    const CACHECONTROL  = 'TAPCache';

    

    use SystemChangeLogTrait;
    /**
     * Constructor method
     */
    public function __construct($id = NULL, $callObjectLoad = TRUE)
    {
        parent::__construct($id, $callObjectLoad);
        parent::addAttribute('user_name');
        parent::addAttribute('user_email');
        parent::addAttribute('user_password');
            
    }

    
}

