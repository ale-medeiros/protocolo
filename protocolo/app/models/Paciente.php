<?php

namespace App\Models;

class Paciente
{
    // Variáveis para o PDO
    private static $pdo;

    // Método estático para obter a conexão PDO
    private static function getPDO()
    {
        if (self::$pdo == null) {
            try {
                self::$pdo = new \PDO("mysql:host=localhost;dbname=protocolos", "root", "");
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die("Erro na conexão com o banco de dados: " . $e->getMessage());
            }
        }
        return self::$pdo;
    }

    // Método para buscar todos os pacientes
    public static function buscarTodos()
    {
        $sql = "SELECT paciente_id, nome_paciente, data_nascimento, responsavel_principal FROM pacientes";
        $stmt = self::getPDO()->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    // Método para buscar um paciente por ID
    public static function buscarPorId($id)
    {
        $sql = "SELECT paciente_id, nome_paciente, data_nascimento, responsavel_principal, telefone, email, escola FROM pacientes WHERE paciente_id = :id";
        $stmt = self::getPDO()->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    // Método para adicionar um novo paciente
    public static function adicionar($dados)
    {
        $sql = "INSERT INTO pacientes (nome_paciente, data_nascimento, responsavel_principal, responsavel_secundario, telefone, email, escola) 
                VALUES (:nome_paciente, :data_nascimento, :responsavel_principal, :responsavel_secundario, :telefone, :email, :escola)";

        $stmt = self::getPDO()->prepare($sql);

        // Bind de dados
        $stmt->bindParam(':nome_paciente', $dados['nome_paciente']);
        $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
        $stmt->bindParam(':responsavel_principal', $dados['responsavel_principal']);
        $stmt->bindParam(':responsavel_secundario', $dados['responsavel_secundario']);
        $stmt->bindParam(':telefone', $dados['telefone']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':escola', $dados['escola']);

        return $stmt->execute();
    }

    // Método para editar um paciente existente
    public static function editar($dados)
    {
        $sql = "UPDATE pacientes SET nome_paciente = :nome_paciente, data_nascimento = :data_nascimento, responsavel_principal = :responsavel_principal, 
                responsavel_secundario = :responsavel_secundario, telefone = :telefone, email = :email, escola = :escola WHERE paciente_id = :paciente_id";

        $stmt = self::getPDO()->prepare($sql);

        // Bind de dados
        $stmt->bindParam(':paciente_id', $dados['paciente_id'], \PDO::PARAM_INT);
        $stmt->bindParam(':nome_paciente', $dados['nome_paciente']);
        $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
        $stmt->bindParam(':responsavel_principal', $dados['responsavel_principal']);
        $stmt->bindParam(':responsavel_secundario', $dados['responsavel_secundario']);
        $stmt->bindParam(':telefone', $dados['telefone']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':escola', $dados['escola']);

        return $stmt->execute();
    }

    // Método para deletar um paciente
    public static function deletar($id)
    {
        $sql = "DELETE FROM pacientes WHERE paciente_id = :id";
        $stmt = self::getPDO()->prepare($sql);
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);

        return $stmt->execute();
    }
}
