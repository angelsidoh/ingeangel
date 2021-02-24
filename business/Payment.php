<?php
require_once("bin/conekta-php-master/lib/Conekta.php");

class Payment{
    private $ApiKey = "key_eYvWV7gSDkNYXsmr";
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
        $tokenconcepto =$this->description;

        // $pdo = new PDO("mysql:host=".$this->ServerDB.";dbname=".$this->DataBaseDB, $this->UserDB, $this->PassDB);
  
        // // $statement = $link->prepare("INSERT INTO pagos(total,date_created,description,name,number_card,email,order_id)
        // //     VALUES (:total, now(), :description,:name,:number_card,:email,:order_id)");
        // // $statement = $link->prepare("UPDATE pagos SET tokenconeckta=:order_id");
  
  
        // // $statement->execute([
        // //     // 'total' => $this->total,
        // //     // 'description' => $this->description,
        // //     // 'name' => $this->name,
        // //     // 'number_card'=> substr($this->card,strlen($this->card)-6,16),
        // //     // 'email'=>$this->email,
        // //     'order_id'=>$this->order->id
        // // ]);
        // $data = [
            
            
        //     'id' => 11,
        //     'tokenconekta_pago' => 'heyyyyyyyy'
        // ];
        // $sql = "UPDATE pagos SET tokenconekta_pago=:tokenconekta_pago, WHERE id_pago=:id";
        // $stmt= $pdo->prepare($sql);
        // $stmt->execute($data);
        
        // $this->order_number = $pdo->lastInsertId();
        try {
            date_default_timezone_set('America/Mexico_City');
            $fecha =  date('Y-m-d H:i:s'); 
           
        require_once('bd/bdsqli.php');
        $stmt = $connf->prepare("UPDATE pagos SET fechadepago_pago = ?, tokenconekta_pago = ?, fortarget_pago = ?, tokenpago_pago = ?, money_pago = ?, titular_pago = ? WHERE id_pago = ?");

        $stmt->bind_param("ssssssi", $fecha, $tokenconeckta, $lastnum, $tokenconcepto, $pago, $titular, $id);

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
            $this->error = "El monto debe sere mayor a 20 MXN";
            return false;
        }
        return true;
    }
    
}
?>