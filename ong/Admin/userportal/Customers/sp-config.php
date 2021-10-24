<?PHP

define('sp_server', 'localhost');

define('sp_username', 'root');

define('sp_password', '');

define('sp_database', 'sp_database');

define('sp_table', 'tb_guest');

define('asp_table', 'tb_user');

define('SPPATH', dirname(__FILE__).'/');

define('SPADM', 'sp-admin/');

define('SPINC','include/');

define('SPUPL','upload/');

define('SPCLT', 'sp-client/');

define('SPCLS','class=');

define('SPTHM','theme/');

define('SPPAGES', 'sp-pages/');

define('SPBOOTSTRAP','sp-boostrap/');

define('SPDIRPAGE',SPCLT.SPTHM.SPPAGES);

define('SPTEMPLATE',SPCLT.SPTHM);

define('SPSTYLE',SPTEMPLATE.SPBOOTSTRAP);

define('ASPSTYLE','../'.SPTEMPLATE.SPBOOTSTRAP);

define('ADDIRPAGES',SPTHM.'ad-pages/');


require_once SPPATH.SPADM.SPINC.'/fg_membersite.php';
require_once SPPATH.SPADM.SPINC.'/class.MySqlDb.php';
require_once SPPATH.SPADM.SPINC.'/class.checkavailability.php';
require_once SPPATH.SPADM.SPINC.'/class.database.php';
require_once SPPATH.SPADM.SPINC.'/class.admin.php';

$spconn = new MysqlDB(sp_server,sp_username,sp_password,sp_database);

$spcheck = new checkavailability();

$spcheck2 = new checkavailability();

$spcheck3 = new checkavailability();

$spmember = new FGMembersite(sp_server,sp_username,sp_password,sp_database,sp_table);

$spmember->SetWebsiteName('magicjadekingdom.com');

$spmember->SetAdminEmail('kringcarl_j@yahoo.com.ph');

$spmember->SetRandomKey('qSRcVS6DrTzrPvr');

$aspmember = new Admin(sp_server,sp_username,sp_password,sp_database,asp_table);


?>