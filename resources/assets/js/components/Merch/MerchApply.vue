<template>
    <div class="order-detail-wrapper" style="margin: 8px">
        注册成为入驻商家
    </div>
    <div class="order-detail-wrapper">
        <div class="uc-address-part">
            <mt-field label="商家名称：" placeholder="请输入商家名称" :value.sync="ship_name"></mt-field>
        </div>
        <div class="uc-address-part">
            <mt-field label="商家账号：" placeholder="请输入商家账号" :value.sync="ship_name"></mt-field>
        </div>
        <div class="uc-address-part">
            <mt-field label="密码：" placeholder="请输入密码" :value.sync="ship_number"></mt-field>
        </div>
        <div class="uc-address-part">
            <mt-field label="确认密码：" placeholder="再次输入密码" :value.sync="ship_number"></mt-field>
        </div>
    </div>
        <div class="order-detail-wrapper" style="margin: 8px">
            <div class="uc-address-part">
                <input type="checkbox" @change="checkboxOnclick(this)"/>我已阅读微信商城mall入驻协议
            </div>
        </div>
        <div class="form-wrapper" style="margin-bottom: 0px">
            <mt-button :disabled="form_disabled" type="primary" size="large">下一步</mt-button>
        </div>
</template>