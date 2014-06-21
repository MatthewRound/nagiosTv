<?php
/**                                                                            
 * File to hold the makephar script
 *                                                                            
 * PHP version 5                                                              
 *                                                                            
 * @catagory Core                                                             
 * @package  Core.miniFrameWork                                               
 * @author   roundyz <roundyz@roundyz.kicks-ass.net>                          
 * @license  roundyz.kicks-ass.net/work private                               
 * @link     roundyz.kicks-ass.net/work                                       
 *                                                                              
 */    


/**
 * PharMaker 
 * 
 * @package none
 * @version $id$
 * @copyright 2012 ChangeSite.co.uk
 * @author Matthew Round <roundyz@roundyz.kicks-ass.net> 
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
		}
		try {
			$pharName = $project.".phar";
			$phar = new Phar($pharName);
			$dirContentsCount = 0;
		} catch (exception $e) {
            printf("Problem creating phar %s", $pharName);    
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
