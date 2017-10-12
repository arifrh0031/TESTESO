<html>
   <head>
      <title>Online PHP Script Execution</title>      
   </head>
   
   <body>
      
      <?php
      echo "My First PHP Script";
      class MyClass
      {
        public $prop1 = "I'm a class property!";
      }
      Class YourClass
      {
          public $prop1 = "You are a class property";
      }
      $obj = new myclass;
      $obj2 = new YourClass;
      
      var_dump($obj, $obj2);
       var_dump ($obj2);
      ?>



   </body>
</html>