<?php
/**
 * Holds the class ./makePhar.php
 *
 * PHP version 5
 *
 * @category Core
 * @package  ./makePhar.php
 * @author   Matthew Round <roundyz32@gmail.com>
 * @license  private (All rights and ownership reserved)
 * @link     private
 *
 */


/**
 * PharMaker 
 * 
 * @package none
 * @version 1.0
 * @copyright 2014 private
 * @author Matthew Round <roundyz32@gmail.com> 
 * @license All rights and ownership reserved
 */
class PharMaker
{


    /**
     * makePhar 
     * 
     * Simple function to make a phar file 
     * 
     * @param mixed $project The name of the project to use
     * @param mixed $incDir  The directory that holds the contents for the phar
     * 
     * @access public
     * @return bool True on failure.
     */
    static function makePhar($project, $incDir)
    {
        $ret = false;
        try {
            $libIncFile = "lib.inc";
            $contents = "<?php
                \$pharName = \"".$project.".phar\";
            include './'.\$pharName;
            ?>";
            file_put_contents($libIncFile, $contents);
        } catch (exception $e) {
            printf("Problem adding contents to incfile %s", $libIncFile);    
            echo $e->message();
        }
        try {
            $pharName = $project.".phar";
            $phar = new Phar($pharName);
            $dirContentsCount = 0;
        } catch (exception $e) {
            $error = sprintf(
                "Problem creating phar %s is it disabled in ini?", $pharName
            );    
            die($error);
        }
        try {
            $buildFromDirectoryResult = $phar->buildFromDirectory($incDir);
            $dirContentsCount = count($buildFromDirectoryResult);
            $dirContentsCountTooLow = $dirContentsCount <= 1;
            if ($dirContentsCountTooLow) {
                $ret = true;
                printf("Problem building from directory %s", $incDir);    
            }
        } catch (exception $e) {
            printf("Problem building from directory %s", $incDir);    
        }
        return $ret;
    }


}


$ret = PharMaker::makePhar($argv[1], $argv[2]);
