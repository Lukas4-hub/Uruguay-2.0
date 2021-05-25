<?php
 if (isset($_POST['bot'])){
      if (!empty($_POST['nombre'])  && !empty($_POST['apellido']) && !empty($_POST['mail2']) && !empty($_POST['mensaje'])  ) {
                $nombre= $_POST['nombre'];
                $apellido= $_POST['apellido'];
                $email= $_POST['mail2'];
                $mensaje= $_POST['mensaje'];
                $to= "lbeltrame444@gmail.com";
                $subject= "Prueba correo";



                $message = "De";
                $message.= "Correo";
                $message.= "Mensaje";

                $mail=mail ($to,$subject,$message);
                if ($mail) {
                    echo "<h4>Mail enviado correctamente</h4>";
                }
      }
 }

  ?>