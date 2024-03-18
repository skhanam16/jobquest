<?php


/**
 * Get the base path 
 * @param string $path
 * #return string
 */

 function basePath($path = ''){
    return __DIR__.'/'. $path;
 }

 /**
  * Load a View
  * @param string $name
  * @param void
  */

  function loadView($name, $data = []){
    $viewPath = basePath("views/{$name}.view.php");
    if(file_exists( $viewPath)){
      extract($data);
        require  $viewPath;
    }

    else{
        echo "View {$path} not found";
    }
  

  }

   /**
  * Load a Partial
  * @param string $name
  * @param void
  */
  
  function loadPartial($name){
    $partialPath = basePath("views/partials/{$name}.php");
    // inspect( $partialPath);
    if(file_exists(  $partialPath )){
        require   $partialPath ;
    }

    else{
        echo "View {$path} not found";
    }
  
  

  }

  /**
   * Inspect a value(s)
   * @param mixed $value
   * @param void
   * 
   */

   function inspect($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre";

   }

     /**
   * Inspect a value(s) die
   * @param mixed $value
   * @param void
   * 
   */

   function inspectandDie($value){
    echo "<pre>";
    die(var_dump($value));
    echo "</pre";
   

   }

    /**
   * Format Salary
   * @param string $salary
   * @return string formatedSalary
   * 
   */
function formatSalary($salary){
  return '$' .number_format(floatval($salary));
}
