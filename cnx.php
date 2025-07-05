<?php 
    $sdn = 'mysql:host=localhost; dbname=test'; //Data Source Name
    $user = 'root'; //The User To Connect
    $pass = '';
    


    try {
            $db = new PDO($sdn,$user,$pass);
             //Start a New Connection With PDO Class  // Connection a la base de donne
        

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            #ajoutez les donnee a la base de donnees
          // $q = "INSERT INTO users (``) VALUES ('')"; #إضافة البيانات 
          // $db->exec($q); #أمر إضافة البيانات

            #تعديل على البيانات
          /* $k = "UPDATE client SET Adress='France' WHERE id=1";  #تعديل على البيانات
            $db->exec($k);#أمر تعديل على البيانات

            #حذف البيانات
            $g = "DELETE FROM client WHERE Adress like '%Canada%'"; #حذف البيانات
            $db->exec($g); */#أمر حذف البيانات
            

    } 
    catch (PDOException $e) {
        echo 'Failed' . $e->getMessage(); //إرجاع رسالة خطأ 
    }