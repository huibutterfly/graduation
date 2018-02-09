<?php
/**
 * Created by PhpStorm.
 * User: 15770
 * Date: 2018/2/9
 * Time: 9:58
 */

namespace App\Helpers;


class Err
{
    public static $SUCCESS = 'true';
    public static $ERROR = 'false';
    public static $ERROR_LIST = [
        'SUCCESS' => 0, 'CODE_0' => ['innermsg' => '成功', 'outtermsg' => '成功'],
        /* 公用错误代码 */
        'UNKNOWN_FAIL' => 99, 'CODE_99' => ['innermsg' => '未知错误', 'outtermsg' => '未知错误'],
        'UNKNOWN_FAIL_1' => 991, 'CODE_991' => ['innermsg' => '未知错误1', 'outtermsg' => '未知错误1'],
        'UNKNOWN_FAIL_2' => 992, 'CODE_992' => ['innermsg' => '未知错误2', 'outtermsg' => '未知错误2'],
        'UNKNOWN_FAIL_3' => 993, 'CODE_993' => ['innermsg' => '未知错误3', 'outtermsg' => '未知错误3'],
        'UNKNOWN_FAIL_4' => 994, 'CODE_994' => ['innermsg' => '未知错误4', 'outtermsg' => '未知错误4'],
        'UNKNOWN_FAIL_5' => 995, 'CODE_995' => ['innermsg' => '未知错误5', 'outtermsg' => '未知错误5'],
        'UNKNOWN_FAIL_6' => 996, 'CODE_996' => ['innermsg' => '未知错误6', 'outtermsg' => '未知错误6'],
        'PARAM_COMPULSORY_FAIL' => 100, 'CODE_100' => ['innermsg' => '缺乏必要参数', 'outtermsg' => '缺乏必要参数'],
        'PARAM_CONTENT_ERROR' => 101, 'CODE_101' => ['innermsg' => '参数不合法', 'outtermsg' => '参数不合法'],
        'RESULT_IS_NULL' => 102, 'CODE_102' => ['innermsg' => '查询为空', 'outtermsg' => '查询为空'],
        'DATABASE_OPERATION_FAIL' => 200, 'CODE_200' => ['innermsg' => '数据库操作错误', 'outtermsg' => '数据库操作错误'],
        'FREQUENCE_EXCEED_FAIL' => 300, 'CODE_300' => ['innermsg' => '操作频率过快', 'outtermsg' => '操作频率过快'],
        'SMS_SEND_INTERVAL_FAIL' => 301, 'CODE_301' => ['innermsg' => '短信发送频率太高', 'outtermsg' => '短信发送频率太高'],
        'SMS_SEND_LONG_CHECK_FAIL' => 302, 'CODE_302' => ['innermsg' => '短信长时间未验证', 'outtermsg' => '短信长时间未验证'],
        'SMS_SEND_CHECK_ERROR' => 303, 'CODE_303' => ['innermsg' => '短信验证码错误', 'outtermsg' => '短信验证码错误'],

        /* token相关错误码*/
        'REG_AUTH_FAIL' => 1001, 'CODE_1001' => ['innermsg' => '非法的用户注册请求', 'outtermsg' => '非法的用户注册请求'],
        'TOKEN_UPDATE_AUTH_FAIL' => 1002, 'CODE_1002' => ['innermsg' => 'Token更新鉴权失败', 'outtermsg' => 'Token更新鉴权失败'],
        'TOKEN_UPDATE_NEED_PARAM' => 1003, 'CODE_1003' => ['innermsg' => 'Token更新缺乏必要参数', 'outtermsg' => 'Token更新缺乏必要参数'],
        'TOKEN_UPDATE_PASSWORD_FAIL' => 1004, 'CODE_1004' => ['innermsg' => 'Token更新密码错误', 'outtermsg' => 'Token更新密码错误'],
        'TOKEN_UPDATE_USERNAME_FAIL' => 1005, 'CODE_1005' => ['innermsg' => 'Token更新用户名不存在', 'outtermsg' => 'Token更新用户名不存在'],
        'TOKEN_EXPIRE_FAIL' => 1006, 'CODE_1006' => ['innermsg' => 'TOKEN过期', 'outtermsg' => 'TOKEN过期'],
        'TOKEN_AUTH_FAIL' => 1007, 'CODE_1007' => ['innermsg' => 'TOKEN失效', 'outtermsg' => 'TOKEN失效'],
        'TOKEN_FREQUENCE_EXCEED' => 1008, 'CODE_1008' => ['innermsg' => '更新Token尝试过于频繁', 'outtermsg' => '更新Token尝试过于频繁'],
        'TOKEN_APP_ACCESS_DENIED' => 1009, 'CODE_1009' => ['innermsg' => '未被授权的AppID', 'outtermsg' => '未被授权的AppID'],
        'REG_VERSION_FAIL' => 1010, 'CODE_1010' => ['innermsg' => '鉴权规则版本错误', 'outtermsg' => '鉴权规则版本错误'],
        'ILLEGAL_REQUEST' => 1011, 'CODE_1011' => ['innermsg' => '非法的API调用请求', 'outtermsg' => '非法的API调用请求'],
        'ILLEGAL_TOKEN' => 1012, 'CODE_1012' => ['innermsg' => 'Token非法', 'outtermsg' => 'Token非法'],
        'TOKEN_NOT_EXIST' => 1013, 'CODE_1013' => ['innermsg' => 'token不存在', 'outtermsg' => 'token不存在'],
        'SIGNATURE_CHECK_FAIL' => 1014, 'CODE_1014' => ['innermsg' => 'ping++签名验证失败', 'outtermsg' => 'ping++签名验证失败'],
        'SIGNATURE_CHECK_ERROR' => 1015, 'CODE_1015' => ['innermsg' => 'ping++签名验证出错', 'outtermsg' => 'ping++签名验证出错'],
        'TOKEN_UPDATE_FAIL' => 1016, 'CODE_1016' => ['innermsg' => 'token更新失败', 'outtermsg' => 'token更新失败'],
        'TPLOGIN_AUTH_FAIL' => 1020, 'CODE_1020' => ['innermsg' => '第三方登录请求非法', 'outtermsg' => '第三方登录请求非法'],
        'TPLOGIN_TYPE_FAIL' => 1021, 'CODE_1021' => ['innermsg' => '第三方登录类型错误', 'outtermsg' => '第三方登录类型错误'],
        'TPLOGIN_VERSION_FAIL' => 1022, 'CODE_1022' => ['innermsg' => '第三方登录鉴权版本错误', 'outtermsg' => '第三方登录鉴权版本错误'],

        // 其他错误代码
        'SHIPPING_ID_NOT_EXIST' => 10200, 'CODE_10200' => ['innermsg' => '配送方式id不存在', 'outtermsg' => '无效的配送方式'],
        'REGION_ID_NOT_EXIST' => 10201, 'CODE_10201' => ['innermsg' => '区域id不存在', 'outtermsg' => '区域不存在'],
        'SHIPPING_CONFIG_ERROR' => 10202, 'CODE_10202' => ['innermsg' => '配送方式配置错误', 'outtermsg' => '配送方式配置错误'],
        'ADD_AREA_FAILED' => 10203, 'CODE_10203' => ['innermsg' => '添加配送范围失败', 'outtermsg' => '添加配送范围失败'],
        'AREA_ID_NOT_EXIST' => 10204, 'CODE_10204' => ['innermsg' => '配送范围id不存在', 'outtermsg' => '配送范围不存在'],
        'MODIFY_AREA_PARAM_FAILED' => 10205, 'CODE_10205' => ['innermsg' => '修改配送范围参数失败', 'outtermsg' => '修改配送范围失败'],
        // 用户相关错误代码
        'USER_ID_NOT_EXIST' => 20001, 'CODE_20001' => ['innermsg' => '用户id不存在', 'outtermsg' => '用户不存在'],
        'USER_LOCATION_ID_NOT_EXIST' => 20002, 'CODE_20002' => ['innermsg' => '省市区 id 不存在', 'outtermsg' => '省市区不存在'],
        'USER_ADDRESS_ID_NOT_EXIST' => 20003, 'CODE_20003' => ['innermsg' => '地址 id 不存在', 'outtermsg' => '用户地址不存在'],
        'USERNAME_NOT_EXIST' => 20005, 'CODE_20005' => ['innermsg' => '用户名不存在', 'outtermsg' => '用户名不存在'],
        'USER_PASSWORD_NOT_MATCH' => 20007, 'CODE_20007' => ['innermsg' => '用户密码错误', 'outtermsg' => '用户密码错误'],
        'ADDRESS_USER_NOT_MATCH' => 20008, 'CODE_20008' => ['innermsg' => '地址不属于指定用户', 'outtermsg' => '地址不属于指定用户'],
        'GET_ADDRESS_INFO_FAILED' => 20009, 'CODE_20009' => ['innermsg' => '获取地址信息失败', 'outtermsg' => '获取地址信息失败'],
        'USER_NOT_EXIST' => 20011, 'CODE_20011' => ['innermsg' => '用户不存在', 'outtermsg' => '用户不存在'],
        'UNEXPECTED_SYNTAX_IN_PASSWORD' => 20012, 'CODE_20012' => ['innermsg' => '密码中有非法字符', 'outtermsg' => '密码中有非法字符'],
        'MODIFY_USER_INFO_FAILED' => 20013, 'CODE_20013' => ['innermsg' => '修改基本信息失败', 'outtermsg' => '修改基本信息失败'],
        'MODIFY_VIEW_LOG_FAILED' => 20014, 'CODE_20014' => ['innermsg' => '修改访问记录失败', 'outtermsg' => '修改访问记录失败'],
        'MODIFY_ACCOUNT_LOG_FAILED' => 20015, 'CODE_20015' => ['innermsg' => '修改账户记录失败', 'outtermsg' => '修改账户记录失败'],
        'SAME_USERNAME_EXIST' => 20016, 'CODE_20016' => ['innermsg' => '同名用户已经存在', 'outtermsg' => '同名用户已经存在'],
        'PASSWORD_TOO_SIMPLE' => 20017, 'CODE_20017' => ['innermsg' => '密码过于简单', 'outtermsg' => '密码过于简单'],
        'GET_USERINFO_FAILED' => 20018, 'CODE_20018' => ['innermsg' => '获取用户信息失败', 'outtermsg' => '获取用户信息失败'],
        'OLD_PASSWORD_NOT_MATCH' => 20020, 'CODE_20020' => ['innermsg' => '旧密码错误', 'outtermsg' => '旧密码错误'],
        'GET_ADDR_LIST_FAIL' => 20021, 'CODE_20021' => ['innermsg' => '获取用户地址列表失败', 'outtermsg' => '获取用户地址列表失败'],
        'SAVE_ADDR_LINK_USER_FAIL' => 20022, 'CODE_20022' => ['innermsg' => '保存地址列表和关联用户失败', 'outtermsg' => '保存地址列表和关联用户失败'],
        'DEL_USER_ADDR_FAIL' => 20023, 'CODE_20023' => ['innermsg' => '删除用户地址失败', 'outtermsg' => '删除用户地址失败'],
        'MODIFY_USER_ADDR_FAIL' => 20024, 'CODE_20024' => ['innermsg' => '修改用户地址失败', 'outtermsg' => '修改用户地址失败'],
        'SET_DEFAULT_ADDR_FAIL' => 20025, 'CODE_20025' => ['innermsg' => '设定用户默认地址失败', 'outtermsg' => '设定用户默认地址失败'],
        'QUERY_USER_STATUS_FAIL' => 20026, 'CODE_20026' => ['innermsg' => '查询用户状态失败失败', 'outtermsg' => '查询用户状态失败失败'],
        'MOBILE_ALREADY_BINDED' => 20027, 'CODE_20027' => ['innermsg' => '手机号已经被绑定过', 'outtermsg' => '手机号已经被绑定过'],
        'EMAIL_ALREADY_BINDED' => 20028, 'CODE_20028' => ['innermsg' => '邮箱已经被绑定过', 'outtermsg' => '邮箱已经被绑定过'],
        'REG_FAIL' => 20029, 'CODE_20029' => ['innermsg' => '用户注册失败', 'outtermsg' => '用户注册失败'],
        'GET_VISIT_INFO_FAIL' => 20030, 'CODE_20030' => ['innermsg' => '查看用户的访问记录失败', 'outtermsg' => '查看用户的访问记录失败'],
        'UPDATE_PWD_FAIL' => 20031, 'CODE_20031' => ['innermsg' => '用户修改密码失败', 'outtermsg' => '用户修改密码失败'],
        'GET_BONUS_LIST_FAIL' => 20032, 'CODE_20032' => ['innermsg' => '查询优惠券列表失败', 'outtermsg' => '查询优惠券列表失败'],
        'GET_GC_LIST_FAIL' => 20033, 'CODE_20033' => ['innermsg' => '查询用户的礼品卡列表失败', 'outtermsg' => '查询用户的礼品卡列表失败'],
        'FEEDBACK_ID_NOT_EXIST' => 20100, 'CODE_20100' => ['innermsg' => '用户反馈信息id不存在', 'outtermsg' => '用户反馈信息id不存在'],
        'USER_INFO_NOT_COMPLETE' => 20101, 'CODE_20101' => ['innermsg' => '缺用户信息（用户id，名字，）', 'outtermsg' => '缺用户信息（用户id，名字，）'],
        'FEEDBACK_CONTENT_REQUIRED' => 20102, 'CODE_20102' => ['innermsg' => '缺反馈信息内容', 'outtermsg' => '缺反馈信息内容'],
        'ADD_FEEDBACK_INFO_FAILED' => 20103, 'CODE_20103' => ['innermsg' => '添加用户反馈信息失败', 'outtermsg' => '添加用户反馈信息失败'],
        'MODIFY_FEEDBACK_INFO_FAILED' => 20104, 'CODE_20104' => ['innermsg' => '修改用户反馈信息失败', 'outtermsg' => '修改用户反馈信息失败'],
        'ALREADY_CHECK_IN' => 20105, 'CODE_20105' => ['innermsg' => '当天已签到', 'outtermsg' => '今日已签到,]需重复签到'],
        'CHECK_IN_FAIL' => 20106, 'CODE_20106' => ['innermsg' => '签到失败', 'outtermsg' => '签到失败'],
        'USER_ATTENTIONA_AGAIN_FAIL' => 20110, 'CODE_20110' => ['innermsg' => '用户已关注此商品，不能重复关注', 'outtermsg' => '用户已关注此商品，不能重复关注'],
        'NEW_OLD_PASSWORD_NOT_MATCH' => 20111, 'CODE_20111' => ['innermsg' => '用户修改的密码和原密码一致', 'outtermsg' => '用户修改的密码和原密码一致'],
        //      用户 ERP相关错误代码
        'UPDATE_USER_POINTS_FAIL' => 20901, 'CODE_20901' => ['innermsg' => '修改用户积分失败', 'outtermsg' => '修改用户积分失败'],

        // 仓库和货品相关错误代码
        'WAREHOUSE_ID_NOT_EXIST' => 40001, 'CODE_40001' => ['innermsg' => '仓库id不存在', 'outtermsg' => '仓库不存在'],
        'PRODUCT_ID_NOT_EXSIT' => 40002, 'CODE_40002' => ['innermsg' => '货品id不存在', 'outtermsg' => '货品不存在'],
        'GOODS_ID_NOT_EXSIT' => 400021, 'CODE_400021' => ['innermsg' => '商品id不存在', 'outtermsg' => '商品不存在'],
        'GOODS_IN_WAREHOUSE_NOT_EXIST' => 40003, 'CODE_40003' => ['innermsg' => '指定仓库中的指定货品不存在', 'outtermsg' => '指定仓库中的指定货品不存在'],
        'MODIFY_STOCK_ERR_REQUIRE_PRICE_NUMBER' => 40004, 'CODE_40004' => ['innermsg' => '修改库存失败：缺乏价格数量数据', 'outtermsg' => '修改库存失败'],
        'PRODUCT_CAT_NOT_EXIST' => 40005, 'CODE_40005' => ['innermsg' => '货品类型不存在', 'outtermsg' => '货品类型不存在'],
        'PRODUCT_SPEC_NOTE_EXIST' => 40006, 'CODE_40006' => ['innermsg' => '规格id不存在', 'outtermsg' => '规格不存在'],
        'BRAND_NOT_EXIST' => 40007, 'CODE_40007' => ['innermsg' => '品牌id不存在', 'outtermsg' => '品牌不存在'],
        'ADD_PRODUCT_FAIL' => 40008, 'CODE_40008' => ['innermsg' => '添加货品失败', 'outtermsg' => '添加货品失败'],
        'DEL_PRODUCT_FAIL' => 40009, 'CODE_40009' => ['innermsg' => '删除一个或多个货品失败', 'outtermsg' => '删除一个或多个货品失败'],
        'GET_PRODUCT_LIST_FAIL' => 40010, 'CODE_40010' => ['innermsg' => '获得货品列表失败', 'outtermsg' => '获得货品列表失败'],
        'UPDATE_PRODUCT_STOCK_FAIL' => 40011, 'CODE_40011' => ['innermsg' => '更新指定货品的库存或价格失败', 'outtermsg' => '更新指定货品的库存或价格失败'],
        'RESP_COMMENT_NOT_EXIST' => 40013, 'CODE_40013' => ['innermsg' => '被回复评论id不存在', 'outtermsg' => '被回复评论不存在'],
        'GET_COMMENT_LIST_FAIL' => 40014, 'CODE_40014' => ['innermsg' => '查询评论列表失败', 'outtermsg' => '查询评论列表失败'],
        'GOODS_STOCK_LIST_FAIL' => 40015, 'CODE_40015' => ['innermsg' => '商品库存不足', 'outtermsg' => '商品库存不足'],
        'PRODUCT_ON_SALE_FAIL' => 40016, 'CODE_40016' => ['innermsg' => '商品未上架', 'outtermsg' => '商品未上架'],
        'PRODUCT_STOCK_INFO_FAIL' => 40017, 'CODE_40017' => ['innermsg' => '库存信息输入错误', 'outtermsg' => '库存信息输入错误'],
        // ERP 货品相关错误代码
        'PRODUCT_ON_SALE_PARAM_ERROR' => 49001, 'CODE_49001' => ['innermsg' => '货品上下架参数错误', 'outtermsg' => '货品上下架参数错误'],
        'PRODUCT_CHANGE_ON_SALE_STATUS_ERROR' => 49002, 'CODE_49002' => ['innermsg' => '修改货品上下架状态失败', 'outtermsg' => '修改货品上下架状态失败'],

        // 订单相关错误代码
        'ORDER_NOT_EXIST' => 50000, 'CODE_50000' => ['innermsg' => '订单不存在', 'outtermsg' => '订单不存在'],
        'ORDER_CONSIGNEE_CONTACT_REQUIRED' => 50001, 'CODE_50001' => ['innermsg' => '缺乏信息：收货人及联系方式', 'outtermsg' => '缺乏信息：收货人及联系方式'],
        'GOODS_LIST_ERROR' => 50002, 'CODE_50002' => ['innermsg' => '货品列表错误', 'outtermsg' => '货品列表错误'],
        'ORDER_ADD_TIME_ERROR' => 50003, 'CODE_50003' => ['innermsg' => '订单添加时间错误', 'outtermsg' => '订单添加时间错误'],
        'GOODS_COUNT_PRICE_ERROR' => 50004, 'CODE_50004' => ['innermsg' => '商品数量和价格错误', 'outtermsg' => '商品数量和价格错误'],
        'ADD_ORDER_FAIL' => 50005, 'CODE_50005' => ['innermsg' => '订单添加失败', 'outtermsg' => '订单添加失败'],
        'POINTS_AMOUNT_FAIL' => 50006, 'CODE_50006' => ['innermsg' => '使用积分额度错误，必须是100的整数倍', 'outtermsg' => '使用积分额度错误，必须是100的整数倍'],
        'ORDER_LOCATION_ID_ERROR' => 50008, 'CODE_50008' => ['innermsg' => '省市区id错误', 'outtermsg' => '省市区错误'],
        'PAY_ID_ERROR' => 50009, 'CODE_50009' => ['innermsg' => '支付方式错误', 'outtermsg' => '支付方式错误'],
        'ORDER_SHIPPING_ID_ERROR' => 50010, 'CODE_50010' => ['innermsg' => '配送方式错误', 'outtermsg' => '配送方式错误'],
        'BEST_TIME_ERROR' => 50011, 'CODE_50011' => ['innermsg' => '配送时间错误', 'outtermsg' => '配送时间错误'],
        'ORDER_SHIPPING_AREA_FAIL' => 50012, 'CODE_50012' => ['innermsg' => '收货地址不在可配送范围内', 'outtermsg' => '收货地址不在可配送范围内'],
        'ORDER_USER_ID_REQUIRED' => 50014, 'CODE_50014' => ['innermsg' => '缺乏用户id', 'outtermsg' => '缺乏用户'],
        'ORDER_ID_REQUIRED' => 50015, 'CODE_50015' => ['innermsg' => '缺乏订单id', 'outtermsg' => '缺乏订单'],
        'ONLY_ONE_CAN_EXIST_ORDER_OR_USER' => 50016, 'CODE_50016' => ['innermsg' => '用户id或订单id只能有其中之一', 'outtermsg' => '失败'],
        'UNEXPECTED_ORDER_STATUS' => 500171, 'CODE_500171' => ['innermsg' => '订单状态编号非法', 'outtermsg' => '订单状态编号非法'],
        'UNEXPECTED_SHIPPING_STATUS' => 500172, 'CODE_500172' => ['innermsg' => '配送状态编号非法', 'outtermsg' => '配送状态编号非法'],
        'UNEXPECTED_PAY_STATUS' => 500173, 'CODE_500173' => ['innermsg' => '支付状态编号非法', 'outtermsg' => '支付状态编号非法'],
        'ORDER_ADD_TIME_CONDITION_REQUIRED' => 50018, 'CODE_50018' => ['innermsg' => '缺乏订单起止时间之一', 'outtermsg' => '缺乏订单起止时间之一'],
        'GET_ORDER_INFO_FAILED' => 50019, 'CODE_50019' => ['innermsg' => '获取订单信息失败', 'outtermsg' => '获取订单信息失败'],
        'MODIFY_ORDER_STATUS_FAILED' => 50021, 'CODE_50021' => ['innermsg' => '订单状态修改失败', 'outtermsg' => '订单状态修改失败'],
        'CANCEL_ORDER_FAILED' => 50022, 'CODE_50022' => ['innermsg' => '取消订单失败', 'outtermsg' => '取消订单失败'],
        'ORDER_NOT_BELONGS_TO_USER' => 50023, 'CODE_50023' => ['innermsg' => '订单不属于用户', 'outtermsg' => '订单不属于用户'],
        'ORDER_ADD_GOODS_FAILED' => 50031, 'CODE_50031' => ['innermsg' => '添加订单时添加货品失败', 'outtermsg' => '添加订单时添加货品失败'],
        'ORDER_DEL_GOODS_FAILED' => 50035, 'CODE_50035' => ['innermsg' => '删除货品失败', 'outtermsg' => '删除货品失败'],
        'GOODS_IN_ORDER_NOT_EXIST' => 50038, 'CODE_50038' => ['innermsg' => '订单中货品不存在', 'outtermsg' => '订单中货品不存在'],
        'UNEXPECTED_FIELD_IN_ORDER_INFO' => 50040, 'CODE_50040' => ['innermsg' => '订单信息中有非法字段', 'outtermsg' => '订单信息中有非法字段'],
        'MODIFY_COSIGHEE_INFO_FAILED' => 50041, 'CODE_50041' => ['innermsg' => '修改收货人信息失败', 'outtermsg' => '修改收货人信息失败'],
        'MODIFY_BONUS_INFO_FAILED' => 50042, 'CODE_50042' => ['innermsg' => '修改的折扣及减价信息失败', 'outtermsg' => '修改的折扣及减价信息失败'],
        'MODIFY_ADDONE_FEE_INFO_FAILED' => 50043, 'CODE_50043' => ['innermsg' => '修改订单的附加费用信息失败', 'outtermsg' => '修改订单的附加费用信息失败'],
        'MODIFY_OTHER_ORDER_INFO_FAILED' => 50044, 'CODE_50044' => ['innermsg' => '修修改订单的其他信息失败', 'outtermsg' => '修修改订单的其他信息失败'],
        'CACULATING_ORDER_PRICE_ERROR' => 50051, 'CODE_50051' => ['innermsg' => '计算订单价格出错', 'outtermsg' => '计算订单价格出错'],
        'GET_ORDER_LIST_FAILED' => 50052, 'CODE_50052' => ['innermsg' => '获取订单列表失败', 'outtermsg' => '获取订单列表失败'],
        'RECHARGE_ORDER_PARAMS_ERROR' => 50053, 'CODE_50053' => ['innermsg' => '充值订单参数错误', 'outtermsg' => '充值订单参数错误'],

        'ADD_ORDER_USE_BONUS_FAIL' => 50054, 'CODE_50054' => ['innermsg' => '添加订单的优惠券使用记录失败', 'outtermsg' => '添加订单的优惠券使用记录失败'],
        'ADD_ORDER_USE_GIFTCARD_FAIL' => 50055, 'CODE_50055' => ['innermsg' => '添加订单的礼品卡使用记录失败', 'outtermsg' => '添加订单的礼品卡使用记录失败'],
        'ADD_ORDER_USE_POINTS_FAIL' => 50056, 'CODE_50056' => ['innermsg' => '添加订单的积分使用记录失败', 'outtermsg' => '添加订单的积分使用记录失败'],
        'ADD_ORDER_MODIFY_USER_ACCOUNT_FAIL' => 50057, 'CODE_50057' => ['innermsg' => '添加订单的用户账户记录失败', 'outtermsg' => '添加订单的用户账户记录失败'],
        'ADD_ORDER_MODIFY_ORDER_LOG_FAIL' => 50058, 'CODE_50058' => ['innermsg' => '添加订单的订单操作记录失败', 'outtermsg' => '添加订单的订单操作记录失败'],

        'COM_ORDER_ERROR' => 50500, 'CODE_50500' => ['innermsg' => '企业订单通用错误', 'outtermsg' => '企业订单通用错误'],
        'COM_ORDER_ID_NOT_EXIST' => 50501, 'CODE_50501' => ['innermsg' => '订单id不存在', 'outtermsg' => '订单id不存在'],
        'COM_ORDER_CONTACT_REQUIRED' => 50502, 'CODE_50502' => ['innermsg' => '缺用户联系方式（手机号，电话号码）', 'outtermsg' => '缺用户联系方式（手机号，电话号码）'],
        'COM_ORDER_COMPANYNAME_REQUIRED' => 50503, 'CODE_50503' => ['innermsg' => '缺企业名称', 'outtermsg' => '缺企业名称'],
        'COM_ORDER_BUYING_DEMAND_REQUIRED' => 50504, 'CODE_50504' => ['innermsg' => '缺购买需求', 'outtermsg' => '缺购买需求'],
        'COM_ORDER_INFO_REQUIRED' => 50505, 'CODE_50505' => ['innermsg' => '缺其他字段（提交时间，订单状态，是否被处理，支付）', 'outtermsg' => '缺其他字段（提交时间，订单状态，是否被处理，支付）'],
        'DEL_COM_ORDER_FAILED' => 50506, 'CODE_50506' => ['innermsg' => '企业订单删除失败', 'outtermsg' => '企业订单删除失败'],
        'ADD_COM_ORDER_FAILED' => 50507, 'CODE_50507' => ['innermsg' => '企业订单添加失败', 'outtermsg' => '企业订单添加失败'],
        'MONIFY_COM_ORDER_FAILED' => 50508, 'CODE_50508' => ['innermsg' => '企业订单修改失败', 'outtermsg' => '企业订单修改失败'],
        'CART_GOODS_IS_EXIST' => 50510, 'CODE_50510' => ['innermsg' => '购物车不存在对应商品', 'outtermsg' => '购物车不存在对应商品'],
        'CART_LIST_IS_EXIST' => 50511, 'CODE_50511' => ['innermsg' => '购物车为空', 'outtermsg' => '购物车为空'],
        //  订单  ERP相关
        'ORDER_BETWEEN_DATE_NOT_FOUND' => 50901, 'CODE_50901' => ['innermsg' => '时间范围内的订单没找到', 'outtermsg' => '时间范围内的订单没找到'],
        'ORDER_CHANGE_STATUS_FAIL' => 50902, 'CODE_50902' => ['innermsg' => 'ERP修改订单状态失败', 'outtermsg' => 'ERP修改订单状态失败'],
        'ORDER_CHANGE_STATUS_FAIL_NO_STATUS' => 50903, 'CODE_50903' => ['innermsg' => 'ERP修改订单状态失败，没有对应状态', 'outtermsg' => 'ERP修改订单状态失败，没有对应状态'],

        //  订单      支付相关
        'PAY_TYPE_NOT_ALLOWED' => 51000, 'CODE_51000' => ['innermsg' => '支付方式不存在', 'outtermsg' => '支付方式不存在'],  // ping++ PayType错误
        'REQUEST_FOR_PAY_PARAM_FAIL' => 51001, 'CODE_51001' => ['innermsg' => '获取支付参数失败', 'outtermsg' => '获取支付参数失败'],    // ping++ PayType错误

        //订单  活动相关
        'ORDER_ACTIVITE_PURCHASE_FAIL' => 52000, 'CODE_52000' => ['innermsg' => '限购商品购买份数超出', 'outtermsg' => '限购商品购买份数超出'],

        // 管理员相关错误代码
        'ADM_CANCEL_ORDER_FAIL' => 60100, 'CODE_60100' => ['innermsg' => '管理员取消订单失败', 'outtermsg' => '管理员取消订单失败'],
        'ADM_GETC_C_ORDER_FAIL' => 60150, 'CODE_60150' => ['innermsg' => '查询企业订单列表失败', 'outtermsg' => '查询企业订单列表失败'],
        'ADM_GET_USER_FB_FAIL' => 60250, 'CODE_60250' => ['innermsg' => '查询用户反馈信息失败', 'outtermsg' => '查询用户反馈信息失败'],
        'ADM_DEL_USER_FB_FAIL' => 60251, 'CODE_60251' => ['innermsg' => '删除用户反馈失败', 'outtermsg' => '删除用户反馈失败'],
        'ADM_AUTORISE_COMMENT_FAIL' => 60500, 'CODE_60500' => ['innermsg' => '设定评论通过审核操作失败', 'outtermsg' => '设定评论通过审核操作失败'],
        'ADM_DEL_COMMENT_FAIL' => 60501, 'CODE_60501' => ['innermsg' => '删除评论失败', 'outtermsg' => '删除评论失败'],
        'ADM_SETTOP_COMMENT_FAIL' => 60502, 'CODE_60502' => ['innermsg' => '置顶评论失败', 'outtermsg' => '置顶评论失败'],
        // 优惠活动和券卡相关错误代码
        'PROMOTE_NOT_EXIST' => 70000, 'CODE_70000' => ['innermsg' => '优惠活动不存在', 'outtermsg' => '优惠活动不存在'],
        'PROMOTE_EVENT_LIST_FAIL' => 700001, 'CODE_700001' => ['innermsg' => '获取优惠活动列表失败', 'outtermsg' => '获取优惠活动列表失败'],
        'PROMOTE_PARAMS_ERROR' => 70001, 'CODE_70001' => ['innermsg' => '其他参数错误', 'outtermsg' => '其他参数错误'],
        'PROMOTE_GOODS_ID_NOT_EXIST' => 70002, 'CODE_70002' => ['innermsg' => '货品id不存在', 'outtermsg' => '货品不存在'],
        'PROMOTE_CATEGORY_ID_NOT_EXIST' => 70003, 'CODE_70003' => ['innermsg' => '类目id不存在', 'outtermsg' => '类目不存在'],
        'PROMOTE_TIME_ERROR' => 70004, 'CODE_70004' => ['innermsg' => '优惠活动时间错误', 'outtermsg' => '优惠活动时间错误'],
        'PROMOTE_SEND_START_END_ERROR' => 70005, 'CODE_70005' => ['innermsg' => '优惠券发放起止之间错误', 'outtermsg' => '优惠券发放起止之间错误'],
        'ADD_BONUS_FAILED' => 70006, 'CODE_70006' => ['innermsg' => '生成优惠券失败', 'outtermsg' => '生成优惠券失败'],
        'MODIFY_BONUS_TYPE_FAILED' => 70007, 'CODE_70007' => ['innermsg' => '修改优惠券类型失败', 'outtermsg' => '修改优惠券类型失败'],
        'BONUS_TYPE_ID_NOT_EXIST' => 70008, 'CODE_70008' => ['innermsg' => '优惠券类型id不存在', 'outtermsg' => '优惠券类型id不存在'],
        'DEL_BONUS_TYPE_FAILED' => 70009, 'CODE_70009' => ['innermsg' => '删除优惠券类型失败', 'outtermsg' => '删除优惠券类型失败'],
        'BONUS_ID_NOT_EXIST' => 70010, 'CODE_70010' => ['innermsg' => '优惠券id不存在', 'outtermsg' => '优惠券不存在'],
        'DEL_BONUS_FAILED' => 70011, 'CODE_70011' => ['innermsg' => '删除优惠券失败', 'outtermsg' => '删除优惠券失败'],
        'BONUS_IS_EXPIRE' => 70012, 'CODE_70012' => ['innermsg' => '优惠券已过期', 'outtermsg' => '优惠券已过期'],
        'BONUS_IS_ALREADY_ACTIVATE' => 70013, 'CODE_70013' => ['innermsg' => '用户已经激活了该优惠券', 'outtermsg' => '您已经激活了该优惠券,]需重复激活'],
        'BONUS_IS_ALREADY_ACTIVATE_BY_OTHER' => 70014, 'CODE_70014' => ['innermsg' => '其他用户已经激活了该优惠券', 'outtermsg' => '其他用户已经激活了该优惠券'],
        'BONUS_NOT_BELONG_TO_USER' => 70015, 'CODE_70015' => ['innermsg' => '优惠券不属于指定用户', 'outtermsg' => '优惠券不属于指定用户'],
        'GIFTCARD_NOT_BELONG_TO_USER' => 70016, 'CODE_70016' => ['innermsg' => '礼品卡不属于指定用户', 'outtermsg' => '礼品卡不属于指定用户'],
        'POINTS_NOT_ENOUGH' => 70017, 'CODE_70017' => ['innermsg' => '账户积分不足', 'outtermsg' => '账户积分不足'],
        'BONUS_NOT_APPLICABLE' => 70018, 'CODE_70018' => ['innermsg' => '优惠券不适用', 'outtermsg' => '优惠券不适用'],
        'BONUS_HAVE_RECEIVE' => 70019, 'CODE_70019' => ['innermsg' => '优惠券重复领取', 'outtermsg' => '优惠券重复领取'],
        'GIFTCARD_NAME_ERROR' => 70100, 'CODE_70100' => ['innermsg' => '礼品卡类型名称错误', 'outtermsg' => '礼品卡类型名称错误'],
        'GIFTCARD_START_END_DATE_ERROR' => 70101, 'CODE_70101' => ['innermsg' => '礼品卡类型有效期设置错误', 'outtermsg' => '礼品卡类型有效期设置错误'],
        'GIFTCARD_AMOUNT_ERROR' => 70102, 'CODE_70102' => ['innermsg' => '礼品卡类型面值设置错误', 'outtermsg' => '礼品卡类型面值设置错误'],
        'ADD_GIFTCARD_TYPE_FAILED' => 70103, 'CODE_70103' => ['innermsg' => '礼品卡类型添加失败', 'outtermsg' => '礼品卡类型添加失败'],
        'ADD_GIFTCARD_FAILED' => 70104, 'CODE_70104' => ['innermsg' => '生成礼品卡失败', 'outtermsg' => '生成礼品卡失败'],
        'ADD_GIFTCARD_PARAMS_ERROR' => 70105, 'CODE_70105' => ['innermsg' => '生成礼品卡参数错误', 'outtermsg' => '生成礼品卡参数错误'],
        'GIFTCARD_ID_NOT_EXIST' => 70106, 'CODE_70106' => ['innermsg' => '礼品卡id不存在', 'outtermsg' => '礼品卡不存在'],
        'GET_GIFTCARD_FAILED' => 70107, 'CODE_70107' => ['innermsg' => '礼品卡查询失败', 'outtermsg' => '礼品卡查询失败'],
        'MODIFY_GIFTCARD_TYPE_FAILED' => 70108, 'CODE_70108' => ['innermsg' => '修改礼品卡类型失败', 'outtermsg' => '修改礼品卡类型失败'],
        'GIFTCARD_TYPE_ID_NOT_EXIST' => 70109, 'CODE_70109' => ['innermsg' => '礼品卡类型id不存在', 'outtermsg' => '礼品卡类型不存在'],
        'GIFTCARD_KEY_ERROR' => 70110, 'CODE_70110' => ['innermsg' => '礼品卡激活码无效', 'outtermsg' => '礼品卡激活码无效'],
        'GIFTCARD_OVERDATE' => 70111, 'CODE_70111' => ['innermsg' => '礼品卡已过期', 'outtermsg' => '礼品卡已过期'],
        'GIFTCARD_UNSOLD' => 70112, 'CODE_70112' => ['innermsg' => '礼品卡尚未售出', 'outtermsg' => '礼品卡尚未售出'],
        'GIFTCARD_PERMIT_ERROR' => 70113, 'CODE_70113' => ['innermsg' => '管理员没有权限', 'outtermsg' => '管理员没有权限'],
        'GIFTCARD_ACTIVATE_FAIL' => 70114, 'CODE_70114' => ['innermsg' => '礼品卡激活和绑定用户失败', 'outtermsg' => '礼品卡激活和绑定用户失败'],
        'GIFTCARD_IS_ALREADY_ACTIVATE' => 70115, "CODE_70115" => ['innermsg' => '礼品卡已经激活', 'outtermsg' => '礼品卡已经激活'],
        'GIFTCARD_NOT_AVAILABLE' => 70116, "CODE_70116" => ['innermsg' => '礼品卡不可用', 'outtermsg' => '礼品卡不可用'],
        'BONUS_IS_ISSUANCE_NULL' => 70117, 'CODE_70117' => ['innermsg' => '优惠券已经全部发完完毕', 'outtermsg' => '优惠券已经全部发完完毕'],
        'ADD_AMOUNT_BONUS_FAILED' => 70118, 'CODE_70118' => ['innermsg' => '生成指定金额的优惠券失败', 'outtermsg' => '生成指定金额的优惠券失败'],
        'ADD_BONUS_TYPE_FAIL' => 70200, 'CODE_70200' => ['innermsg' => '添加优惠券类型失败', 'outtermsg' => '添加优惠券类型失败'],
        'QUERY_BONUS_FAIL' => 70201, 'CODE_70201' => ['innermsg' => '查询优惠券失败', 'outtermsg' => '查询优惠券失败'],
        'BONUS_TYPE_IN_USE_DEL_NOT_PERMITTED' => 70202, 'CODE_70202' => ['innermsg' => '已经有当前类型的优惠券被使用，不能删除', 'outtermsg' => '已经有当前类型的优惠券被使用，不能删除'],
        'BONUS_BINDED_BY_USER_DEL_NOT_PERMITTED' => 70203, 'CODE_70203' => ['innermsg' => '优惠券已经被绑定，删除失败', 'outtermsg' => '优惠券已经被绑定，删除失败'],
        'LOCK_BONUS_FAIL' => 70204, 'CODE_70204' => ['innermsg' => '冻结 锁定优惠券失败', 'outtermsg' => '冻] 锁定优惠券失败'],
        'ACTIVATE_BONUS_FAIL' => 70205, 'CODE_70205' => ['innermsg' => '激活 绑定优惠券失败', 'outtermsg' => '激] 绑定优惠券失败'],
        'VOUCHER_IS_NOT_EXIST' => 70301, 'CODE_70301' => ['innermsg' => '该提货券不存在', 'outtermsg' => '该提货券不存在'],
        'VOUCHER_IS_USED' => 70302, 'CODE_70302' => ['innermsg' => '该提货券已使用', 'outtermsg' => '该提货券已使用'],
        'VOUCHER_IS_EXPIRED' => 70303, 'CODE_70303' => ['innermsg' => '该提货券已过期', 'outtermsg' => '该提货券已过期'],
        'COUPON_NOT_START' => 70400, 'CODE_70400' => ['innermsg' => '该提货券活动尚未开始', 'outtermsg' => '该提货券活动尚未开始'],
        'COUPON_ALREADY_END' => 70401, 'CODE_70401' => ['innermsg' => '该提货券已过期', 'outtermsg' => '该提货券已过期'],
        'COUPON_WRONG_CODE' => 70402, 'CODE_70402' => ['innermsg' => '券码错误', 'outtermsg' => '券码错误'],
        'COUPON_NOT_ACTIVATED' => 70403, 'CODE_70403' => ['innermsg' => '提货券尚未激活', 'outtermsg' => '提货券尚未激活'],
        'COUPON_SHIPPING_AREA_FAIL' => 70404, 'CODE_70404' => ['innermsg' => '收货地址不在许可范围内', 'outtermsg' => '收货地址不在可配送范围内'],
        'COUPON_NOT_EXIST' => 70405, 'CODE_70405' => ['innermsg' => '提货券不存在', 'outtermsg' => '提货券不存在'],
        'COUPON_BIND_FAIL' => 70406, 'CODE_70406' => ['innermsg' => '提货券绑定用户失败', 'outtermsg' => '提货券绑定用户失败'],
        'COUPON_TYPE_NOT_EXIST' => 70407, 'CODE_70407' => ['innermsg' => '提货券类型不存在', 'outtermsg' => '提货券类型不存在'],
        'COUPON_' => 70408, 'CODE_70408' => ['innermsg' => '该提货券已过期', 'outtermsg' => '该提货券已过期'],
        'BONUS_IS_EXIST_TODAY' => 70410, 'CODE_70410' => ['innermsg' => '该优惠券今日已领过', 'outtermsg' => '该优惠券今日已领过'],

        // 文章，评论相关错误代码
        'ADD_COMMENT_FAILED' => 80000, 'CODE_80000' => ['innermsg' => '评论失败', 'outtermsg' => '评论失败'],
        'COMMENT_ID_NOT_EXIST' => 80001, 'CODE_80001' => ['innermsg' => '评论id不存在', 'outtermsg' => '评论不存在'],
        'COMMENT_PERMIT_ERROR' => 80002, 'CODE_80002' => ['innermsg' => '执行操作的管理员没有权限', 'outtermsg' => '执行操作的管理员没有权限'],
        'COMMENT_PARAM_LACK' => 80003, 'CODE_80003' => ['innermsg' => '缺少参数', 'outtermsg' => '缺少参数'],
        'COMMENT_AUDIT_FAILED' => 80004, 'CODE_80004' => ['innermsg' => '评论审核失败', 'outtermsg' => '评论审核失败'],
        'DEL_COMMENT_FAILED' => 80005, 'CODE_80005' => ['innermsg' => '删除评论失败', 'outtermsg' => '删除评论失败'],
        'GET_USER_GOODS_FAILED' => 80006, 'CODE_80006' => ['innermsg' => '获取用户交易成功的商品失败', 'outtermsg' => '获取用户交易成功的商品失败'],
        'COMMENT_EXIST_FAIL' => 80007, 'CODE_80007' => ['innermsg' => '评论已存在，不能重复评论', 'outtermsg' => '评论已存在，不能重复评论'],
        'ARTICLE_TYPE_PARAM_ERROR' => 80100, 'CODE_80100' => ['innermsg' => '文章分类参数不全', 'outtermsg' => '文章分类参数不全'],
        'ADD_ARTICLE_TYPE_FAILED' => 80101, 'CODE_80101' => ['innermsg' => '添加文章分类失败', 'outtermsg' => '添加文章分类失败'],
        'MODIFY_ARTICLE_TYPE_FAILED' => 80102, 'CODE_80102' => ['innermsg' => '修改文章分类失败', 'outtermsg' => '修改文章分类失败'],
        'ARTICLE_TYPE_ID_NOT_EXIST' => 80103, 'CODE_80103' => ['innermsg' => '文章分类id不存在', 'outtermsg' => '文章分类不存在'],
        'DEL_ARTICLE_TYPE_FAILED' => 80104, 'CODE_80104' => ['innermsg' => '删除文章类型失败', 'outtermsg' => '删除文章类型失败'],
        'ARTICLE_ID_NOT_EXIST' => 80105, 'CODE_80105' => ['innermsg' => '文章id不存在', 'outtermsg' => '文章不存在'],
        'ADD_ARTICLE_FAILED' => 80106, 'CODE_80106' => ['innermsg' => '添加文章失败', 'outtermsg' => '添加文章失败'],
        'ARTICLE_PARAM_ERROR' => 80107, 'CODE_80107' => ['innermsg' => '文章参数不全', 'outtermsg' => '文章参数不全'],
        'MODIFY_ARTICLE_FAILED' => 80108, 'CODE_80108' => ['innermsg' => '修改文章失败', 'outtermsg' => '修改文章失败'],
        'DEL_ARTICLE_FAILED' => 80109, 'CODE_80109' => ['innermsg' => '删除文章失败', 'outtermsg' => '删除文章失败'],
        'GET_ARTICLE_CAT_LIST_FAIL' => 80110, 'CODE_80110' => ['innermsg' => '查询文章类型列表失败', 'outtermsg' => '查询文章类型列表失败'],
        'GET_ARTICLE_LIST_FAIL' => 80111, 'CODE_80111' => ['innermsg' => '查询文章列表失败', 'outtermsg' => '查询文章列表失败'],
        'GET_ARTICLE_INFO_FAIL' => 80112, 'CODE_80112' => ['innermsg' => '查询文章内容失败', 'outtermsg' => '查询文章内容失败'],
        // 广告，导航相关错误代码
        'AD_TYPE_NOT_EXIST' => 90000, 'CODE_90000' => ['innermsg' => '该类型广告不存在', 'outtermsg' => '该类型广告不存在'],
        'DEL_AD_TYPE_FAILED' => 90001, 'CODE_90001' => ['innermsg' => '删除广告类型不成功', 'outtermsg' => '删除广告类型不成功'],
        'ADD_AD_TYPE_FAILED' => 90002, 'CODE_90002' => ['innermsg' => '添加指定类型广告失败', 'outtermsg' => '添加指定类型广告失败'],
        'AD_NOT_EXIST' => 90003, 'CODE_90003' => ['innermsg' => '该广告不存在', 'outtermsg' => '该广告不存在'],
        'MODIFY_AD_INFO_FAILED' => 90004, 'CODE_90004' => ['innermsg' => '修改广告信息失败', 'outtermsg' => '修改广告信息失败'],
        'DEL_AD_FAILED' => 90005, 'CODE_90005' => ['innermsg' => '删除广告失败', 'outtermsg' => '删除广告失败'],
        'GET_AD_BY_TYPE_FAILED' => 90006, 'CODE_90006' => ['innermsg' => '获取指定类型广告失败', 'outtermsg' => '获取指定类型广告失败'],
        'GET_ONE_AD_FAILED' => 90007, 'CODE_90007' => ['innermsg' => '获取一条广告的信息失败', 'outtermsg' => '获取一条广告的信息失败'],
        'ADD_NAVIBAR_FAILED' => 90010, 'CODE_90010' => ['innermsg' => '添加导航栏失败', 'outtermsg' => '添加导航栏失败'],
        'GET_NAVIBAR_SHOW_FAILED' => 90011, 'CODE_90011' => ['innermsg' => '获取显示的导航栏失败', 'outtermsg' => '获取显示的导航栏失败'],
        'NAIVBAR_NOT_EXIST' => 90012, 'CODE_90012' => ['innermsg' => '该导航栏不存在', 'outtermsg' => '该导航栏不存在'],
        'DEL_NAVIBAR_FAILED' => 90013, 'CODE_90013' => ['innermsg' => '删除一个导航栏失败', 'outtermsg' => '删除一个导航栏失败'],
        'MODIFY_NAVIBAR_FAILED' => 90014, 'CODE_90014' => ['innermsg' => '修改导航栏信息失败', 'outtermsg' => '修改导航栏信息失败'],
        'GET_NAVIBAR_LIST_FAILED' => 90015, 'CODE_90015' => ['innermsg' => '获取导航栏列表失败', 'outtermsg' => '获取导航栏列表失败'],
        'NAVISHOW_IFSHOW_CONDITION_REQUIRED' => 90016, 'CODE_90016' => ['innermsg' => '缺少参数IFSHOW', 'outtermsg' => '缺少参数'],
        'UNEXPECTED_FIELD_IN_NAV' => 90017, 'CODE_90017' => ['innermsg' => '非法字段:导航栏', 'outtermsg' => '非法的参数'],
        'GET_NAV_LIST_FAIL' => 90018, 'CODE_90018' => ['innermsg' => '获取导航栏目列表失败', 'outtermsg' => '获取导航栏目列表失败'],

        'ADMIN_USER_NOT_EXIST' => 100001, 'CODE_100001' => ['innermsg' => '管理员不存在', 'outtermsg' => '管理员不存在'],
        'ADD_ORDER_ACTION_LOG_FAILED' => 100002, 'CODE_100002' => ['innermsg' => '添加订单状态操作log失败', 'outtermsg' => '添加订单状态操作log失败'],
        'ADD_USER_PAY_POINT_FAILED' => 100003, 'CODE_100003' => ['innermsg' => '完成订单增加用户积分添加失败', 'outtermsg' => '完成订单增加用户积分添加失败'],

        'MISSION_UNKNOWN_FAIL' => 200000, 'CODE_200000' => ['innermsg' => '任务系统未知错误', 'outtermsg' => '任务系统未知错误'],
        'MISSION_NOT_STARTED' => 200001, 'CODE_200001' => ['innermsg' => '目标任务未开始', 'outtermsg' => '目标任务未开始'],
        'MISSION_FINISHED' => 200002, 'CODE_200002' => ['innermsg' => '目标任务已经结束', 'outtermsg' => '目标任务已经结束'],
        'MISSION_OVERTIMED' => 200003, 'CODE_200003' => ['innermsg' => '目标任务已超时', 'outtermsg' => '任务已超时'],
        'MISSION_NOT_ONLINE' => 200004, 'CODE_200004' => ['innermsg' => '目标任务已经下线', 'outtermsg' => '目标任务已经下线'],
        'MISSION_WRONG_PLATEFORM_FAIL' => 200005, 'CODE_200005' => ['innermsg' => '目标任务在当前平台不可用', 'outtermsg' => '目标任务在当前平台不可用'],
        'MISSION_DESACTIVATED' => 200006, 'CODE_200006' => ['innermsg' => '目标任务被禁用', 'outtermsg' => '目标任务被禁用'],
        'MISSION_NOT_EXIST' => 200007, 'CODE_200007' => ['innermsg' => '目标任务不存在', 'outtermsg' => '目标任务不存在'],
        'MISSION_' => 20000, 'CODE_20000X' => ['innermsg' => '目标任务不存在', 'outtermsg' => '目标任务不存在'],
        'MISSION_FANLI_' => 200100, 'CODE_200100' => ['innermsg' => '返利任务未知错误', 'outtermsg' => '返利任务未知错误'],
        'MISSION_SIGNIN_' => 200200, 'CODE_200200' => ['innermsg' => '签到任务未知错误', 'outtermsg' => '签到任务未知错误'],
        'MISSION_INVITE_' => 200300, 'CODE_200300' => ['innermsg' => '邀请任务未知错误', 'outtermsg' => '邀请任务未知错误']
    ];


    /**
     * 获取自定义错误
     * @param string $error
     * @return int 错误代码
     * -1 表示未知错误
     */
    public static function E($error)
    {
        $arr = self::$ERROR_LIST;
        $res = $arr[$error];
        if ($res === false) {
            $res = -1;
        }
        return $res;
    }

    /**
     * 获取错误代码对应的文字内容
     * @param unknown $error 错误代码
     * @param string $show 结果是否展示给用户
     */
    public static function EMsg($error, $show = false)
    {
        $arr = self::$ERROR_LIST;
        $code = is_numeric($error) ? $error : self::E($error);
        if ($code == -1) {  // 配置文件中未定义错误
            return '未命名错误';
        }
        $key = 'CODE_' . $code;
        if (isset($arr[$key])) {
            $confVal = $arr[$key];
        } else {
            return '未编码错误';
        }
        if ($show) {    // 外部错误信息
            return $confVal['outtermsg'];
        } else {        // 内部错误信息
            return $confVal['innermsg'];
        }
    }

}