<?php
class User
{
    private $name;
    private $apellido;
    private $telefono;
    private $email;
    private $direccion;
    private $empleo;
    private $agencia;
    private $archivo;
    private $ID;

    public function __construct(array $data, array $file)
    {
        $this->name = isset($data['name']) ? trim($data['name']) : null;
        $this->apellido = isset($data['apellido']) ? trim($data['apellido']) : null;
        $this->telefono = isset($data['telefono']) ? trim($data['telefono']) : null;
        $this->email = isset($data['email']) ? trim($data['email']) : null;
        $this->direccion = isset($data['direccion']) ? trim($data['direccion']) : null;
        $this->empleo = isset($data['empleo']) ? trim($data['empleo']) : null;
        if ($file['error']['archivo'] === UPLOAD_ERR_OK) {
            $this->archivo = [
                'base64' => base64_encode(file_get_contents($file['tmp_name']['archivo'])),
                'type' => $file['type']['archivo'],
                'name' => $file['name']['archivo']
            ];
        }
        $this->agencia = isset($data['agencia']) ? trim($data['agencia']) : null;
        $this->ID = isset($data['ID']) ? trim($data['ID']) : null;
        $this->telefono = isset($data['tel']) ? trim($data['tel']) : null;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    public function getEmpleo()
    {
        return $this->empleo;
    }

    public function setEmpleo($empleo)
    {
        $this->empleo = $empleo;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getArchivo()
    {
        return $this->archivo;
    }

    public function setArchivo($archivo)
    {
        $this->archivo = $archivo;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }

    public function expose()
    {
        return get_object_vars($this);
    }
}
