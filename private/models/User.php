<?php

class User extends Model
{
    protected $allowedColumns = [
        'name',
        'sname',
        'email',
        'password',
        'sexo',
        'nivel',
        'date',
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_escola_id',
        'hash_password'
    ];


    public function validate($DATA)
    {
        $this->errors = array();

       
        if(empty($DATA['name']) || !preg_match('/^[a-zA-Z]+$/', $DATA['name']))
        {
            $this->errors['name'] = "NOME DE USUARIO E COMPOSTO SO POR LETRAS";
        }

        
        if(empty($DATA['sname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['sname']))
        {
            $this->errors['sname'] = "SOBRE NOME DE USUARIO E COMPOSTO SO POR LETRAS";
        }

        
        if(empty($DATA['email']) || !filter_var($DATA['email'],FILTER_VALIDATE_EMAIL))
        {
            $this->errors['email'] = "ESTE EMAIL NAO E VALIDO";
        }
        
      
        if($this->where('email',$DATA['email']))
        {
            $this->errors['email'] = "ESTE EMAIL JA EXISTE NO BANCO DE DADOS";
        }

        
        if(empty($DATA['password']) || $DATA['password'] !== $DATA['password2'])
        {
            $this->errors['password'] = "SENHA NAO PODEM SER DIFERENTES";
        }

        
        if(strlen($DATA['password']) < 8)
        {
            $this->errors['password'] = "SENHA E CONFIRMACAO DE SENHA DEVEM SER MAIS DE 8 CARACTERES";
        }

        
        $sexos = ['feminino','masculino'];
        if(empty($DATA['sexo']) || !in_array($DATA['sexo'], $sexos))
        {
            $this->errors['sexo'] = "SEXO NAO E VALIDO";
        }

      
        $niveis = ['estudante','recepicionista','conferencista','admin','super_administrador'];
        if(empty($DATA['nivel']) || !in_array($DATA['nivel'], $niveis))
        {
            $this->errors['nivel'] = "NIVEL NAO VALIDO";
        }


        if(count($this->errors) == 0)
        {
            return true;
        }

        return false;
    }

    public function make_user_id($data)
    {
        $data['user_id'] = random_string(255);
        return $data;
    }

    public function make_school_id($data)
    {
        if(isset($_SESSION['USER']->escola_id)){
            $data['escola_id'] = $_SESSION['USER']->escola_id;
        }
        return $data;
    }

    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }
}

;?>