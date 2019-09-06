<?php 

    include "connect.php";

    $prepa = $conn->prepare("SELECT nome,foto,bibliografia,id FROM memorial ORDER BY id DESC  LIMIT 6");

    if ($prepa->execute()) {
        while($linha = $prepa->fetch(PDO::FETCH_ASSOC)){

          $id =  ( $linha['id'] );
          $foto = ( $linha['foto'] );
          $nome = ( $linha['nome'] );
          $bibliografia = ( $linha['bibliografia'] );

          echo "<figure>
                    <a href='src/views/memorial.php?id=$id'>
                      <div class='campa'>
                        <img src='media/photos/$foto' style='position: absolute; left: 90px; top: 52px; -webkit-filter: grayscale(100%); filter: grayscale(100%); border-radius: 100%;' width='120' alt='Some' />
                        <div class='name-container'>
                          <span class='name'>$nome</span>
                        </div>
                      </div>
                    </a>
                    <figcaption class='nota-falecimento'>
                      $bibliografia
                    </figcaption>
                </figure>";
           
        }       
    }
                   
 ?>   