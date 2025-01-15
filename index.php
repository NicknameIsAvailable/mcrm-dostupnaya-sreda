<?

use Mcrm\Controller\HomeController;

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');

$APPLICATION->SetTitle('Эффективно лечим бесплодие с 1993 года');

HomeController::index();

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>
