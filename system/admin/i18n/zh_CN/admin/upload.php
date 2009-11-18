<?php defined('MYQEEPATH') or die('No direct script access.');

$lang = array
(
	'title' => array(
		'addmodel' => '添加文件',
		'editmodel' => '修改文件',
	),
	'error' => array(
		'parametererror' => '参数错误！',
		'no_db' => '数据表选择错误，请重新选择数据表或设置默认数据表！',
		'nothedbname' => '不存在%s数据表，无法继续操作！',
		'nothedbname2' => '不存在%s数据表，请修修改数据表设置！',
		'nomodelname' => '模型名称不能空！',
		'notheiddb' => '不存在指定ID数据表，可能已删除！',
		'nothefieldname' => '不存在指定的字段名！',
		'fieldnameerror' => '字段名含有非法字符，字段名只允许字母数字和下划线！',
		'hasfieldname' => '抱歉，已经存在此字段，不能添加！',
		'fieldnamenull' => '字段名称不能空！',
		'dbnameerror' => '数据表名含有非法字符，数据表名只允许字母数字和下划线！',
		'dbname_empty' => '数据表名称不能空！',
		'momodel' => '抱歉，不存在指定文件！',
		'hasdb' => '抱歉，已经存在此数据表，不能添加！',
		'showcreatetableerror' => '查询数据表创建SQL语句失败，操作失败！',
		'name_empty' => '数据表不能空！',
		'noorderinfo' => '缺少排序信息！',
		'inputdataempty' => '导入文件为空，请返回重新操作！',
		'inputreadfileerror' => '上传文件读取失败，请联系管理人员！',
		'inputerrorsize' => '上传的文件太大或上传失败，本系统只解析5MB以内大小模板！',
		'decodeerror' => '解析模板失败，可能密码错误或导入的文件错误！',
		'inputtplbyedit' => '待导入内容遭受修改或受损，系统已终止导入，请返回！',
	),

	'list' => array(
		'id' => 'ID',
		'myorder' => '排序',
		'name' => '文件名称',
		'filename' => '文件名称',
	
		'size' => '大小',
	    'filetype' => '类型',
		'urlpath' => '路径',
		'suffix' => '后缀',
		'uploadtime' => '上传时间',
		'width' => '宽',
		'height' => '高',
		'content' => '内容',
		'isuse' => '启用',
		'isdefault' => '默认',
		'ismemberdb' => '用户表',
		'do' => '操作',
		'db_dbname' => '数据表名称',
		'db_name' => '数据表',
		'makesuredeletefile' => '你确认删除此文件？\n\n是否继续？',
	),

	'info' => array(
		'noeditor' => '未修改任何数据！',
		'saveok' => '恭喜，保存成功！',
		'delsuccess' => '恭喜，删除成功！',
		'nodelete' => '未删除任何数据！',
		'saveok_model_1' => '模型基本信息已保存，下面进入参数设置页面！',
		'editmyorderok' => '恭喜，成功修改%s条信息的排序！',
		'nooutmodel' => '没有符合条件的模型！',
		'nooutdb' => '没有符合条件的数据表！',
		'inputok' => '成功导入%s个模型！',
		'dbinputok' => '成功导入%s个数据表！',
		'inputerror' => '\n\n由于已存在相同数据表，【系统放弃了%s个数据表的导入】！',
	),
);