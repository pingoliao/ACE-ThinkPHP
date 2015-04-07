<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
        //导航
		$arrNav = F('nav.config','',CONF_PATH);
		if(!$arrNav){
			//实际开发时 从数据库中获取导航信息(pid)
			//field:id title url icon pid sort
			$arrNav = array(
				array(
					'id'	=> 1,
    				'title'	=> 'Dashboard',		//标题
    				'url'	=> 'Index/index',	//URL U方法解析
    				'icon'	=> 'fa-tachometer'	//FontAwesome图标
    				),
				array(
					'id'	=> 2,
					'title'	=> 'UI &amp; Elements',
					'url'	=> '',
					'icon'	=> 'fa-desktop',
					'children'	=> array(
						array(
							'id'	=> 3,
							'title'	=> 'Elements',
							'url'	=> 'Index/elements',
							'icon'	=> '',
							),
						array(
							'id'	=> 4,
							'title'	=> 'Buttons & Icon',
							'url'	=> 'Index/buttons',
							'icon'	=> '',
							),
						array(
							'id'	=> 5,
							'title'	=> 'Treeview',
							'url'	=> 'Index/treeview',
							'icon'	=> '',
							),
						array(
							'id'	=> 6,
							'title'	=> 'jQuery UI',
							'url'	=> 'Index/jquery-ui',
							'icon'	=> '',
							),
						array(
							'id'	=> 7,
							'title'	=> 'Three Level Menu',
							'url'	=> '',
							'icon'	=> '',
							'children'	=> array(
								array(
									'id'	=> 8,
									'title'	=> '4th level',
									'url'	=> '',
									'icon'	=> 'fa-edit',
									'children'	=> array(
										array(
											'id'	=> 9,
											'title'	=> 'Add Product',
											'url'	=> '',
											'icon'	=> 'fa-plus',
											),
										),
									),
								array(
									'id'	=> 10,
									'title'	=> 'item',
									'url'	=> '',
									'icon'	=> '',
									),
								),
							),
						),
					),
				array(
					'id'	=> 11,
					'title'	=> 'Tables',
					'url'	=> 'Index/tables',
					'icon'	=> 'fa-list',
					'children'	=> '',
					),
				array(
					'id'	=> 12,
					'title'	=> 'Forms',
					'url'	=> '',
					'icon'	=> 'fa-pencil-square-o',
					'children'	=> array(
						array(
							'id'	=> 13,
							'title'	=> 'Form Elements',
							'url'	=> 'Index/form-elements',
							'icon'	=> '',
							),
						array(
							'id'	=> 14,
							'title'	=> 'Form Elements',
							'url'	=> 'Index/form-elements-2',
							'icon'	=> '',
							),
						array(
							'id'	=> 15,
							'title'	=> 'Wizard &amp; Validation',
							'url'	=> 'Index/form-wizard',
							'icon'	=> '',
							),
						array(
							'id'	=> 16,
							'title'	=> 'Dropzone File Upload',
							'url'	=> 'Index/dropzone',
							'icon'	=> '',
							),
						),
					),
				array(
					'id'	=> 17,
					'title'	=> 'Other Pages',
					'url'	=> '',
					'icon'	=> 'fa-file-o',
					'children'	=> array(
						array(
						'id'	=> 18,
						'title'	=> 'Email Template',
						'url'	=> 'Index/email-confirmation',
						'icon'	=> 'fa-envelope-o',
						),
						array(
							'id'	=> 19,
							'title'	=> 'Error 404',
							'url'	=> 'Index/error-404',
							'icon'	=> '',
							),
						array(
							'id'	=> 20,
							'title'	=> 'Error 500',
							'url'	=> 'Index/error-500',
							'icon'	=> '',
							),
						),
					),
				);
			
			//开发时 注释掉
			//F('nav.config',$arrNav,CONF_PATH);

		}

		$this->assign('_nav', $arrNav);
	}

}