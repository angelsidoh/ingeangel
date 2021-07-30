<?php
require_once("bin/conekta-php-master/lib/Conekta.php");
require('includes/funciones/qr.php');




class Payment{
    private $ApiKey = "key_tpgg18wFmg3D7r5Ea4rrAQ";
    private $ApiVersion = "2.0.0";

    private $UserDB = "root";
    private $PassDB = "";
    private $ServerDB = "localhost";
    private $DataBaseDB = "dbw1fxme936vst";
    
    public function __construct($token,$card,$name,$descrption,$total,$email,$idex){
        $this->token = $token;
        $this->card = $card;
        $this->name = $name;
        $this->description = $descrption;
        $this->total = $total;
        $this->email = $email;
        $this->idex = $idex;
       
    }
    public function Pay(){
        \Conekta\Conekta::setApiKey($this->ApiKey);
        \Conekta\Conekta::setApiVersion($this->ApiVersion);
        
        if(!$this->Validate()){
            return false;
        }
        if(!$this->CreateCustomer()){
            return false;
        }
        if(!$this->CreateOrder()){
            return false;
        }

        $this->save();
        $lastnum = substr($this->card,strlen($this->card)-4,16);
        return $lastnum;

    }
    public function save(){
        $id = $this->idex;
        $tokenconeckta = $this->order->id;
        $lastnum = substr($this->card,strlen($this->card)-4,16);
        $pago = $this->total;
        $titular = $this->name;
        $email = $this->email;
        $tokenconcepto =$this->description;
        date_default_timezone_set('America/Mexico_City');
        $fecha =  date('Y-m-d H:i:s');
        
        
        $datos = generarQr($email,$titular, $id, $pago, $tokenconeckta);
        $qr = $datos['qr'];
        $nombresend = $datos['nombresend'];
      
       
        try {
            
           
        require('bd/bdsqli.php');
        $stmt = $connf->prepare("UPDATE pagos SET fechadepago_pago = ?, tokenconekta_pago = ?, fortarget_pago = ?, tokenpago_pago = ?, money_pago = ?, titular_pago = ?, qr_pago = ? WHERE id_pago = ?");

        $stmt->bind_param("sssssssi", $fecha, $tokenconeckta, $lastnum, $tokenconcepto, $pago, $titular, $qr ,$id);

        $stmt->execute();

        // if ($stmt->affected_rows == 1) {
            
        // }

        $stmt->close();
        $connf->close();
        } catch (PDOException $e) {
            echo json_encode("Error: " . $e->getMessage());
        }
        
        
      
      }
    
    

    public function CreateOrder(){
        try{
            $this->order = \Conekta\Order::create(
                array(
                    "amount" => $this->total,
                    "line_items" => array(
                        array(
                            "name" => $this->description,
                            "unit_price" => $this->total*100,
                            "quantity" => 1
                        )
                    ),
                    "currency" => "MXN",
                    "customer_info" => array(
                        "customer_id" => $this->customer->id
                    ),
                    "charges" => array(
                        array(
                            "payment_method" => array(
                                "type" => "default"
                            )
                        )
                    )
                )
            );
        }catch(\Conekta\ProcessingError $error){
            $this->error=$error->getMessage();
            return false;
        }
        catch(\Conekta\ParameterValidationError $error){
            $this->error=$error->getMessage();
            return false;
        
        }catch(\Conekta\Handler $error){
        $this->error=$error->getMessage();
        return false;
        }
        return true;
    }
    
    public function CreateCustomer(){
        try{
            $this->customer = \Conekta\Customer::create(
                array(
                    "name" =>$this->name,
                    "email"=>$this->email,
                    
                    "payment_sources"=> array(
                        array(  
                            "type" => "card",
                            "token_id" => $this->token
                            )
                    )
                )
            );
        }catch(\Conekta\ProcessingError $error){
            $this->error = $error->getMessage();
            return false;
        }catch(\Conekta\ParameterValidationError $error){
            $this->error = $error->getMessage();
            return false;
        }catch(\Conekta\Handler $error){
            $this->error = $error->getMessage();
            return false;
        }
        return true;

    }

    public function Validate(){
        if($this->card == "" || $this->name == "" || $this->description == "" || $this->total == "" || $this->email == ""){
            $this->error="El número de tarjeta, El nombre, Concepto, Monto y Correo Electrónico son obligatorios";
            return false;
        }
        if(strlen($this->card)<=14){
            $this->error = "El número de tarjeta debe tener al menos 15 caracteres";
            return false;
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
            $this->error = "El correo electrónico no tiene un formato válido";
            return false;
        }
        if($this->total<=20){
            $this->error = "El monto debe ser mayor a 20 MXN";
            return false;
        }
        return true;
    }
    
}
?>