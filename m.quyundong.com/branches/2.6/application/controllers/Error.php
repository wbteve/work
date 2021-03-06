<?php
/**
 * @name ErrorController
 * @desc 错误控制器, 在发生未捕获的异常时刻被调用
 * @see http://www.php.net/manual/en/yaf-dispatcher.catchexception.php
 * @author root
 */
class ErrorController extends DefaultController {

	//从2.1开始, errorAction支持直接通过参数获取异常
	public function errorAction($exception) {		
		baf_Common::log('error', 'EMERG', '异常错误', $exception);
		Yaf_Dispatcher::getInstance()->autoRender(FALSE);
		$this->getView()->display('error/404.html');
	}

}