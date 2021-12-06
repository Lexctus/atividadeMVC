<?php

/* Classe responsável pelo CRUD */
class PessoaDAO //DAO --> Data Access Object
{
    public function insert(PessoaVO $values)
    {
        $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, nome_user) VALUE (";
        $sql .= "?, ?, ?)";

        $DB = new DB();
        $DB->getConnection(); //Realiza conexão com o banco
        $pstm = $DB->execSQL($sql);

        $pstm->bind_param("s", $value->getNome());
        $pstm->bind_param("s", $value->getSobrenome());
        $pstm->bind_param("s", $value->getNome_user());

        if($pstm->execute()) //o método execute retorna um bool
        {
            return true;
        } 
        else
        {
            return false;
        }  
    }

    public function select(PessoaVO $values)
    {
        $sql = "SELECT * FROM tbl_pessoa WHERE id = ". addslashes($id);

        $DB = new DB();
        $DB->getConnection(); //Realiza conexão com o banco
        $query = $DB->execSQL($sql);

        $vo = new PessoaVO();

        while($reg = $query->fetch_array(MYSQLI_ASSOC))
        {
            $vo->setId($reg["id"]);
            $vo->setNome($reg["nome"]);
            $vo->setSobrenome($reg["sobrenome"]);
            $vo->setNome_user($reg["nome_user"]);
        }

        return $vo;
    }

    public function update(PessoaVO $values)
    {
        $sql = "UPDATE tbl_pessoa SET nome = ?, sobrenome = ?, nome_user = ? WHERE id = ". addslashes($id);

        $DB = new DB();
        $DB->getConnection(); //Realiza conexão com o banco
        $pstm = $DB->execSQL($sql);

        $pstm->bind_param("s", $value->getNome());
        $pstm->bind_param("s", $value->getSobrenome());
        $pstm->bind_param("s", $value->getNome_user());

        if($pstm->execute()) //o método execute retorna um bool
        {
            return true;
        } 
        else
        {
            return false;
        }
    }

    public function delete(PessoaVO $values)
    {
        $sql = "DELETE FROM tbl_pessoa WHERE id = ". addslashes($id);

        $DB = new DB();
        $DB->getConnection(); //Realiza conexão com o banco
        $pstm = $DB->execSQL($sql);

        $pstm->bind_param("s", $value->getNome());
        $pstm->bind_param("s", $value->getSobrenome());
        $pstm->bind_param("s", $value->getNome_user());

        if($pstm->execute()) //o método execute retorna um bool
        {
            return true;
        } 
        else
        {
            return false;
        }
    }
}