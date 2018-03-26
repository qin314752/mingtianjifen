<?php
return array(
	//'配置项'=>'配置值'
	// 'TMPL_TEMPLATE_SUFFIX'=>'.php',
	'SESSION_OPTIONS'         =>  array(  
    'name'  =>  'BJYSESSION',                    //设置session名     
    'expire'        =>  10,                      //SESSION过期时间，单位秒    
    'use_trans_sid'       =>  1,                               //跨页传递    
    'use_only_cookies'    =>  0,                               //是否只开启基于cookies的session的会话方式   
    ),
   
);