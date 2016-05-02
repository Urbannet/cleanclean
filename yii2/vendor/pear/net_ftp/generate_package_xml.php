<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * File to generate a package.xml for a new Net_FTP release
 *
 * PHP versions 4 and 5
 *
 * @category  Networking
 * @package   FTP
 * @author    Tobias Schlitt <toby@php.net>
 * @copyright 1997-2005 The PHP Group
 * @license   BSD http://www.opensource.org/licenses/bsd-license.php
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/Net_FTP
 * @since     File available since Release 1.3.0
 */

require_once 'PEAR/PackageFileManager2.php';

/**
 * Dump an error
 *
 * @param PEAR_Error $err The error object
 *
 * @return void
 */
function dumpError($err)
{
    echo $err->getMessage();
    exit;
}

$cvsdir     = '/cvs/pear/';
$packagedir = $cvsdir . 'Net_FTP/';

$current_version   = '1.4.0a3';
$current_stability = 'alpha';

$summary =
'Net_FTP provides an OO interface to the PHP FTP functions plus some additions';

$description =
'Net_FTP allows you to communicate with FTP servers in a more comfortable way
than the native FTP functions of PHP do. The class implements everything natively
supported by PHP and additionally features like recursive up- and downloading,
dircreation and chmodding. It also implements an observer pattern to allow
for example the view of a progress bar.';

$current_notes =
'* Fixed Bug #13946: Test Failed : testPutRecursive
* Fixed Bug #14513: Timestamp when using the LS function
* Implemented Request #14773: setPassive possible before connecting';

PEAR::setErrorHandling(PEAR_ERROR_CALLBACK, 'dumpError');

$p2 = new PEAR_PackageFileManager2();
$p2->setOptions(array(
    'baseinstalldir'    => '/',
    'filelistgenerator' => 'cvs',
    'packagedirectory'  => dirname(__FILE__),
    'include'           => array(),
    'ignore'            => array(
        'package.xml',
        'package2.xml',
        '*.tgz',
        'generate*',
        'doc*',
    ),
    'dir_roles'         => array(
        'tests'     => 'test',
        'example'   => 'doc'
    ),
    'simpleoutput'      => true,
));

$p2->setPackage('Net_FTP');
$p2->setSummary($summary);
$p2->setDescription($description);
$p2->setChannel('pear.php.net');

$p2->setPackageType('php');

$p2->addGlobalReplacement('package-info', '@package_version@', 'version');

$p2->generateContents();

$p2->setReleaseVersion($current_version);
$p2->setAPIVersion('1.4.0');
$p2->setReleaseStability($current_stability);
$p2->setAPIStability('stable');

$p2->setNotes($current_notes);

$p2->addGlobalReplacement('package-info', '@package_version@', 'version');

$p2->addInstallAs('tests/AllTests.php', 'AllTests.php');
$p2->addInstallAs('tests/Net_FTPTest.php', 'Net_FTPTest.php');
$p2->addInstallAs('tests/config.php.dist', 'config.php.dist');
$p2->addInstallAs('tests/testfile.dat', 'testfile.dat');
$p2->addInstallAs('tests/extensions.ini', 'extensions.ini');

$p2->addRelease();

$p2->addMaintainer('lead', 'jorrit', 'Jorrit Schippers', 'jschippers@php.net',
    'yes');
$p2->addMaintainer('lead', 'toby', 'Tobias Schlitt', 'toby@php.net', 'no');

$p2->setPhpDep('4.3.0');
$p2->setPearinstallerDep('1.3.0');

$p2->setLicense('BSD License', 'http://www.opensource.org/licenses/bsd-license.html');

$p2->addExtensionDep('required', 'ftp');

if (isset($_GET['make']) ||
    (isset($_SERVER['argv']) && @$_SERVER['argv'][1] == 'make')) {
    echo "Writing package file\n";
    $p2->writePackageFile();
} else {
    echo "Debugging package file\n";
    $p2->debugPackageFile();
}
?>
