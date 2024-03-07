<?php
function listarTabela($campos, $tabela)
{
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqlLista = $conn->prepare("SELECT $campos FROM $tabela");
      // $sqlLista->bindValue(1, $campoParametro, PDO::PARAM_INT);
        $sqlLista->execute();
        $conn->commit();
        if ($sqlLista->rowCount() > 0) {
            return $sqlLista->fetchAll(PDO::FETCH_OBJ);
        } else {
            return 'Vazio';
        };
    } catch
    (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollback();
    };
    $conn = null;
}

function validarSenhaCriptografia($campos, $tabela, $campoBdString, $campoBdString2, $campoParametro, $campoParametro2, $campoBdAtivo, $valorAtivo) {
    $conn = conectar();

    try {
        $conn -> beginTransaction();
        $sqlLista = $conn -> prepare("SELECT $campos "
            . "FROM $tabela "
            . "WHERE $campoBdString = ? AND $campoBdAtivo = ? ");
        $sqlLista -> bindValue(1, $campoParametro, PDO:: PARAM_STR);
        $sqlLista -> bindValue(2, $valorAtivo, PDO:: PARAM_STR);
        $sqlLista -> execute();
        $conn -> commit();
        if ($sqlLista -> rowCount() > 0) {
            $retorno = $sqlLista->fetch(PDO::FETCH_OBJ);

            $senhaHash = $retorno->$campoBdString2;
            if (password_verify($campoParametro2, $senhaHash)) {
                return $retorno;
            } else {
                return 'senha';
            }
        } else {
            return 'usuario';
        }
    } catch (throwable $e) {
        $error_message = 'Throwable: '.$e -> getMessage().PHP_EOL;
        $error_message = 'File: '.$e -> getFile().PHP_EOL;
        $error_message = 'Line: '.$e -> getLine().PHP_EOL;
        error_log($error_message, 3, 'log/arquivo_de_log.txt');
        $conn -> rollback();
        throw $e;
    }
}


function insertDoisId($tabela, $campos, $value1, $value2) {
    $conn = conectar();
    try {
        $conn->beginTransaction();
        $sqInsert = $conn->prepare("Insert INTO $tabela($campos)VALUES(?,?)");
        $sqInsert ->bindValue(1, $value1, PDO::PARAM_STR);
        $sqInsert ->bindValue(2, $value1, PDO::PARAM_STR);
        $sqlInsert ->execute();
        $idInsert = $conn->lastInsertId();  
        $conn->commit();
        if ($idInsert->rowCount() > 0) {
            return $idInsertRetorno;
        }else{
            return 'nGravado';
        };
    }catch (PDOException $e) {
        echo 'Exception -> ';
        return ($e->getMessage());
        $conn->rollBack();
    };
    $conn = null;
}


function deletarRegistro($tabela, $campoReferencia, $idParametro)
{
    $conn = conectar();
    try{
        $conn->beginTransaction();

        $sqlUpdate = $conn->prepare("DELETE FROM $tabela WHERE $campoReferencia = ?");
        $sqlUpdate->bindValue(1, $idParametro, PDO::PARAM_INT);
        $sqlUpdate->execute();
        $conn->commit();
        if ($sqlUpdate->rowCount() > 0){
            return true;
    } else {
        return null;
    };
} catch
(PDOException $e) {
    echo 'Exception -> ';
    return ($e ->getMessage());
    $conn->rollback();
};
$conn = null;

}
   

